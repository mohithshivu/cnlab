
<!DOCTYPE html>
<html>
<head>
<title>Customer Login</title>   
    <link rel="stylesheet" type="text/css" href="custstyle.css">

    <body>
        <div class ="loginbox">
        <img src="avatar.png" class="avatar">
        <h1></h1>
	<form method="post" action="" >
        	
		
           	<a href="custlogpage.php"><input type="submit" action ="custlogpage.php" name="login" value="Login"></a>
		<h1>     OR     </h1>
		<a href="custpage.php"><input type="submit" action ="custpage.php" name="signin" value="Signin"></a>
		<?php
			if(isset($_POST['login']))
			{
				header('Location:custlogpage.php');
			}
			if(isset($_POST['signin']))
			{
				header('Location:custpage.php');
			}
		?>
		
        </form>
	</div>
        </body>
</head>
</html>

