@extends('layout.master')
@section('title','popularpage')
@section('content')
<!------------------------Scroll to top button------------------------------------------------>
<style>
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

<div class="maincontainer">
            <div class="container">
                <div id="movies" class="row"></div>
            </div>
            <hr>
            <h2 style="color:aliceblue;">Popular</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/breaking.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1 style="font-size: 35px;">Breaking Bad</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2008</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">5</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.5</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making business to repay his medical debts. 
                          His priorities begin to change when he partners with Jesse.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin(){
                              window.open("https://www.imdb.com/video/vi338798873?playlistId=tt0903747","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br><br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Breaking Bad</b>
                          <br>
                          IMDb - 9.5
                      </div>
                  </div>
                </div>
              

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/mirzapur.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Mirzapur</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Akhandanand Tripathi made millions exporting carpets and became the mafia boss of Mirzapur. 
                          His son Munna, an unworthy, power-hungry heir, stops at nothing to continue his father's legacy.</p>

                       
                          <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin1(){
                              window.open("https://www.imdb.com/video/vi2155985433","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br> <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Mirzapur</b>
                          <br>
                          IMDb - 8.4
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

                      <p class="para_i">A criminal mastermind who goes by "The Professor" has a plan to pull off the biggest heist in recorded history -- 
                          to print billions of euros in the Royal Mint of Spain. </p>

                     
                          <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin2(){
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

                      <p class="para_i">Living idealized suburban lives, super-powered beings Wanda and Vision begin to suspect that everything is not as it seems.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin3(){
                              window.open("https://www.imdb.com/video/vi3485450265?playlistId=tt9140560&ref_=tt_pr_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
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
                        <img src="./Images/tvf.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Pitchers</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2015</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.1</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">TVF Pitchers is a web series created by The Viral Fever and developed by Arunabh Kumar.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin4(){
                              window.open("https://www.imdb.com/video/vi2803612441?playlistId=tt4742876&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Pitchers</b>
                          <br>
                          IMDb - 9.1
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

                      <p class="para_i">Based on characters created by Neil Gaiman, Sam Kieth and Mike Dringenberg, 
                          this series follows Lucifer, the original fallen angel, who has become dissatisfied with his life in hell.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin5(){
                              window.open("https://www.imdb.com/video/vi3234640665","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
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
                        <img src="./Images/upsc.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Aspirants</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2021</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.7</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Aspirants is a 2021 Indian Hindi-language coming-of-age web series produced by The Viral Fever and created by Arunabh Kumar and Shreyansh Pandey, 
                          written by Deepesh Sumitra Jagdish and was directed by Apoorv Singh Karki. </p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin6(){
                              window.open("https://www.imdb.com/video/vi4169842713","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br><br>
                        <button class="btn_i b4_i" onclick="openMovieWin6()">▶Play</button>
                        </div>
                        <script type="text/javascript">
                            function openMovieWin6(){
                              window.open("https://youtube.com/playlist?list=PLTB0eCoUXErY_KvRNKOERQtYSDPjOb8jw","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
                    </div>
                      <div class="flim">
                          <b>Aspirants</b>
                          <br>
                          IMDb - 9.7
                      </div>
                  
                </div>
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/sherlock.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Sherlock</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2010</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">3</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.1</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Dr Watson, a former army doctor, finds himself sharing a flat with Sherlock Holmes, an eccentric individual with a knack for solving crimes. 
                          Together, they take on the most unusual cases.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin7(){
                              window.open("https://www.imdb.com/video/vi1337965849","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Sherlock</b>
                          <br>
                          IMDb - 9.1
                      </div>
                  </div>
                </div>
              



              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/scam.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Scam 1992</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.5</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Harshad Mehta took the stock market to dizzying heights and had a catastrophic downfall.</p>

                     
                          <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin8(){
                              window.open("https://www.imdb.com/video/vi3985359129","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Scam 1992 : The Harshad Mehta Story</b>
                          <br>
                          IMDb - 9.5
                      </div>
                  </div>
                </div>
              


            </div>
        </div>
    </div>

@endsection