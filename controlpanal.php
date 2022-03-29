<!DOCTYPE html>
<html lang="en" >
   <!-- Basic -->
   <?php session_start();  ?>
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


       <?php
        // session_start();
         if ($_SERVER['REQUEST_METHOD']=='POST')
         {
         //to get the data from the login form
          $username = $_POST['username'];
          $userpassword=$_POST['userpassword'];
          $_SESSION['username']=$username;
          //database connection file
            include 'C:\xampp\htdocs\task\database.php';
         $con = dbconnect();
             // to search about the inter user name
          $sql = "SELECT password,admin FROM users WHERE name='$username'";    
             $res=$con->query($sql);
             // check function about the enter user 
                function checkFunction($res ,$userpassword)
             {
                  if ($res -> num_rows >0)
                  {
                     
                      while ($row=$res->fetch_assoc()) 
                      {
                         // if the user name found get its password and admisions
                        $x = $row["password"];
                       $y = $row["admin"];
                       $_SESSION['admin']=$y;
                      
                      //check if the user password is right 
                        if($x==$userpassword ){
                             // the user page
                      //  header('REFRESH:1;URL=controlpanal.php');
                          
           // {echo "please go to login form from "."<a href='login form.php'>Here</a>";}
           // else 
           // {echo "please go to login form from "."<a href='login form.php'>Here</a>";}
         
   ?>
      <!-- LOADER -->
    <!--   <div id="preloader" >
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div> -->
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
                        <li><a class="active" href="controlpanal.php" >Home</a></li>
                    <!--     <li><a data-scroll href="add_new_specialization.php">add new specialization</a></li> -->
                    <li><a data-scroll href="add_new_specialization.php">add specialization</a></li >
                        <li class="dropdown"><a class="drop-down" href="#" class="dropbtn">doctors</a>

                                  
                            <div class="dropdown-content">
                              <a href="doctors/add_new_doctor.php">add new doctor</a>
                              <a href="doctors/new_time_for_exist_dr.php">new time for exist dr</a>
                                    
                                        <a href="doctors/block_doctor_special_date.php">block doctor special date</a>
                                      
                                      </div>
                                    </li>
                        <!-- <li><a data-scroll href="patienttable.php">تقارير الحجز</a></li> -->
                        <li class="dropdown"><a data-scroll href="#">reports</a><div class="dropdown-content" class="dropbtn">
                                        <a href="doctors/all_doctors_report.php">doctor report</a>
                                        <a href="doctors/doctor_report_under_condisions.php">doctor report uder condisions</a>
                                        <a href="booking/all_booking_reports.php.php"> booking report</a>
                                       <a href="booking/booking_report_under_condision.php"> booking report under condision</a>
                                       
                                      </div>
                                    </li>
                                    <li class="dropdown"><a data-scroll href="#">delete</a><div class="dropdown-content" class="dropbtn">
                                      <a href="doctors/delete_all_doctor_need_dates.php">delete doctor need dates</a>
                                      <a href="doctors/delete_doctor.php">delete doctor</a>
                                        <a href="booking/delete_all_booking.php">delete all booking</a>
                                        <a href="booking/delete_special_date_booking.php">delete specail date booking</a>
                                        
                                       
                                      </div>
                                    </li>
                                       <li class="dropdown"><a data-scroll href="#">update</a><div class="dropdown-content" class="dropbtn">
                                      <a href="doctors/update_special_date.php">update special date</a>
                                        <a href="doctors/update_doctor_data.php">update doctor data</a>
                                       
                                      </div>
                                    </li>
                                        <?php  
                        if ($_SESSION['admin']=="ok") {
                              echo "<li> ";
       echo"<a data-scroll href='create_user.php'>createuser</a>";

                              echo "</li> ";
                               echo "<li> ";
       echo"<a data-scroll href='block_all_past_dates.php'>block past dates</a>";

                              echo "</li> ";
                           }                   


                                ?>
                     </ul>
                    
                        

                          
                      
                    <!--  </ul> -->
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
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/clinic_03.jpg');">
          <div class="text-contant">
                     <h2>
                          <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "User Control Panal" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
      
      <!-- end section -->
     
      <!-- <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>The Specialist Clinic</h2>
            </div> -->
            <!-- end title -->
            
               <!-- end col -->
               <!-- <div class="col-md-6"> -->
              <!--     <div class="post-media wow fadeIn">
                     <img src="images/about_03.jpg" alt="" class="img-responsive">
                     <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
                  <!-- end media -->
               <!-- </div> --> 
               <!-- end col -->
           <!--  </div> -->
            <!-- end row -->
            
           
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
     
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                      <!--  <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea> -->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!--  <div class="row">
                                    <div class="form-group">
                                       <div class='center'>  <button type='submit' name='search'>Submit</button></div>
                                    </div>
                                 </div> -->
                              </div>
                           </fieldset>
                        </form>
                        
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      </form>
     
      <!-- div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
         <div class="container"> -->
            <!-- <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Get in Touch</h2>
            </div>
              
         </div>
         <div class="contact-section">
            <div class="form-contant">
               <form id="ajax-contact" action="assets/mailer.php" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input type="text" class="form-control" placeholder="Name" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="email" class="form-control" placeholder="E-mail" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group in_message"> 
                           <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div class="actions">
                           <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div id="googleMap" style="width:100%;height:450px;"></div>
         </div>
      </div> -->
    <!--   <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
              
               <div class="col-md-4">
                  <div class="subcriber-info">
                    
                     <div class="subcriber-box"> -->
                      <!--   <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                              <div class="clearfix"></div> -->
                              <!-- mailchimp-alerts Start -->
                           <!--    <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div> -->
                                 <!-- mailchimp-submitting end -->
                                <!--  <div class="mailchimp-success"></div> -->
                                 <!-- mailchimp-success end -->
                              <!--    <div class="mailchimp-error"></div> -->
                                 <!-- mailchimp-error end -->
                              <!-- </div> -->
                              <!-- mailchimp-alerts end -->
                   <!--         </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer> -->
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text" >
                     <p> 2021 FBI. All Rights Reserved ©</p>
                  </div>
                  <?php
     
         $_SESSION['date']=date("Y-m-d h:i:sa");
      echo $_SESSION['username'];
      echo "/";
      if ($_SESSION['admin']=="ok") {
        echo "Admin"." "." ";
      }
       elseif ($_SESSION['admin']!="ok") {
        echo "user"." "." ";
      }
      // echo $_SESSION['admisions']." "." ";
        echo "/";
        echo " ".$_SESSION['date'];
       
?>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <?php
 }
                           //if the user password is wrong
                           elseif ($x!='$userpassword') {
                              echo  "Error: you enter a wrong password please try again ";
                           }
                     } 
                   }
                  else //if there is not found the enter user
                  { echo "Sorry:there is no user called ";}
             }  $con->close();
              // calling the check function
                checkFunction($res,$userpassword);
                
            }
            else{

               // echo"<p style='font-weight:bold;margin-right:300px'>"."please go to login form to conntect to controlpanal page"."<a href='login.php'>login form</a>"."</p>";
              // header('REFRESH:login.php');
               header("Refresh:0; url=login.php");
            }
           
      ?>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
