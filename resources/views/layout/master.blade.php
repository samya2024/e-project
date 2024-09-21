<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>@yield('cinemaverse')</title>
  <link rel="shortcut icon" href="./Images/Logo/Title.jpeg" type="image/x-icon">

  <!-- Font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="./static/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="static/bootstrap.min.css">
  <link rel="stylesheet" href="static/style-min.css">
  <link rel="stylesheet" href="cards.css">
  <link rel="stylesheet" href="static/premium.css">
  <link rel="stylesheet" href="static/faq.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="webstyle.css">
  
</head>
        <!------------------------Scroll to top button------------------------------------------------>
<style>
   .poster, .movie_card {
    box-shadow: 0 0 10px goldenrod !important;
  
  }
  .carousel-inner{
  cursor: pointer;
}
  body{
    font-size: 1rem !important;
    font-family: 'Ubuntu', sans-serif;
    -webkit-text-size-adjust: 100%;
  }

  .card-title{
    text-align: left;
  }
  .nav-item :hover{
  margin-bottom: 10px;
  
  
}
#header-nav .navbar-nav .nav-item .nav-link:hover {
  color: goldenrod;
  text-decoration: none; /* Remove underline */
  transition: color 0.3s ease, text-shadow 0.3s ease; /* Add transition effect */
  text-shadow: 0 0 10px goldenrod; /* Add glowing effect */
}
  .flim{
    text-align: left;
    flex: 1 1 auto;
    padding: 1rem 1rem;
  }
  .slide{
    height: 100% !important;
    width: 100% !important;
  }

  .row{
    padding-left: 50px !important;;
  }

    #scrollToTopButton{
  position:fixed;
  bottom: 40px;
  right: 25px;
  font-size: 25px;
  z-index: 99;
  width: 50px;
  height: 50px;
  background-color:goldenrod;
  color:black;
  border: none;
  cursor: pointer;
  outline: none;
  padding: 6px;
  border-radius: 50%;
  }
  #scrollToTopButton:hover, i:hover {
  background-color:white;
  color:goldenrod;
  }
  
  .scroll-bar {
  height: auto;
  width: auto;
  margin: auto;
  overflow-y: auto;
  overflow-x: hidden;
  max-width: 100%;
  }

::-webkit-scrollbar-track {
border: 5px solid #2c2f30;
background-color: goldenrod;
}

::-webkit-scrollbar-thumb:hover {
background-color: goldenrod!important;
}

::-webkit-scrollbar-track:hover {
background-color: white;
}

::-webkit-scrollbar {
width: 15px;
background-color: #2c2f30;
}

::-webkit-scrollbar-thumb {
  background-color: black;
  border-radius: 10px;
}

        * {
            margin: 0;
            padding: 0;
        }
        /* navbar css */

        #header-nav .nav-link {
            color: white;
            font-size: 20px;
            margin-left: 20px;
        }

        .menu li a:hover {
            color: goldenrod !important;
            opacity: 0.5;
        }

        #variety {
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }

        .logo {
            width: 81px;
            height: 52px;
        }

     

        .logo {
            width: 110px;
            height: 90px;
            padding: 3px;
            margin: 0;
            padding: 0;
        }
  #header-nav .nav-link {
  color: white;
  font-size: 20px;
  margin-left: 20px;
}
    @media only screen and (max-width: 1400px){
  #header-nav .nav-link {
    color: white;
    font-size: 18px;
    margin-left: 18px;
  }
  #searchText{
    width: 150px;
  }
}

@media only screen and (min-width: 1133px) and (max-width: 1275px) {
  #header-nav .nav-link {
    color: white;
    font-size: 15px;
    margin-left: 10px;
  } 
  
}
@media only screen and (min-width: 1035px) and (max-width: 1132px) {
  #header-nav .nav-link {
    color: white;
    font-size: 15px;
    margin-left: 10px;
  } 
  #searchText{
    width: 120px;
  }
  #submitBtn{
    width: 60px;
    display: flex;
    justify-content: center;
  }
}
@media only screen and (min-width: 993px) and (max-width: 1034px) {
  #header-nav .nav-link {
    color: white;
    font-size: 14px;
    margin-left: 10px;
  } 

#searchText{
  width: 100px;
}
#submitBtn{
  width: 50px;
  display: flex;
  justify-content: center;
}
}

.container {
  text-align: center;
}
.sam{
  position: relative;
   display: inline-block;
   padding-top: 5px; 
  padding-left: 15px;
}
</style>

    <body>
    <div class="scroll-bar">
    <nav class="navbar navbar-expand-lg navbar-light" id="header-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home"><img class="logo" src="/Images/Logo/cinema.jpg" alt="" width="30"
            height="24"></a>
        <button id="nav" class="navbar-toggler" id="nav" style="background-color:goldenrod" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-color:dark-grey;"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="/home" onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/popular" onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'" >Popular</a>
 
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="/crime"  onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">Premium</a>
            </li>
      
           
      
            <li class="nav-item">
              <a class="nav-link" href="/contactus"  onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">Contact Us</a>
            </li>
            <li>
              <!-- Genre dropdown starts-->
              <div>
                <div class="dropdown">
                    <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton" >
                        Genres
                    </button>
                    <div class="dropdown-content" style="color: white;">
                    
                        
                        <a href="/suspense">Suspence & Thriller</a>
                        <a href="/action">Action</a>
                        <a href="/fantasy">Sci-Fi & Fantacy</a>
                        <a href="/documentary">Documentary</a>
                        <a href="/horror">Horror</a>
                        <a href="/war">War & Politics</a>
                        <a href="/comedy">Comedy</a>
                        <a href="/romance">Romance</a>
                        <a href="/anime">Anime</a>
                        
                      </div>
                </div>
              </div>
              <!-- Genre dropdown ends-->
            </li>
            <div class="sam">
              <li>
                <button  type="button" class="btn btn-light" onclick="logout()" onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">Logout</button>
              </li>
            </div>
          </ul>
          <form id="searchForm" class="d-flex">
            <input class="form-control me-2" type="text" id="searchText" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning" type="submit">Search</button>
          </form>
        </div>
      </div>
      </nav>

        <!-- navbar ends -->
         <div>
         @yield('content')
       </div>
       
        <!-------------------------------Footer-------------------------------->
    <footer class="footer">
      <hr class="footer-hr">
      <div class="footer-content">
        <div class="footer-left">
          <a href="home.html"><img class="footer-logo" src="/Images/Logo/cinema.jpg" alt="" width="30"
              height="24"></a>
          <p class="footer-bottom-tagline">Watch! Chill! Repeat!</p>
        </div>
        <div class="footer-middle">
          <h2 class="footer-heading">Follow Us</h2>
          <ul class="footer-middle-list icons">
            <a class="footer-links" href="https://www.facebook.com/" target="_blank"><i
                class="fab fa-facebook-f facebook" style="color:#daa520"></i></a>
            <a class="footer-links" href="https://twitter.com/login?lang=en" target="_blank"><i
                class="fab fa-twitter twitter" style="color:goldenrod"></i></a>
            <a class="footer-links" href="https://www.linkedin.com/login" target="_blank"><i
                class="fab fa-linkedin linkedin" style="color:goldenrod"></i></a>
            <a class="footer-links" href="https://www.instagram.com/" target="_blank"><i
                class="fab fa-instagram instagram" style="color:goldenrod"></i></a>
             </ul>
        </div>
        <div class="footer-middle">
          <h2 class="footer-heading">Services</h2>
          <ul class="footer-middle-list">
            <li class="footer-middle-list-item"><a href="/home">Enjoy Latest Movies</a> </li>
        
            <li class="footer-middle-list-item"><a href="/kids">Everything for Kids</a> </li>
            <li class="footer-middle-list-item"><a href="/news">Coming soon</a> </li>
            <li class="footer-middle-list-item"><a href="/premium">Get Premium Subscription</a> </li>
            <li class="footer-middle-list-item"><a href="/faq">FAQ</a> </li>
          </ul>
        </div>
       <div class="footer-middle">
                <h2 class="footer-heading">Try Our App</h2>
                <ul class="footer-middle-list icons">
                    <a class="footer-links" href="#"><i class="fab fa-google-play" style="color:goldenrod"></i></a>
                    <a class="footer-links" href="#"><i class="fab fa-app-store-ios" style="color:goldenrod"></i></a>
                </ul>
            </div>
        <div class="footer-right">
          <p class="footer-links">
          <h2 class="footer-heading">Contact Us</h2>
          <p class="footer-bottom-tagline">Feel free to contact us.</p>
          <a class="footer-contact-button" href="/contactus">Contact</a>
          </p>
        </div>
      </div>
      <hr class="footer-hr">
      <div class="footer-copyright">
        <p>Copyright &copy; and &reg; Since
          <script>
            document.write(new Date().getFullYear())
          </script> Under CinemaVerse : (Project Is Done By 2308e team)
        </p>
      </div>
    </footer>

     <!----------------------scroll back to top button-->
     <button id="scrollToTopButton" title="Go to top">
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </button>
    <script>
      $(document).ready(function () {
        var scrollTopButton = document.getElementById("scrollToTopButton");
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollTopButton.style.display = "block";
          } else {
            scrollTopButton.style.display = "none";
          }
        }

        $("#scrollToTopButton").click(function () {
          $('html ,body').animate({ scrollTop: 0 }, 800)
        });
      });
    </script>

    <!-- footer scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/main-min.js"></script>

    <script>
      jQuery('#waterdrop').raindrops({
        color: '#daa520',
        canvasHeight: 150,
        density: 0.1,
        frequency: 20
      });
    </script>
    <script>
      function logout(){
        window.location.replace("login.html");
      }
      </script>
   


         <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script src="script.js"></script>
        <script src="scriptt.js"></script>
        
     <script src="main-min.js"></script>
     <script src="question.js"></script>
    <script src="./static/script.js"></script>



    <!-- offcanva JS and footer js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

   
    </body>
</html>


