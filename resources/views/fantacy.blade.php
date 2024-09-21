@extends('layout.master')
@section('title','fantacypage')
@section('content')

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



        <div class="maincontainer">
            <div class="container">
                <div id="movies" class="row"></div>
            </div>
            <hr>
            <h2 style="color:aliceblue;">Sci-Fi & Fantasy</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/twilight.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1 style="font-size: 30px;">Breaking Dawn</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                        <button class="btn_i b2_i"  title="Movies" style="color:white">2</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">4.9</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">
                      After consummating her marriage with Edward, Bella realises that she
                       has become pregnant with a child that is half-human, half-vampire.
                       Further, the unborn child has many enemies in the outside world.</p>

                    
                          <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin(){
                              window.open("https://youtu.be/PQNLfo-SOR4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Twilight: Breaking Dawn</b>
                          <br>
                          IMDb - 4.9
                      </div>
                  </div>
                </div>
              


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/inter.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Interstellar</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">2h49m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">When Earth becomes uninhabitable in the future, a farmer
                           and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.</p>

                         
                          <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin1(){
                              window.open("https://www.imdb.com/video/vi1586278169?playlistId=tt0816692&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Interstellar</b>
                            <br>
                            IMDb - 8.6
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/gravity.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Gravity</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h31m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.7</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Two astronauts work together
                          to survive after an accident leaves them stranded in space.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin2(){
                                window.open("https://www.imdb.com/video/vi2340006169?playlistId=tt1454468","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Gravity</b>
                            <br>
                            IMDb - 7.7
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/stranger.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Stranger Things</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">When a young boy disappears, his mother, a police chief and his friends
                          must confront terrifying supernatural forces in order to get him back.</p>

                            <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin3(){
                                window.open("https://www.imdb.com/video/vi2480390169?playlistId=tt4574334","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Stranger Things</b>
                            <br>
                            IMDb - 8.7
                        </div>
                    </div>
                  </div>
                



                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/kong.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Godzilla vs Kong</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2021</button>
                          <button class="btn_i b2_i"  title="Time" style="color:white">1h53m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">6.4</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against one another - the
                           fearsome Godzilla and the mighty Kong - with humanity caught in the balance.</p>

                              
                            <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin4(){
                                window.open("https://www.imdb.com/video/vi576962841?playlistId=tt5034838","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                        </div>
                      </div>
                        <div class="flim">
                            <b>Godzilla vs Kong</b>
                            <br>
                            IMDb - 6.4
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/harry.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Harry Potter Series</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2001</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">7</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">An orphaned boy enrolls in a school of wizardry, where he learns the truth about
                          himself, his family and the terrible evil that haunts the magical world.</p>

                         
                                
                            <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin5(){
                                window.open("https://www.imdb.com/title/tt0241527/?ref_=fn_al_tt_1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Harry Potter Series</b>
                            <br>
                            IMDb - 7.6
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/wanda.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Wanda Vision</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2021</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Blends the style of classic sitcoms with the MCU, in which Wanda Maximoff and Vision - two super-powered beings living their
                           ideal suburban lives - begin to suspect that everything is not as it seems.</p>

                     
                            <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin6(){
                                window.open("https://www.imdb.com/video/vi3485450265?playlistId=tt9140560","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Wanda Vision</b>
                            <br>
                            IMDb - 8
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/tenet.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Tenet</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="Time" style="color:white">2h30m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.4</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international
                           espionage on a mission that will unfold in something beyond real time.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin7(){
                                window.open("https://www.imdb.com/video/vi2051194393?playlistId=tt6723592","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Tenet</b>
                            <br>
                            IMDb - 7.4
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/witcher.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>The Witcher</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Geralt of Rivia, a solitary monster hunter, struggles to find
                          his place in a world where people often prove more wicked than beasts.</p>

                            <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin8(){
                                window.open("https://www.imdb.com/video/vi840285977?playlistId=tt5180504","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Witcher</b>
                            <br>
                            IMDb - 8.2
                        </div>
                    </div>
                  </div>
                

                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/narnia.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1 style="font-size: 30px;">The Chronicles of Narnia</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2005</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">6.9</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Four children get trapped in an unearthed land called Narnia,
                          in order to go back home, they must face dark forces and beasts.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin9(){
                                window.open("https://www.imdb.com/video/vi3727140377?playlistId=tt0363771","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Chronicles of Narnia</b>
                            <br>
                            IMDb - 6.9
                        </div>
                    </div>
                  </div>
                

                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/spider.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Spiderman</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2002</button>
                          <button class="btn_i b2_i"  title="Time" style="color:white">2h1m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Peter Parker's life changes when he is bitten by a genetically altered spider and gains superpowers. 
                            He uses his powers to help people and finds himself facing the Green Goblin, an evil maniac.</p>

                         
                              
                            <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin10(){
                                window.open("https://www.imdb.com/video/vi422553113?playlistId=tt0145487","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Spiderman</b>
                            <br>
                            IMDb - 7.3
                        </div>
                    </div>
                  </div>
                




                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/flash.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>The Flash</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">7</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">After being struck by lightning, Barry Allen wakes up from his coma to discover he's been given the
                           power of super speed, becoming the next Flash, fighting crime in Central City.</p>

                
                            <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin11(){
                                window.open("https://www.imdb.com/video/vi3478176025?playlistId=tt3107288","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Flash</b>
                            <br>
                            IMDb - 7.6
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/lord.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Lord of Rings</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2001</button>
                          <button class="btn_i b2_i"  title="Parts" style="color:white">3</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A meek Hobbit from the Shire and eight companions set out on a journey to destroy
                           the powerful One Ring and save Middle-earth from the Dark Lord Sauron.</p>

                          
                              
                            <button class="trailer_i" type="submit" value="" onclick="openWin12()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin12(){
                                window.open("https://www.imdb.com/video/vi2073101337?playlistId=tt0120737","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Lord of the Rings</b>
                            <br>
                            IMDb - 8.8
                        </div>
                    </div>
                  </div>
                

            </div>
        </div>
    </div>



  @endsection