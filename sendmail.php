<?PHP

 $msg = ' <table width="600" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td  colspan="4" valign="top">
					<img src="http://dst-solar.com/images/bnr_email.jpg" />					</td>
                  </tr>
                 
				  <tr>
				    <td height="22" colspan="3" align="left">&nbsp;<strong>Hello Administrator,</strong></td>
  </tr>
				  <tr>
				    <td height="22" colspan="3" align="left">&nbsp;A new request is submitted on <strong>Integrated Alternative Energy Solutions</strong> and details of this request are as follows:</td>
  </tr>
				  <tr>
				    <td height="22" align="right">&nbsp;</td>
				    <td>&nbsp;</td>
				    <td align="left">&nbsp;</td>
     </tr>
				  <tr>
                    <td width="200" height="22" align="right"><strong>Full Name:</strong></td>
                    <td width="7">&nbsp;</td>
                    <td width="499" align="left"> '.$_POST['name'].' </td>
                  </tr>
                  <tr>
                    <td height="22" align="right"><strong>Your Company:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">'. $_POST['company_name'] .'</td>
                  </tr>
                
				<tr>
                    <td height="22" align="right"><strong> Title:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">'. $_POST['title'] .'</td>
                  </tr>
				  
				  <tr>
                    <td height="22" align="right"><strong> Email Address:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">'. $_POST['email'] .'</td>
                  </tr>
				
				<tr>
                    <td height="22" align="right"><strong> Phone Number:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">'. $_POST['phoneno'] .'</td>
                  </tr>
				  
				  <tr>
                    <td height="22" align="right"><strong>Address1:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">' .$_POST['address1'].'</td>
                  </tr>
                 
				 <tr>
                    <td height="22" align="right"><strong>Address2:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">' .$_POST['address2'].'</td>
                  </tr>
				 
				  <tr>
                    <td height="22" align="right"><strong>City:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">'.$_POST['city'].'</td>
                  </tr>
                  <tr>
                    <td height="22" align="right"><strong>State:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">'.$_POST['state'] .'</td>
                  </tr>
                  <tr>
                    <td height="22" align="right"><strong>Zip Code:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left">'. $_POST['zip_code'] .'</td>
                  </tr>
                  
                  
                  
                  
                  <tr>
                    <td height="22" align="right" valign="top" style="padding-top:3px;"><strong>Description:</strong></td>
                    <td>&nbsp;</td>
                    <td align="left" valign="top">'. $_POST['description'] .'</td>
                  </tr>
                </table>';


$from_email = $_POST['email'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= 'From: <'.$from_email.'>' . "\r\n";

$subject = "Contact Us Request - Integrated Alternative Energy Solution";


mail('webmaster@dst-solar.com',$subject,$msg,$headers);


header("location:thanks.php");
?>