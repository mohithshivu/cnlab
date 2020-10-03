
<!DOCTYPE html>
<html>
    <title>EMPLOYEE DETAILS</title>
    <center><head><h1>SELECT THE EMPLOYEE NAME TO SEE THE INFORMATION</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
            font-size: 20px;
			}
		
		h1{color:red;}
		h3{color:blue;}
		body{
		background-image:url('https://cdn10.bigcommerce.com/s-6g8i0qlbcn/products/248/images/1635/DAMS_Amazon_Workstation_room_shot__93116.1481711947.1280.1280.jpg?c=2');
	
	
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
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css"></head></center>
    <body>
	
    <!--<tr>
    <th>Admin_Id</th>
    <th>Admin_Name</th>
    <th>Password</th>
		    
	</tr>--> 
	
		 <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-1 col-md-10">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white"><center>Deletion Form</center></h3>
                        <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="mforgotpassword.php">
                              
    
<!-- Form Name -->


<!-- Text input-->


  
  
<div class="offset-4 col-md-4 selectContainer">
    <div class="input-group">
       <label class="offset-1 form-group">Employee Name:</label> 
        <span class=" offset-1 input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="ename" class="form-control selectpicker">
	<option value="Pranav">Pranav</option>
<option value="Jayanth">Jayanth</option>
<option value="Raghav">Raghav</option>
<option value="Kamal">Kamal</option>
</select>
  </div>
</div>

    
                            <div class="form-group">
  <label class="col-md-12 control-label"></label>
  <div class="col-11"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="view" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspView <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
	
      
       
        
		
			<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
		$eid="";
	if(isset($_POST['view']))
	{
	if(isset($_POST['ename']))
	{	
		
			$sql1="select e_id from employee where fname='$_POST[ename]'";
		$result = $conn->query($sql1);
		while($row1 = $result->fetch_assoc())
		{
			
			$eid = $row1['e_id'];
			
		}
			$sql = "SELECT  * FROM employee e,emp_pro ep where e.e_id='$eid' and ep.e_id= e.e_id";
    			$result = $conn->query($sql);
    			if ($result->num_rows > 0)
			 {
                    echo"<table>";
   			 		 echo" <tr><th>"."Employee_Id"."</th><th>"."First_Name"."</th><th>"."Last_Name"."</th><th>"."dob"."</th><th>"."Jion-date"."</th><th>"."Phno"."</th></tr>";
   						 while($row = $result->fetch_assoc())
						 {
   			 							echo "<tr><td>" . $row["e_id"]. "</td><td>" . $row["fname"] . "</td><td>".$row["lname"] . "</td><td>". $row["dob"] . "</td><td>". $row["j_date"] . "</td><td>".$row["ph_no"] . "</td></tr>";break;

    						}
    			echo "</table>";
			echo"<br><br>";
			}
   		
			 else { echo"<p style='color:red'>"."Employee name doesnot exist"; }
   		
	}
	else
	{
		echo"Please enter the eid id";
		echo"<br/><br/>";
	}
}	
?>	
		             
         
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="managerview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
  
</div>

                            </form>
                    
	
	</div>
 </div>
 </div>
 </div>
	<br/>
	
    </body>
</html>

