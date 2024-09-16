@extends('layout.master')
@section('title','comedypage')

@section('content')


<div class="maincontainer">
            <div class="container">
                <div id="movies" class="row"></div>
            </div>
            <hr>
            <h2>Comedy</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                  <div class="flip-card_i">
                    <div class="flip-card-inner_i">
                      <div class="flip-card-front_i">
                          <img src="./Images/friends.jpg" alt="Avatar" style="width:250px;height:360px;">
                      </div>
                      <div class="flip-card-back_i">
                        <h1>Friends</h1>
                          <button class="btn_i b3_i"  title="Year" style="color:white">1994</button>
                          <button class="btn_i b2_i"  title="Seasons" style="color:white">10</button>
                          <button class="btn_i b1_i"  title="IMDb" style="color:white">8.9</button>
                        </span>
                        <br />
                        <br />
                      </p>

                        <p class="para_i">Follow the lives of six reckless adults living in Manhattan, as they indulge in adventures which make their lives both troublesome and happening.</p>

                       
                            <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                            <script type="text/javascript">
                              function openWin(){
                                window.open("https://youtu.be/hDNNmeeJs1Q","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                              }
                            </script><br>
                          <br>
                        <button class="btn_i b4_i">▶Play</button>
                            </div>
                      </div>
                        <div class="flim">
                            <b>Friends</b>
                            <br>
                            IMDb - 8.9
                        </div>
                    </div>
                  
                </div>


                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/big.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 44px;">The Big Bang Theory</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2007</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">12</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">The lives of four socially awkward friends, Leonard, Sheldon, Howard and Raj, take a wild turn when they meet the beautiful and free-spirited Penny.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin1(){
                                  window.open("https://youtu.be/WBb3fojgW0Q","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>The Big Bang Theory</b>
                              <br>
                              IMDb - 8.1
                          </div>
                      
                    </div>
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/rick.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Rick And Morty</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">4</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">After having been missing for nearly 20 years, Rick Sanchez suddenly arrives at daughter Beth's doorstep to move in with her and her family.</p>

                          
                              <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin2(){
                                  window.open("https://youtu.be/_uUcMwsR5hg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Rick and Morty</b>
                              <br>
                              IMDb - 9.2
                          </div>
                      
                    </div>
                  </div>


                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/php.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Phir Hera Pheri</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2006</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2h34m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">6.9</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">The lives of Raju, Shyam and Baburao change completely when they get cheated by a fraudster. Now, they must find another way to repay the loan they took from a dreaded gangster.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin3(){
                                  window.open("https://youtu.be/1rJQQCZcq2sc","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i" onclick="openMovieWin3()">▶Play</button>
                        </div>
                        <script type="text/javascript">
                            function openMovieWin3(){
                              window.open("https://youtu.be/TIQ5hrfermg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
                        </div>
                          <div class="flim">
                              <b>Phir Hera Pheri</b>
                              <br>
                              IMDb - 6.9
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

                          <p class="para_i">The series revolves around Four Bachelor Flatmates who in every episode will deal with a specific daily life bachelor related problem.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin4(){
                                  window.open("https://youtu.be/5XuimeH5hME","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                        </div>
                        <script type="text/javascript">
                            function openMovieWin43(){
                              window.open("https://youtube.com/playlist?list=PLTB0eCoUXErabI_K3mUcdiYM72o4CkWZC","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script>
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
                            <img src="./Images/mbbs.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Munna Bhai MBBS</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2003</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2h36m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Munna is a goon who sets out to fulfil his father's dream of becoming a doctor. With some help from his ally, Circuit, he enrols himself in a medical college and drives Dr Asthana up the wall.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin5(){
                                  window.open("https://youtu.be/6lCGvu-hwX4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Munna Bhai MBBS</b>
                              <br>
                              IMDb - 8.1
                          </div>
                      </div>
                    
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/tom.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 20px;">Tom and Jerry</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2021</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">1h41m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">5.3</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">A legendary rivalry reemerges when Jerry moves into New York City's finest hotel on the eve of the wedding of the century, forcing the desperate event planner to hire Tom to get rid of him. 
                              As mayhem ensues, the escalating cat-and-mouse battle soon threatens to destroy her career, the wedding, and possibly the hotel itself.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                             </div>
                             <script type="text/javascript">
                                function openWin6(){
                                  window.open("https://youtu.be/kP9TfCWaQT4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>

                        </div>
                          <div class="flim">
                              <b>Tom and Jerry</b>
                              <br>
                              IMDb - 5.3
                          </div>
                      </div>
                    
                  </div>


                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/chhal.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Chhalaang</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2h16m</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">6.8</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Montu is a lazy physical training instructor who does the bare minimum to stay employed. However, a new teacher threatens to take his job and the woman he loves.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin7(){
                                  window.open("https://youtu.be/BY-0SbSF2dE","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Chhalaang</b>
                              <br>
                              IMDb - 6.8
                          </div>
                      
                    </div>
                  </div>

                  <div class="poster">
                    <div class="flip-card_i">
                      <div class="flip-card-inner_i">
                        <div class="flip-card-front_i">
                            <img src="./Images/permanent roommates.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1 style="font-size: 25px;">Permanent Roommates</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Permanent Roommates is an Indian romantic comedy web series produced by The Viral Fever Media Labs. It was created by Arunabh Kumar, the founder of TVF, who also worked as the executive producer of the series.</p>

                          
                              <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin8(){
                                  window.open("https://youtu.be/XsOjuDh4c-o","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
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

                          <p class="para_i">TVF Tripling is an Indian web series created by The Viral Fever. It was developed by Sameer Saxena and written by Akarsh Khurana and Sumeet Vyas.</p>

                           
                              <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin9(){
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
                            <img src="./Images/99.jpg" alt="Avatar" style="width:250px;height:360px;">
                        </div>
                        <div class="flip-card-back_i">
                          <h1>Brooklyn Nine-Nine</h1>
                            <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                            <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                            <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                          </span>
                          <br />
                          <br />
                        </p>

                          <p class="para_i">Ray Holt, an eccentric commanding officer, and his diverse and quirky team of odd detectives solve crimes in Brooklyn, New York City.</p>

                            
                              <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                              <script type="text/javascript">
                                function openWin10(){
                                  window.open("https://youtu.be/icTOP9F17pU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                }
                              </script><br>
                            <br>
                        <button class="btn_i b4_i">▶Play</button>
                              </div>
                        </div>
                          <div class="flim">
                              <b>Brooklyn Nine-Nine</b>
                              <br>
                              IMDb - 8.4
                          </div>
                      </div>
                    
                  </div>

            </div>
        </div>
    </div>



@endsection