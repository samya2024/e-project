
@extends('layout.master')
@section('title','actionpage')
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
            <h2 style="color:aliceblue">Action</h2>
            <hr>
            <div class="container" id="Movies">
              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/got.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1 style="font-size: 35px;">Game of Thrones</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
                      
                      <br>
                      <br>
                    </p>

                      <p class="para_i">Nine noble families wage war against each other in order to gain control over the mythical land of Westeros.
                         Meanwhile, a force is rising after millenniums and threatens the existence of living men.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin(){
                              window.open("https://youtu.be/gcTkNV5Vg1E","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
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
                        <img src="./Images/zinda.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Zindabaad</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Zindabaad is a political - action thriller, jointly produced by Vikram Bhatt's VB on the web and Jio cinema</p>

                     
                          <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin1(){
                              window.open("https://youtu.be/xIKkJk3qvjU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Zindabaad</b>
                          <br>
                          IMDb - 7.4
                      </div>
                  
                </div>
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/vikings.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Vikings</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">5</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.5</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Ragnar Lothbrok, a legendary Norse hero, is a mere farmer who rises up to become a fearless warrior and commander of the Viking tribes with the support of his equally ferocious family.</p>

                      
                          <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin2(){
                              window.open("https://youtu.be/9GgxinPwAGc","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Vikings</b>
                          <br>
                          IMDb - 8.5
                      </div>
                  </div>
                
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/gangs of wassepur.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Gangs of Wasseypur</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h40m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Gangs of Wasseypur is a 2012 Indian two-part crime film produced and directed by Anurag Kashyap, and written by Kashyap and Zeishan Quadri.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin3(){
                              window.open("https://youtu.be/j-AkWDkXcMY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Gangs of Wasseypur</b>
                          <br>
                          IMDb - 8.2
                      </div>
                  
                </div>
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/arrow.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Arrow</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">7.5</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">After mastering the skill of archery on a deserted island, multi-millionaire playboy Oliver Queen returns to his city to take on the vigilante persona of Arrow to fight crime and corruption.</p>

                 
                          <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin4(){
                              window.open("https://youtu.be/ofzPONG8hDU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                          <button id="bookTicketBtn">Book Tickets</button>
    
    <div id="bookingForm" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="ticketForm">
                <!-- Movie Title -->
                <label for="movieTitle">Movie Title:</label>
                <select id="movieTitle" name="movieTitle">
                    <option value="Movie 1">Movie 1</option>
                    <option value="Movie 2">Movie 2</option>
                </select><br><br>

                <!-- Show Timings -->
                <label for="showTime">Show Time:</label>
                <select id="showTime" name="showTime">
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="1:00 PM">1:00 PM</option>
                    <option value="4:00 PM">4:00 PM</option>
                    <option value="7:00 PM">7:00 PM</option>
                </select><br><br>

                <!-- Language Options -->
                <label for="language">Language:</label>
                <select id="language" name="language">
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Spanish">Spanish</option>
                </select><br><br>

                <!-- 2D/3D Selection -->
                <label for="format">Format:</label>
                <select id="format" name="format">
                    <option value="2D">2D</option>
                    <option value="3D">3D</option>
                </select><br><br>

                <!-- Cinema Selection -->
                <label for="cinema">Cinema:</label>
                <select id="cinema" name="cinema">
                    <option value="Cinema 1">Cinema 1</option>
                    <option value="Cinema 2">Cinema 2</option>
                </select><br><br>

                <!-- Ticket Price -->
                <label for="price">Ticket Price:</label>
                <input type="text" id="price" name="price" readonly value="$10"><br><br>

                <!-- Seat Number -->
                <label for="seats">Number of Seats:</label>
                <input type="number" id="seats" name="seats" min="1" max="10"><br><br>

                <!-- Seat Type -->
                <label for="seatType">Seat Type:</label>
                <select id="seatType" name="seatType">
                    <option value="Regular">Regular</option>
                    <option value="VIP">VIP</option>
                </select><br><br>

                <!-- Reserved Seats -->
                <label for="reservedSeats">Reserved Seats:</label>
                <input type="text" id="reservedSeats" name="reservedSeats" placeholder="Enter seat numbers"><br><br>

                <!-- Food & Beverages -->
                <label for="food">Food & Beverages:</label>
                <select id="food" name="food">
                    <option value="Popcorn">Popcorn</option>
                    <option value="Cold Drink">Cold Drink</option>
                    <option value="Combo (Popcorn + Drink)">Combo (Popcorn + Drink)</option>
                </select><br><br>

                <!-- Promo Code -->
                <label for="promoCode">Promo Code:</label>
                <input type="text" id="promoCode" name="promoCode" placeholder="Enter promo code (if any)"><br><br>

                <!-- Submit Button -->
                <button type="submit">Confirm Booking</button>
            </form>
        </div>
    </div>
    </div>

                    </div>
                      <div class="flim">
                          <b>Arrow</b>
                          <br>
                          IMDb - 7.5
                      </div>
                  </div>
                
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/apharan.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Apharan</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Rudra, a senior inspector, is lured into kidnapping a young girl at the behest of her mother</p>

                
                          <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin5(){
                              window.open("https://youtu.be/CxNYucYVEkQ","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Apharan</b>
                          <br>
                          IMDb - 8.3
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/war.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>War</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h34m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">6.5</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Kabir, a secret agent, goes rogue after a mission to catch a terrorist goes awry. However, his boss sends Khalid, another agent and his student, to track him down.</p>

            
                          <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin6(){
                              window.open("https://youtu.be/tQ0mzXRk-oM","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>War</b>
                          <br>
                          IMDb - 6.5
                      </div>
                  </div>
                
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/kgf.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>KGF</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h50m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">Rocky, a young man, seeks power and wealth in order to fulfil a promise to his dying mother. His quest takes him to Mumbai, where he gets involved with the notorious gold mafia.</p>

                     
                          <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin7(){
                              window.open("https://youtu.be/-KfsY-qwBS0","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>KGF</b>
                          <br>
                          IMDb - 8.3
                      </div>
                  </div>
                
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/django.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Django Unchained</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h45m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">When Django, a slave, is freed, he joins forces with a bounty hunter to rescue his wife, who has been enslaved by Calvin, a hard-hearted plantation owner.</p>

                       
                          <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin8(){
                              window.open("https://youtu.be/_iH0UBYDI4g","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Django Unchained</b>
                          <br>
                          IMDb -8.4
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/endgame.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Avengers : Endgame</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">3h2m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin9(){
                              window.open("https://youtu.be/TcMBFSGVi1c","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Avengers : Endgame</b>
                          <br>
                          IMDb - 8.4
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/infinity.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Avengers : Infinity War</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h40m<button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">The Avengers must stop Thanos, an intergalactic warlord, from getting his hands on all the infinity stones. However, Thanos is prepared to go to any lengths to carry out his insane plan.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin10(){
                              window.open("https://youtu.be/6ZfuNTqbHE8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                        </div>
                    </div>
                      <div class="flim">
                          <b>Avengers : Infinity War</b>
                          <br>
                          IMDb - 8.4
                      
                  </div>
                </div>
              </div>

              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/ter.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Terminator Series</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">1984</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">1h48m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.0</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">A cyborg assassin is sent back in time to kill Sarah, a waitress, in a bid to stop her son who will wage a long war against his enemy in the future unless the course of history is altered.</p>

                          <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin11(){
                              window.open("https://youtu.be/k64P4l2Wmeg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Terminator Series</b>
                          <br>
                          IMDb - 8.0
                      </div>
                  
                </div>
              </div>


              <div class="poster">
                <div class="flip-card_i">
                  <div class="flip-card-inner_i">
                    <div class="flip-card-front_i">
                        <img src="./Images/star.jpg" alt="Avatar" style="width:250px;height:360px;">
                    </div>
                    <div class="flip-card-back_i">
                      <h1>Star Wars Series</h1>
                        <button class="btn_i b3_i"  title="Year" style="color:white">1977</button>
                        <button class="btn_i b2_i"  title="Minutes" style="color:white">2h5m</button>
                        <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                      
                      <br />
                      <br />
                    </p>

                      <p class="para_i">After Princess Leia, the leader of the Rebel Alliance, is held hostage by Darth Vader, Luke and Han Solo must free her and destroy the powerful weapon created by the Galactic Empire.</p>

             
                          <button class="trailer_i" type="submit" value="" onclick="openWin12()">▶Trailer</button>
                          <script type="text/javascript">
                            function openWin12(){
                              window.open("https://youtu.be/vZ734NWnAHA","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                            }
                          </script><br>
                        <br>
                        <button class="btn_i b4_i">▶Play</button>
                          </div>
                    </div>
                      <div class="flim">
                          <b>Star Wars Series</b>
                          <br>
                          IMDb - 8.6
                      </div>
                  
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection