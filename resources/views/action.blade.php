
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
            <h2 style="color:aliceblue">Action</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/got.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1 style="font-size: 35px;">Game of Thrones</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
                      
                      <br>
                      <br>
                    </p>

                      <p class="para_i">Nine noble families wage war against each other in order to gain control over the mythical land of Westeros.
                         Meanwhile, a force is rising after millenniums and threatens the existence of living men.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin(){
                              window.open("https://youtu.be/gcTkNV5Vg1E","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Game of Thrones</b>
                          <br>
                          IMDb - 9.2
                      </div>
                  </div>
                </div>
              
              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/zinda.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Zindabaad</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Zindabaad is a political - action thriller, jointly produced by Vikram Bhatt's VB on the web and Jio cinema</p>

                     
                          <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin1(){
                              window.open("https://youtu.be/xIKkJk3qvjU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Zindabaad</b>
                          <br>
                          IMDb - 7.4
                      </div>
                  
                </div>
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/vikings.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Vikings</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">5</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.5</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Ragnar Lothbrok, a legendary Norse hero, is a mere farmer who rises up to become a fearless warrior and commander of the Viking tribes with the support of his equally ferocious family.</p>

                      
                          <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin2(){
                              window.open("https://youtu.be/9GgxinPwAGc","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Vikings</b>
                          <br>
                          IMDb - 8.5
                      </div>
                  </div>
                
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/gangs of wassepur.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Gangs of Wasseypur</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h40m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Gangs of Wasseypur is a 2012 Indian two-part crime film produced and directed by Anurag Kashyap, and written by Kashyap and Zeishan Quadri.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin3(){
                              window.open("https://youtu.be/j-AkWDkXcMY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Gangs of Wasseypur</b>
                          <br>
                          IMDb - 8.2
                      </div>
                  
                </div>
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/arrow.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Arrow</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.5</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">After mastering the skill of archery on a deserted island, multi-millionaire playboy Oliver Queen returns to his city to take on the vigilante persona of Arrow to fight crime and corruption.</p>

                 
                          <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin4(){
                              window.open("https://youtu.be/ofzPONG8hDU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Arrow</b>
                          <br>
                          IMDb - 7.5
                      </div>
                  </div>
                
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/apharan.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Apharan</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Rudra, a senior inspector, is lured into kidnapping a young girl at the behest of her mother</p>

                
                          <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin5(){
                              window.open("https://youtu.be/CxNYucYVEkQ","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Apharan</b>
                          <br>
                          IMDb - 8.3
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/war.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>War</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h34m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">6.5</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Kabir, a secret agent, goes rogue after a mission to catch a terrorist goes awry. However, his boss sends Khalid, another agent and his student, to track him down.</p>

            
                          <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin6(){
                              window.open("https://youtu.be/tQ0mzXRk-oM","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>War</b>
                          <br>
                          IMDb - 6.5
                      </div>
                  </div>
                
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/kgf.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>KGF</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h50m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Rocky, a young man, seeks power and wealth in order to fulfil a promise to his dying mother. His quest takes him to Mumbai, where he gets involved with the notorious gold mafia.</p>

                     
                          <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin7(){
                              window.open("https://youtu.be/-KfsY-qwBS0","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>KGF</b>
                          <br>
                          IMDb - 8.3
                      </div>
                  </div>
                
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/django.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Django Unchained</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h45m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">When Django, a slave, is freed, he joins forces with a bounty hunter to rescue his wife, who has been enslaved by Calvin, a hard-hearted plantation owner.</p>

                       
                          <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin8(){
                              window.open("https://youtu.be/_iH0UBYDI4g","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Django Unchained</b>
                          <br>
                          IMDb -8.4
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/endgame.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Avengers : Endgame</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">3h2m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin9(){
                              window.open("https://youtu.be/TcMBFSGVi1c","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Avengers : Endgame</b>
                          <br>
                          IMDb - 8.4
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/infinity.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Avengers : Infinity War</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h40m<button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">The Avengers must stop Thanos, an intergalactic warlord, from getting his hands on all the infinity stones. However, Thanos is prepared to go to any lengths to carry out his insane plan.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin10(){
                              window.open("https://youtu.be/6ZfuNTqbHE8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                        </div>
                    </div>
                      <div class="flim">
                          <b>Avengers : Infinity War</b>
                          <br>
                          IMDb - 8.4
                      
                  </div>
                </div>
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/ter.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Terminator Series</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">1984</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">1h48m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.0</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">A cyborg assassin is sent back in time to kill Sarah, a waitress, in a bid to stop her son who will wage a long war against his enemy in the future unless the course of history is altered.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin11(){
                              window.open("https://youtu.be/k64P4l2Wmeg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Terminator Series</b>
                          <br>
                          IMDb - 8.0
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/star.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Star Wars Series</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">1977</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h5m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">After Princess Leia, the leader of the Rebel Alliance, is held hostage by Darth Vader, Luke and Han Solo must free her and destroy the powerful weapon created by the Galactic Empire.</p>

             
                          <button class="trailer_i" type="submit" value="" onclick="openWin12()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin12(){
                              window.open("https://youtu.be/vZ734NWnAHA","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Star Wars Series</b>
                          <br>
                          IMDb - 8.6
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

    <!----------------------Scroll to top button--------------------------------------------->
    <button  id="scrollToTopButton" title="Go to top" class="ml-5" >
      <i class="fa fa-angle-double-up" aria-hidden="true" ></i>
  </button>
  <script>
    $(document).ready(function(){
      var scrollTopButton = document.getElementById("scrollToTopButton");
      // window.onscroll = function () { scrollFunction() };

    //   function scrollFunction() {
    //   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //     scrollTopButton.style.display = "block";
    //   } else {
    //     scrollTopButton.style.display = "none";
    //   }
    // }

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
     

  </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="./static/script.js"></script>
</body>

</html>
