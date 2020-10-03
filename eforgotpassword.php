<?php
ob_start();
session_start();
?>
<html>
    <head>
        <title>
            Reset Password Details Form 
        </title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
	<script>
		
	</script>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ENTER THE EMPLOYEE ID TO GENERATE OTP</h1>
        
         <!--   <form method ="post" id="register" action="" onclick="aforgotpassword.php">
                <h2> Enter the Admin Id  </h2>
                <lable>Admin id:</lable>
                <br/>
                <input type ="number" id ="adminid" name="aid" placeholder="Enter the Admin Id " value="aid" ><br>
                <input type ="submit" name="sendcode" value="Send code"><br>	 						
                <lable>OTP</lable><br/>
                <input type ="number" name="otp" placeholder="Enter the OTP " ><br/>
             
		<input type ='submit' name='verify' value='submit' >
                
                
                
		
				
            </form>-->
<div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-2 col-md-8 offset-md-2">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white">OTP Generating Table</h3>
                        <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="eforgotpassword.php">
                                <div class="form-group row md-6 col-form-label">
                                   <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-check col-md-2 col-form-label " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
                                    <label for="firstname" class="col-md-2 col-form-label">Emplyee Id</label>
                                  <div class="col-md-4">
                                        <div class="input-group">
                                            
                                            <input class="form-control" type="number" name="eid" value="" placeholder="Employee Id">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-md col-md-3">
                                        <button type="submit" name ="sendcode" class="btn btn-primary">Get OTP</button>
                                    </div>
                                </div>
                                
                                
                                    
                                </div>       
                                 <div class="form-group row md-4 col-form-label">
                                   <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-shield-lock-fill col-md-2 col-form-label" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
</svg>

                             <label for="firstname"  class="col-md-2 col-form-label">OTP</label>
                                  <div class="col-md-4">
                                        <div class="input-group">
                                            
                                            <input class="form-control" type="number" name="otp" value="" placeholder="Enter the OTP">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-md col-md-3">
                                        <button type="submit" name="verify" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                            
                        <?php
			
		
		$conn =  mysqli_connect("localhost" , "root" , "");
		$email="";
		$eid="";
		mysqli_select_db($conn,"car");
		if(isset($_POST['sendcode']))
		{
			/*$email=$_POST['email'];
			$randomcode=mt_rand(0,999999);
			$_SESSION['random']=$randomcode;
			$message="YOUR OTP IS ".$randomcode;
			$subject="Reset Code";
			$to=$email;
			$result= mail($to,$subject,$message);
			echo"The code has been send to ".$to;
			$_SESSION['username']=$email;*/
            
			
			if(!empty($_POST['eid']))
			{	
		
				$sql = "SELECT  * FROM emp_pro where e_id='$_POST[eid]'";
    				$result = $conn->query($sql);
				
    			if ($result->num_rows > 0)
			 {
				while($row = $result->fetch_assoc())
				{
					$email=$row['email'];
					$eid=$row['e_id'];
				}
				
			}
			else
			{
				echo"Employee Id does not exist!!!";
			}
			}
		
		        else
			{
				echo"Employee id should not be empty";
			}
	if($eid == $_POST['eid'] && !empty ($_POST['eid']))
	{
	 require 'phpmailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'mohithamma03@gmail.com';                 // SMTP username
	$mail->Password = 'Mohithshivu03@';                           // SMTP password
	//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->setFrom('mohithamma03@gmail.com', 'mohith');
	$mail->addAddress($email, 'shivu');     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('mohithshivu03@gmail.com', 'Information');
	/*$mail->addCC('cc@example.com');
		$mail->addBCC('bcc@example.com');
	
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */  // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Verification Email for Car Showroom Employee';
	$randomcode=mt_rand(100000,999999);
	$_SESSION['random']=$randomcode;
	$mail->Body    = '<h3>Dear Sir/Madam</h3> '.'<h2>'.'Your verification code is '.$randomcode.'<h2>'."<h4>use this code to verify your account.</h4>";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	$_SESSION['eid']=$eid;		
	
	
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {  echo 'Message has been be sent.';}
}
}			
			if(isset($_POST['verify']))
			{
			$code=$_POST['otp'];
			
			if($code == $_SESSION['random'])
			{
				header('location:eresetpassword.php');
			}
			else
			{
				echo"<p style=color:red>"."wrong OTP!!!";				
			}
			}	
         ob_end_flush(); 
?>          
                                
                                
        </form>
                        </div>
                    </div>
                </div>
        </div>
        
          
    </body>
</html>
       
        
