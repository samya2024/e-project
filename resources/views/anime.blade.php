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
            <h2>ANIME</h2>
            <hr>
            <div class="container">
                <div id="movies" class="row"></div>
            </div>
            <hr>



            <div class="container" id="TV shows">

                <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/deathnote.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Death Note</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2006</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">37<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                          </div>
                            
                          
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">An intelligent high school student goes on a secret crusade to eliminate criminals from the world after discovering a notebook capable of killing anyone whose name is written into it.</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin(){
                                  window.open("https://youtu.be/NlJZ-YgAt-c","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                            <button class="b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>DeathNote</b>
                              <br>
                              IMDb - 9.0
                          </div>
                      </div>
                    
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/naruto.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Naruto</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2002</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">220<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                        </div>  
                        
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the village's leader and strongest ninja.</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin1(){
                                  window.open("https://youtu.be/-G9BqkgZXRA","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                             <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Naruto</b>
                              <br>
                              IMDb - 8.3
                          </div>
                      
                    </div>
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/Aot.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Attack on Titan</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">75<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                        </div>
                          
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin2(){
                                  window.open("https://youtu.be/o_go-8TFBXs","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Attack on Titan</b>
                              <br>
                              IMDb - 9.0
                          </div>
                      
                    </div>
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/demonSlayer.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Demon Slayer</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">26<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
                        </div>
                          
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin3(){
                                  window.open("https://youtu.be/VQGCKyvzIM4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Demon Slayer</b>
                              <br>
                              IMDb - 8.7
                          </div>
                      
                    </div>
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/one-punch-man.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">One Punch Man</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2015</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">24<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
                        </div>
                          
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i">The story of Saitama, a hero that does it just for fun & can defeat his enemies with a single punch.</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin4(){
                                  window.open("https://youtu.be/2JAElThbKrI","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                            <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>One Punch Man</b>
                              <br>
                              IMDb - 8.8
                          </div>
                      </div>
                    
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/tokyo.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Tokyo Ghoul</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">12<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">7.8</button>
                        </div>
                          
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -40px;">A Tokyo college student is attacked by a ghoul, a superpowered human who feeds on human flesh. He survives, but has become part ghoul and becomes a fugitive on the run.</p>
          
                           
                              <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin5(){
                                  window.open("https://youtu.be/ETHpMMV8rJU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Tokyo Ghoul</b>
                              <br>
                              IMDb - 7.8
                          </div>
                      
                    </div>
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/fullMetal.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Fullmetal Alchemist</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2003</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">51<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.5</button>
                        </div>
                        
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i" style="margin-top: -40px;">When a failed alchemical ritual leaves brothers Edward and Alphonse Elric with severely damaged bodies, they begin searching for the one thing that can save them, the fabled philosopher's stone.</p>
          
                           
                              <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin6(){
                                  window.open("https://youtu.be/2Dsa8j_usqI","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Fullmetal Alchemist</b>
                              <br>
                              IMDb - 8.5
                          </div>
                      
                    </div>
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/onePiece.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>One Piece</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">1999</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">981<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
                        </div>
                        
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">Follows the adventures of Monkey D. Luffy and his pirate crew in order to find the greatest treasure ever left by the legendary Pirate, Gold Roger. The famous mystery treasure named "One Piece".</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin7(){
                                  window.open("https://youtu.be/S8_YwFLCh4U","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>One Piece</b>
                              <br>
                              IMDb - 8.8
                          </div>
                      </div>
                    
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/hunter.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Hunter x Hunter</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">148<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                        </div>
                        
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">Gon Freecss aspires to become a Hunter, an exceptional being capable of greatness. With his friends and his potential, he seeks for his father who left him when he was younger.</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin8(){
                                  window.open("https://youtu.be/d6kBeJjTGnY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Hunter x Hunter</b>
                              <br>
                              IMDb - 9.0
                          
                      </div>
                    </div>
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/code-geass.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Code Geass</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2006</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">50<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
                        </div> 
                        
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">After being given a mysterious power to control others, an outcast prince becomes the masked leader of the rebellion against an all powerful empire.</p>
          
                           
                              <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin9(){
                                  window.open("https://youtu.be/v-AGjx0N24U","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i" onclick="openMovieWin9()">▶Play</button>
                        </div>
                        <script type="text/javascript">
                            function openMovieWin9(){
                              window.open("https://youtube.com/playlist?list=PLxSscENEp7JhJi1De2SBVmkdPbKKUHZcg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
                        </div>
                          <div class="flim">
                              <b>Code Geass</b>
                              <br>
                              IMDb - 8.7
                          </div>
                      </div>
                    
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/gintama.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Gintama</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2005</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">367<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                        </div> 
                        
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -35px;">In an era where aliens have invaded and taken over feudal Tokyo, an unemployed samurai finds work however he can.</p>
          
                          
                              <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin10(){
                                  window.open("https://youtu.be/YQC3ot0IjiA","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Gintama</b>
                              <br>
                              IMDb - 8.7
                          
                      </div>
                    </div>
                  </div> 
                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/psycho-pass.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 30px;">Psycho Pass</h1>
                          <div class="btnContainer">
                            <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                            <button class="btn_i b2_i"  title="Episodes" style="color:white">41<button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </div> 
                        
                          <br />
                          <br />
                        </p>
          
                          <p class="para_i"style="margin-top: -40px;">Believing in humanity and order, policewoman Akane Tsunemori obeys the ruling, computerized, precognitive Sibyl System. But when she faces a criminal mastermind who can elude this "perfect" system, she questions both Sibyl and herself</p>
          
                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin11(){
                                  window.open("https://youtu.be/YzuJnyebc40","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Psycho Pass</b>
                              <br>
                              IMDb - 8.2
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
                <a href="index.html"><img class="footer-logo" src="Images/TheaterLogoFinal.png" alt="" width="30" height="24"></a>
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
                    <li class="footer-middle-list-item"><a href="index.html">Enjoy Latest Movies</a> </li>
                    <li class="footer-middle-list-item"><a href="web-series.html">Watch Web-Series</a> </li>
                    <li class="footer-middle-list-item"><a href="kids.html">Everything for Kids</a> </li>
                    <li class="footer-middle-list-item"><a href="news.html">Coming soon</a> </li>
                    <li class="footer-middle-list-item"><a href="index.html">Get Premium Subscription</a> </li>
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
