
<!DOCTYPE html>
<html>
    <title>CUSTOMER DETAILS</title>
    <center><head><h1>ENTER THE CUSTOMER ID TO SEE THE INFORMATION</h1>
	<style type="text/css">
          form{padding-top :120px;
			text-align :center;
            font-size: 20px;
			}
		
		h1{text-align:  center;}
		h3{color:blue;}
        title
        {
           text-align :center; 
        }
		body{
		
	    
		background-color: white;
	}
	 table {
    border-collapse: collapse;
    width: 100%;
    color: #000000;
    font-family: inherit;
    font-size: 25px;
    text-align: left;
    }
        .table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #ffffff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
    th {
    background-color: #000000;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
	 
        </style>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap4/conFusion/css/newstyle.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css"> 
   </head></center>
    <body>
	
 <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-1 col-md-10">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white"><center>Deltails Form</center></h3>
                        <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="">
                              
    
<!-- Form Name -->


<!-- Text input-->


  
  
<div class="offset-4 col-md-4 selectContainer">
    <div class="input-group">
       <label class="offset-1 form-group" name="cid">Customer Id</label> 
        <span class=" offset-1 input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
         <input  name="cid" placeholder="Enter the Customer Id" id="exampleDropdownFormEmail1" class="form-control"  type="number"> 
   
  </div>
</div>

    
                            <div class="form-group">
  <label class="col-md-12 control-label"></label>
  <div class="col-11"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="view" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspView <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
    
  </div>
</div>
		
		
       
       
        <div>
		
			<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
	if(isset($_POST['view']))
	{
	if(!empty($_POST['cid']))
	{	
		
			$sql = "SELECT  * FROM customer where c_id='$_POST[cid]'";
    			$result = $conn->query($sql);
    			if ($result->num_rows > 0)
			 {
   			 	 echo" <tr><th>"."Customer_Id"."</th><th>"."First_Name"."</th><th>"."Last_Name"."</th><th>"."dob"."</th><th>"."Email"."</th><th>"."Price"."</th></tr>";
   						 while($row = $result->fetch_assoc())
						 {
   			 							echo "<tr><td>" . $row["c_id"]. "</td><td>" . $row["fname"] . "</td><td>".$row["lname"] . "</td><td>". $row["dob"] . "</td><td>". $row["email"] . "</td><td>".$row["cost"] . "</td></tr>";
    						}	
    			echo "</table>";
			echo"<br><br>";
			}
   		
			 else { echo"<p style='color:red'>"."customer id doesnot exist"; }
   		
	}
	else
	{
		echo"Please enter the  customer id";
		echo"<br/><br/>";
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

