
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ApnaTheatre | TV</title>
  <link rel="shortcut icon" href="./Images/Logo/Title.jpeg" type="image/x-icon">

    <!-- Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="./Images/Logo/Title.jpeg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="./static/style.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="webStyle.css">
    <link rel="stylesheet" href="static/bootstrap.min.css">
    <link rel="stylesheet" href="static/style-min.css">
    <link rel="stylesheet" href="cards.css">
    


<!------------------------Scroll to top button------------------------------------------------>
<style>
   .poster, .movie_card {
    box-shadow: 0 0 10px red !important;
  
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
  color: red;
  text-decoration: none; /* Remove underline */
  transition: color 0.3s ease, text-shadow 0.3s ease; /* Add transition effect */
  text-shadow: 0 0 10px red; /* Add glowing effect */
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

        #header-nav .nav-link {
            color: white;
            font-size: 20px;
            margin-left: 20px;
        }

        .menu li a:hover {
            color: red !important;
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
    </style>
</head>

<body style="background-color:black;" color="height:auto;">
    <div class="scroll-bar">

    
    <!-- navbar starts -->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="header-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home"><img class="logo" src="Images/TheaterLogoFinal.png" alt="" width="30"
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
              <a class="nav-link " href="/movies" onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'" >Movies</a>
 
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/webseries" onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'" >Web Series</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kids" onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">Kids</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tv"  onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">TV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/premium"  onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">Premium</a>
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
                        <a href="/popular">Popular</a>
                        <a href="/crime">Crime</a>
                        <a href="/suspense">Suspense & Thriller</a>
                        <a href="/action">Action</a>
                        <a href="/fantasy">Sci-Fi & Fantasy</a>
                        <a href="/documentary">Documentary</a>
                        <a href="/horror">Horror</a>
                        <a href="/drama">Drama</a>
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
          <div class="main-content">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Images/anupama2.jpg" height="400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/yeh rishta.jpg" height="400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/gum hai kisi.jpg" height="400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/bigboss.jpg" height="400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/fear.jpg" height="400" class="d-block w-100" alt="...">
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
                <!-- <div class="container"> -->
                  <div id="movies" class="row"></div>
                <!-- </div> -->
                  <div class="row">
                    <h3 class="section-title text-center">Popular</h3>
                  </div>
                  
                  <div class="col">
                    <div class="poster">
                      <div class="flip-card_i">
                        <div class="flip-card-inner_i">
                          <div class="flip-card-front_i">
                              <img src="./Images/anupama2.jpg" alt="Avatar" style="width:250px;height:260px;">
                          </div>
                          <div class="flip-card-back_i">
                            <h1>Anupama</h1>
                            <div class="btnContainer">
                              <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                              <button class="btn_i b2_i"  title="Minutes" style="color:white">294<button>
                              <button class="btn_i b1_i"  title="IMDb" style="color:white">8.9</button>
                            </div>
                              
                            </span>
                            <br />
                            <br />
                          </p>
            
                            <p class="para_i" style="margin-top: -36px;">Anupamaa, who parts with her ambitions and goals in a bid to raise her family, feels dejected when she fails to get any credit for her sacrifices and trials. She then decides to live on her own terms.</p>

                            
                                <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                      <script type="text/javascript">
                        function openWin(){
                          window.open("https://www.imdb.com/video/vi4272078361?ref_=ttvi_vi_imdb_1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                        }
                      </script>
                            <br><br>
                            <button class="btn_i b4_i">▶Play</button>
                          </div>
                        </div>
                        <div class="flim">
                          <h5 class="card-title">Family Man</h5>
                          <span class="movie_info">2019</span>
                          <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.5 / 10</span>
                      </div>
                    </div>
                </div>
              </div>

                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/yeh rishta.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Yeh Rishta Kya kehlata hai</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2009</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">3543<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </div>  
                        </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">On their honeymoon in Greece, a flirtatious Kartik and a bold Naira pretend to be strangers and try to woo each other all over again.</p>
        
                                
                              <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin1(){
                                  window.open("https://www.imdb.com/video/vi375766041?playlistId=tt7112704&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script> <br><br>
                            <button class="btn_i b4_i">▶Play</button>
          
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Yeh Rishta Kya kehlata hai</h5>
                        <span class="movie_info">2019</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.2 / 10</span>
                    </div>
                    </div>
                  </div> 
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/gum hai kisi.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Ghum hai kisikey pyaar mein</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">224<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
                        </div>
                          </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">Virat, a young police officer, marries a woman to honour the promise he made to her dying father. But when his former lover re-enters his life, he finds his heart pulled in both directions.</p>
          
                              <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin2(){
                                  window.open("https://www.imdb.com/video/vi2629419033?playlistId=tt13085534&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script> <br><br>
                            <button class="btn_i b4_i">▶Play</button>
          
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Ghum hai kisikey pyaar mein</h5>
                        <span class="movie_info">2018</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb - 9.2 / 10</span>
                    </div>
                    </div>
                  </div>
                  </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/bigboss.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Big Boss</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2006</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">1360<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                        </div>
                          </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">Isolated from the outside world, the contestants live together in a house under the live cameras that monitor their every move. They perform various tasks and avoid eviction to be declared a winner.</p>

                                
                              <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin3(){
                                  window.open("https://www.imdb.com/video/vi1928444953?playlistId=tt1281973&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br><br>
                            <button class="btn_i b4_i">▶Play</button>
          
                        </div>
                      </div>

                      <div class="flim">
                        <h5 class="card-title">Big Boss</h5>
                        <span class="movie_info">2020</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 9.0 / 10</span>
                    </div>
                  </div> 
                </div>
                </div>
                </div>
              </br>
                <div class="row poster">
                  <div class="row">
                    <h3 class="section-title text-center">Top Picks For You</h3>
                </div>
                  <div class="col">
                    <div class="poster">
                      <div class="flip-card_i">
                        <div class="flip-card-inner_i">
                          <div class="flip-card-front_i">
                              <img src="./Images/fear.jpg" alt="Avatar" style="width:250px;height:260px;">
                          </div>
                          <div class="flip-card-back_i">
                            <h1>Fear Files</h1>
                            <div class="btnContainer">
                              <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                              <button class="btn_i b2_i"  title="Minutes" style="color:white">456<button>
                              <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                          </div>
                            </span>
                            <br />
                            <br />
                          </p>
            
                            <p class="para_i"  style="margin-top: -36px;">A series of tales of the supernatural inspired by real life incidents. Moving beyond ghosts and exploring all paranormal phenomenon.</p>
            
                                <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                                <script type="text/javascript">
                                  function openWin4(){
                                    window.open("https://www.imdb.com/title/tt7666252/?ref_=ttep_ep1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                  }
                                </script><br><br>
                              <button class="btn_i b4_i">▶Play</button>
            
            
                          </div>
                        </div>
                        <div class="flim">
                          <h5 class="card-title">Fear Files</h5>
                          <span class="movie_info">2021</span>
                          <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.3 / 10</span>
                      </div>
                      </div>
                    </div> 
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/crime.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Crime Patrol</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2003</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">1231<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8</button>
                        </div>
                          </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">The host narrates several dramatised real-life crime cases revolving around harassment, kidnapping and murder while also presenting re-enactments.</p>
        
            <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
            <script type="text/javascript">
              function openWin5(){
                window.open("https://www.imdb.com/title/tt14273900/mediaviewer/rm903397377/","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
              }
            </script><br><br>
                            <button class="btn_i b4_i" onclick="openMovieWin5()">▶Play</button>
                            
                            <script type="text/javascript">
                                function openMovieWin5(){
                                  window.open("https://youtube.com/playlist?list=PLzufeTFnhupza0aEZ_FKj0mBguCdtwU_c","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script>
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Crime Patrol</h5>
                        <span class="movie_info">2020</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8 / 10</span>
                    </div>
                    </div>
                  </div> 
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/shaurya.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Shaurya Aur Anokhi Ki Kahan</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">161<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.1</button>
                        </div>
                        </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">Shaurya, a male chauvinist who believes that every girl's future belongs in the kitchen, is in for a surprise when he crosses paths with Anokhi, a hardworking girl.</p>
          
                      
                               
            <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
            <script type="text/javascript">
              function openWin6(){
                window.open("https://www.imdb.com/video/vi1200734233?ref_=nv_sr_srsg_1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
              }
            </script><br><br>
                            <button class="btn_i b4_i">▶Play</button>
          
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Shaurya Aur Anokhi Ki Kahan</h5>
                        <span class="movie_info">2020</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 9.1 / 10</span>
                    </div>
                    </div>
                  </div> 
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/kbc.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>KBC</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2000</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">936<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                        </div>
                        </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">The host, Amitabh Bachchan, gives contestants the chance to answer a series of questions based on general knowledge and current affairs in order to win a cash prize</p>

                              <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin7(){
                                  window.open("https://www.imdb.com/title/tt13551448/?ref_=ttep_ep1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br><br>
                            <button class="btn_i b4_i" onclick="openMovieWin7()">▶Play</button>
                            
                            <script type="text/javascript">
                                function openMovieWin7(){
                                  window.open("https://youtube.com/playlist?list=PLzufeTFnhupxu2U99E69L5GQ-YqXA1lec","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script>
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Kaun Banega Crorepati</h5>
                        <span class="movie_info">2020</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.3 / 10</span>
                    </div>
                    </div>
                  </div> 
                </div>
              </div>
            </br>
              <div class="row poster">
                <div class="row">
                  <h3 class="section-title text-center">Featured</h3>
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/indianidol.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h4>Indian Idol</h4>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2004</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">317<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.5</button>
                        </div>
                        </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">Various talented participants from India compete against each other during a singing competition in order to impress the judges and win the title.</p>
          
                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin8(){
                                window.open("https://www.imdb.com/title/tt0486068/mediaviewer/rm3598682113/","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                            <button class="btn_i b4_i">▶Play</button>
          
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Indian Idol</h5>
                        <span class="movie_info">2019</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 9.5 / 10</span>
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/tmkoc.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>TMKOC</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2008</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">3191<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </div> 
                        </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">The residents of a housing society help each other find solutions when they face common, real-life challenges and get involved in sticky situations.</p>
          
                            <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin9(){
                                window.open("https://www.imdb.com/video/vi204126745?ref_=nv_sr_srsg_1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                            <button class="btn_i b4_i" onclick="openMovieWin9()">▶Play</button>
                            
                            <script type="text/javascript">
                                function openMovieWin9(){
                                  window.open("https://youtube.com/playlist?list=PLPuS0dQof_OGRvvdkNhWbJ8Jg3V-E3nFH","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script>
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Tarak Mehta Ka Ooltah Chasma</h5>
                        <span class="movie_info">2022</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.2 / 10</span>
                    </div>
                    </div>
                  </div> 
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/satya.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Satyamev Jayate</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">25<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                        </div> 
                        </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">Host Aamir Khan interacts with the general public of India and aims to enlighten citizens about the social issues present in the country.</p>
          
                            <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin10(){
                                window.open("https://www.imdb.com/video/vi2485238297?playlistId=tt2360717&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script> <br><br>
                            <button class="btn_i b4_i" onclick="openMovieWin10()">▶Play</button>
                            
                            <script type="text/javascript">
                                function openMovieWin10(){
                                  window.open("https://youtube.com/playlist?list=PLSNi9uW5H4qkFvLsemUW71TngsP4PGfyi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script>
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">Satyamev Jayate</h5>
                        <span class="movie_info">2021</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.6 / 10</span>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/24.jpg" alt="Avatar" style="width:250px;height:260px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>24:India</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                            <button class="btn_i b2_i"  title="Minutes" style="color:white">48<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </div> 
                        </span>
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"  style="margin-top: -36px;">When a drug lord, Haroon Sherchan, threatens to let loose a virus unless the Indian government releases his brother from prison, a now-reclusive Jai Singh Rathod is asked to return to stop Sherchan.</p>
          
                            <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin11(){
                                window.open("https://www.imdb.com/video/vi302760217?playlistId=tt2792284&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script> <br><br>
                            <button class="btn_i b4_i">▶Play</button>
          
                        </div>
                      </div>
                      <div class="flim">
                        <h5 class="card-title">24:India</h5>
                        <span class="movie_info">2021</span>
                        <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.2 / 10</span>
                    </div>
                    </div>
                  </div>
                </div>

              




        </div>
    </div>


    <!-------------------------------Footer-------------------------------->
    <div id="waterdrop"></div>
    <footer class="footer">
        <hr class="footer-hr">
        <div class="footer-content">
            <div class="footer-left">
                <a href="home.html"><img class="footer-logo" src="Images/TheaterLogoFinal.png" alt="" width="30" height="24"></a>
                <p class="footer-bottom-tagline">Watch! Chill! Repeat!</p>
            </div>
            <div class="footer-middle">
                <h2 class="footer-heading">Follow Us</h2>
                <ul class="footer-middle-list icons">
                    <a class="footer-links" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f facebook" style="color:red"></i></a>
                    <a class="footer-links" href="https://twitter.com/login?lang=en" target="_blank"><i class="fab fa-twitter twitter" style="color:red"></i></a>
                    <a class="footer-links" href="https://www.linkedin.com/login" target="_blank"><i class="fab fa-linkedin linkedin" style="color:red"></i></a>
                    <a class="footer-links" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram instagram" style="color:red"></i></a>
                    <a class="footer-links" href="https://github.com/QAZIMAAZARSHAD/Movie-Streaming-Website" target="_blank"><i class="fab fa-github github" style="color:red"></i></a>
                </ul>
            </div>
            <div class="footer-middle">
                <h2 class="footer-heading">Services</h2>
                <ul class="footer-middle-list">
                <li class="footer-middle-list-item"><a href="/home">Enjoy Latest Movies</a> </li>
                    <li class="footer-middle-list-item"><a href="/webseries">Watch Web-Series</a> </li>
                    <li class="footer-middle-list-item"><a href="/kids">Everything for Kids</a> </li>
                    <li class="footer-middle-list-item"><a href="/news">Coming soon</a> </li>
                    <li class="footer-middle-list-item"><a href="/premium">Get Premium Subscription</a> </li>
                    <li class="footer-middle-list-item"><a href="/faq">FAQ</a> </li>
              
                </ul>
            </div>
            <div class="footer-middle">
                <h2 class="footer-heading">Try Our App</h2>
                <ul class="footer-middle-list icons">
                    <a class="footer-links" href="#"><i class="fab fa-google-play" style="color:red"></i></a>
                    <a class="footer-links" href="#"><i class="fab fa-app-store-ios" style="color:red"></i></a>
                </ul>
            </div>
            <div class="footer-right">
                <p class="footer-links">
                    <h2 class="footer-heading">Contact Us</h2>
                    <p class="footer-bottom-tagline">Feel free to contact us.</p>
                    <a class="footer-contact-button" href="contactus.html">Contact</a>
                </p>
            </div>
        </div>
        <hr class="footer-hr">
        <div class="footer-copyright">
            <p>Copyright &copy; and &reg; Since
                <script>
                    document.write(new Date().getFullYear())
                </script> Under ApnaTheatre.com : (Project Is Done By Qazi Maaz Arshad)</p>
        </div>
    </footer>

    <!---------scroll back to top button-->
    <button  id="scrollToTopButton" title="Go to top" class="ml-5" >
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </button>
      <script>
      $(document).ready(function(){
        var scrollTopButton = document.getElementById("scrollToTopButton");
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          scrollTopButton.style.display = "block";
        } else {
          scrollTopButton.style.display = "none";
        }
      }

      $("#scrollToTopButton").click(function(){
      $('html ,body').animate({scrollTop : 0},800)
      });
      });
      </script>
<script>
  function logout(){
    window.location.replace("login.html");
  }
  </script>
    <!-- offcanva JS and footer js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/main-min.js"></script>

    <script>
        jQuery('#waterdrop').raindrops({
            color: '#292c2f',
            canvasHeight: 150,
            density: 0.1,
            frequency: 20
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="./static/script.js"></script>
</body>


</html>


