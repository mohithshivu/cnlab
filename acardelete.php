
<html>
    <title>delete car</title>
<head><h1>ENTER THE CAR ID TO DELETE FROM THE LIST</h1>
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
   
    <body bodycolor: grey>
	
       
     <div id="reservationForm" class="row row-content align-items-center" >
                <div class="col-12 offset-2 col-md-8">
                    <div class="card">
                        <h3 class="card-header bg-dark text-white"><center>Deletion Form</center></h3>
                        <div class="card-block">
                            <form  method ="post" id="register" action="" onclick="">
                              
    
<!-- Form Name -->


<!-- Text input-->


  <label class="form-group">Model Id</label> 
  <input  name="cid" placeholder="Enter the Model Id" id="exampleDropdownFormEmail1" class="form-control"  type="number"> 
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
		$idFromDB="";
		
	if(isset($_POST['delete']))
	{
			
			$res=mysqli_query($conn,"select model_id from new_cars where model_id = '$_POST[cid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$idFromDB=$row['model_id'];
				
			}
			if($idFromDB == $_POST['cid'])
			{
				mysqli_query($conn,"delete from new_cars where model_id = '$_POST[cid]'");
				echo "<p style= 'color: green; text-align:center'>"."Car details with $_POST[cid] deleted successfully"."</p>";
			
$conn->close();
			}
				else
				{
					echo"<p style ='color: red ; text-align:center'>". " Car id is not exist"."</p>";
				}
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

