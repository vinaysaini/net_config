<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
   <head>
      <title>FusionPBX</title>
      <link rel="icon" href="/themes/default/favicon.ico">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <style type="text/css">
         img {
         border: none;
         }
         A {
         color: #004083;
         width: 100%;
         }
         body {
         margin-top: 0px;
         margin-bottom: 0px;
         margin-right: 0px;
         margin-left: 0px;
         /*background-image: url('/themes/default/images/background.jpg');*/
         /*background-repeat: repeat-x;*/
         /*background-attachment: fixed;*/
         /*background-color: #FFFFFF;*/
         }
         th {
         border-top: 1px solid #444444;
         border-bottom: 1px solid #444444;
         text-align: left;
         color: #FFFFFF;
         font-size: 12px;
         font-family: arial;
         font-weight: bold;
         /*background-color: #506eab;*/
         background-image: url('/themes/default/images/background_th.png');
         padding-top: 4px;
         padding-bottom: 4px;
         padding-right: 7px;
         padding-left: 7px;
         }
         th a:link{ color:#FFFFFF; }
         th a:visited{ color:#FFFFFF; }
         th a:hover{ color:#FFFFFF; }
         th a:active{ color:#FFFFFF; }
         td {
         color: #5f5f5f;
         font-size: 12px;
         font-family: arial;
         }
         form {
         margin: 0px;
         }
         td.list_control_icons {
         /* multiple icons exist (horizontally) */
         padding: none;
         padding-left: 3px;
         width: 50px;
         text-align: right;
         vertical-align: top;
         white-space: nowrap;
         }
         td.list_control_icon {
         /* a single icon exists */
         padding: none;
         padding-left: 3px;
         width: 25px;
         text-align: right;
         vertical-align: top;
         white-space: nowrap;
         }
         INPUT.btn {
         font-family: verdana;
         font-size: 11px;
         }
         INPUT.button {
         font-family: verdana;
         font-size: 11px;
         }
         SELECT.txt {
         font-family: arial;
         font-size: 12px;
         width: 98.75%;
         border: solid 1px #CCCCCC;
         color: #666666;
         background-color: #EFEFEF;
         background-repeat:repeat-x;
         height: 19px;
         }
         TEXTAREA.txt {
         font-family: arial;
         font-size: 12px;
         width: 98.75%;
         border: solid 1px #CCCCCC;
         color: #666666;
         background-color: #EFEFEF;
         background-repeat:repeat-x;
         overflow: auto;
         padding: 4px;
         -moz-border-radius-topleft:5px;
         -webkit-border-top-left-radius:5px;
         border-top-left-radius:5px;
         -moz-border-radius-topright:5px;
         -webkit-border-top-right-radius:5px;
         border-top-right-radius:5px;
         -moz-border-radius-bottomleft:5px;
         -webkit-border-bottom-left-radius:5px;
         border-bottom-left-radius:5px;
         -moz-border-radius-bottomright:5px;
         -webkit-border-bottom-right-radius:5px;
         border-bottom-right-radius:5px;
         }
         INPUT.txt {
         font-family: arial;
         font-size: 12px;
         width: 98.75%;
         border: solid 1px #CCCCCC;
         color: #666666;
         background-color: #EFEFEF;
         background-repeat:repeat-x;
         }
         .formfld {
         border: solid 1px #CCCCCC;
         color: #666666;
         background-color: #F7F7F7;
         width: 50%;
         text-align: left;
         /*width: 300px;*/
         padding-left: 4px;
         -moz-border-radius-topleft:5px;
         -webkit-border-top-left-radius:5px;
         border-top-left-radius:5px;
         -moz-border-radius-topright:5px;
         -webkit-border-top-right-radius:5px;
         border-top-right-radius:5px;
         -moz-border-radius-bottomleft:5px;
         -webkit-border-bottom-left-radius:5px;
         border-bottom-left-radius:5px;
         -moz-border-radius-bottomright:5px;
         -webkit-border-bottom-right-radius:5px;
         border-bottom-right-radius:5px;
         }
         .vncell {
         border-bottom: 1px solid #999999;
         /*background-color: #639BC1;*/
         background-image: url('/themes/default/images/background_cell.gif');
         padding-right: 20px;
         padding-left: 8px;
         text-align: left;
         color: #444444;
         }
         .vncell a:link{ color:#444444; }
         .vncell a:visited{ color:#444444; }
         .vncell style0 a:hover{ color:#444444; }
         .vncell a:active{ color:#444444; }
         .vncellreq {
         background-image: url('/themes/default/images/background_cell.gif');
         border-bottom: 1px solid #999999;
         background-color: #639BC1;
         padding-right: 20px;
         padding-left: 8px;
         text-align: left;
         font-weight: bold;
         color: #444444;
         }
         .vtable {
         border-bottom: 1px solid #DFDFDF;
         }
         .listbg {
         border-bottom: 1px solid #999999;
         font-size: 11px;
         background-color: #990000;
         color: #444444;
         padding-right: 16px;
         padding-left: 6px;
         padding-top: 4px;
         padding-bottom: 4px;
         }
         .row_style0 {
         background-image: url('/themes/default/images/background_cell.gif');
         border-bottom: 1px solid #999999;
         color: #444444;
         text-align: left;
         padding-top: 4px;
         padding-bottom: 4px;
         padding-right: 7px;
         padding-left: 7px;
         }
         .row_style0 a:link{ color:#444444; }
         .row_style0 a:visited{ color:#444444; }
         .row_style0 a:hover{ color:#444444; }
         .row_style0 a:active{ color:#444444; }
         .row_style1 {
         border-bottom: 1px solid #999999;
         background-color: #FFFFFF;
         text-align: left;
         padding-top: 4px;
         padding-bottom: 4px;
         padding-right: 7px;
         padding-left: 7px;
         }
         .row_stylebg {
         border-bottom: 1px solid #888888;
         background-color: #5F5F5F;
         color: #FFFFFF;
         text-align: left;
         padding-top: 5px;
         padding-bottom: 5px;
         padding-right: 10px;
         padding-left: 10px;
         }
         .border {
         border: solid 1px #999999;
         /*background-color: #FFFFFF;*/
         }
         .headermain {
         /*background-color: #7FAEDE;*/
         }
         .frm {
         border: solid 1px #CCCCCC;
         color: #666666;
         background-color: #EFEFEF;
         }
         .smalltext {
         color: #BBBBBB;
         font-size: 11px;
         font-family: arial;
         }
         table {
         /*background:#ccc;*/
         /*margin:20px;*/
         /*border:#ccc 1px solid;*/
         }
         table th {
         padding:4px 10px
         }
         table td {
         /*background:#fff;*/
         /*padding:2px 10px 4px 10px*/
         }
         table tr.even td {
         background:#eee;
         background-image: url('/themes/default/images/background_cell.gif');
         border-bottom: 1px solid #999999;
         color: #333333;
         }
         table tr.odd td {
         border-bottom: 1px solid #999999;
         color: #000000;
         }
         table tr:first-child th:first-child {
         -moz-border-radius-topleft:7px;
         -webkit-border-top-left-radius:7px;
         border-top-left-radius:7px;
         }
         table tr:first-child th:last-of-type {
         -moz-border-radius-topright:7px;
         -webkit-border-top-right-radius:7px;
         border-top-right-radius:7px;
         }
         table tr:nth-last-child(-5) td:first-of-type {
         -moz-border-radius-bottomleft:7px;
         -webkit-border-bottom-left-radius:7px;
         border-bottom-left-radius:7px;
         }
         table tr:nth-last-child(-5) td:first-of-type {
         -moz-border-radius-topleft:7px;
         -webkit-border-top-left-radius:7px;
         border-bottom-top-radius:7px;
         }
         /* begin the menu css*/
         .menu_bar {
         background-image: url('/themes/default/images/background_black.png');
         -webkit-border-radius: 7px 7px 7px 7px;
         -moz-border-radius: 7px 7px 7px 7px;
         border-radius: 7px 7px 7px 7px;
         padding: 3px;
         }
         .menu_bg {
         background-image: url('/themes/default/images/menu_background.png');		background-repeat: repeat-x;
         background-attachment: fixed;
         /*background-color: #FFFFFF;*/
         opacity: 0.9;
         filter:alpha(opacity=90);
         -moz-opacity:0.9;
         -khtml-opacity: 0.9;
         opacity: 0.9;
         -webkit-border-radius: 7px 7px 7px 7px;
         -moz-border-radius: 7px 7px 7px 7px;
         border-radius: 7px 7px 7px 7px;
         text-align: left;
         padding-top: 15px;
         padding-bottom: 25px;
         padding-left: 5px;
         padding-right:20px;
         }
         .main_content {
         background-image: url('/themes/default/images/menu_background.png');		background-repeat: repeat-x;
         background-attachment: fixed;
         padding: 20px;
         opacity: 0.9;
         filter:alpha(opacity=90);
         -moz-opacity:0.9;
         -khtml-opacity: 0.9;
         opacity: 0.9;
         -webkit-border-radius: 7px 7px 7px 7px;
         -moz-border-radius: 7px 7px 7px 7px;
         border-radius: 7px 7px 7px 7px;
         text-align: left;
         }
         #menu{
         width:100%;
         float:left;
         }
         #menu a, #menu h2{
         font:bold 11px/16px arial,helvetica,sans-serif;
         display:block;
         /*border-color:#ccc #888 #555 #bbb;*/
         white-space:nowrap;
         margin:0;
         padding:3px 3px 3px 3px;
         }
         #menu h2{
         /*background:#222222 url(/css/images/expand3.gif) no-repeat 100% 100%;*/
         /*text-transform:uppercase*/
         width:118px;
         }
         #menu h2 h2{
         /*background:#4e4b56 url(/css/images/expand3.gif) no-repeat 100% 100%;*/
         /*text-transform:uppercase*/
         padding:3px 3px 3px 3px;
         }
         #menu a{
         text-decoration:none;
         padding-left:7px;
         width:114px;
         }
         #menu a, #menu a:visited{
         color:#cccccc;
         }
         #menu .menu_sub {
         display:none;
         width:124px;
         background:#333333;
         background-color: rgba(20, 20, 20, 0.9);
         -webkit-border-radius: 12px 12px 12px 12px;
         -moz-border-radius: 12px 12px 12px 12px;
         border-radius: 12px 12px 12px 12px;
         }
         #menu a:hover{
         width:114px;
         color:#fd9c03;
         background:#1F1F1F;
         }
         #menu a:active{
         color:#fd9c03;
         }
         #menu ul{
         list-style:none;
         margin:0;
         padding:0;
         float:left;
         width:9em;
         }
         #menu li{
         position:relative;
         }
         #menu ul ul{
         position:absolute;
         z-index:500;
         top:auto;
         display:none;
         }
         #menu ul ul ul{
         top:0;
         left:100%;
         }
         /* Enter the more specific element (div) selector
         on non-anchor hovers for IE5.x to comply with the
         older version of csshover.htc - V1.21.041022. It
         improves IE's performance speed to use the older
         file and this method */
         div#menu h2:hover{
         -webkit-border-radius: 12px 12px 12px 12px;
         -moz-border-radius: 12px 12px 12px 12px;
         border-radius: 12px 12px 12px 12px;
         /*background:#1F1F1F url(/css/images/expand3.gif) no-repeat -999px -9999px;*/
         }
         div#menu li:hover{
         cursor:pointer;
         z-index:100;
         }
         div#menu li:hover ul ul,
         div#menu li li:hover ul ul,
         div#menu li li li:hover ul ul,
         div#menu li li li li:hover ul ul
         {display:none;}
         /*
         div#menu li:hover ul,
         div#menu li li:hover ul,
         div#menu li li li:hover ul,
         div#menu li li li li:hover ul
         {display:block;}
         */
         #menu a.x, #menu a.x:visited{
         font-weight:bold;
         color:#000;
         /*background:#999999 url(/css/images/expand3.gif) no-repeat 100% 100%;*/
         }
         #menu a.x:hover{
         color:#fff;
         background:#000;
         }
         #menu a.x:active{
         color:#060;
         background:#ccc;
         }
         .menu_sub_vertical {
         width:118px;
         text-decoration:none;
         border-color:#ccc;
         border-width: 1px;
         padding-bottom:25px;
         list-style-image: url(/themes/default/images/arrow.png);
         padding-left: 35px;
         opacity: 1.0;
         }
         .menu_sub_vertical a {
         text-decoration:none;
         }
         /* end the menu css*/
         DIV.login_message {
         border: 1px solid #bae0ba;
         background-color: #eeffee;
         -webkit-border-radius: 3px 3px 3px 3px;
         -moz-border-radius: 3px 3px 3px 3px;
         border-radius: 3px 3px 3px 3px;
         padding: 20px;
         }
      </style>
      <style type="text/css">
         /* Remove margins from the 'html' and 'body' tags, and ensure the page takes up full screen height */
         html, body {
         height:100%;
         margin:0;
         padding:0;
         }
         /* Set the position and dimensions of the background image. */
         #page-background {
         position:fixed;
         top:0;
         left:0;
         width:100%;
         height:100%;
         }
         /* Specify the position and layering for the content that needs to
         appear in front of the background image. Must have a higher z-index
         value than the background image. Also add some padding to compensate
         for removing the margin from the 'html' and 'body' tags. */
         #page {
         position:relative;
         z-index:1;
         padding:10px;
         }
         .vtable {
         position:relative;
         z-index:1;
         padding:10px;
         color: 000;
         text-align: left;
         /*
         box-shadow:5px -5px 10px #700;
         -webkit-box-shadow:5px -5px 10px #888;
         -moz-box-shadow:5px -5px 10px #334455;
         -moz-border-radius: 5px;
         -webkit-border-radius: 5px;
         */
         /*border: 1px solid #555555;*/
         /*padding: 10px;*/
         background-color: #FFFFFF;
         filter:alpha(opacity=90);
         -moz-opacity:0.9;
         -khtml-opacity: 0.9;
         opacity: 0.9;
         }
         #message_container {
         z-index: 99999;
         position: absolute;
         left: 0px;
         top: -200px;
         right: 0px;
         filter: alpha(opacity=0);
         opacity: 0;
         -moz-opacity:0;
         -khtml-opacity: 0;
         }
         #message_block {
         margin: 0px auto;
         width: 300px;
         height: auto;
         background-color: #000;
         background-repeat: repeat-x;
         background-image: url('/themes/default/images/background_black.png');
         background-position: top center;
         padding: 10px;
         -webkit-border-radius: 0px 0px 7px 7px;
         -moz-border-radius: 0px 0px 7px 7px;
         border-radius: 0px 0px 7px 7px;
         text-align: center;
         }
         #message_block .text {
         font-family: arial, san-serif;
         font-size: 10pt;
         font-weight: bold;
         color: #fff;
         }
      </style>
      <script type="text/javascript">
		function typeChange0(sel) {
			 var type = sel.value;
			 if(type == "DHCP"){
				var ipa11 = document.getElementById('ipa01');
				ipa11.style.display = "none";
				var ipa12 = document.getElementById('ipa02');
				ipa12.style.display = "none";
				var ipa13 = document.getElementById('ipa03');
				ipa13.style.display = "none";			
			}else{
				var ipa11 = document.getElementById('ipa01');
				ipa11.style.display = "table-row";
				var ipa12 = document.getElementById('ipa02');
				ipa12.style.display = "table-row";
				var ipa13 = document.getElementById('ipa03');
				ipa13.style.display = "table-row";				
			}  
		}
		window.onload = function myOnloadFunc(){
			var t0 = document.getElementById('type0');
			typeChange0(t0);
		}
	</script>
   </head>
   <body>
	
	<?php
      	   $config = parse_ini_file("/home/vinay/rc.conf");
	   $IPconfig0 = explode(" ", $config[ 'ifconfig_em0' ]);
	   $gateway = $config[ 'defaultrouter' ];
	   if($config[ 'ifconfig_em0' ] == "DHCP"){
	  	$t1 = "DHCP";
           }else{
	   	$t1 = "STATIC";
           }
      ?>




      <div id="message_container">
         <div id="message_block">
            <span id="message_text" class="text"></span>
         </div>
      </div>
      <div id="page-background"><img src="/themes/default/images/backgrounds/grey.png" width="100%" height="100%" alt=""></div>
      <div id="qr_code_container" style="display: none;" onclick="$(this).fadeOut(400);">
         <table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
            <tbody>
               <tr>
                  <td align="center" valign="middle">		<span id="qr_code" onclick="$('#qr_code_container').fadeOut(400);"></span>	</td>
               </tr>
            </tbody>
         </table>
      </div>
      <div id="page" align="center">
         <table width="90%" class="border.disabled" border="0" cellpadding="0" cellspacing="7">
            <tbody>
               <tr>
                  <td align="left" valign="top" class="headermain" colspan="2" width="100%" height="70px;">
                     <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                           <tr>
                              <td width="50%">
                                 <a href="/"><img src="/themes/default/images/logo.png"></a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td class="menu_bar" colspan="2" width="100%" height="30px">
                     <!-- Begin CSS Horizontal Popout Menu -->
                     <div id="menu" style="position: relative; z-index:199; width:100%;" align="left">
                        <ul class="menu_main">
                           <li>
                              <a href="" style="padding: 0px 0px; border-style: none; background: none;">
                                 <h2 align="center" style="">Network Configuration</h2>
                              </a>
                              <ul class="menu_sub"></ul>
                           </li>
                        </ul>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="main_content" align="left" valign="top" width="85%">
                     <form method="GET" action="/net_config/UserInputIPAddrPHP.php">
                        <div align="center">


			   <table width="100%" border="0" cellpadding="0" cellspacing="2">
                              <tbody>
                                 <tr>
                                    <td>
                                       <table width="100%" cellpadding="6" cellspacing="0" border="0">
                                          <tbody>
                                             <tr>
                                                <th class="th" colspan="2" align="left">NIC 1</th>
                                             </tr>
                                             <tr>
                                                <td class="vncell" align="left">Connection Type</td>
                                                <td class="vtable" align="left">
							<select name="Type0" onchange="typeChange0(this)" id="type0">
            							<option value="DHCP" <?php if ($config[ 'ifconfig_em0' ] == "DHCP") echo "SELECTED"; ?> >DHCP</option>
								<option value="STATIC" <?php if ($config[ 'ifconfig_em0' ] != "DHCP") echo "SELECTED"; ?> >STATIC IP</option>
        	                           		</select>
						</td>
                                             </tr>
                                             <tr id="ipa01">
                                                <td class="vncell" align="left">IP Address *</td>
                                                <td class="vtable" align="left"><input type="text" name="ip01" id="form_netmask" value="<?php echo $IPconfig0[1]; ?>" size="20" required="true" pattern="^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$"></td>
                                             </tr>
					     <tr id="ipa02">
                                                <td class="vncell" align="left">Netmask *</td>
                                                <td class="vtable" align="left"><input type="text" name="ip02" id="form_netmask" value="<?php echo $IPconfig0[3]; ?>" size="20" required="true" pattern="^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$"></td>
                                             </tr>
					     <tr id="ipa03">
                                                <td class="vncell" align="left">Gateway *</td>
                                                <td class="vtable" align="left"><input type="text" name="ip03" id="form_netmask" value="<?php echo $gateway; ?>" size="20" required="true" pattern="^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$"></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       </div>
                                    </td>
                                 </tr>
				 <tr>
                        		<td style="height:0.5em;">&nbsp;</td>
                     		</tr>
                     		<tr>
                        		<td class="buttons" align="right" style="">
                           			<input type="submit" value="Send"/>
                        		</td>
                     		</tr>
                              </tbody>
                           </table>
                        </div>
                     </form>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                     <br><br>
                  </td>
               </tr>
            </tbody>
         </table>
         <span class="smalltext">
         <a class="smalltext" target="_blank" href="http://www.fusionpbx.com">fusionpbx.com</a>. Copyright 2008 - 2012. All Rights Reserved
         </span>
      </div>
      <br>
   </body>
</html>
