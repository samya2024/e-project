@extends('layout.master')
@section('title','romancepage')
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
            <h2 style="color:aliceblue;">Romance ❤ </h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/kissing booth.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>The Kissing Booth</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">3<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A high school student is forced to confront her secret crush at a kissing booth.</p>

                       
                            <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin(){
                                window.open("https://www.imdb.com/video/vi3378427929?playlistId=tt3799232","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>The Kissing Booth</b>
                            <br>
                            IMDb - 6
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/kabir singh.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Kabir Singh</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">2h52m<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">An exalted but short-fused surgeon plunges into a spiral of drugs, alcohol and rage after his intense relationship with his girlfriend turbulently ends.</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin1(){
                                window.open("https://www.imdb.com/video/vi518568985?playlistId=tt8983202","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Kabir Singh</b>
                            <br>
                            IMDb - 7.1
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/little things.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Little Things</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                          <button class="btn_i b2_i"  title="seasons" style="color:white">4<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A cohabiting couple in their 20s navigate the ups and downs of work, modern-day relationships and finding themselves in contemporary Bengaluru.</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin2(){
                                window.open("https://www.imdb.com/video/vi4087396889?playlistId=tt6522580","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Little Things</b>
                            <br>
                            IMDb - 8.3
                        </div>
                    </div>
                  
                </div>


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/mismatched.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Mismatched</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="seasons" style="color:white">1<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">5.5</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">After being set-up by their families, two teenagers strike up a tentative friendship at their summer programme.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin3(){
                                window.open("https://www.imdb.com/video/vi2328346905?playlistId=tt12719250","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Mismatched</b>
                            <br>
                            IMDb - 5.5
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/bandish.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Bandish Bandits</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="seasons" style="color:white">1<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Indian classical singer Radhe and pop star Tamanna.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin4(){
                                window.open("https://www.imdb.com/video/vi1213644313?playlistId=tt9814458","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Bandish Bandits</b>
                            <br>
                            IMDb - 8.7
                        
                    </div>
                  </div>
                </div>


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/the notebook.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>The Notebook</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2004/button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">2h4m<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.8</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Duke reads the story of Allie and Noah, two lovers who were separated by fate, to Ms Hamilton, an old woman who suffers from dementia, on a daily basis out of his notebook.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin5(){
                                window.open("https://www.imdb.com/video/vi2603746073?playlistId=tt0332280","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>The Notebook</b>
                            <br>
                            IMDb - 7.8
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/lukka.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Lukka Chuppi</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">2h6m<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">6.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Pretending to be married in order to cohabitate, a small-town couple lands in endless awkward situations to hide the truth from their orthodox families.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin6(){
                                window.open("https://www.imdb.com/video/vi1667218457?playlistId=tt8908002","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Lukka Chuppi</b>
                            <br>
                            IMDb - 6.3
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/bridgerton.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Bridgerton</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="seasons" style="color:white">1<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Wealth, lust, and betrayal set against the backdrop of Regency-era England, seen through the eyes of the powerful Bridgerton family.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin7(){
                                window.open("https://www.imdb.com/video/vi1143783705?playlistId=tt8740790","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>
                      </div>
                        <div class="flim">
                            <b>Bridgerton</b>
                            <br>
                            IMDb - 7.3
                        </div>
                    </div>
                  </div>
                

            </div>
        </div>
    </div>

  @endsection