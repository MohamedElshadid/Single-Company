@extends('layouts.navbar')

@section('content')
<div class="header" style="height:550px">
  <nav class="navbar navbar-expand-lg navbar-dark text-center" style="background-color:#000 !important">
    <a class="navbar-brand" href="#"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @guest
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ route('jops') }}" >Jops</a>
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
            <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ route('jops') }}" >Jops</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-5">
          <li class="nav-item active">
            <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ url('/profile') }}">Profile Account</a>
          </li>
          <li class="nav-item active">
            <a href="{{ route('logout') }}"  style="display: block;padding: .5rem 1rem;text-decoration:none" onclick="event.preventDefault();
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
  <div id="slides" class="overlay information">
      <a class="slide"  href="#">
        <span class="animate in" style="background-image: url(/images/pictures_projects/3.jpeg)"></span>     
      </a>
      <a class="slide"  href="#">
        <span class="animate down" style="background-image: url(/images/pictures_projects/header1.jpg)"></span>
      </a>
      <a class="slide"  href="#">
        <span class="animate in" style="background-image: url(/images/pictures_projects/header2.jpg)"></span>
      </a>
      <a class="slide"  href="#">
        <span class="animate down" style="background-image: url(/images/pictures_projects/header4.jpg)"></span>
      </a>
  </div>
</div>
 <!-- start projects -->
 <div class="row mt-1">
    <div class="col-md-3" style="background-color: black;height:580px">
      <h1 style="margin-top:60px" class="text-center text-light">All Categories</h1>
      <div class="list-group mb-2 .nice" style="height: 400px;overflow-x: hidden;">
          @foreach($categories as $category)
            <a href="{{route('listAllProjects',$category)}}" class="list-group-item list-group-item-action text-light mb-1 mt-2" style="background-color:#c19e70 !important;width:60%;margin:0 auto">{{$category}}</a>
          @endforeach
      </div>
    </div>
    <div class="col-md-9" style="background-color:#c19e70">
      <section class="projects text-center" style="background-color:#c19e70">
        @if(count($projects)>0)
        <h2 class="text-light">All Projects</h2>
          <div class="row">
            @foreach ($projects as $project)
            <div style="background-image: url(/projectimages/{{$project->mainImage}});" class="project_content col-md-4 col-sm-6 pb-3">
              <div class="overlayer"></div>
              <div class="border_box"></div>
              <div class="custom_border"></div>
              <div>
                <p style="font-weight: bold;">
                  {{$project->title}}
                </p>
                <p class=""> {{$project->hint}}</p>
                <a class="btn btn-dark mb-1 text-light" href="{{ url('view/'.$project->id)}}">View Project</a>
              </div>
            </div>
            @endforeach
          </div>
          @else
          <div class="alert alert-info text-center" style="margin:0 auto;width:50%">
            <h1>No Projects Yet</h1>
          </div>
          @endif
      </section>
      <!-- end projects -->
    </div>
 </div>
  @component('components.footer')
  @endcomponent
 @endsection