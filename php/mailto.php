<?php

if(isset($_POST['contact_name'])&&isset($_POST['contact_email'])&&isset($_POST['contact_text'])){
	
	
	
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if(!empty($contact_name)&&!empty($contact_email)&&!empty($contact_text)){

            if(strlen($contact_name)>25||strlen($contact_email)>50||strlen($contact_text)>10000){
                 echo'<h1>'.'Sorry, max length for some fields has been exceeded.'.'</h1>';


                }else{

		$to = 'mohamadkafi1985@gmail.com';
		$subject = 'Contact form message.';
	    $body = $contact_name."\n".$contact_text;
		$headers = 'From:'.$contact_email;
		
		if(@mail($to,$subject,$body,$headers)){
			echo'<h1>'.'Thanks for contacting me.'.'</h1>';
		
		}else{
			echo'<h1>'.'Sorry an error occurred. Please try again later.'.'</h1>';
		}
		}
	}else{
		echo'<h1>'.'All fields are required.'.'</h1>';
		
	}
              
	
}

?>
<br/><br/>
<a href="../index.html" ><h2>Back to the main page</h1> </a>