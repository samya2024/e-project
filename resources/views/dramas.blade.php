@extends('layout.master')
@section('title','dramaspage')


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
            <h2>Drama</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/ceo.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1 style="font-size: 35px;">Official CEOgiri</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">6.5</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Revolving around the elusive CEO of the office, essayed by India’s leading digital star, Sumeet Vyas, the drone aka D will present his worldview on corporate life. Get ready for double the drama and double the fun!</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin(){
                                window.open("https://youtu.be/lAMwsDICoaQ","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Official CEOgiri</b>
                            <br>
                            IMDb - 6.5
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/swades.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Swades</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2004</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3h30m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Mohan, an Indian expatriate employed with NASA, travels to his country to track down his beloved nanny, Kaveri. During his stay, he finds himself advocating for reform in a village.</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin1(){
                                window.open("https://youtu.be/vc7AZNWvs0M","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Swades</b>
                            <br>
                            IMDb - 8.2
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

                        <p class="para_i">The series revolves around Four Bachelor Flatmates who in every episode will deal with a specific daily life bachelor related problem. Its about their battle against an external X problem as a single team The Bachelors.</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin2(){
                                window.open("https://youtu.be/5XuimeH5hME","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
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
                          <img src="./Images/game.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1 style="font-size: 42px;">The Imitation Game</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h54m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.0</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Alan Turing, a British mathematician, joins the cryptography team to decipher the German enigma code. With the help of his fellow mathematicians, he builds a machine to crack the codes</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin3(){
                                window.open("https://youtu.be/nuPZUUED5uk","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Imitation Game</b>
                            <br>
                            IMDb - 8.0
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

                        <p class="para_i">Aspirants is a web series by The Viral Fever created by Arunabh Kumar.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin4(){
                                window.open("https://youtu.be/ViOutJ0kuJY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
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
                          <img src="./Images/mohabat.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1 style="font-size: 35px;">Mohabbatein</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2000</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3h36m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Narayan is a strict principal of Gurukul who does not believe in love and forbids his students from following their hearts. However, things take a turn when a music teacher challenges his authority.</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin5(){
                                window.open("https://youtu.be/6pbG4aVrs5E","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Mohabbatein</b>
                            <br>
                            IMDb - 7.1
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/zindagi.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Zindagi Na Milegi</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2h35m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Friends Kabir, Imran and Arjun take a vacation in Spain before Kabir's marriage. The trip turns into an opportunity to mend fences, heal wounds, fall in love with life and combat their worst fears.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin6(){
                                window.open("https://youtu.be/FJrpcDgC3zU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                        </div>
                      </div>
                        <div class="flim">
                            <b>Zindagi Na Milegi Dobara</b>
                            <br>
                            IMDb - 8.2
                        </div>
                    </div>
                  
                </div>


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/college.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>College Romance</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.9</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Three best friends look for love, laughs and some lifelong memories while attending college together.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin7(){
                                window.open("https://youtu.be/zwRhlzrJGxo","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>College Romance</b>
                            <br>
                            IMDb - 8.9
                        </div>
                    </div>
                  </div>
                

                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/dil.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Dilwale Dulhania</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">1995</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3h12m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Raj and Simran meet during a trip across Europe and the two fall in love. However, when Raj learns that Simran is already promised to another, he follows her to India to win her and her father over.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin8(){
                                window.open("https://youtu.be/oIZ4U21DRlM","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Dilwale Dulhania Le Jayenge</b>
                            <br>
                            IMDb - 8.1
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/edu.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Sex Education</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Socially awkward high school student Otis may not have much experience in the lovemaking department, but he gets good guidance on the topic in his personal sex ed course</p>

                        
                            <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin9(){
                                window.open("https://youtu.be/Hd2ldTR-WpI","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Sex Education</b>
                            <br>
                            IMDb - 8.3
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/walk.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>The Walk</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2015</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2h3m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Philippe Petit, a French street performer, dreams of performing daring stunts. He attempts to walk between the Twin Towers of the World Trade Center in New York on a tightrope.</p>


                            <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin10(){
                                window.open("https://youtu.be/GR1EmTKAWIw","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>The Walk</b>
                            <br>
                            IMDb - 7.3
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/day.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Selection Day</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.4</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">When a 14-year-old boy tries out for Mumbai's under-19 cricket team and meets his older brother's rival, everything in his world begins to change.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin11(){
                                window.open("https://youtu.be/Zudpl3PGaL0","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Selection Days</b>
                            <br>
                            IMDb - 7.4
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

                        <p class="para_i">TVF Tripling is an Indian web series created by The Viral Fever. It was developed by Sameer Saxena and written by Akarsh Khurana and Sumeet Vyas</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin12()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin12(){
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
                          <img src="./Images/milkha.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1 style="font-size: 35px;">Bhaag Milkha Bhaag</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3h9m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Milkha Singh, an Indian athlete, overcomes many agonising obstacles in order to become a world champion,</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin13()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin13(){
                                window.open("https://www.imdb.com/video/vi414165273?playlistId=tt2356180&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Bhaag Milkha Bhaag</b>
                            <br>
                            IMDb - 8.2
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/twilight.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1 style="font-size: 30px;">Twilight:Breaking Dawn</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">4.9</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">After consummating her marriage with Edward, Bella realises that she has become pregnant with a child that is half-human, half-vampire.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin14()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin14(){
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
                          <img src="./Images/room.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Permanent Roommates</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Permanent Roommates is an Indian romantic comedy web series produced by The Viral Fever Media Labs.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin15()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin15(){
                                window.open("https://youtu.be/XsOjuDh4c-o4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
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
                          <img src="./Images/dhoni.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>MS Dhoni</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">3h40m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.9</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">M S Dhoni, a boy from Ranchi, aspires to play cricket for India. Though he initially tries to please his father by working for the Indian Railways, he ultimately decides to chase his dreams.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin16()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin16(){
                                window.open("https://youtu.be/6L6XqWoS8tw","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Ms Dhoni : The Untold Story</b>
                            <br>
                            IMDb - 7.9
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

@endsection