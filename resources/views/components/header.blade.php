<div class="header">
<nav class="navbar navbar-expand-lg navbar-dark text-center" style="background-color:#000 !important">
  <a class="navbar-brand" href="#"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @guest
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="project">projects</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="services">Services</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="client">Clients</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="info">Info</a>
        </li> 
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="contact">Contact</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="testimonial">Reviews</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="map404">Map</a>
        </li>
        <li class="nav-item active">
          <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ route('jops') }}" >Jobs</a>
        </li>

      </ul>
      <ul class="navbar-nav ml-5">
        <li class="nav-item active">
          <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    @else
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="project">projects</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="services">Services</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="client">Clients</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="info">Info</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="contact">Contact</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="testimonial">Testimonials</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-scroll="map404">Map</a>
        </li>
        <li class="nav-item active">
          <a  href="{{ route('jops') }}" style="display: block;padding: .5rem 1rem;text-decoration:none">Jobs</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-5">
        <li class="nav-item active">
          <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ url('/profile') }}">Profile Account</a>
        </li>
        <li class="nav-item active">
          <a href="{{ route('logout') }}"  style="display: block;padding: .5rem .5rem;text-decoration:none" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>            
        </li>
      </ul>
    @endguest
  </div>
  <div class="row mt-2">
    <div class="col-md-7">
      <div class="contact_us row">
        @foreach ($contact as $cont )
        <div class="col-sm-12 ">
          <i class="fa ml-3 fa-mobile"></i>
          <span class="ml-2">{{$cont->phoneNo}}</span>
        </div>
        <div class="col-sm-12">
          <i class="fa ml-3 fa-envelope"></i>
          <span class="ml-2">{{$cont->email}}</span>
        </div>
        @endforeach
      </div>
    </div>
    <div class="col-md-5">
      <div class="social_media contact_us">
        @foreach ($contact as $cont )
          <a href="{{$cont->instaLink}}"><i class="fa fa-instagram ml-2"></i></a>
          <a href="{{$cont->facebookLink}}"><i class="fa fa-facebook-f ml-2"></i></a>
          <a href="{{$cont->pinterestLink}}"><i class="fa fa-pinterest ml-2"></i></a>
          <a href="{{$cont->wLink}}"><i class="fa fa-vk ml-2"></i></a>
        @endforeach
      </div>
    </div>
  </div>
</nav>
<!-- start information -->
<div id="slides" class="overlay information">
      <a class="slide"  href="#">
        <span class="animate in" style="background-image: url(images/pictures_projects/3.jpeg)"></span>     
      </a>
      <a class="slide"  href="#">
        <span class="animate down" style="background-image: url(images/pictures_projects/header1.jpg)"></span>
      </a>
      <a class="slide"  href="#">
        <span class="animate in" style="background-image: url(images/pictures_projects/header2.jpg)"></span>
      </a>
      <a class="slide"  href="#">
        <span class="animate down" style="background-image: url(images/pictures_projects/header4.jpg)"></span>
      </a>
      <div class="buttons_call">
        <div class="mb-1">
          <button class="call_me phone" style="outline:none"><i class="fa fa-phone fa-x"></i></button>
        </div>
        <div>
          <button class="call_me tri up" style="outline:none">
            <i class="fa fa-caret-up fa-2x"></i>
          </button>
        </div>

      </div>
</div>
    <a class="mouse-scroll" href="#" data-scroll="project"> 
        <span class="mouse">
            <span class="mouse-movement"></span>
        </span>
        <span class="mouse-message fadeIn" style="color:black">Explore</span> <br />
        <i class="fa fa-angle-down m-top-10 fadeIn mouse-message"></i>
    </a>

</div>