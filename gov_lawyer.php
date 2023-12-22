
<?php
   // Database configuration
$servername = "localhost";
$username = "root";
$database = "James";
$password = "";
// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $database);
// include("connect.php");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `laywer`"; 
$Sql_query = mysqli_query($conn,$sql); 
$All_lawyer = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="img/logo.png" alt="">
        <h1>James</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
        <!-- <li><a href="index.html">Home</a></li> -->
        <li><a href="gov_judges.php">Add Judges</a></li>
          <li><a href="contact.html" class="active">Contact</a></li>
          <li><a href="index.html" class="active">Log out</a></li>
            </ul> -->
          </li>
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('img/page-header.webp');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2> Appoint judges and lawyers
              </h2>
              <p>JAMES brings to you a hassle-free method manage all your judicial tasks.<br>Start your journey with us, now.</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->

      <div class="container" data-aos="fade-up">
        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="margin: auto;">
            <img src="img/judge1.png" class="img-fluid mb-3 mb-lg-0" style="padding-top:100px" height="50px" alt="">   
          </div>

 <!-- Edit Modal -->
      
<div class="container my-4" style="background-color:#f3f6fc; padding: 2em; border-radius: 5px;">
 <h2>Add Lawyer</h2>
 <form action="php/add_lawyer.php" method="POST" name="sample">
   <div class="form-group">
     <label for="title">Lawyer Name</label>
     <input type="text" class="form-control" id="title" name="name" aria-describedby="emailHelp" required>
   </div>

   <div class="form-group">
     <label for="desc">Address</label>
     <input type="text" class="form-control" id="title" name="description" aria-describedby="emailHelp" required >
   </div>
   <div class="form-group">
    <label for="desc">Type</label>
    <input type="text" class="form-control" id="title" name="type" aria-describedby="emailHelp" required>
    </div>
   <button type="submit" class="btn btn-primary" name="add"  value="Add">Add</button>
 
</div>
</form>

<div class="container my-4" style="background-color:#f3f6fc; padding: 2em; border-radius: 5px;">
 <table class="table" id="tbl">
     <tr>
       <th scope="col">Id</th>
       <th scope="col">Name</th>
       <th scope="col">Address</th>
       <th scope="col">Type</th>
       <th scope="col">Status</th>
       <th scope="col">Actions</th>
     </tr>
   <!-- <tbody> -->
   
<?php

foreach ($All_lawyer as $lawyer) { ?> 
  <tr> 
      <td><?php echo $lawyer['Id']; ?></td> 
      <td><?php echo $lawyer['Name']; ?></td> 
      <td><?php echo $lawyer['Address']; ?></td> 
      <td><?php echo $lawyer['Type']; ?></td> 
      <td><?php  
              if($lawyer['Status']=="1")  
                  echo "Active"; 
              else 
                  echo "Inactive"; 
          ?>                           
      </td> 
      <td> 
          <?php  
          if($lawyer['Status']=="1")  
              echo 
"<a href=php/deactivate_lawyer.php?id=".$lawyer['Id']." class='btn btn-danger btn-sm'>Deactivate</a>"; 
          else 
              echo 
"<a href=php/activate_lawyer.php?id=".$lawyer['Id']." class='btn btn-primary btn-sm'>Activate</a>"; 
          ?> 
          </td>
  </tr> 
 <?php 
      } 
 ?> 
   <!-- </tbody> -->
 </table>
</div>
<hr>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
 integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
 crossorigin="anonymous"></scripActive>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
 integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
 crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
 integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
 crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready(function () {
   $('#myTable').DataTable();

 });
</script>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="height: 70%;">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>James</span>
          </a>
          <p>J.A.M.E.S stands as a comprehensive and technologically advanced web application designed to serve the diverse needs of three key stakeholders: clients, judges, and government administrators.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Logins</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Amrita hostel  <br><br>
            <strong>Phone:</strong> +91 1234567890<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>James</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
