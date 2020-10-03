<html>
    <head>
        <title>
             Feedback Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
               

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    </head>
    <body>
       
          
            
     <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-3 col-md-5">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white"><center>Feedback Form</center></h3>
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
  <label class="col-md-4 control-label">Customer Id</label>  
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="cid" placeholder="Enter the Customer Id" class="form-control"  type="number">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >FeedBack</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <textarea name="feedback1" style='width:300px;height:200px;'  ></textarea>
    </div>
  </div>
</div>

                           
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
    if(!empty($_POST['cid']))
    {
        if(!empty($_POST['feedback1']))
        {
            
				
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$host='localhost';
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
					$p="";		
							$res=mysqli_query($conn,"select c_id from customer where c_id = '$_POST[cid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$p=$row['c_id'];
				
			}
			if($p == $_POST['cid'])
			{	
							
							mysqli_query($conn,"UPDATE  customer SET 									feedback='$_POST[feedback1]' where c_id='$_POST[cid]'");
						
						echo "thank you for your wonderfull feedback!!!";
			
$conn->close();		
			}

			else{echo"<p style=color:red>"." customer id not exist !!!";}		
						
             
        }else{echo"feedback should not be empty";}
    }else{echo"cid should not be empty";}
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

