<?php
ob_start();
session_start();
?>
<html>
    <head>
        <title>
            Reset Password Form 
        </title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel ="stylesheet" type="text/css" href="st.css">
   
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ENTER THE NEW PASSWORD</h1>
        
<div id="reservationForm" class="row row-content align-items-center" >
    <div class="col-12 offset-2 col-md-8 offset-md-2">
        <div class="card">
                <h3 class="card-header bg-warning text-white">Password Confirmation Table</h3>
            <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="aforgotpassword.php">
                                <div class="form-group row md-6 col-form-label">
                                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-shield-fill col-md-2 col-form-label" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
</svg>
                                    <label for="firstname"   class="col-md-2 col-form-label">New Password</label>
                                  <div class="col-md-6">
                                        <div class="input-group">
                                            
                                            <input class="form-control" type="password" name="npassword" value="" placeholder="Enter the New Password">
                                        </div>
                                </div>
                               
                                
                            </div>
                                    
                                      
                                 <div class="form-group row md-4 col-form-label">
                                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-shield-fill-check col-md-2 col-form-label" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg>
 
                                <label for="firstname"  class="col-md-2 col-form-label">Confirmed Passsword</label>
                                  <div class="col-md-6">
                                        <div class="input-group">
                                            
                                            <input class="form-control" type="password" name="cpassword" type="password" value="" placeholder="Enter the Confirmed password ">
                                        </div>
                                </div>
                             
                                <div class="form-group row offset-md-2">
                                    <div class="">
                                        <br><br><button type="submit" name="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
     <?php
		if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
		
		$mid="";
		$mid=$_SESSION['mid'];
		
		if(isset($_POST['submit']))
		{
			
			if(!empty($_POST['npassword']))
			{
				if(!empty($_POST['cpassword']))
				{	
					if($_POST['npassword'] == $_POST['cpassword'])
					{
						
						$conn =  mysqli_connect("localhost" , "root" , "");
						mysqli_select_db($conn,"car");
						$sql = "UPDATE manager SET password = '$_POST[npassword]' WHERE manager_id = '$mid'";
    						if($result = $conn->query($sql))
						{
							
										header('location:managerpage.php');
							
						}
						else{echo"password is not updated successfully";}
						
					}else{echo"Passwords Do not matching";}
				}else{echo"confirm password should not be empty";}
			}else{echo"new password should not be empty";}
		
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

