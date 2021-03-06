@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark text-center" style="background-color:#000 !important">
  <a class="navbar-brand" href="#"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @guest
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ route('jops') }}">Jops</a>
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
        <a style="display: block;padding: .5rem 1rem;text-decoration:none" href="{{ route('jops') }}">Jops</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-5">
      <li class="nav-item active">
        <a href="{{ route('logout') }}" style="display: block;padding: .5rem 1rem;text-decoration:none" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
    @endguest
  </div>
</nav>
<div class="container py-5">
  <div class="row text-center text-white mb-5">
    <div class="col-lg-7 mx-auto">
      <h1 class="display-4">Product List</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <!-- List group-->
      <ul class="list-group shadow">
        <!-- list group item-->


        @forelse ($data as $item)
        <li class="list-group-item m-3">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">{{$item->title}}</h5>
              <p class="font-italic text-muted mb-0 small">{{$item->description}}</p>
              <hr>
              <h6>Jop Requirement</h6>
              <p class="font-italic text-muted mb-0 small">{{$item->description}}</p>

              <hr>
              <h6 style="display: inline-block">Jop Type</h6>
              <p style="display: inline-block" class="font-italic text-muted mb-0 small">{{$item->jopType}}
                <h6 style="display: inline-block"> Location:</h6>{{$item->location}}
              </p>

              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">{{$item->created_at}}</h6>

              </div>
              <a href="{{route('applyjopform',$item->id)}}" class="btn btn--radius-2 btn--blue btn-danger">APPLY</a>
            </div>
          </div> <!-- End -->
        </li> <!-- End -->
        @empty
        <div class="text-center">
          <p>No available jobs </p>
        </div>
        @endforelse

      </ul> <!-- End -->
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection