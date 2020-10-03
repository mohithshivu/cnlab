
<!DOCTYPE html>
<html>
   <head>
    <title> Employee Profile</title>
    
	<style >
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
	<h1 style="text-align:center">THE TOTAL TURN OVER IS </h1>
    <form method="post" action="">
	
         <table>
    <tr>
    <th style='text-align:center'>TURN OVER</th>
    
		    
	</tr>
		<?php
		
    			
   			 		$conn = mysqli_connect("localhost", "root", "", "car");
  					$to="";
					$ts="";
					$p="";
				
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $q="select * from profit";
						/*select sum(c.cost),sum(m.sal)+sum(e.salary),sum(m.sal)+sum(e.salary)) from manager_pro m,emp_pro e,customer c";*/
	$result1 = $conn->query($q);
	 while($row = $result1->fetch_assoc()) {
		$ts=$row['total_salary'];
		$tp=$row['turn_over'];
		$p=$row['com_profit'];
	}
	$q1="select sum(c.cost) as tp,sum(m.sal)+sum(e.salary) as ts,(sum(c.cost)-(sum(m.sal)+sum(e.salary))) as p  from manager_pro m,emp_pro e,customer c";
	$result2 = $conn->query($q1);
	while($row2 = $result2->fetch_assoc()) {
		$ts1=$row2['ts'];
		$tp1=$row2['tp'];
		$p1=$row2['p'];
	}
	$query="UPDATE profit SET turn_over ='$tp1',total_salary='$ts1',com_profit='$p1' where total_salary= '$ts' ";
    	 $conn->query($query);
		
    // output data of each row
 
     echo "<tr><td style='text-align:center'>".$tp1. "</td></tr>"."<br><br><br>";
	
    
    $conn->close();
    ?>	
      
       </table>
       <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="adminview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
  
</div>
        </form>
    </body>
</html>

