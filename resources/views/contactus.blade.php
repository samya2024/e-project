@extends('layout.master')
@section('content')
<style>

    /* navbar css */
    #header-nav .nav-link {
      color: white;
      font-size: 20px;
      margin-left: 20px;

    }

    .menu li a {
      text-decoration: none;
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
    .menu li a:hover {
      color: goldenrod !important;
      opacity: 0.5;
    }

    #variety {
      margin: 0.5rem;
    }

    .btn-outline-danger,
    .btn-outline-danger:focus {
      outline: none;
      box-shadow: none;
    }

    .contactForm {
      margin: 5px;
    }

    /* <!------------------------Scroll to top button------------------------------------------------> */

    #scrollToTopButton {
      position: fixed;
      bottom: 40px;
      right: 25px;
      font-size: 25px;
      z-index: 99;
      width: 50px;
      height: 50px;
      background-color: goldenrod;
      color: black;
      border: none;
      cursor: pointer;
      outline: none;
      padding: 6px;
      border-radius: 50%;
    }

    #scrollToTopButton:hover,
    i:hover {
      background-color: white;
      color: goldenrod;
    }

    .btn-sm a {
      color: white;
      transition: all 0.3s ease;
      float: right;
      font-size: medium;
    }

    .btn-sm a:hover {
      color: goldenrod;
      transition: all 0.3s ease;
    }

    #nav:hover {
      background-color: goldenrod !important;

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
  </style>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
  <script type="text/javascript">
    (function () {
      emailjs.init("user_3Y57GrE42p8s0kTrKxP0W");
    })();
  </script>

  <script type="text/javascript">
    window.onload = function () {
      document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();
        // generate a five digit number for the contact_number variable
        this.contact_number.value = Math.random() * 100000 | 0;
        // these IDs from the previous steps
        emailjs.sendForm('contact_service', 'contact_form', this)
          .then(function () {
            console.log('SUCCESS!');
          }, function (error) {
            console.log('FAILED...', error);
          });
      });
    }
  </script>

<div class="container">
      <div id="movies" class="row"></div>
    </div>
    <hr>


    <div class="box">

      <div class="text">
        <h1>Contact <span class="goldenrod">Us</span></h1>
        <div class="redline"></div>
        <p>Have Questions ? We have answers ( may be )</p>
      </div>
    </div>

    <div class="touch">
      <h2>Get in touch</h2>
      <div class="redline"></div>
    </div>
    <div class="container fill">
      <div class="forthis">
        <form action="https://formcarry.com/s/S1peCWurw0C" method="POST" name="contact-form" id="contact-form" onsubmit="return validateForm();">
          <div class="form-row two2">
            <div class="form-group col-md-6 column">
              <input type="text" class="form-control input" id="firstname" name="firstname" placeholder=" " >
              <label for="firstname" class="">First Name</label>
              <div class="underline">
              </div>
            </div>
            <div class="form-group col-md-6 column">
              <input type="text" class="form-control input" id="lastname" name="lastname" placeholder=" " >
              <label for="lastname" class="">Last Name</label>
              <div class="underline"></div>
            </div>
          </div>
          <div class="form-row one1">
            <div class="form-group col-lg-6 column">
              <input type="text" class="form-control input" id="email" name="email" placeholder=" " >
              <label for="email" class="">Email</label>
              <div class="underline"></div>
            </div>
            <div class="form-group col-lg-6 column">
              <input type="text" class="form-control input" id="phone" name="phone"  placeholder=" ">
              <label for="number" class="">Phone Number</label>
              <div class="underline"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group column">
              <input type="text" class="form-control input" name="subject" id="subject" placeholder=" " >
              <label for="subject" class="">Subject</label>
              <div class="underline extra"></div>
            </div>
          </div>
          <div class="form-row size">
            <div class="form-group column">
              <textarea type="text" class="form-control input" name="message" id="message" rows="5"  placeholder=" "></textarea>
              <label for="message" class="">Message</label>
              <div class="underline extra gap"></div>
            </div>
          </div>
          <div class="btn-sm">
            <input type="submit" value="SEND MESSAGE" class="sm-button" id="submit-btn"> 
            <a href="#" onclick="clearFunc()">Reset</a>
          </div>
        </form>
      </div>
    </div>

    <!-- address -->

    <div class="container address">
      <div class="row add-row">
        <div class="col-sm-6">
          <h3>Our Address</h3>
          <div class="redline-address"></div>
          
          <p>AptechGarden,Center</p>
          
          
          <div class="phone-e">
            <p><span class="glyphicon glyphicon-envelope"> </span> </p>
            <p><span class="glyphicon glyphicon-phone"></span> 03363423227</p>
          </div>
        </div>
        <div class="col-sm-6 map-padd">
          <!-- -map- -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.019213593812!2d77.62060731482127!3d12.906485990898592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14eed2a26dbb%3A0x98f64960052a26b0!2sTrainingMug!5e0!3m2!1sen!2sin!4v1504259922701"
            width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="bottom-gap"></div>

@endsection