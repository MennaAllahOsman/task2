<!DOCTYPE html>
<html lang="en" >
   <!-- Basic -->
   <?php
session_start();
   ?>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>flower hospital</title>
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
.container {
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
.container .l{
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
.container:hover .l ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container .l:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container .l:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
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
      <div id="preloader" >
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
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
                                        <a href="../booking/all_booking_reports.php.php"> booking report</a>
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
      
               
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form" dir="ltr">
                     <h3><span>+</span> add new time for exist doctor</h3>
                     <div class="form" dir="ltr">
                        <form method="post" dir="ltr" enctype="multipart/form-data">
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
                                      
                                         <form method="post" enctype="multipart/form-data">
        <select name="x" onchange="this.form.submit()" style="font-weight: bold;" > 
         <option selected disabled  >choose clinic</option> <!-- <!Line1> -->
         <?php
          include '../database.php';
        $con=dbconnect();
        $sql="SELECT DISTINCT specialization FROM doctors";
        $res = $con -> query($sql);
        while($row = $res -> fetch_assoc()){
          $specialization = $row['specialization'];
          echo "<option>$specialization</option>";
        }
         ?>
       </select></br></br>
       <?php
  if (isset($_POST['x'])) {
      $specialization=$_POST['x'];
      $_SESSION['specialization']=$specialization;
  


       ?>

<select name='drname'  >
  <option selected disabled>اختر الطبيب</option>
       <?php
       
        $sql="SELECT  Distinct name ,degree  FROM doctors where specialization='$specialization'";
        // Line2
        $res = $con -> query($sql);

        while($row = $res -> fetch_assoc()){
          //$name = $row['name']; //Line3
          $name = $row['name'];
           $degree = $row['degree'];
         
 echo "<option>"."د/".".".$name.".".$specialization.".".$degree."</option>";        
}
       ?>
</select></br></br></br>

      <?php
       $sql="SELECT * FROM days";
         $res = $con -> query($sql);
              while($row = $res -> fetch_assoc()){
                $y = $row['name']; //Line3
                // echo "<option> $x </option>";
      // echo"<label class='container' >";
    echo"<input type='checkbox' name='c[]' value='$y'  >$y"."<br>"."<br>"."<br>";
    echo"<span class='checkmark' ></span>";
    // echo"</label>";
              }


 
  //////////////////////////////////////////////////
   $hour_from=array("9:00 am","10:00 am","11:00 am","12:00 pm","1:00 pm","2:00 pm","3:00 pm","4:00 pm","5:00 pm","6:00 pm","7:00 pm","8:00 pm","9:00 pm","10:00 pm","11:00 pm");
 echo "from"."<select name='hour_from' >";
   for ($i=0; $i <count($hour_from); $i++) { 
    echo "<option>$hour_from[$i]</option>";
  }
  echo "</select>"."</br>";
  //////////////////////////////////////////////////
  $hour_to=array("9:00 am","10:00 am","11:00 am","12:00 pm","1:00 pm","2:00 pm","3:00 pm","4:00 pm","5:00 pm","6:00 pm","7:00 pm","8:00 pm","9:00 pm","10:00 pm","11:00 pm");
 echo "to "."<select name='hour_to' >";
   for ($i=0; $i <count($hour_to); $i++) { 
    echo "<option>$hour_to[$i]</option>";
  }
  echo "</select>"."</br>";
  echo"<input type='file' name='fileToUpload' id=f'ileToUpload'><br>"; 
  }
    
//       if(isset($_POST["drname"]))
//       {
       
// }
  ////////
     
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
                                    <div class="form-group">
                                       <div class='center'>  <button type='submit' name='create'>add new time </button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>




 <?php 
          
                  if(isset($_POST["create"]))
            { 

          $h=$_FILES["fileToUpload"]["name"];
//echo $h;

            $y="../photo/".$h;  
        $days=$_POST['c'];
        $hour_from=$_POST['hour_from'];
        $hour_to=$_POST['hour_to'];
           $data= $_POST["drname"];
        $dataday= explode(".", $data);
       echo "<pre>";
       print_r($dataday);
       echo "</pre>";

        $_SESSION['specialization']=$dataday[2];
        $_SESSION['degree']=$dataday[3];
        $_SESSION['name']=$dataday[1];
        $drspecialization=$_SESSION['specialization'];
        $drdegree=$_SESSION['degree'];
        $drname=$_SESSION['name'];
  
     for($i=0;$i<count($days);$i++){
         $start_t=strtotime('now',time());
 // $end_t=strtotime('+1 month',time());
 // $start=strtotime('now',time());
$start_time=date('d-m',$start_t);

   // echo "<select name='time' onchange='this.form.submit()' style='direction: rtl;margin-left: 100em;width:150px;'>";
   // echo "<option selected disabled >"."اختر المعاد المراد للحجز"."</option>";

  if ($days[$i]=='Saturday') {

              for($j=0; $j<=3; $j++) 
       {    
 
           $x=strtotime('next Saturday',$start_t);
           $start_t=$x;
           
           //$date= date('l ',$start_time)."<br>";
           //echo date('d-m ',$start_time)."<br>";
      $days[$i]= date('Y-m-d',$start_t);
       $sql="INSERT INTO doctors VALUES('$y','$drname','$drspecialization','$drdegree','Saturday','$days[$i]','$hour_from','$hour_to','')";
        if($con->query($sql)==TRUE )
         {
          ;

         }

         else{
          echo "this is an error ocure please try again";
         }

      }
 }

  if ($days[$i]=='Sunday') {

              for($j=0; $j<=3 ; $j++)  
       {    
        
          # code...
       
           $x=strtotime('next Sunday',$start_t);
           $start_t=$x;
           
          
     $days[$i]= date('Y-m-d',$start_t);
      $sql="INSERT INTO doctors VALUES('$y','$drname','$drspecialization','$drdegree','Sunday','$days[$i]','$hour_from','$hour_to','')";
      if($con->query($sql)==TRUE )
         {
         

         }

         else{
          echo "this is an error ocure please try again";
         }
      }
 }

  if ($days[$i]=='Monday') {

              for($j=0; $j<=3 ; $j++) 
       {    
        
           $x=strtotime('next Monday',$start_t);
           $start_t=$x;
           
           //$date= date('l ',$start_time)."<br>";
           //echo date('d-m ',$start_time)."<br>";
      $days[$i]= date('Y-m-d',$start_t);
       $sql="INSERT INTO doctors VALUES('$y','$drname','$drspecialization','$drdegree','Monday','$days[$i]','$hour_from','$hour_to','')";
        if($con->query($sql)==TRUE )
         {
        

         }

         else{
          echo "this is an error ocure please try again";
         }
      }
 }
 
 if ($days[$i]=='Tuesday') {

              for($j=0; $j<=3 ; $j++) 
       {    
        
           $x=strtotime('next Tuesday',$start_t);
           $start_t=$x;
           
      $days[$i]= date('Y-m-d',$start_t);
       $sql="INSERT INTO doctors VALUES('$y','$drname','$drspecialization','$drdegree','Tuesday','$days[$i]','$hour_from','$hour_to','')";
        if($con->query($sql)==TRUE )
         {
          

         }

         else{
          echo "this is an error ocure please try again";
         }
      }
 }
  if ($days[$i]=='Wednesday') {

              for($j=0; $j<=3 ; $j++)  
       {    
        
          # code...
       
           $x=strtotime('next Wednesday',$start_t);
           $start_t=$x;
           
           //$date= date('l ',$start_time)."<br>";
           //echo date('d-m ',$start_time)."<br>";
           $block="";
      $days[$i]=date('Y-m-d',$start_t);
       $sql="INSERT INTO doctors VALUES('$y','$drname','$drspecialization','$drdegree','Wednesday','$days[$i]','$hour_from','$hour_to','')";
        if($con->query($sql)==TRUE )
         {
     

         }

         else{
          echo "this is an error ocure please try again";
         }
      }
 }
  if ($days[$i]=='Thursday') {

              for($j=0; $j<=3 ; $j++) 
       {    
        
          # code...
       
           $x=strtotime('next Thursday',$start_t);
           $start_t=$x;
           
           //$date= date('l ',$start_time)."<br>";
           //echo date('d-m ',$start_time)."<br>";
           //echo "<p>".""."</p>";
           
       $days[$i]= date('Y-m-d',$start_t);
        $sql="INSERT INTO doctors VALUES('$y','$drname','$drspecialization','$drdegree','Thursday','$days[$i]','$hour_from','$hour_to','')";
         if($con->query($sql)==TRUE )
         {
         
 echo "new doctor added sucssesfuly";
         }

         else{
          echo "this is an error ocure please try again";
         }
      
      }
 }
  if ($days[$i]=='Friday') {

              for($j=0; $j<=3 ; $j++) 
       {    
        
          # code...
       
           $x=strtotime('next Friday',$start_t);
           $start_t=$x;
           
           
           //$date= date('l ',$start_time)."<br>";
           //echo date('d-m ',$start_time)."<br>";
           $days[$i]= date('Y-m-d',$start_t );
           $sql="INSERT INTO doctors VALUES('$y','$drname','$drspecialization','$drdegree','Friday','$days[$i]','$hour_from','$hour_to','')";      
            if($con->query($sql)==TRUE )
         {
          echo "new doctor added sucssesfuly";

         }

         else{
          echo "this is an error ocure please try again";
         }     
      
      }
 }

        
    }
    }     // $sq="INSERT INTO connecttimetable(drname,drspecialization,drseciencedegree) VALUES('$name','$specialization','$degree')";


        

        
              //close if isset search
                      
                   
                         
                          ?>
                       
      
                                
                     
         
      
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
