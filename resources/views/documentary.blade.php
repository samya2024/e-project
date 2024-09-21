@extends('layout.master')
@section('title','documentarypage')
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
            <h2 style="color:aliceblue;">Documentary</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/chernobyl.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Chernobyl</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">9.4</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">In April 1986, the city of Chernobyl in the Soviet Union suffers one of the worst nuclear disasters in the history of mankind. Consequently, many heroes put their lives on the line to save Europe.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin(){
                                window.open("https://youtu.be/s9APLXM9Ei8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Chernobyl</b>
                            <br>
                            IMDb - 9.4
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/social.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>The Social Dilemma</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h34m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Tech experts sound the alarm on the dangerous human impact of social networking.</p>

                       
                            <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin1(){
                                window.open("https://youtu.be/uaaC57tcci0","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Social Dilemma</b>
                            <br>
                            IMDb - 7.6
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/sachin.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Sachin</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2h18m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Sachin Tendulkar recounts his journey of becoming one of the most famous names in cricket with the help of archival footage, re-enactments and clips of his family, friends and colleagues</p>

                     
                            <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin2(){
                                window.open("https://youtu.be/8gTeE6pa4Kg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Sachin: A Billion Dreams</b>
                            <br>
                            IMDb - 8.6
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/Miss_Americana.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Miss Americana</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h26m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.4</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Pop singer Taylor Swift reveals intimate details of her life while showcasing backstage and onstage concert footage.</p>

        
                            <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin3(){
                                window.open("https://www.imdb.com/video/vi1181204249?playlistId=tt11388580&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Miss Americana</b>
                            <br>
                            IMDb - 7.4
                        </div>
                    </div>
                  </div>
                


               <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/My_Octopus_Teacher.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>My Octopus Teacher</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h30m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A diver swims with an octopus that lives in a kelp forest off the coast of South Africa.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin4(){
                                window.open("https://www.imdb.com/video/vi3668033817?playlistId=tt12888462&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>My Octopus Teacher</b>
                            <br>
                            IMDb - 8.1
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/Fyre.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Fyre</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h37m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">The history of the Fyre Music Festival, from its creation through its unraveling.</p>

          
                              
                            <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin5(){
                                window.open("https://www.imdb.com/video/vi2433858073?playlistId=tt9412098&ref_=tt_pr_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Fyre</b>
                            <br>
                            IMDb - 7.2
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/David_Attenborough.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>David Attenborough</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h54m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">In his 93 years, Attenborough has visited every continent on the globe, 
                            exploring the wild places of the planet and documenting the living world in all its variety and wonder. </p>

 
                               
                            <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin6(){
                                window.open("https://www.imdb.com/video/vi2863448345?playlistId=tt11989890&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>David Attenborough: A Life on Our Planet</b>
                            <br>
                            IMDb - 9.0
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/Collective.jpeg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Collective</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h49m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Journalists uncover health care fraud in the wake of a deadly nightclub fire in Bucharest, Romania, in 2015.</p>

                          
                                   
                            <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin7(){
                                window.open("https://www.imdb.com/video/vi495370521?playlistId=tt10706602&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Collective</b>
                            <br>
                            IMDb - 8.2
                        </div>
                    </div>
                  </div>
                



                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/Dirty_Money.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Dirty Money</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">There's a cliche that says "the rich get richer," and while that may be true it's not always done through legal or moral methods. 
                            This docuseries takes a look at stories of scandal and corruption in business, exposing acts of corporate greed and corruption</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin8(){
                                window.open("https://www.imdb.com/video/vi3319642137?playlistId=tt7889220&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Dirty Money</b>
                            <br>
                            IMDb - 8.1
                        </div>
                    </div>
                  </div>
                



            </div>
        </div>
    </div>



   @endsection