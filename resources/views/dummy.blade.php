@extends('layout.master')
@section('title','dummypage')
@section('content')

<!------------------------Scroll to top button------------------------------------------------>
<style>
    #scrollToTopButton{
  /* position: sticky; */
  position:relative;
  bottom: 40px;
  left: 93%;
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
  .buttonmodal{
      text-align: center;
      height:auto;
  }
  #myBtn{
        display:flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding:auto;
        margin: auto;
  }
  

    /* navbar css */
    #header-nav .nav-link {
      color: white;
      font-size: 20px;
      margin-left: 20px;

    }

    .menu li a:hover {
      color: goldenrod!important;
      opacity: 0.5;
    }

    #variety {
      margin-top: 1rem;
      margin-bottom: 0.5rem;
    }
  </style>

<hr>
        <div class="container">
            <div id="movies" class="row"></div>
        </div>
        <hr>


        <div class="buttonmodal">
            <button id="myBtn">Click Here</button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>This Site Is Under Construction</p>
            </div>
        </div>
    </div>




@endsection