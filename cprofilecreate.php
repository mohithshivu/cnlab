<html>
    <head>
        <title>
            Customer Details Form 
        </title>
      <link rel ="stylesheet" type="text/css" href="st.css">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">CUSTOMER DETAILS FORM</h1>
       
            
 <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-3 col-md-5">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white"><center>Registration Form</center></h3>
                        <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="mforgotpassword.php">
                                <div class="form-group row md-6 col-form-label">
                                   

                            
      <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b></b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Customer Id</label> 
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type ="number" name="cid"  class="form-control" placeholder="Enter the join date " >
    </div>
  </div>
</div>


  <div class="form-group"> 
  <label class="col-md-4 control-label">Gender</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="gender" class="form-control selectpicker">
    <option value="" disabled selected hidden>Select the Gender</option>
	<option value="Male">Male</option>
<option value="Female">Female</option>
        </select>
  </div>
</div>
</div>
  
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Date of Birth</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="dob" placeholder="Enter the Dob" class="form-control"  type="number">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="address" placeholder="Enter the Addresss" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Email Id</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="email" placeholder="Enter the email id" class="form-control"  type="email">
    </div>
  </div>
</div>

<!-- Text input-->




<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">New Password</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="npassword" placeholder="Enter the New Password" class="form-control" type="password">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Confirm Password</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="cpassword" placeholder="Enter the Confirmed Password" class="form-control" type="password">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSubmit <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
        </fieldset>
          </form>
                                    </div>
                                </div>
                            	
            <?php
if(isset($_POST['submit']))
{
    if(!empty($_POST['fname']))
    {
        if(!empty($_POST['lname']))
        {	
		 if(!empty($_POST['cid']))
        	{
			if(!empty($_POST['gender']))
        		{
                		if(!empty($_POST['dob']))
                		{
                        	if(!empty($_POST['address']))
                       		 {
                           		 if(!empty($_POST['email'])) 
                           		 {
				 		if(!empty($_POST['npassword'])) 
                            			{
							if(!empty($_POST['cpassword'])) 
                           	 			{
								if($_POST['npassword'] == $_POST['cpassword'])
								{		
								$dbusername='root';
								$dbpassword='';
								$dbname='car';
								$feedback="good!!!";
								$host='localhost';
								$conn =  mysqli_connect("localhost" , "root" , "");
								mysqli_select_db($conn,"car");
							
							$res=mysqli_query($conn,"INSERT INTO customer_pro 						values('$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[email]','$_POST[address]',
					'$_POST[gender]','$_POST[npassword]',$_POST[cid])");
						
$conn->close();
						echo "profile created succesfully";
						
                                    		}
							else{ echo "the confirm password is not match with the new password";}
                            					}else{echo"confirm password should not be empty";}    	
                           				 }else{echo" new password should not be empty";}	
                    					}else{echo"email should not be empty";}
               	 				}else{echo"address should not be empty";}
           	 			}else{echo"dob should not be empty";}
				}else{echo"gender should not be empty";}
			}else{echo"cid should not be empty";}
    		}else{echo"lname should not be empty";}
	}else{echo"fname should not be empty";}
}
?>
     
 <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="custmerview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>

</div>
      
    </body>
</html>

