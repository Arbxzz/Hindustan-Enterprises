<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Welcome to Hindustan Enterprises. A blog for coding enthusiasts">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/hindustan.css">
    <title>Hindustan Enterprises - Heaven for Programmers</title>
</head>
<body>
  <nav  id="nav4" class="navbar navbar-expand-lg p-0 navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="home.php"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Topics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Decor</a>
            <a class="dropdown-item" href="#">Interiors</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Support</a>
            <a class="dropdown-item" href="#">Write for us</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html"></i>Contact Us</a>
        </li>
      </ul>
      <img class="img-responsive mr-auto" src="Images/LOGO.png" alt="LOGO" width="200"  height="300">
      <form class="d-flex">

        <input class="px-2 search" type="search" placeholder="Search" aria-label="Search" id="searchInput"> 
        <button  class="btn0" type="submit"  id="searchBtn"><i class="fa-brands fa-searchengin"></i></button>
        </form>
        </div>
        </div>
      
      </form>
      <div class="px-0">
      <a class = "nav-link text-uppercase text-dark" href = "login.php"><i
            class="fa-solid fa-right-to-bracket"></i></a>
            <a class = "nav-link text-uppercase text-dark" href = "user-registration.php">
            <i class="fa-solid fa-user-plus"></i></a>
      </div>
    </div>
  </nav>
</section>
      <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-white">Welcome to hindustan Enterprises</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white"></h1>
                <a href="#" class="button">
                  <div class="button__line"></div>
                  <div class="button__line"></div>
                  <span class="main1-btn">DESIGNS</span>
                  <div class="button__drow1"></div>
                  <div class="button__drow2"></div>
                </a>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize text-white"></h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white"></h1>
                <a href = "contact.html" class = "btn mt-3 text-uppercase">Contact Us</a>
            </div>
        </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
      <div class="wrapper pb-0 py-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-6 mb-4">
                      <div class="card text-center">
                          <div class="icon-box">
                              <img src="Images/hall.jpg" height="200" width="300">
                          </div>
                          <div>
                              <h4>Hall</h4>
                              <p>Info</p>
                              <a href="Hall.html">
                               <button class="main-btn">view</button> 
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mb-4">
                      <div class="card text-center">
                          <div class="icon-box">
                              <img src="Images/Bedroom.jpg"height="200" width="300">
                          </div>
                          <div>
                              <h4>Bedroom</h4>
                              <p>Info</p>
                              <a href="bedroom'.html">
                               <button class="main-btn">view</button> 
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mb-4">
                      <div class="card text-center">
                          <div class="icon-box">
                              <img  src="Images/kitchen.jpg"height="200" width="300">
                          </div>
                          <div>
                              <h4>Kitchen</h4>
                              <p>Info</p>
                              <a href="Kitchen.html">
                               <button class="main-btn">view</button> 
                              </a>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
<div class="container  h-100 d-flex align-items-center carousel-inner">
  <article>
    <figure><img id="ss" src="Images/Bedroom2.jpg" height="500" width="500" alt=""></figure>
    <h2>BEAUTIFUL DESIGNS</h2>
    <p>DESIGNS BY HINDUSTAN ENTERPRISES</p>
  </article>
  </div>
        <!-- footer -->
        <section id="contact" class="footer_wrapper wrapper">
          <div class="container pb-3">
              <div class="row">
                  <div class="col-lg-3 col-md-6 mb-4">
                      <h5>Enterprises Location </h5>
                      <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut
                          laoreet
                          pharetra....</p>
                      <div class="contact-info">
                          <ul class="list-unstyled p-0">
                              <li><a href="#"><i class="fa fa-home me-3"></i> 411048, Pune Maharashtra, India</a></li>
                              <li><a href="#"><i class="fa fa-phone me-3"></i>+1 222 3333</a></li>
                              <li><a href="#"><i class="fa fa-envelope me-3"></i>info@example.com</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4">
                      <h5>More Links</h5>
                      <ul class="link-widget p-0">
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">Our Office</a></li>
                          <li><a href="#">Delivery</a></li>
                         
                      </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4">
                      <h5>More Links</h5>
                      <ul class="link-widget p-0">
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">Our Office</a></li>
                          <li><a href="#">Delivery</a></li>
                         
                      </ul>
                  </div>
  
                  <div class="col-lg-3 col-md-6 mb-4">
                      <h5>Newsletter</h5>
                      <div class="form-group mb-4">
                          <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                          <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">Subscribe</button>
                      </div>
                      <h5>Stay Connected</h5>
                      <ul class="social-network d-flex align-items-center p-0 ">
                          <li><a href="#" style="background-color: #3b5998;"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#" style="background-color: #1c90e9;"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#" style="background-color: black"><i class="fab fa-google-plus-g"></i></a></li>
                          <li><a href="#" style="background-color: red"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                  </div>
  
  
  
              </div>
          </div>
          <div class="container-fluid copyright-section">
              <p class="p-0">Copyright <a href="#">© Hindustan Enterprises.</a> All Rights Reserved</p>
          </div>
      </section>
      
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
<script>
// Get the search input element and search button element
const searchInput = document.getElementById('searchInput');
const searchBtn = document.getElementById('searchBtn');

// Add an event listener to the search button
searchBtn.addEventListener('click', function() {
  // Get the search query from the search input
  const searchQuery = searchInput.value;

  // Perform a search (replace this with your own search function)
  performSearch(searchQuery);
});

function performSearch(query) {
  // Replace this with your own search function
  console.log(`Performing search for "${query}"...`);
}
</script>
