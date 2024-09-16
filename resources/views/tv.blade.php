@extends('layout.master')
@section('title','tvpage')

@section('contents')
<div class="main-content">

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./Images/anupama2.jpg" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/yeh rishta.jpg" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/gum hai kisi.jpg" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/bigboss.jpg" height="400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./Images/fear.jpg" height="400" class="d-block w-100" alt="...">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

</div>

  <div class="row poster">
    <!-- <div class="container"> -->
      <div id="movies" class="row"></div>
    <!-- </div> -->
      <div class="row">
        <h3 class="section-title text-center">Popular</h3>
      </div>
      
      <div class="col">
        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/anupama2.jpg" alt="Avatar" style="width:250px;height:260px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Anupama</h1>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">294<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.9</button>
                </div>
                  
                </span>
                <br />
                <br />
              </p>

                <p class="para_i" style="margin-top: -36px;">Anupamaa, who parts with her ambitions and goals in a bid to raise her family, feels dejected when she fails to get any credit for her sacrifices and trials. She then decides to live on her own terms.</p>

                
                    <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
          <script type="text/javascript">
            function openWin(){
              window.open("https://www.imdb.com/video/vi4272078361?ref_=ttvi_vi_imdb_1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
            }
          </script>
                <br><br>
                <button class="btn_i b4_i">▶Play</button>
              </div>
            </div>
            <div class="flim">
              <h5 class="card-title">Family Man</h5>
              <span class="movie_info">2019</span>
              <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.5 / 10</span>
          </div>
        </div>
    </div>
  </div>

    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/yeh rishta.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1 style="font-size: 30px;">Yeh Rishta Kya kehlata hai</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2009</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">3543<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
            </div>  
            </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">On their honeymoon in Greece, a flirtatious Kartik and a bold Naira pretend to be strangers and try to woo each other all over again.</p>

                    
                  <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin1(){
                      window.open("https://www.imdb.com/video/vi375766041?playlistId=tt7112704&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script> <br><br>
                <button class="btn_i b4_i">▶Play</button>

            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Yeh Rishta Kya kehlata hai</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.2 / 10</span>
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/gum hai kisi.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1 style="font-size: 30px;">Ghum hai kisikey pyaar mein</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">224<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
            </div>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">Virat, a young police officer, marries a woman to honour the promise he made to her dying father. But when his former lover re-enters his life, he finds his heart pulled in both directions.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin2(){
                      window.open("https://www.imdb.com/video/vi2629419033?playlistId=tt13085534&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script> <br><br>
                <button class="btn_i b4_i">▶Play</button>

            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Ghum hai kisikey pyaar mein</h5>
            <span class="movie_info">2018</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb - 9.2 / 10</span>
        </div>
        </div>
      </div>
      </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/bigboss.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Big Boss</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2006</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">1360<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
            </div>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">Isolated from the outside world, the contestants live together in a house under the live cameras that monitor their every move. They perform various tasks and avoid eviction to be declared a winner.</p>

                    
                  <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin3(){
                      window.open("https://www.imdb.com/video/vi1928444953?playlistId=tt1281973&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Play</button>

            </div>
          </div>

          <div class="flim">
            <h5 class="card-title">Big Boss</h5>
            <span class="movie_info">2020</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 9.0 / 10</span>
        </div>
      </div> 
    </div>
    </div>
    </div>
  </br>
    <div class="row poster">
      <div class="row">
        <h3 class="section-title text-center">Top Picks For You</h3>
    </div>
      <div class="col">
        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/fear.jpg" alt="Avatar" style="width:250px;height:260px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Fear Files</h1>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">456<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
              </div>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i"  style="margin-top: -36px;">A series of tales of the supernatural inspired by real life incidents. Moving beyond ghosts and exploring all paranormal phenomenon.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin4(){
                        window.open("https://www.imdb.com/title/tt7666252/?ref_=ttep_ep1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Play</button>


              </div>
            </div>
            <div class="flim">
              <h5 class="card-title">Fear Files</h5>
              <span class="movie_info">2021</span>
              <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.3 / 10</span>
          </div>
          </div>
        </div> 
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/crime.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Crime Patrol</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2003</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">1231<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8</button>
            </div>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">The host narrates several dramatised real-life crime cases revolving around harassment, kidnapping and murder while also presenting re-enactments.</p>

<button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
<script type="text/javascript">
  function openWin5(){
    window.open("https://www.imdb.com/title/tt14273900/mediaviewer/rm903397377/","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
  }
</script><br><br>
                <button class="btn_i b4_i" onclick="openMovieWin5()">▶Play</button>
                
                <script type="text/javascript">
                    function openMovieWin5(){
                      window.open("https://youtube.com/playlist?list=PLzufeTFnhupza0aEZ_FKj0mBguCdtwU_c","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Crime Patrol</h5>
            <span class="movie_info">2020</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8 / 10</span>
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/shaurya.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1 style="font-size: 30px;">Shaurya Aur Anokhi Ki Kahan</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">161<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">9.1</button>
            </div>
            </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">Shaurya, a male chauvinist who believes that every girl's future belongs in the kitchen, is in for a surprise when he crosses paths with Anokhi, a hardworking girl.</p>

          
                   
<button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
<script type="text/javascript">
  function openWin6(){
    window.open("https://www.imdb.com/video/vi1200734233?ref_=nv_sr_srsg_1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
  }
</script><br><br>
                <button class="btn_i b4_i">▶Play</button>

            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Shaurya Aur Anokhi Ki Kahan</h5>
            <span class="movie_info">2020</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 9.1 / 10</span>
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/kbc.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1>KBC</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2000</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">936<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
            </div>
            </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">The host, Amitabh Bachchan, gives contestants the chance to answer a series of questions based on general knowledge and current affairs in order to win a cash prize</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin7(){
                      window.open("https://www.imdb.com/title/tt13551448/?ref_=ttep_ep1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i" onclick="openMovieWin7()">▶Play</button>
                
                <script type="text/javascript">
                    function openMovieWin7(){
                      window.open("https://youtube.com/playlist?list=PLzufeTFnhupxu2U99E69L5GQ-YqXA1lec","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Kaun Banega Crorepati</h5>
            <span class="movie_info">2020</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.3 / 10</span>
        </div>
        </div>
      </div> 
    </div>
  </div>
</br>
  <div class="row poster">
    <div class="row">
      <h3 class="section-title text-center">Featured</h3>
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/indianidol.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h4>Indian Idol</h4>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2004</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">317<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">9.5</button>
            </div>
            </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">Various talented participants from India compete against each other during a singing competition in order to impress the judges and win the title.</p>

            
                <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin8(){
                    window.open("https://www.imdb.com/title/tt0486068/mediaviewer/rm3598682113/","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i">▶Play</button>

            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Indian Idol</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 9.5 / 10</span>
          </div>
        </div>
      </div> 
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/tmkoc.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1>TMKOC</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2008</button>
                <button class="btn_i b2_i"  title="Episodes" style="color:white">3191<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
            </div> 
            </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">The residents of a housing society help each other find solutions when they face common, real-life challenges and get involved in sticky situations.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin9(){
                    window.open("https://www.imdb.com/video/vi204126745?ref_=nv_sr_srsg_1","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" onclick="openMovieWin9()">▶Play</button>
                
                <script type="text/javascript">
                    function openMovieWin9(){
                      window.open("https://youtube.com/playlist?list=PLPuS0dQof_OGRvvdkNhWbJ8Jg3V-E3nFH","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Tarak Mehta Ka Ooltah Chasma</h5>
            <span class="movie_info">2022</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.2 / 10</span>
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/satya.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Satyamev Jayate</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2012</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">25<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
            </div> 
            </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">Host Aamir Khan interacts with the general public of India and aims to enlighten citizens about the social issues present in the country.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin10(){
                    window.open("https://www.imdb.com/video/vi2485238297?playlistId=tt2360717&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                  }
                </script> <br><br>
                <button class="btn_i b4_i" onclick="openMovieWin10()">▶Play</button>
                
                <script type="text/javascript">
                    function openMovieWin10(){
                      window.open("https://youtube.com/playlist?list=PLSNi9uW5H4qkFvLsemUW71TngsP4PGfyi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">Satyamev Jayate</h5>
            <span class="movie_info">2021</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.6 / 10</span>
        </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/24.jpg" alt="Avatar" style="width:250px;height:260px;">
            </div>
            <div class="flip-card-back_i">
              <h1>24:India</h1>
              <div class="btnContainer">
                <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                <button class="btn_i b2_i"  title="Minutes" style="color:white">48<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.2</button>
            </div> 
            </span>
              <br />
              <br />
            </p>

              <p class="para_i"  style="margin-top: -36px;">When a drug lord, Haroon Sherchan, threatens to let loose a virus unless the Indian government releases his brother from prison, a now-reclusive Jai Singh Rathod is asked to return to stop Sherchan.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin11(){
                    window.open("https://www.imdb.com/video/vi302760217?playlistId=tt2792284&ref_=tt_ov_vi","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                  }
                </script> <br><br>
                <button class="btn_i b4_i">▶Play</button>

            </div>
          </div>
          <div class="flim">
            <h5 class="card-title">24:India</h5>
            <span class="movie_info">2021</span>
            <span class="movie_info_rating"><i class="fas fa-star"></i>IMDb 8.2 / 10</span>
        </div>
        </div>
      </div>
    </div>

  




</div>
</div>


@endsection