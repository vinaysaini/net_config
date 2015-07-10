<html>
	<body>
	<?php
		$IP_Addr1 = $_GET['ip11'];
		$NetMask1 = $_GET['ip12'];
		$BroadCast1 = $_GET['ip13'];
		$IP_Addr2 = $_GET['ip21'];
		$NetMask2 = $_GET['ip22'];
		$BroadCast2 = $_GET['ip23'];
		$Type1 = $_GET['Type1'];
		$Type2 = $_GET['Type2'];
		$config = parse_ini_file("/etc/rc.conf");
		$Nic1 = false;
		$Nic2 = false;
                if($Type1 == "DHCP"){
			$config[ 'ifconfig_em1' ] = "DHCP";
			$f = fopen( "/etc/rc.conf", "w" );
				foreach ( $config as $name => $value ) {
	    				fwrite( $f, "$name=\"$value\"\n" );
				}
				fclose( $f );	
			$Nic1 = true;	
		}else{
			if($IP_Addr1 && $NetMask1 && $BroadCast1){
				$config[ 'ifconfig_em1' ] = "inet $IP_Addr1 netmask $NetMask1 broadcast $BroadCast1";
				$f = fopen( "/etc/rc.conf", "w" );
				foreach ( $config as $name => $value ) {
	    				fwrite( $f, "$name=\"$value\"\n" );
				}
				fclose( $f );
				$Nic1 = true;
			}
		}
		
		if($Type2 == "DHCP"){
			$config[ 'ifconfig_em2' ] = "DHCP";
			$f = fopen( "/etc/rc.conf", "w" );
				foreach ( $config as $name => $value ) {
	    				fwrite( $f, "$name=\"$value\"\n" );
				}
				fclose( $f );
			$Nic2 = true;		
		}else{
			if($IP_Addr2 && $NetMask2 && $BroadCast2){
				$config[ 'ifconfig_em2' ] = "inet $IP_Addr2 netmask $NetMask2 broadcast $BroadCast2";
				$f = fopen( "/etc/rc.conf", "w" );
				foreach ( $config as $name => $value ) {
	    				fwrite( $f, "$name=\"$value\"\n" );
				}
				fclose( $f );
				$Nic2 = true;
			}
		}

		if($Nic1 && !$Nic2){
			print_r("NIC 1 configured, System is rebooting....");		
		}
		if($Nic2 && !$Nic1){
			print_r("NIC 2 configured, System is rebooting....");		
		}
		if($Nic1 && $Nic2){
			print_r("Network Interface configured properly, System is rebooting.It may take some time....");
			$fh = fopen("/tmp/reboot.server",'w');
			fwrite($fh,"Reboot now\n");
			fclose($fh);
		}
		
		
	?>
	</body>
</html>
