@extends('layout.master')
@section('title','suspencepage')
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
            <h2 style="color:aliceblue;">Suspense & Thriller</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/wed.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>A Wednesday</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2008</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h44m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Prakash Rathod, a retired police commissioner recounts the most memorable case of his career wherein he was informed about a bomb scare in Mumbai by an ordinary commoner.</p>

                            <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin(){
                                window.open("https://www.imdb.com/video/vi1117764377?playlistId=tt1280558&ref_=tt_pr_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i" onclick="openMovieWin()">▶Play</button>
                          </div>
                          <script type="text/javascript">
                            function openMovieWin(){
                              window.open("https://youtu.be/pmnnlAUDOfk","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
                      </div>
                        <div class="flim">
                            <b>A Wednesday</b>
                            <br>
                            IMDb - 8.1
                        
                    </div>
                  </div>
                </div>


              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/drishyam.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Drishyam</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2015</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2h43m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">When the disappearance of a policewoman's son threatens to ruin Vijay's family, he leaves no stone unturned in order to shield his family.</p>

                            <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin1(){
                                window.open("https://www.imdb.com/video/vi1972222745?playlistId=tt4430212&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i" onclick="openMovieWin1()">▶Play</button>
                          </div>
                          <script type="text/javascript">
                            function openMovieWin1(){
                              window.open("https://youtu.be/udCFbqXjrZE","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
                      </div>
                        <div class="flim">
                            <b>Drishyam</b>
                            <br>
                            IMDb - 8.2
                        </div>
                    </div>
                  </div>
                


              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/family.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1 style="font-size: 35px;">The Family Man</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Srikant Tiwari is a middle-class man who also serves as a world-class spy. Srikant tries to balance his familial responsibilities 
                            with the demands of the highly secretive special cell of the National Intelligence Agency that he is working for.</p>

         
                            
                            <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                            </div>
                            <script type="text/javascript">
                              function openWin2(){
                                window.open("https://www.imdb.com/video/vi1674035225?playlistId=tt9544034&ref_=tt_pr_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>

                      </div>
                        <div class="flim">
                            <b>The Family Man</b>
                            <br>
                            IMDb - 8.8
                        </div>
                    </div>
                  </div>
                


              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/money.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Money Heist</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A criminal mastermind who goes by "The Professor" has a plan to pull off the biggest heist in recorded history -- to print billions of euros in the Royal Mint of Spain. </p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin3(){
                                window.open("https://www.imdb.com/video/vi3823876889","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Money Heist</b>
                            <br>
                            IMDb - 8.3
                        </div>
                    </div>
                  </div>
                


              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/luci.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Lucifier</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">5</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Based on characters created by Neil Gaiman, Sam Kieth and Mike Dringenberg, this series follows Lucifer, the original fallen angel, who has become dissatisfied with his life in hell. </p>

                      
                            <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin4(){
                                window.open("https://www.imdb.com/video/vi3234640665","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Lucifier</b>
                            <br>
                            IMDb - 8.1
                        </div>
                    </div>
                  </div>
                


              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/hunger.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>The Hunger Games</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2h23m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Katniss volunteers to replace her sister in a tournament that ends only when one participant remains. Pitted against contestants who have trained for this all their life, she has little to rely on.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin5(){
                                window.open("https://www.imdb.com/video/vi3358368281?playlistId=tt1392170&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Hunger Games</b>
                            <br>
                            IMDb - 7.2
                        </div>
                    </div>
                  </div>
                


              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/breathe.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Breathe</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">This thriller explores the lives of ordinary men faced with extraordinary circumstances.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin6(){
                                window.open("https://www.imdb.com/video/vi2549725209?playlistId=tt6466208&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Breathe</b>
                            <br>
                            IMDb - 8.3
                        </div>
                    </div>
                  </div>
                


              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/asur.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Asur</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.5</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">The series is set in the context of a modern day serial killer having religious ties.</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin7(){
                                window.open("https://www.imdb.com/video/vi3937386009?playlistId=tt11912196&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Asur : Welcome to your dark side</b>
                            <br>
                            IMDb - 8.5
                        </div>
                    </div>
                  </div>
                

              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/type.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Typewriter</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">6.5</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A haunted house and an old book stir the imaginations of young wannabe ghost hunters, but when a new family move to town, the home's buried secrets resurface.</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin8(){
                                window.open("https://www.imdb.com/video/vi2871966745?playlistId=tt9310372&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Typewriter</b>
                            <br>
                            IMDb - 6.5
                        </div>
                    </div>
                  </div>
                


            </div>
        </div>
    </div>



   @endsection