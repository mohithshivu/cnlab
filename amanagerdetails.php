    <!DOCTYPE html>
    <html>
    <head>
        <center><title style="text-align : 'center';"><h1>               Mangers Details</h1></title></center>
       
    <style>
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
    <body>
    
	<h1 style="color:'rgb(0,100,0)';position:'center';">MANAGERS DETAILS</h1>
   <br><br>
    <table>
    <tr>
    <th>Manager_Id</th>
    <th>First Name</th>
	<th>Last Name</th>
    <th>Date of birth</th>
	<th>Join Date</th>	
	<th>Phno</th>  
	
	</tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "car");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM manager,manager_pro where m_id=manager_id order by manager.manager_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["manager_id"]. "</td><td>" . $row["fname"] . "</td><td>". $row["lname"] . "</td><td>". $row["dob"] . "</td><td>". $row["join_date"] . "</td><td>".$row["phno"] . "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
	
    </table>
	<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="adminview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
  
</div>
    </body>
    </html>
