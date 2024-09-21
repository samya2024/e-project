@extends('layout.master')
@section('title','warpage')
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
background-color:red;
color:black;
border: none;
cursor: pointer;
outline: none;
padding: 6px;
border-radius: 50%;
}
#scrollToTopButton:hover, i:hover {
background-color:white;
color:red;
}
#nav:hover
{
  background-color:#e60e23!important;

}

.container {
  text-align: center;
}
.nav-item :hover{
  margin-bottom: 10px;
  
  
}
#header-nav .navbar-nav .nav-item .nav-link:hover {
  color: red;
  text-decoration: none; /* Remove underline */
  transition: color 0.3s ease, text-shadow 0.3s ease; /* Add transition effect */
  text-shadow: 0 0 10px red; /* Add glowing effect */
}

</style>
<div class="maincontainer">
            <div class="container">
                <div id="movies" class="row"></div>
            </div>
            <hr>
            <h2 style="color: aliceblue;">War & Politics</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/got.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1 style="font-size: 30px;">Game of Thrones</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
                      </span>
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Nine noble families wage war against each other in order to gain control over the mythical land of Westeros.
                         Meanwhile, a force is rising after millenniums and threatens the existence of living men.</p>

                        
                          <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin(){
                              window.open("https://youtu.be/gcTkNV5Vg1E","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br> <br>
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
                          <img src="./Images/dunkirk.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Dunkirk</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h47m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.8</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">During World War II, soldiers from the British Empire, Belgium and France try to evacuate from the town of Dunkirk during a arduous battle with German forces.</p>

                          
                          <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin1(){
                              window.open("https://www.imdb.com/video/vi3402283289?playlistId=tt5013056&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
  
                          </div>
                      </div>
                        <div class="flim">
                            <b>Dunkirk</b>
                            <br>
                            IMDb - 7.8
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/1917.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>1917</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">1h59m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Two soldiers, assigned the task of delivering a critical message to another battalion, risk their lives for the job in order to prevent them from stepping right into a deadly ambush.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin2(){
                                window.open("https://www.imdb.com/video/vi4095655705?playlistId=tt8579674&ref_=tt_pr_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> 
                          <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>

                      </div>
                        <div class="flim">
                            <b>1917</b>
                            <br>
                            IMDb - 8.3
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/ashram.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Aashram</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.7</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A police officer investigates a preacher who cons his devoted followers out of money.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin3(){
                                window.open("https://www.imdb.com/video/vi4159619353?playlistId=tt12805346&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>

                      </div>
                        <div class="flim">
                            <b>Aashram</b>
                            <br>
                            IMDb - 7.7
                        </div>
                    </div>
                  </div>
                


                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/cricket.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Inside Edge</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.0</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">The Mumbai Mavericks are playing their sixth season in the power play league. The preliminary rounds are going well, 
                            but when the team gets a new owner, the climate in the team changed devastating. Greed and fame come to the fore.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin4(){
                                window.open("https://www.imdb.com/video/vi3318333209?playlistId=tt6112414&ref_=tt_pr_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>

                      </div>
                        <div class="flim">
                            <b>Inside Edge</b>
                            <br>
                            IMDb - 8.0
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
                        <h1 style="font-size: 35px;">The Chronicles of Narnia</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2005</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">2h30m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">6.9</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">While playing, Lucy and her siblings find a wardrobe that lands them in a mystical place called Narnia. Here they realise that it was fated and they must now unite with Aslan to defeat an evil queen.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin5(){
                                window.open("https://www.imdb.com/video/vi3727140377?playlistId=tt0363771&ref_=tt_pr_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
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
                          <img src="./Images/fury.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Fury</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">2h14m</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">7.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">A grizzled tank commander makes tough decisions as he and his crew fight their way across Germany in April, 1945.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin6(){
                                window.open("https://www.imdb.com/video/vi1850190873?playlistId=tt2713180&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br><br>
                          <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Fury</b>
                            <br>
                            IMDb - 7.6
                        </div>
                    </div>
                  </div>
                
                
                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/hacksaw-ridge.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Hacksaw Ridge</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">2h19m<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">World War II American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people and becomes the first man in American history to receive the Medal of Honor without firing a shot.</p>

                          
                            <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin7(){
                                window.open("https://www.imdb.com/video/vi2608248601?playlistId=tt2119532&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>

                      </div>
                        <div class="flim">
                            <b>Hacksaw Ridge</b>
                            <br>
                            IMDb - 8.1
                        </div>
                    </div>
                  </div>
                

                <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/saving-private-ryan.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Saving Private Ryan</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">1998</button>
                          <button class="btn_i b2_i"  title="Minutes" style="color:white">2h49m<button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.</p>

                         
                            <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin8(){
                                window.open("https://www.imdb.com/video/vi1701906201?playlistId=tt0120815&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br> <br>
                          <button class="btn_i b4_i">▶Play</button>
                          </div>

                      </div>
                        <div class="flim">
                            <b>Saving Private Ryan</b>
                            <br>
                            IMDb - 8.6
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection