


<!DOCTYPE html>
<html>
    <title>Delete customer</title>
    <center><head><h1>ENTER THE CUSTOMER ID TO DELETE FROM THE LIST</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		/*input{width :250px;
			height:30px;
			font-size:30px;	}*/
		h1{color:red;}
		h3{color:blue;}
	
	</style> <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
   </head></center>
    <body bodycolor: grey>
	
   
     <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-2 col-md-8">
                    <div class="card">
                        <h3 class="card-header bg-dark text-white"><center>Deletion Form</center></h3>
                        <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="">
                              
    
<!-- Form Name -->


<!-- Text input-->


  <label class="form-group">Customer Id</label> 
  <input  name="cid" placeholder="Enter the Customer Id" id="exampleDropdownFormEmail1" class="form-control"  type="number"> 
  <div class="col-md-4 inputGroupContainer">
     
      
  
    </div>
    
                            <div class="form-group">
  <label class="col-md-12 control-label"></label>
  <div class="col-10"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="delete" class="btn btn-danger" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDelete <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
		$p="";
		
	if(isset($_POST['delete']))
	{
			
			$res=mysqli_query($conn,"select c_id from customer where c_id = '$_POST[cid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$p=$row['c_id'];
				
			}
			if($p == $_POST['cid'])
			{
				mysqli_query($conn,"delete from customer where c_id = '$_POST[cid]'");
				echo "<p style= 'color: green; text-align:center'>"."employee details with $_POST[cid] deleted successfully"."</p>";
			
			}
				else
				{
					echo"<p style ='color: red ; text-align:center'>". " customer id is not exist"."</p>";
				}

$conn->close();
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

