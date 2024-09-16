@extends('layout.master')
@section('title','horrorpage')


@section('content')
<style>
  #scrollToTopButton{
      background-color:goldenrod;
      border: none;
      border-radius: 50%;
      bottom: 40px;
      color:black;
      cursor: pointer;
      font-size: 25px;
      height: 50px;
      right: 25px;
      outline: none;
      padding: 6px;    
      position:fixed;
      width: 50px;
      z-index: 99;
}
#scrollToTopButton:hover, i:hover {
    background-color:white;
    color:goldenrod;  
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
    display: flex;
    justify-content: center;
    width: 60px;
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
    display: flex;
    justify-content: center;
    width: 50px;
  }
}

.container {
  text-align: center;
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
</style>

<div class="scroll-bar">
<div class="maincontainer">
            <div class="container">
                <div id="movies" class="row"></div>
            </div>
            <hr>
            <h2>Horror</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/ghoul.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Ghoul</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.1</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">In a totalitarian near-future India, a mysterious prisoner is sent to a remote military interrogation
                        center where he turns the tables on his captors by exposing their most shameful secrets and unleashing a demon from Arabic folklore.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin(){
                              window.open("https://www.imdb.com/video/vi1724496665?playlistId=tt5909930","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br> <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Ghoul</b>
                          <br>
                          IMDb - 7.1
                      </div>
                  </div>
                </div>
              

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/it.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>IT</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.3</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">In the summer of 1989, a group of bullied kids band together
                        to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.</p>


                          <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin1(){
                              window.open("https://www.imdb.com/video/vi1396095257?playlistId=tt1396484","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br> <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>IT</b>
                          <br>
                          IMDb - 7.3
                      </div>
                  </div>
                
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/veronica.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Veronica</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1h46m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">6.2</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Madrid, 1991. A teen girl finds herself besieged
                        by an evil supernatural force after she played Ouija with two classmates.</p>

                        
                          <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin2(){
                              window.open("https://www.imdb.com/video/vi231914009?playlistId=tt5862312","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br> <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Veronica</b>
                          <br>
                          IMDb - 6.2
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

                      <p class="para_i">Three young friends
                        in Goa plan to search an old villa for ghosts, but when a new family moves in, the home's buried past resurfaces in chilling ways.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin3(){
                              window.open("https://www.imdb.com/video/vi2871966745?playlistId=tt9310372","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br> 
                        <br>
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


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/A_Quiet_Place.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1 style="font-size: 30px;">A Quiet Place</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.5</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">A family struggles for survival in a world where most humans have been killed by blind but noise-sensitive creatures. 
                          They are forced to communicate in sign language to keep the creatures at bay.</p>

  
                          <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin4(){
                              window.open("https://www.imdb.com/video/vi3446716441?playlistId=tt6644200&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br><br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>A Quiet Place</b>
                          <br>
                          IMDb - 7.5
                      </div>
                  </div>
                </div>
              


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/Get_Out.jpeg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Get Out</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1h44m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.7</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Chris, an African-American man, decides to visit his Caucasian girlfriend's parents during a weekend getaway. 
                          Although they seem normal at first, he is not prepared to experience the horrors ahead.</p>

                           
                          <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin5(){
                              window.open("https://www.imdb.com/video/vi2005186073?playlistId=tt5052448&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br><br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Get Out</b>
                          <br>
                          IMDb - 7.7
                      </div>
                  </div>
                </div>



              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/Hereditary.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Hereditary</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">2h7m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.3</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">When the matriarch of the Graham family passes away, her daughter and grandchildren begin to unravel cryptic 
                          and increasingly terrifying secrets about their ancestry, trying to outrun the sinister fate they have inherited.</p>

                              
                          <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin6(){
                              window.open("https://www.imdb.com/video/vi837793817?playlistId=tt7784604&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br><br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                    </div>
                      <div class="flim">
                          <b>Hereditary</b>
                          <br>
                          IMDb - 7.3
                      </div>
                  </div>
                </div>
              


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/The_Shining.jpeg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>The Shining</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">1980</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">2h26m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Jack and his family move into an isolated hotel with a violent past. 
                          Living in isolation, Jack begins to lose his sanity, which affects his family members.</p>

         
                          <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin7(){
                              window.open("https://www.imdb.com/video/vi2689121305?playlistId=tt0081505&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br><br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>The Shining</b>
                          <br>
                          IMDb - 8.4
                      </div>
                  </div>
                </div>
              


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/Conjuring.jpeg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>The Conjuring</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">3</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.5</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">The Perron family moves into a farmhouse where they experience paranormal phenomena. 
                          They consult demonologists, Ed and Lorraine Warren, to help them get rid of the evil entity haunting them.</p>
 
                          <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin8(){
                              window.open("https://www.imdb.com/video/vi3819874585?playlistId=tt1457767&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br><br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>The Conjuring</b>
                          <br>
                          IMDb - 7.5
                      </div>
                  </div>
                
              </div>


            </div>
        </div>
    </div>



    <!--------------scroll back to top button-->
    <button  id="scrollToTopButton" title="Go to top" class="ml-5" >
        <i class="fa fa-angle-double-up" aria-hidden="true" ></i>
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


@endsection