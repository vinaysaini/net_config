<style>

html {
     overflow: auto;
}

html, body {
  height: 95%;
}

body {
	background: #585858;
	color: #000000;
	font-family: Arial, Helvetica, "Sans Serif";
	margin: 12px 0px;
  	padding: 0;
}

/** Use IE6 specific syntax to set 'div.page' height, since min-height is not recognized by IE6. */
* html div.page {
  height: 100%;
}

div.page {
  border: 1px solid #202020;
  margin: 0 auto; /* Center align for other browsers,  */
  text-align: left;
	background: #ffffff;
	width: 1010px;
  min-height: 100%; /* IE6 doesn't recognize min-height. */
}

div.header {
  position: relative;
  height: 95px;
}

div.title-icon {
  position:absolute;
  top: 12px;
  left: 15px;
}

div.title-left {
  position: absolute;
  top: 6px;
  left: 56px;
	color: navy;
	font-size: 24pt;
	font-weight: bolder;
	vertical-align: middle;
	white-space: nowrap;
}

div.title-hosted {
  position: absolute;
  right: 0px;
}

div.title-hosted p, div.title-hosted a {
	color: navy;
	font-size: 8pt;
	margin: 0.8em;
	text-align:right;
	text-decoration: none;
	vertical-align: middle;
	white-space: nowrap;
}

div.header-color {
  position: absolute;
  top: 50px;
	background-color: #334ECF;
	font-size: 9pt;
  height: 15px;
  width: 100%;
}

.menustyle {
    position: absolute;
    bottom: 0px;
    width: 100%;
}

div.content {
	font-size: 10pt;
	padding: 15px;
	border-collapse: separate;
}

div.content h2 {
  margin: 0;
}

#msgDiv {
	background-color: #f0f0f0;
	border: thin solid navy;
	margin: 1em;
	margin-left: 0em;
	margin-right: 2em;
	padding: 1em;
}

.infoMsg {
	border: 1px solid #a7bcd6;
	background-color: #ffffc0;
	margin: 0.5em;
	padding: 0.5em;
}

td, th {
	font-size: 9pt;
}

a:visited {
	color: blue;
}

a.external {
  background: url(/click-examples/assets/images/external.png) center right no-repeat;
  padding-right: 14px;
}

/*
 * Table styles
 */
table.complex td, table.complex th, table.isi td, table.isi th, table.its td, table.its th, table.mars td, table.mars th, table.nocol td, table.nocol th, table.simple td, table.simple th, table.simple input, table.simple select, table.report td, table.report th {
	font-size: 9pt;
}

span.pagebanner, span.pagelinks {
	font-size: 9pt;
}

table input {
	font-size: 9pt;
}

/*
 * Form styles
 */
table.errors td, table.fields td, table.fields label, table.fields input, table.fields select, table.fields textarea, table.buttons input {
	font-size: 9pt;
}

/*
 * Tabbed Panel styles
 */
a.tb_label {
	font-size: 9pt;
}

/*
 * Example Styles
 */
.code, .codeConfig, .codeDtd, .codeJava, .codeHtml {
	font-family: Courier New, courier;
	font-size: 9pt;
	border: 1px solid #AAAAAA;
	background-color: #FAFAFA;
	padding: 1em;
	margin-top: 1em;
	margin-bottom: 1.5em;
	margin-left: 0em;
	margin-right: 1.5em;
	white-space: pre;
}

.codeJava {
	font-family: Courier New, courier;
	border: 1px solid #AAAAAA;
	background-color: white;
	padding: 1em;
	margin-top: 1em;
	margin-bottom: 1.5em;
	margin-right: 1.5em;
	white-space: pre;
}

.codeHtml
{
	border: 1px solid #97A9FF;
	background-color: white;
}

/* Java keyword. */
.kw {
    color: #7f0055;
    font-weight: bold;
}

/* Javadoc */
.jd {
    color: #3f5fbf;
}

/* Java comment */
.cm {
    color: #3f7f5f;
}

/* Java String literal */
.st {
    color: #2a00ff;
}
.red { color: red; }

.green { color: green; }

.blue { color: blue; }

.maroon { color: maroon; }

.navy { color: navy; }

/*
 * Add a 2px space between the Menu icon and Menu text.
 */
.menustyle img.link {
    margin-right: 2px;
}

.image-link, .image-link.disabled {
    text-decoration: none;
}

.image-link span {
    text-decoration: underline;
}

.image-link img.link {
    vertical-align: top;
    padding-right: 2px;
}

span.disabled img {
    filter: alpha( opacity = 50 );
    -moz-opacity: 0.5;
    -khtml-opacity: 0.5;
    opacity: 0.5;
}

span.disabled {
   cursor: pointer;
   color: #6D6D6D;
   text-decoration: underline;
}

/* Exporter */

.export-attached, .export-detached {
    border: 1px dotted #999999;
    padding: 2px 4px;
    margin-bottom: 10px;
    margin-top: 10px;
    display: block;
    width: 390px;
    background-color: #EEEEEE;
}

.export-attached a, .export-detached a, .export-inline a {
    text-decoration: none;
}

.export-attached a span, .export-detached a span, .export-inline a span {
    text-decoration: underline;
}

.export-attached img.link, .export-detached img.link, .export-inline img.link {
    vertical-align: top;
    padding-right: 2px;
}

/* Inline Exporter */

td.export-inline {
	background-color: #eee;
	padding-right: 1em;
}

table.isi td.export-inline, table.orange1 td.export-inline, table.orange2 td.export-inline {
	background-color: #fff;
}

td.export-inline span {
    width: 100%;
}

/*
 * Spring Security (Acegi) example style.
 */
div.dialogForm {
	background-color: #f0f0f0;
	width: 305px;
  margin-right: auto;
  margin-left: auto;
	padding: 20px 20px 20px 20px;
	border-top: 1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	border-bottom: 1px solid #c0c0c0;
	border-right: 1px solid #c0c0c0;
}

/*
 * Ajax scroller example style.
 */
.customer {
    border:1px solid black;
    background:#eeeeee;
    padding: 4px;
    margin-bottom: 20px;
}

.errorMsg {
	border: 1px solid #BD0000;
	background-color: #EE0000;
	margin: 0.5em;
	padding: 0.5em;
  color: #FFF;
}

div.auto_complete {
	position: absolute;
	background-color: white;
	border: 0px solid #888;
	margin: 0px;
	padding: 0px;
}
div.auto_complete ul {
	border: 1px solid #888;
	margin: 0;
	padding: 0;
	width: 100%;
	list-style-type: none;
}
div.auto_complete ul li {
	margin: 0;
	padding: 3px;
}
div.auto_complete ul li.selected {
	background-color: #ffb;
}

div.auto_complete ul strong.highlight {
	color: #800;
	margin: 0;
	padding: 0;
}

/* TabbedForm */
table.tf_tab {
	border-collapse: collapse;
}

td.tf_separator {
	border-bottom: 1px solid #336699;
}

td.tf_tab {
	border-left: 1px solid #336699;
	border-top: 1px solid #336699;
	border-right: 1px solid #336699;
	border-bottom: 1px solid #336699;
	padding: 5px;
	white-space: nowrap;
	text-decoration: none;
}

td.tf_sheet {
	border-left: 1px solid #336699;
	border-right: 1px solid #336699;
	border-bottom: 1px solid #336699;
	vertical-align: top;
	padding: 0.75em;
}

</style>

<script type="text/javascript">
function onShowTab(index) {
    var numberTabs = 2;
	for (var i = 1; i < (numberTabs + 1); i++) {
	
		var tabTitle = document.getElementById('tab-title-' + i);
		tabTitle.style.backgroundColor = "";
		tabTitle.style.borderBottom = "";
		
		var tabSheet = document.getElementById('tab-sheet-' + i);
		tabSheet.style.display = "none";
	}
	
	var tabTitle = document.getElementById('tab-title-' + index);
	tabTitle.style.backgroundColor = "#FFFABF";
	tabTitle.style.borderBottom = "0px";
	
	var tabSheet = document.getElementById('tab-sheet-' + index);
	tabSheet.style.display = "block";

}

function typeChange1(sel) {
	 var type = sel.value;
	 if(type == "DHCP"){
		var ipa11 = document.getElementById('ipa11');
		ipa11.style.display = "none";
		var ipa12 = document.getElementById('ipa12');
		ipa12.style.display = "none";
		var ipa13 = document.getElementById('ipa13');
		ipa13.style.display = "none";			
	}else{
		var ipa11 = document.getElementById('ipa11');
		ipa11.style.display = "table-row";
		var ipa12 = document.getElementById('ipa12');
		ipa12.style.display = "table-row";
		var ipa13 = document.getElementById('ipa13');
		ipa13.style.display = "table-row";				
	}  
}
	
function typeChange2(sel) {
	 var type = sel.value;
	 if(type == "DHCP"){
		var ipa21 = document.getElementById('ipa21');
		ipa21.style.display = "none";
		var ipa22 = document.getElementById('ipa22');
		ipa22.style.display = "none";
		var ipa23 = document.getElementById('ipa23');
		ipa23.style.display = "none";			
	}else{
		var ipa21 = document.getElementById('ipa21');
		ipa21.style.display = "table-row";
		var ipa22 = document.getElementById('ipa22');
		ipa22.style.display = "table-row";
		var ipa23 = document.getElementById('ipa23');
		ipa23.style.display = "table-row";
	}
}

window.onload = function myOnloadFunc(){
	var t1 = document.getElementById('type1');
	var t2 = document.getElementById('type2');
	typeChange1(t1);
	typeChange2(t2);
}

</script>


<html>
   <head>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <title>Change Configuration</title>
   </head>
   <body>
      <?php
      	   $config = parse_ini_file("/etc/rc.conf");
	   $IPconfig1 = explode(" ", $config[ 'ifconfig_em1' ]);
	   $IPconfig2 = explode(" ", $config[ 'ifconfig_em2' ]);
	   if($config[ 'ifconfig_em1' ] == "DHCP"){
	  	$t1 = "DHCP";
           }else{
	   	$t1 = "STATIC";
           }
	   if($config[ 'ifconfig_em1' ] == "DHCP"){
	  	$t2 = "DHCP";
           }else{
	   	$t2 = "STATIC";
           }
      ?>	
      <div class="page">
         <div class="content">
            <h2>Change Configuration</h2>
            <form method="GET" action="/net_config/UserInputIPAddrPHP.php">
               <input type="hidden" name="form_name" id="form_form_name" value="form">
               <table border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                     <tr>
                        <td style="height:0.5em;">&nbsp;</td>
                     </tr>
                     <tr>
                        <td>
                           <table border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td class="tf_separator"> &nbsp;&nbsp; </td>
                                    <td id="tab-title-1" style="border-bottom-width: 0px; background-color: rgb(255, 250, 191);" class="tf_tab">
                                       <a href="#" class="tb_label" style="color:#404040;font-weight:bold;text-decoration:none;" onclick="onShowTab(1)">NIC 1</a>
                                    </td>
                                    <td class="tf_separator"> &nbsp; </td>
                                    <td id="tab-title-2" class="tf_tab" style="">
                                       <a href="#" class="tb_label" style="color:#404040;font-weight:bold;text-decoration:none;" onclick="onShowTab(2)">NIC 2</a>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td class="tf_sheet" width="420px;" height="210px;" style="background-color:#FFFABF;">
                           <div id="tab-sheet-1" style="display: block;" class="tf_sheet">
                              <table class="fields" id="form_contactDetails-fields">
                                 <tbody>
				    <tr class="fields">
                                       <td class="fields" align="left"><label for="form_ipaddress">Connection Type</label>&nbsp;</td>
                                       <td align="left">
					   <select name="Type1" onchange="typeChange1(this)" id="type1">
            					<option value="DHCP" <?php if ($config[ 'ifconfig_em1' ] == "DHCP") echo "SELECTED"; ?> >DHCP</option>
						<option value="STATIC" <?php if ($config[ 'ifconfig_em1' ] != "DHCP") echo "SELECTED"; ?> >STATIC IP</option>
        	                           </select>
				       </td>
                                    </tr>
                                    <tr class="fields" id="ipa11">
                                       <td class="fields" align="left"><label for="form_ipaddress">IP Address</label>&nbsp;</td>
                                       <td align="left"><input type="text" name="ip11" id="form_ipaddress" value="<?php echo $IPconfig1[1]; ?>" size="20"></td>
                                    </tr>
				    <tr class="fields" id="ipa12">
                                       <td class="fields" align="left"><label for="form_netmask">Netmask</label>&nbsp;</td>
                                       <td align="left"><input type="text" name="ip12" id="form_netmask" value="<?php echo $IPconfig1[3]; ?>" size="20"></td>
                                    </tr>
				    <tr class="fields" id="ipa13">
                                       <td class="fields" align="left"><label for="form_netmask">Broadcast</label>&nbsp;</td>
                                       <td align="left"><input type="text" name="ip13" id="form_netmask" value="<?php echo $IPconfig1[5]; ?>" size="20"></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div id="tab-sheet-2" style="display: none;" class="tf_sheet">
                              <table class="fields" id="form_contactDetails-fields">
                                 <tbody>
				    <tr class="fields">
                                       <td class="fields" align="left"><label for="form_ipaddress">Connection Type</label>&nbsp;</td>
                                       <td align="left">
					   <select name="Type2" onchange="typeChange2(this)" id="type2">
            					<option value="DHCP" <?php if ($config[ 'ifconfig_em2' ] == "DHCP") echo "SELECTED"; ?> >DHCP</option>
						<option value="STATIC" <?php if ($config[ 'ifconfig_em2' ] != "DHCP") echo "SELECTED"; ?> >STATIC IP</option>
        	                           </select>
				       </td>
                                    </tr>
                                    <tr class="fields" id="ipa21">
                                       <td class="fields" align="left"><label for="form_ipaddress">IP Address</label>&nbsp;</td>
                                       <td align="left"><input type="text" name="ip21" id="form_ipaddress" value="<?php echo $IPconfig2[1]; ?>" size="20"></td>
                                    </tr>
				    <tr class="fields" id="ipa22">
                                       <td class="fields" align="left"><label for="form_netmask">Netmask</label>&nbsp;</td>
                                       <td align="left"><input type="text" name="ip22" id="form_netmask" value="<?php echo $IPconfig2[3]; ?>" size="20"></td>
                                    </tr>
				    <tr class="fields" id="ipa23">
                                       <td class="fields" align="left"><label for="form_netmask">Broadcast</label>&nbsp;</td>
                                       <td align="left"><input type="text" name="ip23" id="form_netmask" value="<?php echo $IPconfig2[5]; ?>" size="20"></td>
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
            </form>
         </div>
      </div>
   </body>
</html>
