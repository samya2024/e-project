<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>CinemaVerse</title>
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
<script>
  setTimeout(function () {
    $('.section').fadeToggle();
  }, 4000);
  
</script>

<body>
  



  <div class="scroll-bar">
    <!-- navbar starts -->

    <nav class="navbar navbar-expand-lg navbar-light " id="header-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home"><img class="logo" src="Images/TheaterLogoFinal.png" alt="" width="30"
            height="24"></a>
        <button id="nav" class="navbar-toggler" id="nav" style="background-color:goldenrod" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-color:goldenrod;"></span>
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
              <a class="nav-link" href="/kids" onMouseOver="this.style.color='goldenrod'" onMouseOut="this.style.color='white'">Kids</a>
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
                    <div class="dropdown-content" style="color: white; ">
                        <a href="/popular">Popular</a>
                        <a href="/crime">Crime</a>
                        <a href="/suspense">Suspense & Thriller</a>
                        <a href="/action">Action</a>
                        <a href="/fantasy">Sci-Fi & Fantasy</a>
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

        <div class="maincontainer">
            <div class="container">
                <div id="movies" class="row"></div>
            </div>
            <hr>
            <h2>Comedy</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/friends.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Friends</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">1994</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">10</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.9</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Follow the lives of six reckless adults living in Manhattan, as they indulge in adventures which make their lives both troublesome and happening.</p>

                       
                            <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin(){
                                window.open("https://youtu.be/hDNNmeeJs1Q","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Friends</b>
                            <br>
                            IMDb - 8.9
                        </div>
                    </div>
                  
                </div>


                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/big.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 44px;">The Big Bang Theory</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2007</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">12</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">The lives of four socially awkward friends, Leonard, Sheldon, Howard and Raj, take a wild turn when they meet the beautiful and free-spirited Penny.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin1(){
                                  window.open("https://youtu.be/WBb3fojgW0Q","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>The Big Bang Theory</b>
                              <br>
                              IMDb - 8.1
                          </div>
                      
                    </div>
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/rick.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Rick And Morty</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">4</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">After having been missing for nearly 20 years, Rick Sanchez suddenly arrives at daughter Beth's doorstep to move in with her and her family.</p>

                          
                              <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin2(){
                                  window.open("https://youtu.be/_uUcMwsR5hg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Rick and Morty</b>
                              <br>
                              IMDb - 9.2
                          </div>
                      
                    </div>
                  </div>


                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/php.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Phir Hera Pheri</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2006</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2h34m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">6.9</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">The lives of Raju, Shyam and Baburao change completely when they get cheated by a fraudster. Now, they must find another way to repay the loan they took from a dreaded gangster.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin3(){
                                  window.open("https://youtu.be/1rJQQCZcq2sc","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i" onclick="openMovieWin3()">▶Play</button>
                        </div>
                        <script type="text/javascript">
                            function openMovieWin3(){
                              window.open("https://youtu.be/TIQ5hrfermg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
                        </div>
                          <div class="flim">
                              <b>Phir Hera Pheri</b>
                              <br>
                              IMDb - 6.9
                          </div>
                      </div>
                    
                  </div>


                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/bach.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>TVF Bachelors</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">The series revolves around Four Bachelor Flatmates who in every episode will deal with a specific daily life bachelor related problem.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin4(){
                                  window.open("https://youtu.be/5XuimeH5hME","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                        </div>
                        <script type="text/javascript">
                            function openMovieWin43(){
                              window.open("https://youtube.com/playlist?list=PLTB0eCoUXErabI_K3mUcdiYM72o4CkWZC","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
                        </div>
                          <div class="flim">
                              <b>TVF Bachelors</b>
                              <br>
                              IMDb - 8.2
                          </div>
                      
                    </div>
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/mbbs.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Munna Bhai MBBS</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2003</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2h36m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Munna is a goon who sets out to fulfil his father's dream of becoming a doctor. With some help from his ally, Circuit, he enrols himself in a medical college and drives Dr Asthana up the wall.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin5(){
                                  window.open("https://youtu.be/6lCGvu-hwX4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Munna Bhai MBBS</b>
                              <br>
                              IMDb - 8.1
                          </div>
                      </div>
                    
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/tom.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 20px;">Tom and Jerry</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2021</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">1h41m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">5.3</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">A legendary rivalry reemerges when Jerry moves into New York City's finest hotel on the eve of the wedding of the century, forcing the desperate event planner to hire Tom to get rid of him. 
                              As mayhem ensues, the escalating cat-and-mouse battle soon threatens to destroy her career, the wedding, and possibly the hotel itself.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                             </div>
                             <script type="text/javascript">
                                function openWin6(){
                                  window.open("https://youtu.be/kP9TfCWaQT4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>

                        </div>
                          <div class="flim">
                              <b>Tom and Jerry</b>
                              <br>
                              IMDb - 5.3
                          </div>
                      </div>
                    
                  </div>


                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/chhal.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Chhalaang</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2h16m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">6.8</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Montu is a lazy physical training instructor who does the bare minimum to stay employed. However, a new teacher threatens to take his job and the woman he loves.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin7(){
                                  window.open("https://youtu.be/BY-0SbSF2dE","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Chhalaang</b>
                              <br>
                              IMDb - 6.8
                          </div>
                      
                    </div>
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/permanent roommates.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 25px;">Permanent Roommates</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Permanent Roommates is an Indian romantic comedy web series produced by The Viral Fever Media Labs. It was created by Arunabh Kumar, the founder of TVF, who also worked as the executive producer of the series.</p>

                          
                              <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin8(){
                                  window.open("https://youtu.be/XsOjuDh4c-o","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Permanent Roommates</b>
                              <br>
                              IMDb - 8.6
                          </div>
                      
                    </div>
                  </div>



                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/trip.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>TVF Tripling</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">TVF Tripling is an Indian web series created by The Viral Fever. It was developed by Sameer Saxena and written by Akarsh Khurana and Sumeet Vyas.</p>

                           
                              <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin9(){
                                  window.open("https://youtu.be/MfKNEC9xcE8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>TVF Tripling</b>
                              <br>
                              IMDb - 8.6
                          </div>
                      
                    </div>
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/99.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Brooklyn Nine-Nine</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Ray Holt, an eccentric commanding officer, and his diverse and quirky team of odd detectives solve crimes in Brooklyn, New York City.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin10(){
                                  window.open("https://youtu.be/icTOP9F17pU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Brooklyn Nine-Nine</b>
                              <br>
                              IMDb - 8.4
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
                    <li class="footer-middle-list-item"><a href="home.html">Enjoy Latest Movies</a> </li>
                    <li class="footer-middle-list-item"><a href="web-series.html">Watch Web-Series</a> </li>
                    <li class="footer-middle-list-item"><a href="kids.html">Everything for Kids</a> </li>
                    <li class="footer-middle-list-item"><a href="news.html">Coming soon</a> </li>
                    <li class="footer-middle-list-item"><a href="premium.html">Get Premium Subscription</a> </li>
                    <li class="footer-middle-list-item"><a href="faq.html">FAQ</a> </li>
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
<!----------------------------scroll to top button-->
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
