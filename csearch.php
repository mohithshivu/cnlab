
<!DOCTYPE html>
<html>
    <title>NEW CAR DETAILS</title>
    <center><head><h1>SELECT THE CAR BRAND AND MODEL NAME TO SEE THE INFORMATION</h1>
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
    </head>
    </center>
    <body>
	
 	 <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-1 col-md-10">
                    <div class="card">
                        <h3 class="card-header bg-warning text-white"><center>Deletion Form</center></h3>
                        <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="mforgotpassword.php"></form> 
  
        <div class="offset-4 col-md-4 selectContainer">
                <div class="input-group">
                       <label class="offset-1 form-group">Brand Name </label> 
        <span class=" offset-1 input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="bname" class="form-control selectpicker">
    <option value="" disabled selected hidden>select the Brand Name</option>
	<option value="Benz">Benz</option>
<option value="BMW">BMW</option>
<option value="Range rover">Range rover</option>
<option value="Suzuki">Suzuki</option>
<option value="Kia">Kia</option>
</select>
  </div>
</div>

<div class="offset-4 col-md-4 selectContainer">
    <div class="input-group">
       <label class="offset-1 form-group">Model Name </label> 
        <span class=" offset-1 input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="mname" class="form-control selectpicker">
        <option value="" disabled selected hidden>Select the Model name</option>
	<option value="mercedes-benz">mercedes-benz</option>
<option value="G32">G32</option>
<option value="wagnor">wagnor</option>
<option value="evoque">evoque</option>
<option value="hapkas">hapkas</option>
</select>
  </div>
</div>

    
<div class="col-12 form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-6"><br>
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
	if(isset($_POST['view']))
	{
	if(isset($_POST['bname']))
	{	if(isset($_POST['mname']))
		{	
		
			$sql = "SELECT  * FROM new_cars where brand_name='$_POST[bname]' and model_name='$_POST[mname]'";
    			$result = $conn->query($sql);
    			if ($result->num_rows > 0)
			 {
   			 		 echo" <tr><th>"."Brand_name"."</th><th>"."Model_Name"."</th><th>"."Model_Id"."</th><th>"."Price"."</th><th>"."Date of release"."</th><th>"."Car showroom id"."</th><th>"."Rating"."</th></tr>";
   						 while($row = $result->fetch_assoc())
						 {
   			 							echo "<tr><td>" . $row["brand_name"]. "</td><td>" . $row["model_name"] . "</td><td>".$row["model_id"] . "</td><td>". $row["date_of_relese"] ."</td><td>". $row["cost"] . "</td><td>". $row["cid"] . "</td><td>".$row["rating"] . "</td></tr>";
    						}
    			echo "</table>";
			echo"<br><br>";
			}
   			else { echo"<p style='color:red'>"."brand name and model name doesnot exist"; }
			 
		}
		else
		{
			echo"Please enter the brand name";
			echo"<br/><br/>";
		}
	}
	else
	{
		echo"Please enter the model name";
		echo"<br/><br/>";
	}

$conn->close();
}	
?>	
		

		
  <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="custmerview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
	</div>
    </form>
	<br/>
	
    </body>
</html>

