
@extends('layout.master')
@section('title','premiumpage')
@section('content')

<style>
  #scrollToTopButton{
position: fixed;
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



  .logo {
width: 110px;
height: 90px;
padding: 3px;
margin: 0;
padding: 0;
}
.fas:hover{background: none!important ;}
.nav-item{ flex-wrap:wrap;}
.menu li a:hover {
color: red !important;
opacity: 0.5;
}

/* CSS FOR FOOTER */
.footer{
margin-bottom:15px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.footer-content{
display:flex;
justify-content:space-between;
padding: 10px 20px;
}
.footer-logo{
width: 150px;
height: 120px;
padding: 3px;
margin:0px 0px 0px 10px;
padding: 0;
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
.footer-heading{
color:white;
}
.footer-left, .footer-right, .footer-middle{
text-align:center;
}
.icons{
margin-left:-30px;
}
.footer-links i{
font-size:30px;
width:40px;
height:40px;
padding:5px;
margin-top:30px;
}
.footer-middle a i:hover{
background-color:white;
border-radius:50px;
color:red;
}
.footer-middle-list-item{
list-style:none;
font-size:15px;
font-family:cursive;
margin:5px 0px 0px 15px;
text-align:left;
}
.footer-middle-list-item a{
text-decoration:none;
color:white;
}
.footer-middle-list-item a:hover{
color:red;
}
.footer-right{
margin-top:-15px;
}
.footer-contact-button{
font-size:20px;
background-color:red;
color:black;
padding:10px;
border:none;
border-radius:10px;
text-decoration:none;
}
.footer-contact-button:hover{
background-color:white;
color:red;
}
.footer-bottom-tagline{
color:white;
font-size:15px;
font-family:cursive;
margin-bottom:25px;
}


.footer-copyright{
text-align:center;
color:white;
margin-top:20px;
font-size:18px;
}
.footer-hr{
  color:grey;
  font-weight:bold;
}
/***************** Media Queries *********************/

@media (max-width: 600px) {
.footer-content{
 display:block;
 text-align:center;
}
.footer-middle-list-item{
text-align:center;
margin-left:-20px;
}

.footer-left, .footer-middle, .footer-right{
margin-top:50px;
}
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
<div class="container">
    <div class="section-title">
      <h3 style="color: aliceblue;">Choose your plan</h3><br>
      <ul>
        <li><p class="points">Watch all you want. Advert-free.</p></li>
        <li><p class="points">Recommendations just for you.</p></li>
        <li><p class="points">Change or cancel your plan anytime.</p></li>
      </ul>
      </div>

    <div class="row no-gutters justify-content-center" id="premiumcards">
        <div class="column col-lg-4 col-md-6  row__item"  >
            <div class="box1 featured" data-aos="fade-right">
                <center><h3>Basic</h3>
                <h4>₹499&nbsp;<span>per month</span></h4></center>
                <br>
                <ul>
                  <li><i class="bx bx-check"></i> Video Quality: Good</li>
                  <li><i class="bx bx-check"></i> Resolution: 480p</li>
                  <li><i class="bx bx-check"></i> Devices you can use to watch:</li>
                  <ul class="devices">
                    <li>Mobile</li>
                    <li>Tablet</li>
                    <li>TV</li>
                    <li>Computer</li>
                  </ul>
                </ul>
                <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HRAIXySB68JwYQ" async> </script> </form>
              </div>
    
        </div>
        <div class="column col-lg-4 col-md-6 row__item " >
            <div class="box2 featured" data-aos="fade-up">
                <center><h3>Premium</h3>
                <h4>₹799&nbsp;<span>per month</span></h4></center>
                <br>
                <ul>
                  <li><i class="bx bx-check"></i> Video Quality: Best</li>
                  <li><i class="bx bx-check"></i> Resolution: 4K+HDR</li>
                  <li><i class="bx bx-check"></i> Devices you can use to watch:</li>
                  <ul class="devices">
                    <li>Mobile</li>
                    <li>Tablet</li>
                    <li>TV</li>
                    <li>Computer</li>
                  </ul>
                </ul>
                
             <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HRAVPPvSZTE7fg" async> </script> </form>
    
              </div>
        </div>
        <div class="column col-lg-4 col-md-6 row__item" >
            
      <div class="box3 featured" data-aos="fade-left">
        <center><h3>Standard</h3>
        <h4>₹649&nbsp;<span>per month</span></h4></center>
        <br>
        <ul>
          <li><i class="bx bx-check"></i> Video Quality: Better</li>
          <li><i class="bx bx-check"></i>Resolution: 1080p</li>
          <li><i class="bx bx-check"></i> Devices you can use to watch:</li>
          <ul class="devices">
            <li>Mobile</li>
            <li>Tablet</li>
            <li>TV</li>
            <li>Computer</li>
          </ul>
        </ul>
<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HRBYgiJB9odvoA" async> </script> </form>



  </div>

</div>
</div>
  </div>
  <!-- End Pricing Section -->
  </div>
  <br>
  <br>
 @endsection