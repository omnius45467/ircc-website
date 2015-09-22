<?php
	$to = "demo@company.com"; /*Your Email*/
	$subject = "Form page"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	//$Email=$_REQUEST['Email'];
    if(isset($_REQUEST['firstname'])&&isset($_REQUEST['lastname']))
	$user_name      =$_REQUEST['firstname'];
	$user_last    	=$_REQUEST['lastname'];
	$user_email    	=$_REQUEST['email'];
    $phone          =$_REQUEST['phone'];
	$country        =$_REQUEST['country'];
    $education      =$_REQUEST['education'];
    $curse          =$_REQUEST['curse'];


	$msg="
		Name: 				$user_name 
		Lastname: 			$user_last
		Email: 				$user_email
		Phone: 				$phone
		Country: 			$country 
		Education Level: 	$education 
		Course you want: 	$curse 
		Suscription from website on date  $date, hour: $time.";
	  
	  
	  
	if ($user_email=="" or  $curse==""  or   $phone=="" or $country=="") {
		echo "<div class='alert alert-error'>
  				<a class='close' data-dismiss='alert'>×</a>
  				<strong>Warning!</strong> Please fill all fields
			</div>
		
		";
	}	
	else{
		mail($to, $subject, $msg, "From: $name ");
		echo "<div class='alert alert-success'>
  				<a class='close' data-dismiss='alert'>×</a>
  				<strong>Thank you for your Suscription!</strong>
			</div>
		";	
	}
	
?>
