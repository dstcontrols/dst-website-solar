<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>-::- DST Solar -::-</title>
<link rel="stylesheet" type="text/css" href="css/style.css" title="DST Solar" />
<script type="text/javascript" src="jss/swap-images.js"></script>
<script type="text/javascript" src="jss/menu.js"></script>

<script language="javascript1.2">

/*************************************Type****************************************/
function changeValue1(inputID, divID){
var ddl = document.getElementById(inputID);
var sp2 = document.getElementById(divID);

var idName = new Array();
idName ['Select'] = 'X';
idName ['Standard (no monitoring)'] = '1';
idName ['Smart Combiner'] = '2';
idName ['Standard Sub-Combiner'] = '3';
idName ['Smart Sub-Combiner'] = '4';
idName ['Standard Combiner with DC disconnect'] = '5';
idName ['Smart Combiner with DC disconnect'] = '6';
idName ['Standard Sub-Combiner with DC disconnect'] = '7';
idName ['Smart Sub-Combiner with DC disconnect'] = '8';

sp2.innerHTML = '-'+idName[ddl.value];
}

/*************************************Accuracy****************************************/
function changeValue2(inputID, divID){
var ddl = document.getElementById(inputID);
var sp2 = document.getElementById(divID);

var idName = new Array();
idName ['Select'] = 'X';
idName ['No Monitor'] = 'X';
idName ['0.25 - 0.5%'] = '1';
idName ['0.5 - 1.0%'] = '2';
idName ['1.0 - 2.0%'] = '3';


sp2.innerHTML = '-'+idName[ddl.value];
}

/*************************************Strings****************************************/
function changeValue3(inputID, divID){
var ddl = document.getElementById(inputID).value;
var sp2 = document.getElementById(divID);


sp2.innerHTML = '-'+ddl;
}
/*************************************Fuse****************************************/
function changeValue4(inputID, divID){
var ddl = document.getElementById(inputID);
var sp2 = document.getElementById(divID);

var idName = new Array();
idName ['Select'] = 'X';
idName ['10 Amp'] = '1';
idName ['15 Amp'] = '2';
idName ['100 Amp'] = '3';
idName ['150 Amp'] = '4'


sp2.innerHTML = '-'+idName[ddl.value];
}

/*************************************Voltage****************************************/
function changeValue5(inputID, divID){
var ddl = document.getElementById(inputID);
var sp2 = document.getElementById(divID);

var idName = new Array();
idName ['Select'] = 'X';
idName ['600V DC'] = '1';
idName ['1000V DC'] = '2';

sp2.innerHTML = '-'+idName[ddl.value];
}

/*************************************Communications****************************************/
function changeValue6(inputID, divID){
var ddl = document.getElementById(inputID);
var sp2 = document.getElementById(divID);

var idName = new Array();
idName ['Select'] = '0';
idName ['None'] = 'X';
idName ['RS485/Modbus RTU'] = '1';
idName ['Modbus TCP/IP'] = '2';

sp2.innerHTML = '-'+idName[ddl.value];
}

/*************************************Boxes****************************************/
function disableBoxes(){
	myForm = document.getElementById('frmEmail');
	if(myForm.box1.disabled){
	myForm.box1.disabled = false;
	myForm.box2.disabled = false;
	myForm.box3.disabled = false;
	myForm.box4.disabled = false;
	myForm.box5.disabled = false;
	myForm.box6.disabled = false;
	myForm.box7.disabled = false;
	}else{
	myForm.box1.disabled = true;
	myForm.box2.disabled = true;
	myForm.box3.disabled = true;
	myForm.box4.disabled = true;
	myForm.box5.disabled = true;
	myForm.box6.disabled = true;
	myForm.box7.disabled = true;
	
	myForm.box1.checked  = false;
	myForm.box2.checked  = false;
	myForm.box3.checked  = false;
	myForm.box4.checked  = false;
	myForm.box5.checked  = false;
	myForm.box6.checked  = false;
	myForm.box7.checked  = false;
	
		document.getElementById('sp7').innerHTML= '-'+'X';
			document.getElementById('sp8').innerHTML= '';
				document.getElementById('sp9').innerHTML= '';
					document.getElementById('sp10').innerHTML= '';
						document.getElementById('sp11').innerHTML= '';
							document.getElementById('sp12').innerHTML= '';
								document.getElementById('sp13').innerHTML= '';
	}
}

function valueBoxes(){
	myForm = document.getElementById('frmEmail');
	
	if(myForm.box1.checked){
	document.getElementById('sp7').innerHTML = '-'+'1';
	}else{
	document.getElementById('sp7').innerHTML= '-'+'0';	
	}
	
	if(myForm.box2.checked){
	document.getElementById('sp8').innerHTML = '-'+'2';
	}else{
	document.getElementById('sp8').innerHTML= '';	
	}
	
	if(myForm.box3.checked){
	document.getElementById('sp9').innerHTML = '-'+'3';
	}else{
	document.getElementById('sp9').innerHTML= '';	
	}
	
	if(myForm.box4.checked){
	document.getElementById('sp10').innerHTML = '-'+'4';
	}else{
	document.getElementById('sp10').innerHTML= '';	
	}
	
	if(myForm.box5.checked){
	document.getElementById('sp11').innerHTML = '-'+'5';
	}else{
	document.getElementById('sp11').innerHTML= '';	
	}
	
	if(myForm.box6.checked){
	document.getElementById('sp12').innerHTML = '-'+'6';
	}else{
	document.getElementById('sp12').innerHTML= '';	
	}
	
	if(myForm.box7.checked){
	document.getElementById('sp13').innerHTML = '-'+'7';
	}else{
	document.getElementById('sp13').innerHTML= '';	
	}
}

//document.forms[0].MyCheckbox.disabled = false;
</script>

<script language="javascript1.2">

function   ValidateForm(){

    myForm = document.getElementById('frmEmail');

	fontValue1 = document.getElementById('spaninfo').innerHTML;	
	myForm.spanvalue.value = fontValue1;

    myForm.submit();
}	
</script>

</head>

<body onload="MM_preloadImages('images/home_hover.jpg','images/about_hover.jpg','images/products_hover.jpg','images/capabilities_hover.jpg','images/faqs_hover.jpg','images/support_hover.jpg','images/contact_hover.jpg','images/product_btn_hover.jpg','images/technology_btn_active.jpg','images/news_btn_active.jpg')">
	<div id="container">
    	<div id="inner">
        	<div id="header">                        	                            
            <div id="logo">
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash5/cabs/swflash.cab#version=5,0,0,0" width="183" height="147">
                <param name="MOVIE" value="flash/logo.swf" />
                <param name="PLAY" value="true" />
                <param name="LOOP" value="true" />
                <param name="WMODE" value="opaque" />
                <param name="QUALITY" value="high" />
                <embed src="flash/logo.swf" play="true" loop="true" wmode="opaque" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="183" height="147">               
              </object>
            </div>
            <div id="link">
            	<ul>
            	  <a href="ISO Cert.pdf" target="_blank"><img src="images/bg_top copy.png" width="457" height="55" align="right"/></a>
            	</ul>
            </div>
            <div id="topNav">
            	<ul>
                	<li><a href="index.html"><img src="images/home.jpg" alt="" id="Image1" onmouseover="MM_swapImage('Image1','','images/home_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></li>
                    <li><a href="about.html" onmouseover="mopen('m1')" onmouseout="mclosetime()"><img src="images/about.jpg" alt="" id="Image2" onmouseover="MM_swapImage('Image2','','images/about_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a>
                    	<div style="position:relative;">
                        <div id="m1" onmouseover="mcancelclosetime(), MM_swapImage('Image2','','images/about_hover.jpg',1)" onmouseout="mclosetime(),MM_swapImgRestore()">
                        	<a href="partners.html">Partners</a>
                            <a href="quality.pdf" target="_blank">Quality Policy</a>
                        </div>
                        </div>
                    </li>
                    <li><a href="products.html" onmouseover="mopen('m2')" onmouseout="mclosetime()"><img src="images/products.jpg" alt="" id="Image3" onmouseover="MM_swapImage('Image3','','images/products_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a>
                    	<div style="position:relative;">
                        <div id="m2" onmouseover="mcancelclosetime(), MM_swapImage('Image3','','images/products_hover.jpg',1)" onmouseout="mclosetime(),MM_swapImgRestore()">
                        	<a href="Solar-Standard-and-Smart-Combiners.html">Solar Standard &amp; Smart Combiners</a>
                            <a href="Solar-Standard-and-Smart-Re-Combiners.html">Solar Standard &amp; Smart Re-Combiners</a>
                            <a href="Solar-Monitoring-and-Tracking.html">Solar Monitoring &amp; Tracking</a>
                        </div>
                        </div>
                    </li>
                    <li><a href="capabilities.html"><img src="images/capabilities.jpg" alt="" id="Image4" onmouseover="MM_swapImage('Image4','','images/capabilities_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></li>
                    <li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="images/faqs.jpg" alt="" id="Image5" onmouseover="MM_swapImage('Image5','','images/faqs_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a>
                    	<div style="position:relative;">
                        <div id="m3" onmouseover="mcancelclosetime(), MM_swapImage('Image5','','images/faqs_hover.jpg',1)" onmouseout="mclosetime(),MM_swapImgRestore()">
                        	<a href="faq.html">FAQ – Combiner Box</a>
                        </div>
                        </div>
                    </li>
                    <li><a href="support.html"><img src="images/support.jpg" alt="" id="Image6" onmouseover="MM_swapImage('Image6','','images/support_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></li>
                    <li><a href="contact.html"><img src="images/contact.jpg" alt="" id="Image7" onmouseover="MM_swapImage('Image7','','images/contact_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></li>
                </ul>
            </div>
          </div>
          <div id="inner3">
            <div id="innerBanner">
            	<img src="images/inner_page_banner.jpg" alt="" />
            </div>
            <div id="innerColmLeft2">
            	<h1><span>Combiner Box </span>Configuration Form</h1>           <form name="frmEmail" id="frmEmail" method="post" action="send_Email_combiner.php" onSubmit="javascript:return ValidateForm();" >                                   
                <div class="combinerForm"> 
                    <div>
                    	<span>Model Number:</span>
                        <p>
                        	Type:<br />
                            <select id="model_number" name="model_number" onchange="changeValue1('model_number', 'sp1')">
                            	<option value="Select" selected="selected">Select</option>
                            	<option value="Standard (no monitoring)">Standard (no monitoring)</option>
                                <option value="Smart Combiner">Smart Combiner</option>
                                <option value="Standard Sub-Combiner">Standard Sub-Combiner</option>
                                <option value="Smart Sub-Combiner">Smart Sub-Combiner</option>
                                <option value="Standard Combiner with DC disconnect">Standard Combiner with DC disconnect</option>
                                <option value="Smart Combiner with DC disconnect">Smart Combiner with DC disconnect</option>
                                <option value="Standard Sub-Combiner with DC disconnect">Standard Sub-Combiner with DC disconnect</option>
                                <option value="Smart Sub-Combiner with DC disconnect">Smart Sub-Combiner with DC disconnect</option>
                            </select><br /><br />
                            
                            Accuracy:<br />
                            <select name="accuracy" id="accuracy" onchange="changeValue2('accuracy', 'sp2')">
                            	<option value="No Monitor" selected="selected">No Monitor</option>
                                <option value="0.25 - 0.5%">0.25 - 0.5%</option>
                            	<option value="0.5 - 1.0%">0.5 - 1.0%</option>
                                <option value="1.0 - 2.0%">1.0 - 2.0%</option>
                            </select><br /><br />
                            
                            Number of Strings:<br />
                            <select name="no_strings" id="no_strings" onchange="changeValue3('no_strings', 'sp3')">
                            	<option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>	
                            </select><br /><br />
                            
                            Fuse:<br />
                            <select name="rating" id="rating" onchange="changeValue4('rating', 'sp4')">
                            	<option value="Select" selected="selected">Select</option>
                            	<option value="10 Amp">10 Amp</option>
                                <option value="15 Amp">15 Amp</option>
                                <option value="100 Amp">100 Amp</option>
                                <option value="150 Amp">150 Amp</option>
                            </select><br /><br />
                            
                            Voltage:<br />
                            <select name="voltage" id="voltage" onchange="changeValue5('voltage', 'sp5')">
                            	<option value="Select" selected="selected">Select</option>
                                <option value="600V DC">600V DC</option>
                                <option value="1000V DC">1000V DC</option>
                        </select><br /><br />
                        
                            Communications:<br />
                            <select id="communications" name="communications" onchange="changeValue6('communications', 'sp6')">
                            	<option value="None" selected="selected">None</option>
                            	<option value="RS485/Modbus RTU">RS485/Modbus RTU</option>
                                <option value="Modbus TCP/IP">Modbus TCP/IP</option>
                          </select><br /><br />
                          
                            Options:<br />
                            <input name="box[]" type="checkbox" id="box[]" onclick="disableBoxes();" value="None" /> 
                            None<br />
                            <input type="checkbox" value="Cable Glands Installed (Specify size of cable, quantity, and location)" name="box[]" id="box1" onclick="valueBoxes();" /> Cable Glands Installed (Specify size of cable, quantity, and location)<br />
                            <input type="checkbox" value="Conduit Hubs Installed (Specify size and location)" id="box2" name="box[]" onclick="valueBoxes();" /> Conduit Hubs Installed (Specify size and location)<br />
                            <input type="checkbox"  name="box[]" id="box3" value="MC or Tyco Field Connectors Installed (specify quantity and location)" onclick="valueBoxes();" /> MC or Tyco Field Connectors Installed (specify quantity and location)<br />
                            <input type="checkbox" name="box[]" id="box4" value="Polycarbonate or Fiberglass Enclosure in place of metallic" onclick="valueBoxes();" /> Polycarbonate or Fiberglass Enclosure in place of metallic<br />
                            <input type="checkbox" value="Custom Power Distribution Blocks for Output Wiring" id="box5" name="box[]" onclick="valueBoxes();" /> Custom Power Distribution Blocks for Output Wiring<br />
                            <input type="checkbox" value="Transient Voltage Suppressor" id="box6" name="box[]" onclick="valueBoxes();" /> Transient Voltage Suppressor</br />
                          <input type="checkbox" value="Power Supply Included" id="box7" name="box[]" onclick="valueBoxes();" /> Power Supply Included</br />
                        	<br /><br /><!--DC-1-2-16-0-0-0-->
							
						<b id="spaninfo">DC</span><span id="sp1">-X</span><span id="sp2">-X</span><span id="sp3">-02</span><span id="sp4">-X</span><span id="sp5">-X</span><span id="sp6">-0</span><span id="sp7">-0</span><span id="sp8">-0</span><span id="sp9"></span><span id="sp10"></span><span id="sp11"></span><span id="sp12"></span><span id="sp13"></span></b>			
							
                        	<font id="font"></font>
                        </p>
                    
                    </div>
                    <div>
                    	<span>Add Extended Warranty:</span>
                        <p>
                        	<select id="warranty" name="warranty">
                            	<option value="None" selected="selected">None</option>
                                <option value="5 years (15% price adder)">5 years (15% price adder)</option>
                                <option value="10 years (20% price adder)">10 years (20% price adder)</option>
                            </select>
                        </p>
                    </div>
                    <div>
                    	<span>Additional Instructions:</span>
                        <p><textarea name="instructions" cols="30" rows="5" id="instructions"></textarea>
						<input name="spanvalue" id="spanvalue" type="hidden" />
                        </p>
                    </div>
                    <div>
                    	<span>&nbsp;</span>
                        <p><input type="image" src="images/submit_btn.jpg" alt="" /></p>
                    </div>
                    
					<?php
					
		if(isset($_POST["address1"]) && $_POST["address1"] != ''){		
	 	foreach($_POST as $key=>$val){
			if($key!='x' && $key!='y')
			
				$formhtml .= '<input type="hidden" name="' .$key .'" value = "'. $val .'">';
		} 		
			$_SESSION["formhtml"] = $formhtml;
			$formhtm2 = $_SESSION["formhtml"];
			}elseif(isset($_SESSION["formhtml"])){
			$formhtm2 = $_SESSION["formhtml"];	
		}		
				echo $formhtm2;					
					
					?>
                    
                </div>
 </form>
            </div>
            <div id="innerColmRight">
            	<img src="images/right_box_top.jpg" alt="" border="0" usemap="#Map" /> 
            </div>                        
          </div>
        </div>
        
        <div id="footer">
        	<p><a href="index.html">Home</a> | <a href="about.html">About</a> | <a href="products.html">Products</a> | <a href="capabilities.html">Capabilities</a> | <a href="faq.html">FAQs</a> | <a href="support.html">Support</a> | <a href="contact.html">Contact</a>
            <span>Copyright &copy; 2010 DST Solar | All Rights Reserved.</span>
            </p>
        </div>
    </div>
</body>
</html>