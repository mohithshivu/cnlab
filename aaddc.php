<html>
    <head>
        <title>
            Car Details Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css"> 
    </head>
    <body>
        
        
 <h1 style="text-align: 'center';color:black;">ENTER THE CAR DETAILS</h1>
      
         <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-4 col-md-5">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white"><center>Car Details Form</center></h3>
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
  <label class="col-md-4 control-label">Brand  Name</label>  
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="bname" placeholder="Enter the Brand Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Model  Name</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="mname" placeholder="Enter the Model Name" class="form-control"  type="text">
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Model Id </label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
         <input type ="number" name="id" class="form-control"  placeholder="Enter the Model Id " ><br/>
   
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Rating</label> 
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type ="number" name="rating"  class="form-control" placeholder="Enter the Rating " >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Cost</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="cost" placeholder="Enter the Cost" class="form-control"  type="number">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Car showroom id</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="cid" placeholder="Enter the Car showroom id" class="form-control"  type="number">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Releasing Date</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="date" placeholder="Enter the Releasing Date" class="form-control"  type="date">
    </div>
  </div>
</div>


<!-- Text input-->
       
        </fieldset></form>
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
    if(!empty($_POST['bname']))
    {
        if(!empty($_POST['mname']))
        {
            if(!empty($_POST['id']))
            {
                if(!empty($_POST['rating']))
                {
                    if(!empty($_POST['cost']))
                    {
                        if(!empty($_POST['cid']))
                        {
                            if(!empty($_POST['date'])) 
                            {
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$host='localhost';
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
							
							$sql=mysqli_query($conn,"INSERT INTO new_cars 				values('$_POST[bname]','$_POST[mname]','$_POST[rating]','$_POST[cost]','$_POST[date]','$_POST[id]','$_POST[cid]')");
						if($sql)
                        {
                            echo "<div class='alert alert-success' role='alert' id='success_message'>Inserted Successfully! <i class='glyphicon glyphicon-thumbs-up'></div>";
                        }
						else
							echo "Fail to insert";

$conn->close();						
							
                                    	
                            }else{echo"release date should not be empty";}
                        }else{echo"car -id should not be empty";}
                    }else{echo"cost should not be empty";}
                }else{echo"rating should not be empty";}
            }else{echo"mid should not be empty";}
        }else{echo"model name should not be empty";}
    }else{echo"brand name should not be empty";}
}
?>
       


	<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="adminview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
  
</div>
    </body>
</html>

