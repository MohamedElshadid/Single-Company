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
        </ul>
        <ul class="navbar-nav ml-5">
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
<section class="projects mt-1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="img" style="height:400px">
          <img src="/projectimages/{{$project->mainImage}}" style="width:100%; height:400px" alt="mainImage">
        </div>
      </div>
      <div class="col-sm-12 mt-4">
        <h1 class="text-info">
        ProjectTitle: <span style="color:#fff"> {{$project->title}}</span>
        </h1>
        <h1 class="text-info">
          ProjectHint: <span style="color:#fff">{{$project->hint}} </span>
        </h1>
        <p class="text-light lead"> <strong class="text-info">Description: </strong>{{$project->description}}</p>
      </div>
    </div>
  </div>
</section>

<section class="projects pt-5">
  <div class="container-fluid">
    <div class="row">
      @foreach ($relProjects as $relProject)
      <div class="col-md-4 mt-2">
        <div class="card projectView" style="background-color:rgba(0, 0, 0, 0.7)  !important">
          <div class="card-header" style="width:100%;padding:10px">
            <img data-src="/projectimages/{{$relProject->image}}" alt="project" class="card-img-top" style="height:300px">
          </div>
          <div class="card-body">
            <h3 class="card-title text-light"><strong class="text-info">ProjectKewWords: </strong>{{$relProject->keyWords}}</h3>

          </div>
          <div class="card-footer">
            <p class="card-text text-light"><strong class="text-info">Description: </strong>{{substr($relProject->description,0,30)."... "}}</p>
            <button class="btn btn-info" data-toggle="modal" data-target="#modalLoginForm{{$relProject->id}}">View More</button>
            <div class="modal fade" id="modalLoginForm{{$relProject->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <img class="card-img-top" data-src="/projectimages/{{$relProject->image}}" alt="project" style="height:350px">
                  <div class="projectDetails mt-5">
                    <h3 class="card-title text-light"><strong class="text-info">ProjectKewWords: </strong>{{$relProject->keyWords}}</h3>
                    <p class="card-text text-light"><strong class="text-info">Description: </strong>{{$relProject->description}}</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection