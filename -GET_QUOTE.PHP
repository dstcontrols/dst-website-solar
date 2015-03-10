<?php
session_start();

foreach($_POST as $key=>$val){
			//if( $key!='btn' && $key!='submit' && $key!='isActive' && $key!='membership_price' && $key!='start_date' && $key!='end_date' )		
				$_SESSION[$key] = $val;
		}

header("Location: Combiner-Box-Configuration-Form.html");
exit();
?>