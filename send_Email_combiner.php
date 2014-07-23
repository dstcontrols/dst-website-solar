<?php
// The followind is to be able to ignore request from Search crawlers and 
// Direct Links.
// echo '-' . $_SERVER['REQUEST_METHOD'] . '-';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	header("Location: index.html");
	exit;
}
//exit; 

// take values from session
$fname = $_POST["fname"];
$cname = $_POST["cname"];
$title = $_POST["title"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];

 
  
// Retrieve values from the form    
$voltage = $_POST["voltage"];
$suppressor = $_POST["suppressor"];
$combiner = $_POST["combiner"];
$warranty = $_POST["warranty"];
$model_number = $_POST["model_number"];
$rating = $_POST["rating"];
$no_strings = $_POST["no_strings"];

$communications = $_POST["communications"];
$box = $_POST["box"];
$gavazzi = $_POST["gavazzi"];
$gavazzi2 = $_POST["gavazzi2"];
$instructions = $_POST["instructions"];
$spanvalue = $_POST["spanvalue"];



// message
$message = '<table width="600" border="0" cellpadding="0" cellspacing="0" style="border:1 solid #F5F5F5">
           <tr>
             <td width="638" height="10" align="left" class="txt_black_11" style="background-color:#F4F4F4;"><img src="http://www.dst-solar.com/images/dst_email.jpg" ></td>
              </tr>
              <tr>
                <td height="10" align="left" class="txt_black_11" style="border-top:1 solid #F5F5F5"></td>
              </tr>
              <tr> 
				<td height="10" align="left" class="txt_black_11"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                  <tr>
                    <td width="286" height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Full Name:</strong>&nbsp; </span></td>
                    <td width="308" align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$fname.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Company Name:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$cname.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Title:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$title.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Email Address:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><a href="mailto:' . $email . '">'.$email.'</a></span></td>
                  </tr>
                  <tr>
                    <td width="286" height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Phone Number:</strong>&nbsp; </span></td>
                    <td width="308" align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$phone.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Address 1:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$address1.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Address 2:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$address2.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>City:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$city.'</span></td>
                  </tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>State:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$state.'</span></td>
                  </tr>
				  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Zip:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$zip.'</span></td>
                  </tr>				  				  
<tr>
<td width="286" height="10" align="right"></td>
                    <td width="308" align="left"></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Required DC Voltage:&nbsp;</strong> </span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$voltage.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Add Transient Voltage Suppressor:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$suppressor.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Type of Smart Combiner:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$combiner.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Add Extended Warranty:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$warranty.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Model Number:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$model_number.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Fuse rating:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$rating.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Number of Strings:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$no_strings.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Communications:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$communications.'</span></td>
</tr>
<tr>
                    <td height="21" align="right" valign="top"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Options:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">';
					
$total = count($box);	
	$str1='';
	for($i=0; $i<$total; $i++){
		$str1 .= $box[$i];		
		
		if( $i < ($total-1) )
			$str1 .='<br>';	
	}					
					
					$message .= $str1.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>'.$spanvalue.'</strong></span></td>
</tr>		
<tr>';

if($gavazzi != ''){
$message .='<td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Add Environmental Module for Smart Carlo Gavazzi:&nbsp;</strong> </span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$gavazzi.'</span></td>
                  </tr>';
				  }
                  if($gavazzi2 != ''){
$message .='<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Add Relay Input Module for Smart Carlo Gavazzi:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$gavazzi2.'</span></td>
                  </tr>';
			}  
                  $message .='<tr>
                    <td height="21" align="right" valign="top"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Additional Instructions:&nbsp;</strong></span></td>
                    <td align="left" valign="top"><table width="308" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$instructions.'</span></td>
  </tr>
</table></td>
                  </tr>
                </table></td>
			  </tr>
            </table>';
			
//echo $message;
//exit;			


//$to = 'DDusenbury@dstcontrols.com,Kruble@dstcontrols.com,mariano@etszone.com';
//$strFrom = 'webmaster@dst-solar.com';
$to = 'ddusenbury@DSTControls.com';
//$to = 'mariano@etszone.com';
//$to = 'webmaster@dst-solar.com';
$strFrom = 'webmaster@dst-solar.com';

$subject = 'DST Solar – Combiner Box Configuration Request';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <'.$strFrom.'>' . "\r\n";
$headers .= 'Reply-To: <'.$strFrom.'>' . "\r\n";

	$mail = mail($to,$subject,$message,$headers);

if($mail){
	header("Location: thanks.php");
	//session_destroy();
	exit();
	} else{
	echo "Sorry, the code you entered was invalid. Please try again.";	
	}		
?>