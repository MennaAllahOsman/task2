 <!DOCTYPE html>
 <!--  login form -->
 <html lang="ar">
<head>
	<title>Medical Services</title>
	<meta charset="utf-8">
 <head>
 	<link rel="stylesheet" type="text/css" >
 	<style type="text/css">
 		html{
 			margin: 0;
 			padding: 0;
 			width: 100%;
 			height: 100vh;
 		}
 		body{
 			margin: 0;
 			padding: 0;
 			width: 100%;
 			height: 100vh;
 			background:  url("images/clinic_03.jpg") 50% 50% no-repeat;
 			background-size: cover;
 			display: table;
 		}

 		.signin{
 			border: 1px solid rgba(255,255,255,0.3);
 			border-radius: 7px;
 			padding: 3em;
 			position: absolute;
 			top: 50%;
 			left: 50%;
		/*	transform: translateX(50%) translateY(50%);*/
        transform: translateX(-50%) translateY(-50%);
}
 		h2{
 			margin-top: 0px;
 			font-family: Source Sans Pro;
 			font-weight: lighter;
 			color: #fff;
 			font-size: 50px;
 			text-align: center;

 		}
 		input{
 			display: block;
 			width: 320px;
 			height:50px;
 			background:rgba(0,0,0,0.3); 
 			outline: none;
 			border: 1px solid rgba(0,0,0,0.5);
 			font-family: Source Sans Pro;
 			font-weight: lighter;
 				font-size: 14px;
             margin-bottom: 10px;
             padding-left: 10px;
             border-radius: 5px;
             

 		}
 		button{
 			width: 332px;
 			height: 50px;
 			font-size: 16px;
 			background: #000;
 			font-weight: lighter;
 			color: #fff;
 			border: 0px;
 			border-radius: 5px;

 		}

 	</style>
 </head>
<body>
<div class="container">
 <div class="signin">
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" name="page">
   		<h2 style="color: black;">Sign In</h2>
	    user<input type="text" name="username" value="" placeholder="Enter Username" class="x">
        password<input type="password" name="userpassword" value="" placeholder="Enter Userpassword" class="x"><br>
        Admin<input type="checkbox" name="admin" value="ok">
   
	 
         <button class="btn">Sign In</button>

     </form>
 <a href="controlpanal.php"><= Go back to Control Panal</a>
     </div>

     </div>
    
</body>
  <?php
		   session_start();
		   if ($_SERVER['REQUEST_METHOD']=='POST')
		   {
		   //to get the data from the login form
		    $username = $_POST['username'];
		    $userpassword=$_POST['userpassword'];
		     include 'database.php';
         $con = dbconnect();
		    if (isset($_POST['admin'])) {
		    	# code...
		      $admin=$_POST['admin'];
		    $_SESSION['username']=$username;
		    //database connection file
		   
		       // to search about the inter user name
			 $sql = "INSERT INTO  users values ('$username','$userpassword','$admin')";    
		       //$res=$con->query($sql);
		       // check function about the enter user 
			      if ($con->query($sql)==TRUE) {
			      	echo"user successfuly added";
			      }
				      else //if there is not found the enter user
				  { echo "Sorry:please try again ";
				}
			   }
			   elseif (!isset($_POST['admin'])){
			   	 $_SESSION['username']=$username;
		    //database connection file
		    
		       // to search about the inter user name
			 $sql = "INSERT INTO  users values ('$username','$userpassword',' ')";    
		      // $res=$con->query($sql);
		       // check function about the enter user 
			      if ($con->query($sql)==TRUE) {
			      	echo"user successfuly added";
			      }
				      else //if there is not found the enter user
				  { echo "Sorry:please try again ";}
			   }
			   } 	# code...
		    
		   
			  // {echo "please go to login form from "."<a href='login form.php'>Here</a>";}
			  // else 
			  // {echo "please go to login form from "."<a href='login form.php'>Here</a>";}
			
   ?>