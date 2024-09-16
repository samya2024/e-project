@extends('layout.master')
@section('title','faqpage')
@section('content')

<style>
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

 <!-- ======= Frequently Asked Questions Section ======= -->
 <div class="faq-section"><h2 align="center">Frequently Asked Questions</h2>
      <details open> 
        <summary align="center">What is Movie Streaming?</summary>
      <div class="faq__content">
          <p>Movie Streaming is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries and more – on thousands of internet-connected devices.</p>
            <p>You can watch as much as you want, whenever you want, without a single ad – all for one low monthly price. There's always something new to discover, and new TV shows and movies are added every week!</p>
        </div>
      </details>
      <br>
      <br>
      <details>
        <summary align="center">How much does Movie Streaming cost?</summary>
        <div class="faq__content">
          <p>Watch Movie Streaming on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from ₹ 199 to ₹ 799 a month. No extra costs, no contracts.</p>
        </div>
      </details>
      <br>
      <br>
      <details>
        <summary align="center">Where can I watch?</summary>
        <div class="faq__content">
          <p>Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Movie Streaming account to watch instantly on the web at moviestreaming.com from your personal computer or on any internet-connected device that offers the Movie Streaming app, including smart TVs, smartphones, tablets, streaming media players and game consoles.
              You can also download your favourite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Movie Streaming with you anywhere.
          </p>
        </div>
        </details>
        <br>
        <br>
      <details>
        <summary align="center">How do I cancel?</summary>
        <div class="faq__content">
          <p>Movie Streaming is flexible. There are no annoying contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.</p>
        </div>
        </details>
        <br>
        <br>
      <details>
        <summary align="center">What can I watch on Movie Streaming?</summary>
        <div class="faq__content">
          <p>Movie Streaming has an extensive library of feature films, documentaries, TV shows, anime, award-winning Movie Streaming originals, and more. Watch as much as you want, anytime you want.</p>
        </div>
        </details>
        <br>
        <br>
      <details>
        <summary align="center">Is Movie Streaming good for kids?</summary>
        <div class="faq__content">
          <p>The Movie Streaming Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and films in their own space.<br>Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.</p>
        </div>
        </details>
        <br>
      </details>
     
@endsection