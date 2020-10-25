<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Static Navbar with Dropdown and Search Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
    .w3-lobster {
  font-family: "Lobster", serif;
    color: white;
}
</style>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
 <link rel="stylesheet" type= "text/css" href="stylea.css">  
     <link rel="stylesheet" type="text/css"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
       
   
   
              <!--<p class="w3-container w3-lobster" class="w3-xxlarge">MS SHOWROOM</p>-->
   
<div class="container">
       <a class="navbar-brand" href="#">
          <img src="carlogo.png" width="80" height="80" class="d-inline-block align-top navbar-brand" alt="">
        </a>
        
        <button type="button" class="navbar-toggler"class="fa fa-id-badge" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                
               
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-id-badge" aria-hidden="true"></i>PROFILE</a>
                    <div class="dropdown-menu">
                        <a href="cprofilecreate.php" class="dropdown-item">CREATE</a>
                        <a href="custprofileedit.php" class="dropdown-item">EDIT</a>
                        
                    </div>
                </div>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-id-badge" aria-hidden="true"></i>NEW CARS</a>
                    <div class="dropdown-menu">
                        <a href="cucardate.php" class="dropdown-item">RELEASING DATE</a>
                        <a href="csearch.php" class="dropdown-item">SEARCH</a>
                        <a href="cucardetails.php" class="dropdown-item">DETAILS</a>
                        
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-id-badge" aria-hidden="true"></i>AVAILABLE CAR</a>
                    <div class="dropdown-menu">
                        <a href="casearch.php" class="dropdown-item">SEARCH</a>
                        <a href="acardetails.php" class="dropdown-item">DEATILS</a>
                        
                    </div>
                </div>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-id-badge" aria-hidden="true"></i>FEEDBACK</a>
                    <div class="dropdown-menu">
                        <a href="cfeedback.php" class="dropdown-item">REVIEWS</a>
                        <a href="cfeedbacke.php" class="dropdown-item">ENTER FEEDBACK</a>
                        
                    </div>
                </div>
                     
              
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
                    <div class="dropdown-menu">
                       <a href="carshroom.html" class="dropdown-item">YES</a>
                        <a href="custmerview.php" class="dropdown-item">NO</a>
                        
                    </div>
                </div>
                    
                    
                     </div>
            </div>
    </nav>
</div>
</body>
</html>