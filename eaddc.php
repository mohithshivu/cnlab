<html>
    <head>
        <title>
            Customer Details Form 
        </title>
        <link rel="stylesheet" href="st.css">
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
  <label class="col-md-4 control-label">Date of Birth</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
         <input type ="date" name="dob" class="form-control"  splaceholder="Enter the dob " ><br/>
   
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="address" placeholder="Enter the Address" class="form-control" type="text">
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

<div class="form-group">
  <label class="col-md-4 control-label">Car showroom id</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="cid" placeholder="Enter the carshowroom id" class="form-control" type="number">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Purchesed Amount</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="price" placeholder="Enter the Phone NO" class="form-control"  type="number">
    </div>
  </div>
</div>

<!-- Text input-->



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
            
                if(!empty($_POST['dob']))
                {
                  
                        if(!empty($_POST['address']))
                        {
                            if(!empty($_POST['email'])) 
                            {
				 if(!empty($_POST['cid'])) 
                            	{
					 if(!empty($_POST['price'])) 
                            		{				
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$feedback="Not yet given the feed back";
					$host='localhost';
					$cid="";
					$row="";
					$no_row="";
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
							
						$sql="select count(*) as c from customer ";
						$result = $conn->query($sql);
    					
   						 while($row = $result->fetch_assoc())
						 {
							$no_row=$row['c'];
		
						}
						if($no_row == 0)
						{
							$cid="100";
						}
						else
						{	
							$sql="select max(c_id)  from customer ";
							$result = $conn->query($sql);
    					
   						 while($row = $result->fetch_assoc())
						 {
							$cid=$row['max(c_id)']+1;
		
						 }
						}	 
					
					$q="INSERT INTO customer 				values('$cid','$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[cid]','$_POST[email]','$feedback','$_POST[price]','$_POST[dob]')";	
							$res=$conn->query($q);
						
						echo "inserted succesfully";
						
                                    	
							$conn->close();
                            					}else{echo"price should not be empty";}
                       		 			}else{echo"car-showroom-id should not be empty";}
                    				}else{echo"email should not be empty";}
               	 		}else{echo"address should not be empty";}
       		 }else{echo"dob should not be empty";}
	}else{echo"lname should not be empty";}
}else{echo"fname should not be empty";}
}
?>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="employeview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
	</div>
   
    </body>
</html>

