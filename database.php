
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <title>flower hosbital</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
	<!-- <table>
		<tr></tr>
	</table> -->
</body>
<?php

//session_start();
function dbconnect()
	{
		$con = new mysqli("localhost","root","", "hosbital");
		//mysql_set_charset('utf8');
		 //mysql_query("SET CHARACTER SET 'utf8'", $con);
	    if($con->connect_error)
	    {
	    	die("Connection Error");
	    }
	    return $con;
	}
	  //  const TABLE_NAME ="timetable";
	// const TABLE_DATE ="timetable";
	const TABLE_DOCTOR ="doctors"; 
	  
	   
    function tableDoctor($res)
    {
	      if ($res -> num_rows >0)
	      {
 
		       while ($row=$res->fetch_assoc()) 
		       {

               
		       	$name = $row["name"];
		       	$specialization=$row["doctor_specialization"];
		       //$_SESSION['name']=$name;
		       //	echo " <option>$name($specialization)</option> ";
		       		echo "<div style='background-color: gray; background-size: 200px 300px;margin-top: 150px;border:1px solid black;'>$name($specialization)</div>";	  
		       }
		  

		   
	      }

    }//close function
 const TABLE_NAME ="doctors";
    function tableDisplay($res)
    {
	      if ($res -> num_rows >0)
	      {
	       echo "<table border='1'   class='w3-table-all' dir='ltr' align='center' style='text-align: left;'   font-weight: bold;>";            
	       echo "<th style='text-align: right;'>";  
	          echo "<tr class='w3-light-grey w3-hover-red' style='text-align: right;'>";                                                                           
	       echo "<td style='text-align: right; font-size: 18px; font-weight: bold;'>photo</td>
	       <td style='text-align: right; font-size: 18px; font-weight: bold;'>dr name</td>
	              <td style='text-align: right; font-size: 18px;  font-weight: bold;'>specialization</td>
	              <td style='text-align: right;  font-size: 18px; font-weight: bold;'>degree</td>
	              <td style='text-align: right; font-size: 18px;  font-weight: bold;'>days</td>
	              <td style='text-align: right; font-size: 18px; font-weight: bold;'>date</td>
	              <td style='text-align: right;  font-weight: bold;'>from</td>
	              <td style='text-align: right;  font-weight: bold;'>اto</td>
	              <td style='text-align: right;  font-weight: bold;  font-size: 18px;'>blocks</td>
	              ";
	              echo "</tr>"; 
	              echo "</th>"; 
	              $new='drname';
		       while ($row=$res->fetch_assoc()) 
		       {

		       	if ($new==$row['name']) {
		       	$photo=$row["photo"];
		       	$x = $row["name"];
		       	$new=$x;
		        $y = $row["specialization"];
		       	$z = $row["degree"];
		       	$m = $row["dayname"];
		       	$n = $row["day"];
		        $o = $row["hour_from"];
		       	$p = $row["hour_to"];
		       	$d = $row["block"];
		      
		       	echo "<tr  class='w3-hover-blue' style='text-align: right;'>";
                echo "<td style='text-align: right; font-weight: bold;'></td>";
		       	echo "<td style='text-align: left; font-weight: bold;'></td>";
		       	echo "<td style='text-align: left; font-weight: bold;'></td>";
		       	echo "<td style='text-align: left; font-weight: bold;'></td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$m</td>";
		       	echo "<td style='text-align: left;font-weight: bold;'>$n</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$o</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$p</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$d</td>";

		       	echo "</tr>";
		       	}
              elseif ($new!=$row["name"]) {
	           $photo=$row["photo"];
		       	$x = $row["name"];
		       	$new=$x;
		        $y = $row["specialization"];
		       	$z = $row["degree"];
		       	$m = $row["dayname"];
		       	$n = $row["day"];
		        $o = $row["hour_from"];
		       	$p = $row["hour_to"];
		       	$d = $row["block"];
		      
		       	echo "<tr class='w3-hover-blue' style='text-align: right;'>";
		       	echo "<td style='text-align: left; font-weight: bold;'>"."<img src='../photo/$photo' width='150' height='100' >"."</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$x</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$y</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$z</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$m</td>";
		       	echo "<td style='text-align: left;font-weight: bold;'>$n</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$o</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$p</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$d</td>";

		       	echo "</tr>";
		       }$new=$row['name'];
		   }
		    echo "</table>";  
	      }
	     // else
	     // { echo "Table is empty"; }

    }  

   const TABLE_REGIST='register';
       function bookingDisplay($res)
    {
	      if ($res -> num_rows >0)
	      {
	        echo "<table border='1'   class='w3-table-all' dir='ltr' align='center' style='text-align: left;'   font-weight: bold;>";            echo "<th style='text-align: left;'>";  
	          echo "<tr class='w3-light-grey w3-hover-red' style='text-align: left;'>";                                              
	       echo "<td style='text-align: left; font-size: 18px; font-weight: bold;'>booking number</td>
	       <td style='text-align: left; font-size: 18px; font-weight: bold;'>اpatient name</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>first number</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>watsapp num</td>
	              
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>اage</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>doctor</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>specialization</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>degree</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>booking day</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>booking date</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>day</td>
	              <td style='text-align: left; font-size: 18px; font-weight: bold;'>time</td>
	              ";
	              echo "</tr>"; 
	              echo "</th>";  
		       while ($row=$res->fetch_assoc()) 
		       {
		       	$num=$row["num"];
		       	$a = $row["name"];
		        $b = $row["fnum"];
		       	$c = $row["snum"];
		       
		       	$e = $row["age"];
		        $f = $row["drname"];
		       	$g = $row["drspecialization"];
		       	$h = $row["drdegree"];
		       	$i = $row["dayname"];
		        $j = $row["bookdaydate"];
		       	$k = $row["currentpatientday"];
		       	$l = $row["currenthour"];
		       
		       			       	echo "<tr class='w3-hover-blue' style='text-align: left;'>";
                 echo "<td style='text-align: left; font-weight: bold;'>$num</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$a</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$b</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$c</td>";
		       	// echo "<td style='text-align: right; font-weight: bold;'>$d</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$e</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$f</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$g</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$h</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$i</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$j</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$k</td>";
		       	echo "<td style='text-align: left; font-weight: bold;'>$l</td>";
		       	echo "</tr>";
		       
		       }
		    echo "</table>"; 
	      }
	     else
	     {echo "Table is empty";}
    }
?> 
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>