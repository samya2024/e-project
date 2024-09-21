@extends('layout.master')
@section('title','kidspage')
@section('content')


<!------------------------Scroll to top button------------------------------------------------>

<style>
   .poster, .movie_card {
    box-shadow: 0 0 10px red !important;
  
  }
  .carousel-inner{
  cursor: pointer;
}
    #scrollToTopButton{
  position:fixed;
  bottom: 40px;
  right: 25px;
  font-size: 25px;
  z-index: 99;
  width: 50px;
  height: 50px;
  background-color:red;
  color:black;
  border: none;
  cursor: pointer;
  outline: none;
  padding: 6px;
  border-radius: 50%;
  }
  #scrollToTopButton:hover, i:hover {
  background-color:white;
  color:red;
  }

  .nav-item :hover{
  margin-bottom: 10px;
  
  
}
#header-nav .navbar-nav .nav-item .nav-link:hover {
  color: red;
  text-decoration: none; /* Remove underline */
  transition: color 0.3s ease, text-shadow 0.3s ease; /* Add transition effect */
  text-shadow: 0 0 10px red; /* Add glowing effect */
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
  background-color: red;
  }
  ::-webkit-scrollbar-thumb:hover {
  background-color: red !important;
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
    .navbar-nav{
  display: flex;
  align-items: center;
  padding: 0px 7.5px;
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

.fas:hover{background: none!important ;}
.nav-item{ flex-wrap:wrap;}
.menu li a:hover {
  color: red !important;
  opacity: 0.5;
}

/* Genre dropdown */

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content {
  border-radius: 5px;
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  z-index: 999;
}

.dropdown-content a {
  border-radius: 5px;
  color: white;
  padding: 5px 10px;
  text-decoration: none;
  display: block;
  
}

.dropdown-content a:hover {
background-color: red;
color: white;
text-decoration: none;
}

    #variety {
      margin-top: 1rem;
      margin-bottom: 0.5rem;
    }

    img {
      -webkit-user-drag: none;
      -moz-user-drag: none;
      -o-user-drag: none;
    }

    .movie_card {
      padding: 0 !important;
      width: 14rem;
      margin: 5px;
      border-radius: 20px;
      background-color: rgb(15, 15, 73) !important;
      color: white;
      box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.2), 0 4px 15px 0 rgba(0, 0, 0, 0.19);
    }

    .movie_card img {
      height: 16rem;
    }

    .movie_info {
      color: red;
    }

    .movie_info i {
      font-size: 10px;
    }

    .card-title {
      width: 80%;
      font-size: 15px;
      height: 2rem;
    }

    .section-title {
      color: red;
      font-size: 25px;
      margin-bottom: 40px;
    }

    .movie_info_rating {
      color: goldenrod;
      float: right;
    }

    .logo {
      width: 81px;
      height: 52px;
      padding: 3px;
    }

    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
      padding-left: 0px !important;
    }

    .row>* {
      padding-left: 0px !important;
    }

    .col img {
      cursor: pointer;
    }

/* CSS FOR FOOTER */
/* CSS FOR FOOTER */

.footer{
margin-bottom:15px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.footer-content{
  display:flex;
  justify-content:space-between;
  padding: 10px 20px;
}
.footer-logo{
  width: 150px;
  height: 120px;
  padding: 3px;
  margin:0px 0px 0px 10px;
  padding: 0;
}
.footer-heading{
  color:white;
}
.footer-left, .footer-right, .footer-middle{
text-align:center;
}
.icons{
  margin-left:-30px;
}
.footer-links i{
font-size:30px;
width:40px;
height:40px;
margin-top:30px;
padding:5px;
}
.footer-middle a i:hover{
background-color:white;
border-radius:50px;
color:red;
}
.footer-hr{
    color:grey;
}
.footer-middle-list-item{
list-style:none;
font-size:15px;
font-family:cursive;
margin:5px 0px 0px 15px;
text-align:left;
}
.footer-middle-list-item a{
text-decoration:none;
color:white;
}
.footer-middle-list-item a:hover{
color:red;
}
.footer-right{
  margin-top:-15px;
}
.footer-contact-button{
font-size:20px;
background-color:red;
color:black;
padding:10px;
border:none;
border-radius:10px;
text-decoration:none;
}
.footer-contact-button:hover{
background-color:white;
color:red;
}
.footer-bottom-tagline{
color:white;
font-size:15px;
font-family:cursive;
margin-bottom:25px;
}



.footer-copyright{
text-align:center;
color:white;
margin-top:20px;
font-size:18px;
}
/* .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);} */

/***************** Media Queries *********************/

@media (max-width: 600px) {
.footer-content{
   display:block;
   text-align:center;
}
.footer-middle-list-item{
  text-align:center;
  margin-left:-20px;
}

.footer-left, .footer-middle, .footer-right{
  margin-top:50px;
}

}

#waterdrop {
  height: 30px;
}

#waterdrop canvas {
  bottom: -70px !important;
}
#nav:hover
{
  background-color:#e60e23!important;

}

@media only screen and (max-width: 531px) {
  .poster {
  margin: 50px auto !important;
  width: 230px !important;
}
}

.poster {
  margin: 50px 20px;
}

  </style>

<div class="main-content">

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./Images/spider_man_cover.png" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/cars.jpg" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/doraemon_cover.jpg" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/mickey_mouse cover.png" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/shinchan_cover.jpg" height="400" class="d-block w-100" alt="...">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

</div>



<div class="row poster">
<div class="container">
    <div id="movies" class="row"></div>
</div>
<hr>
<div class="row">
    <h3 class="section-title text-center">Popular</h3>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="Images/pikachu.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">POKEMON Detective Pikachu</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="Images/toy1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Toy Story 4</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="Images/captain.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Captain Marvel</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>

<div class="col">
    <div class="card movie_card">
        <img src="Images/spider.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Spider-Man: Far From Home</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>

        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/mermaid.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">The Little Mermaid</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
</div>


<div class="row poster">
<div class="row">
    <h3 class="section-title text-center">Top Picks For You</h3>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/doraemon.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Doraemon</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/mickey_mouse.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mickey Mouse</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/toy_story.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Toy Story 3</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/nemo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Finding Nemo</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>

        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/sofia.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Sofia</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
</div>


<div class="row poster">
<div class="row">
    <h3 class="section-title text-center">Featured</h3>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/shinChan.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Shin Chan</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/Hanuman.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Hanuman</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/BalGanesh.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Bal Ganesh</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/little_einsteins.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Little Einsteins</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/Phineas.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Phineas and Ferb</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>

        </div>
    </div>
</div>
</div>


<div class="row poster">
<div class="row">
    <h3 class="section-title text-center">Amazing Animals</h3>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/Mouse_detective.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mouse Detective</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/bugs_life.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">A Bug's Life</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/jungle-book.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Jungle Book</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/lion_king.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">The Lion King</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/bolt.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Bolt</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>

        </div>
    </div>
</div>
</div>


<div class="row poster">
<div class="row">
    <h3 class="section-title text-center">Fairy Tales</h3>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/pinocchio.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pinocchio</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/tangled.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Tangled</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/frozen.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Frozen II</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/snow_white.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Snow White</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>

        </div>
    </div>
</div>
<div class="col">
    <div class="card movie_card">
        <img src="./Images/cinderalla.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Cinderalla</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i> 9 / 10</span>
        </div>
    </div>
</div>
</div>
</div>

@endsection