<!DOCTYPE html>
<html lang="en" >
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>flower hosbital</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   <style type="text/css">

/* Customize the label (the container) */
.c {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.c .l{
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.c:hover .l ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.c .l:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.c .l:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.c .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
   </style>
   <style>

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #2750ff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
   </head>
   <body class="clinic_version" >
      <!-- LOADER -->
     <!--  <div id="preloader" >
         <img  --><!-- class="preloader" src="images/loaders/heart-loading2.gif" alt=""> -->
      </div>
      <!-- END LOADER -->
       <header >
         <div class="header-top wow fadeIn" >
            <div class="container" dir="ltr">
               <a class="navbar-brand" href="index.html"  style="text-decoration-color: black;color: black;"><img src="images/fevicon.ico.png" height="70" width="40" alt="image"  style="text-decoration-color: black;color: black;"><i>Flower Hosbital</i></a>
               <div class="right-header" >
                  <div class="header-info" >
                   
                     </div>
                  </div>
               </div>
            </div>
         
         <div class="header-bottom wow fadeIn"  >
            <div class="container" >
              <nav class="main-menu" >
                  <div class="navbar-header" >
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" ><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
          <div id="navbar" class="navbar-collapse collapse" >
                    <ul class="nav navbar-nav" dir="rtl">
                       <li><a class="active" href="../controlpanal.php" >Home</a></li>
                    <!--     <li><a data-scroll href="add_new_specialization.php">add new specialization</a></li> -->
                        <li class="dropdown"><a class="drop-down" href="#" class="dropbtn">doctors</a>

                                  
                            <div class="dropdown-content">
                              <a href="add_new_doctor.php">add new doctor</a>
                              <a href="new_time_for_exist_dr.php">new time for exist dr</a>   
                              <a href="block_doctor_special_date.php">block doctor special date</a>
                                       
                                      </div>
                                    </li>
                        <!-- <li><a data-scroll href="patienttable.php">تقارير الحجز</a></li> -->
                        <li class="dropdown"><a data-scroll href="#">reports</a><div class="dropdown-content" class="dropbtn">
                                        <a href="all_doctors_report.php">doctor report</a>
                                        <a href="doctor_report_under_condisions.php">doctor report uder condisions</a>
                                        <a href="../booking/all_booking_reports.php"> booking report</a>
                                       <a href="../booking/booking_report_under_condision.php"> booking report under condision</a>
                                       
                                      </div>
                                    </li>
                                     <li class="dropdown"><a data-scroll href="#">delete</a><div class="dropdown-content" class="dropbtn">
                                      <a href="delete_all_doctor_need_dates.php">delete all doctor need dates</a>
                                      <a href="delete_doctor.php">delete doctor</a>
                                        <a href="../booking/delete_all_booking.php">delete all booking</a>
                                        <a href="../booking/delete_special_date_booking.php">delete specail date booking</a>
                                        
                                       
                                      </div>
                                    </li>
                                       <li class="dropdown"><a data-scroll href="#">update</a><div class="dropdown-content" class="dropbtn">
                                      <a href="update_special_date.php">update special date</a>
                                        <a href="update_doctor_data.php">update doctor data</a>
                                       
                                      </div>
                                    </li>
                     </ul>
                  </div>
               </nav>
            <!--    <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </header>
      <div id="home" data-stellar-background-ratio="0.4" style="background-image:url('images/clinic_03.jpg');">
          <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="hosbital.jpeg" alt="#" /></span></span>
                       <!--  <a href="" class="typewrite" data-period="2000" data-type='[ "اضافة الاطباء الجدد" ]'>
                        <span class="wrap"></span>
                        </a> -->
                     </h2>
                  </div>

      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           
                        </div>
                     </div>
                  
                  </div>
               </div>
      
               awa3aas4esee
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form" dir="ltr">
                     <h3><span>+</span> update doctor need dates</h3>
                     <div class="form" dir="ltr">
                        <form method="post" dir="ltr">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                      
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <!-- <div class="form-group">
                                       <input type="email" placeholder="Email Address" id="email" />
                                    </div> -->
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                       <!-- <select class="form-control">
                                          <option>Day</option>
                                          <option>Sunday</option>
                                          <option>Monday</option>
                                       </select> -->
                                    </div>
                                    <div class="form-group">
                                       <!-- <select class="form-control">
                                          <option>Time</option>
                                          <option>AM</option>
                                          <option>PM</option>
                                       </select> -->
                                    </div>
                                 </div>
                              </div>
                              
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                      <!-- <select class="form-control">
                                          <option>Doctor Name</option>
                                          <option>Mr.XYZ</option>
                                          <option>Mr.ABC</option>
                                       </select> -->
                                         <form method="post">
        <select name="x" onchange="this.form.submit()" > 
         <option selected disabled>choose doctor name</option> <!-- <!Line1> -->
         <?php
          include '../database.php';
        $con=dbconnect();
        $sql="SELECT DISTINCT name FROM doctors";
        $res = $con -> query($sql);
        while($row = $res -> fetch_assoc()){
          $name = $row['name'];
          echo "<option>$name</option>";
        }
         ?>
       </select>
       <?php
  if (isset($_POST['x'])) {
      $name=$_POST['x'];
      $_SESSION['name']=$name;
  

 $sql = "SELECT * FROM doctors where name='$name'  ";

        $res = $con -> query($sql);
        $row = $res -> fetch_assoc();
     
         $name = $row["name"];
         //echo $name;
        $specialization = $row["specialization"];
         $degree = $row["degree"];
        $dayname = $row["dayname"];
         $day = $row["day"];
        $hour_from = $row["hour_from"];
        $hour_to = $row["hour_to"];
        //echo $name;

           echo "name: <input name='name' value='$name' readonly ><br>";
         echo "name: <input name='specialization' value='$specialization' readonly ><br>";
          echo "name: <input name='degree' value='$degree' readonly ><br>";
        // echo "day: <select name='dayname' value='$dayname' ><br>";
       
    
  $sql="SELECT dayname,day FROM doctors ";
         $res = $con -> query($sql);
              while($row = $res -> fetch_assoc()){
                $y = $row['dayname'];
                $x = $row['day']; //Line3
                // echo "<option> $x </option>";
      // echo"<label class='container' >";
                echo"<input type='checkbox' name='c[]' value='$x'  >$y=>$x"."<br>";
    echo"<span class='checkmark' ></span>";
    // echo "<option>$y</option>";
}

        // echo "من الساعه: <input name='hour_from' value='$hour_from'><br>";
        // echo "الى الساعه: <input name='hour_to' value='$hour_to'><br>";
        // echo "block: <input type='checkbox' name='block' value='block'><br>";
        echo "<input type='submit' name='delete' value ='Delete'><br>";
      
    }
       ?>


       


    
      </form>

      <?php
       if (isset($_POST['delete'])) //Line 7
       {
        $name=$_POST['name'];
          //Line 9
        $specialization=$_POST['specialization'];
$degree=$_POST['degree'];
         $days=$_POST['c'];
         // $dayname = $_POST['dayname'];
        // $day = $_POST['day']; //Line 8
         // $hour_from = $_POST['hour_from']; //Line 9
         // $hour_to = $_POST['hour_to'];
          
          // $start_t=strtotime('now',time());
 // $end_t=strtotime('+1 month',time());
 // $start=strtotime('now',time());
        // $start_time=date('d-m',$start_t);
            for($i=0;$i<count($days);$i++){
         $sql = "DELETE  FROM doctors where name='$name' and day='$days[$i]' "; //Line 10

         if($con -> query($sql)==TRUE)
         {
           

         echo "deleted sucessfuly";

         }
         else
         {
          echo "Error";
       }
    }
       }//end if isset
      ?>
                                    </div>
                                 </div>
                              </div>
      
    
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                      <!--  <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea> -->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    
                                 </div>
                              </div>
                           </fieldset>
                     
         
      
      <br>
      
        
                       
          
         

                     
                  </div>
               </div>
             </form>

               


                                  

                             
                            
                 
     
      
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text" >
                     <p> 2021 FBI. All Rights Reserved ©</p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
