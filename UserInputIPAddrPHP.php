<html>
	<body>
	<?php
		$IP_Addr0 = $_GET['ip01'];
		$NetMask0 = $_GET['ip02'];
		$gateway = $_GET['ip03'];
		$Type0 = $_GET['Type0'];
		$config = parse_ini_file("/home/vinay/rc.conf");
		$Nic1 = false;
                if($Type0 == "DHCP"){
			$config[ 'ifconfig_em0' ] = "DHCP";
			unset($config[ 'defaultrouter' ]);
			$f = fopen( "/home/vinay/rc.conf", "w" );
				foreach ( $config as $name => $value ) {
	    				fwrite( $f, "$name=\"$value\"\n" );
				}
				fclose( $f );	
			$Nic1 = true;	
		}else{
			if($IP_Addr0 && $NetMask0 && $gateway){
				$config[ 'ifconfig_em0' ] = "inet $IP_Addr0 netmask $NetMask0";
				$config[ 'defaultrouter' ] = "$gateway";
				$f = fopen( "/home/vinay/rc.conf", "w" );
				foreach ( $config as $name => $value ) {
	    				fwrite( $f, "$name=\"$value\"\n" );
				}
				fclose( $f );
				$Nic1 = true;
			}
		}

		if($Nic1){
			print_r("Network Interface configured properly, System is rebooting.It may take some time....");
			$fh = fopen("/tmp/reboot.server",'w');
			fwrite($fh,"Reboot now\n");
			fclose($fh);
		}
		
		
	?>
	</body>
</html>
