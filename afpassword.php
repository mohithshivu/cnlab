<?php
session_start();
?>
<html>
    <head>
        <title>
            Reset Password Details Form 
        </title>
	<script>
		
	</script>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ENTER THE ADMINS ID TO GENERATE OTP</h1>
       
           <form method ="post" id="register" action="" onclick="aforgotpassword.php">
                <h2>   </h2>
                <lable>Admin id:</lable>
                <br/>
                <input type ="number" id ="adminid" name="aid" placeholder="Enter the Admin Id " value="aid" ><br>
                <input type ="submit" name="sendcode" value="Send code"><br>	 						
                <lable>OTP</lable><br/>
                <input type ="number" name="otp" placeholder="Enter the OTP " ><br/>
             
		<input type ='submit' name='verify' value='submit' >
                
                
                
		
				
            </form>-->
	
            <?php
			
		
		$conn =  mysqli_connect("localhost" , "root" , "");
		$email="";
		$aid="";
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
			
			if(!empty($_POST['aid']))
			{	
		
				$sql = "SELECT  * FROM admin where admini_d='$_POST[aid]'";
    				$result = $conn->query($sql);
				
    			if ($result->num_rows > 0)
			 {
				while($row = $result->fetch_assoc())
				{
					$email=$row['email'];
					$aid=$row['admini_d'];
				}
				
			}
			else
			{
				echo"Admin Id does not exist!!!";
			}
			}
		
		        else
			{
				echo"Admin id should not be empty";
			}
	if($aid == $_POST['aid'] && !empty ($_POST['aid']))
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
	
	$mail->Subject = 'Verification Email for Car Showroom Admin';
	$randomcode=mt_rand(100000,999999);
	$_SESSION['random']=$randomcode;
	$mail->Body    = '<h3>Dear Sir/Madam</h3> '.'<h2>'.'Your verification code is '.$randomcode.'<h2>'."<h4>use this code to verify your account.</h4>";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	$_SESSION['aid']=$aid;		
	
	
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
				header('location:aresetpassword.php');
			}
			else
			{
				echo"<p style=color:red>"."wrong OTP!!!";				
			}
			}	
?>
     
        </div>

    </body>
</html>

