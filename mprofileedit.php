<html>
    <head>
        <title>
            Manager Details Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
          <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css"> 
    </head>
    <body>
        <h1 style="color: 'green';postion: 'center';">ENTER THE DETAILS</h1><br><br>
       
           
           
        <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-3 col-md-5">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white"><center>MANAGER DETAILS FORM</center></h3>
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
  <label class="col-md-4 control-label">Manager id</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
         <input type ="number" name="mid" class="form-control"  splaceholder="Enter the dob " ><br/>
   
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Joined date</label> 
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type ="date" name="date"  class="form-control" placeholder="Enter the jdate " >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >New Password</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="npassword" placeholder="Enter the email id" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="cpassword" placeholder="Enter the Phone NO" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->


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
            if(!empty($_POST['mid']))
            {
               //,
                    if(!empty($_POST['date']))
                    {
                        
                            if(!empty($_POST['npassword'])) 
                            {
				if(!empty($_POST['cpassword'])) 
                           	 {
				
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$host='localhost';
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
							
							if($_POST['npassword'] == $_POST['cpassword'])
							{
							
							mysqli_query($conn,"UPDATE  manager SET 									fname='$_POST[fname]',lname='$_POST[lname]',join_date='$_POST[date]',password='$_POST[npassword]' where manager_id='$_POST[mid]'");
						
						echo "<div class='alert alert-success' role='alert' id='success_message'>Updated Successfully! <i class='glyphicon glyphicon-thumbs-up'></div>";
					}
						else{ echo "the confirm password is not match with the new password";}
						
                                }else{echo"confirm password should not be empty";}    	
                            }else{echo" new password should not be empty";}
                       
                    }else{echo"date should not be empty";}
               
            }else{echo"mid should not be empty";}
        }else{echo"lname should not be empty";}
    }else{echo"fname should not be empty";}
}
?>
         <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="managerview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
  
</div>
</form>
                        
    </body>
</html>

