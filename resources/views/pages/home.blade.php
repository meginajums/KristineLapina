@extends('layouts.main')

@section('content')

<div class="row">
        {{-- <img src="/img/aboli.jpg" style='width:100%;height:auto;' alt="Āboli"> --}}
        <img src="https://picsum.photos/id/292/1800/700" alt="Sīpols">

<div class="container">
        <div class="teksts-uz-bildes">                          
                 <h1>Ideju inkubators</h1>
                  <h3>Vieta, kur pierakstīt idejas =)</h3>
          </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">

<h3>Jaunākie ieraksti</h3>

        </div>
      </div>
    </div>

<div class="container-fluid">
    <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://picsum.photos/id/323/1800/400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <!-- <img src="../md-101-nosleguma-darbs/img/aboli.JPG" -->
                      <img src="https://picsum.photos/id/206/1800/400"
                      class="d-block w-100" alt="Āboli">
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/id/976/1800/400" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
      </div>
</div>



@endsection