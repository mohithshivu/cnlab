
<!DOCTYPE html>
<html>
    <title>delete emp</title>
    <center><head><h1>ENTER THE EMPLOYEE ID TO DELETE FROM THE LIST</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		/*input{width :250px;
			height:30px;
			font-size:30px;	}*/
		h1{color:red;}
		h3{color:blue;}
	
	</style>
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
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


  <label class="form-group">Employee Id</label> 
  <input  name="eid" placeholder="Enter the Employee Id" id="exampleDropdownFormEmail1" class="form-control"  type="number"> 
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
			
			$res=mysqli_query($conn,"select e_id from employee where e_id = '$_POST[eid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$p=$row['e_id'];
				
			}
			if($p == $_POST['eid'])
			{
				mysqli_query($conn,"delete from employee where e_id = '$_POST[eid]'");
				echo "<div class='alert alert-success' role='alert' id='success_message'> Deleted Successfully! <i class='glyphicon glyphicon-thumbs-up'></div>";
			
			}
				else
				{
					echo"<p style ='color: red ; text-align:center'>". " emlpoyee id is not exist"."</p>";
				}
	}	
	
$conn->close();
?>
		
		                    <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-2"><br>
      <button type="submit" name="back" class="btn btn-primary btn-lg" ><a href="adminview.php" style="text-decoration: none;color:white;">Back</a><span class="glyphicon glyphicon-send"></span></button>
  </div>
  
</div>
                            </form>
            
        
                        </div>  
                    </div>
         </div>
        </div>
	

	
    </body>
</html>

