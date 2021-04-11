<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style_contact.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home')}}">@lang('lang.home_menu')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about')}}">@lang('lang.about_menu')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('lang.services_menu')</a>
        </li>
         
       
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        
          <a class="nav-link" href="locale/en"><img src="{{asset('img/us.jpg')}}" style="width:50px; height:50px;"alt="">@lang('lang.english')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="locale/kz"><img src="{{asset('img/kz.jpeg')}}" style="width:50px; height:50px;"alt="">@lang('lang.kazakh')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="locale/ru"><img src="{{asset('img/rus.jpg')}}" style="width:50px; height:45px;"alt="">@lang('lang.russian')</a>
        </li>
        
        </ul>
      </div>
    </div>
  
</nav>



    <div class="container">
    
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">@lang('lang.message_title')</h3>
          <p class="text">
          @lang('lang.message_body')
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>@lang('lang.address_title')</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>@lang('lang.email_title')</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>@lang('lang.phone_number')</p>
            </div>
          </div>

          <div class="social-media">
            <p>@lang('lang.footer_title')</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">@lang('lang.contact_us')</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">@lang('lang.placeholder_username')</label>
              <span>@lang('lang.placeholder_username')</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">@lang('lang.placeholder_email')</label>
              <span>@lang('lang.placeholder_email')</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">@lang('lang.placeholder_phone')</label>
              <span>@lang('lang.placeholder_phone')</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">@lang('lang.placeholder_message')</label>
              <span>@lang('lang.placeholder_message')</span>
            </div>
            <input type="submit" value="@lang('lang.button_send')" class="btn"/>
          </form>
        </div>
      </div>
    </div>


    <script src="app.js"></script>
  </body>
</html>
