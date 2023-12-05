<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home | Registration and Login System </title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/header.css" rel="stylesheet" />
        <link href="css/footer.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/e3bddee9f3.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header class="tnv">
             <img src="LOGO.png" class="logo">
         <nav class="nv">
              <a href="index.php">Home</a>
         </nav>		
     </header><br><br>

     <div class="slideshow-container">

         <div class="mySlides fade">
                 <img src="bg.jpg" width="100%" height="300">
             <div class="text">
                  Bangladesh Road Transport Authority<br>
                  Government of the People's Republic of Bangladesh
             </div>
         </div>
        
         <div class="mySlides fade">
                 <img src="cg.jpg" width="100%" height="300">
             <div class="text">
                  Bangladesh Road Transport Authority<br>
                  Government of the People's Republic of Bangladesh
             </div>
         </div>
        
         <div class="mySlides fade">
                 <img src="dg.jpg" width="100%" height="300">
             <div class="text">
                  Bangladesh Road Transport Authority<br>
                  Government of the People's Republic of Bangladesh
             </div>
          </div>
      </div><br><br><br><br>

     <div class="Description">
           <h1 class="notice">Notice Board</h1><br><br>
         <ol type="A">
             <li><a href="#">order regarding grant of leave outside Bangladesh No- 2409 Date-23-11-2023</a></li>
             <li><a href="#">Noc For Passport</a></li>
             <li><a href="#">Office Order No-2340 Date-13-11-2023</a></li>
         </ol> 
     </div><br><br><br>

        <div id="layoutSidenav">
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color: white; text-align:center; font-size: 30px;">Registration & Login Management System With admin panel</h1><br><br>
        <div class="row" >
                            <div class="col-xl-4 col-md-6" >
                                <div class="card bg-primary text-white mb-4" style="background-color: blue;">
                                    <div class="card-body">Not Registers Yet</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="signup.php">Signup Here</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
<div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Already Registered</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="login.php">Login Here</a>
                                    </div>
                                </div>
                            </div>

<div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Admin Panel</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin">Login Here</a>
                          
                                    </div>
                                </div>
                            </div>

                            </div>
                        <div style="height: 100vh"></div>
            
                    </div>
                </main>
   <?php include_once('includes/footer.php');?>
            </div>
        </div>
        <script>
          var myIndex = 0;
          carousel();
        
          function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
         }
     </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> 
    </body>
</html>
