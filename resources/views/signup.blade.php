@extends('layout.master')
@section('title'.'signuppage')


@section('contents')
<style>
h1 {
        margin: auto;
        width: max-content;
        color: white;
      }
      span {
        display: inline-block;
        padding: 5px;
      }
      .img-logo {
        height: 94px;
        margin-left: 45px;
      }
      .seperator {
        height: 12px;
        display: block;
      }
      .main {
        padding: 70px;
        width: 300px;
        height: auto;
        border: 1.5px grey solid;
        border-radius: 5px;
        margin: -4.5px auto;
      }
      label {
        font-weight: bold;
        color: white;
        font-size: 1.25em;
      }
      input {
        width: 280px;
        border: none;
        border-radius: 5px;
        padding: 8px;
        outline: none;
      }
      input[type="submit"] {
        width: 260px;
        background-color: goldenrod;
        font-weight: bold;
      }
      input[type="submit"]:hover {
        cursor: pointer;
        border: 2px gray solid;
        background-color: goldenrod;
        transform: scale(0.95);
      }
      body {
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.85)),
          url("Images/background3.png") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      }
      .brand {
        margin-bottom: 13px;
        color: goldenrod;
        padding-top: 15px;
      }
      #errormessage {
        display: flex;
        justify-content: center;
        border-radius: 12px;
      }
      p {
        display: inline-flex;
        font-size: 1em;
        align-items: center;
        background: rgb(220, 53, 69);
        padding: 0.5em;
        color: white;
        font-family: sans-serif;
      }
      p svg {
        width: 2em;
        height: 2em;
        margin-right: 0.5em;
        fill: lightgreen;
      }
      .login {
        margin: 0 auto;
        width: 400px;
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 5px;
        padding: 30px 70px 143px 70px;
        margin-bottom: 12px;
      }

      .login h1 {
        color: white;
        padding-bottom: 10px;
      }

      .bottom {
        background-color: rgba(0, 0, 0, 0.35);
        color: goldenrod;
      }

      .bottom-width {
        max-width: 1000px;
        padding: 8px 30px;
      }

      .bottom-flex {
        display: flex;
        flex-wrap: wrap;
        padding: 15px 0 0 0;
        justify-content: center;
      }
      .bottom-flex li a {
        font-size: 15px;
      }
      .bottom-flex li {
        list-style: none;
        margin: 0px 10px;
      }

      .list-bottom {
        /* width: 25%; */
        margin-top: 10px;
      }

      .link-bottom {
        text-decoration: none;
        color: #bdc7c9;
        font-size: 0.8rem;
      }

      .link-bottom:hover {
        text-decoration: underline;
      }
      .remember-flex {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        font-size: 0.8rem;
      }

      .color_text {
        color: goldenrod;
      }

      .color_link {
        color: goldenrod;
      }

      .signup-link {
        color: white;
        text-decoration: none;
      }

      .signup-link:hover {
        text-decoration: underline;
      }

      .face_icon {
        color: goldenrod;
        margin-right: 6px;
        font-size: 20px;
      }

      .log_face {
        text-decoration: none;
        margin-left: 10px;
        font-size: 0.8rem;
      }

      .login-face {
        margin: 50px 0 15px 0;
        vertical-align: middle;
        color: goldenrod;
      }

      .al_members {
        margin: 12px 0px;
        color: goldenrod;
        padding: 0px 12px;
        font-size: 16.2px;
      }
      .log-link {
        text-decoration: none;
        color: whitesmoke;
      }
      .log-link:hover {
        text-decoration: underline;
      }
      .help {
        text-align: right;
      }
      .help a {
        text-decoration: none;
        font-size: 16.5px;
      }
      .help a:hover {
        text-decoration: underline;
      }
      .protection {
        font-size: 0.8rem;
        color: goldenrod;
        text-align: center;
      }

      .protection a {
        text-decoration: none;
      }

      .protection a:hover {
        text-decoration: underline;
      }

      .tel-link {
        text-decoration: none;
        color: goldenrod;
      }

      .tel-link:hover {
        text-decoration: underline;
      }

      .select-language {
        -webkit-appearance: none;
        -moz-appearance: none;
        background: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDUwIDUwIiBoZWlnaHQ9IjUwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1MCA1MCIgd2lkdGg9IjUwcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxyZWN0IGZpbGw9Im5vbmUiIGhlaWdodD0iNTAiIHdpZHRoPSI1MCIvPjxwb2x5Z29uIHN0cm9rZT0id2hpdGUiICBwb2ludHM9IjQ3LjI1LDE1IDQ1LjE2NCwxMi45MTQgMjUsMzMuMDc4IDQuODM2LDEyLjkxNCAyLjc1LDE1IDI1LDM3LjI1ICIvPjwvc3ZnPg==");
        background-size: 12px;
        background-position-x: calc(100% - 7px);
        background-position-y: calc(100% - 14px);
        background-repeat: no-repeat;
        background-color: #000;
        color: #bdc7c9;
        padding: 14px 20px 14px 14px;
        margin: 30px 0 40px 0;
        font-size: 0.9rem;
        min-height: 40px;
        border: 1px solid #333;
      }

      .select-language option {
        padding-left: 10px;
      }
      .input-text {
        margin-bottom: 20px;
      }

      .input-text input {
        width: 100%;
        height: 45px;
        background-color: #333;
        color: white;
        border-radius: 5px;
        border: none;
        outline: transparent;
        text-indent: 8px;
      }

      .input-text input::-webkit-input-placeholder {
        font-size: 1rem;
        color: #bdc7c9;
      }

      .input-text input::-moz-placeholder {
        font-size: 1rem;
        color: #bdc7c9;
        text-indent: 40px;
      }
      .signin-button {
        margin-top: 20px;
        padding: 13px;
        border-radius: 5px;
        background-color: goldenrod;
        color: white;
        border: none;
        font-weight: bold;
        font-size: 1.05rem;
        cursor: pointer;
      }
      .aftersubmit {
        opacity: 1;
        width: 400px;
        padding: 20px 75px 20px 65px;
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 5px;
        margin: 0px auto;
      }
      .field-icon {
        position: absolute;
        margin-left: -30px;
        margin-top: 15px;
        color: white;
      }
      .field-icon:hover {
        cursor: pointer;
        background-color: transparent;
      }
      .questions {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      @media only screen and (max-width: 450px) {
        .login,
        .aftersubmit {
          width: 300px;
          padding: 15px;
        }
      }

      @media only screen and (max-width: 350px) {
        .login,
        .aftersubmit {
          width: 240px;
          padding: 10px;
        }
        input[type="submit"] {
          width: 220px;
        }
        .help a {
          margin-left: 0% !important;
        }
      }
    </style>
 
 <link
      rel="shortcut icon"
      href="./Images/Logo/Title.jpeg"
      type="image/x-icon"
    />
  </head>
  <body>
    <div class="logo">
      <a href="/home">
        <img src="/Images/Logo/cinema.jpg" class="img-logo" />
      </a>
    </div>
    <div class="login-div">
      <form
        class="login"
        onsubmit="return DisplayResults()"
        name="regform"
        autocomplete="off"
      >
        <h1 class="sign">Sign Up</h1>
        <div id="errormessage"></div>
        <span class="seperator"></span>
        <div class="input-text">
          <input
            type="text"
            name="name"
            placeholder="Enter your name"
            oninput="change()"
          />
        </div>
        <div class="input-text">
          <input
            type="email"
            name="email"
            placeholder="Enter your Email"
            oninput="change()"
          />
        </div>
        <div class="input-text">
          <input
            id="pass_signup"
            type="password"
            name="password"
            placeholder="Enter your password"
            oninput="change()"
          /><i
            class="fa fa-fw fa-eye field-icon toggle-password"
            id="togglePassword"
          ></i>
        </div>
        <div class="input-text">
          <input
            id="pass_signup2"
            type="password"
            name="retypepassword"
            placeholder="Confirm password"
            oninput="change()"
          /><i
            class="fa fa-fw fa-eye field-icon toggle-password2"
            id="togglePassword"
          ></i>
        </div>
        <input class="signin-button" type="submit" value="Sign Up" />
        <div class="help">
          <a class="color_text" href="https://www.google.com/gmail/"
            >Need help?</a
          >
        </div>
        <div class="al_members">
          Already a Member?
          <a href="login.html" class="log-link">Sign in here</a>.
        </div>
        <div class="protection color_link help">
          This page is protected by Google reCAPTCHA to ensure you're not a bot.
          <a href="#">Learn more.</a>
        </div>
      </form>
      <span class="seperator"></span>
      <form
        style="opacity: 0"
        class="aftersubmit"
        onsubmit="return FinalResults()"
        name="verificationform"
        autocomplete="off"
      >
        <hr />
        <div class="input-text">
          <input
            type="password"
            name="code"
            placeholder="Enter code"
            oninput="change()"
          />
        </div>
        <input class="signin-button" type="submit" value="Register" />
      </form>

      <br />
      <br />
    </div>
    <div class="bottom">
      <div class="bottom-width">
        <div class="questions">
          <span>
            Questions? <br />Ask on :
            <a href="mailto: Apna_theatre@gmail.com" class="tel-link"
              >Apna_theatre@gmail.com</a
            ></span
          >
          <select class="fa select-language">
            <option>&#xf0ac; &nbsp;&nbsp;&nbsp;English</option>
            <option>&#xf0ac; &nbsp;&nbsp;&nbsp;Hindi</option>
          </select>
        </div>

        <div>
          <ul class="bottom-flex">
            <li class="list-bottom">
              <a href="faq.html" class="link-bottom"> FAQ </a>
            </li>
            <li class="list-bottom">
              <a href="#" class="link-bottom"> Help Center </a>
            </li>
            <li class="list-bottom">
              <a href="#" class="link-bottom"> Terms of Use </a>
            </li>
            <li class="list-bottom">
              <a href="#" class="link-bottom"> Privacy </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <button id="scrollToTopButton" title="Go to top" class="ml-5">
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </button>
    <script>
      $(document).ready(function () {
        var scrollTopButton = document.getElementById("scrollToTopButton");
        window.onscroll = function () {
          scrollFunction();
        };

        function scrollFunction() {
          if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
          ) {
            scrollTopButton.style.display = "block";
          } else {
            scrollTopButton.style.display = "none";
          }
        }

        $("#scrollToTopButton").click(function () {
          $("html ,body").animate({ scrollTop: 0 }, 800);
        });
      });
    </script>
    <script>
      $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        if ($("#pass_signup").attr("type") == "password") {
          $("#pass_signup").attr("type", "text");
        } else {
          $("#pass_signup").attr("type", "password");
        }
      });
    </script>
    <script>
      $(".toggle-password2").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        if ($("#pass_signup2").attr("type") == "password") {
          $("#pass_signup2").attr("type", "text");
        } else {
          $("#pass_signup2").attr("type", "password");
        }
      });
    </script>
@endsection