<?php
  session_start();
  
// take values from session
$fname = $_SESSION["fname"];
$cname = $_SESSION["cname"];
$title = $_SESSION["title"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$address1 = $_SESSION["address1"];
$address2 = $_SESSION["address2"];
$city = $_SESSION["city"];
$state = $_SESSION["state"];
$zip = $_SESSION["zip"];

 
  
// Retrieve values from the form
$model_number = $_POST["model_number"];
$accuracy = $_POST["accuracy"];
$no_strings = $_POST["no_strings"];
$rating = $_POST["rating"];
$voltage = $_POST["voltage"];
$communications = $_POST["communications"];
$warranty = $_POST["warranty"];
$box = $_POST["box"];
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
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Model Number:&nbsp;</strong> </span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$model_number.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Accuracy:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$accuracy.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Number of Strings:&nbsp;</strong></span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$no_strings.'</span></td>
                  </tr>
                  <tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Fuse Rating:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$rating.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Voltage:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$voltage.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Communications:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$communications.'</span></td>
</tr>
<tr>
                    <td height="21" align="right"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><strong>Add Warranty:</strong>&nbsp;</span></td>
                    <td align="left"><span style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">'.$warranty.'</span></td>
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


//$to = 'webmaster@dst-solar.com';
$to = 'DDusenbury@dstcontrols.com';
//$strFrom = 'webmaster@dst-solar.com';
$strFrom = '<'. $email .'>'; // $fname . $cname .

$subject = 'Alternative Energy Division – Combiner Box Configuration Form Request';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: '.$strFrom.'' . "\r\n";
$headers .= 'Reply-To: <'.$strFrom.'>' . "\r\n";

	$mail = mail($to,$subject,$message,$headers);

if($mail){
	header("Location: thanks.html");
	//session_destroy();
	exit();
	} else{
	echo "Sorry, the code you entered was invalid. Please try again.";	
	}		
?>