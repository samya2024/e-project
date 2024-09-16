@extends('layout.master')
@section('title','animepage')

@section('content')

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


@endsection