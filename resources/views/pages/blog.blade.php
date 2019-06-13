@extends('layouts.main')

@section('content')

<h1>Ideju inkubators</h1>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">

        {{-- foreach cikliski izvada saturu, kas atrodas starp @foreach un @endforeach             --}}
        {{-- @foreach ($array as $element) --}}        
        @foreach ($posts as $postItem)  
        

        {{-- šajā vietā varu iekļaut failu, kas atrodas C:\xampp\_laravel\resources\views\partials\blog-post.blade.php --}}
        {{-- @include('partials.blog-post') --}}

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">

            <img src="{{ $postItem->img_url }}" class="normalimage" alt="Bildes nav!">
           
            <div class="card-body">
                <h5 class="card-title">{{ $postItem->title }}</h5>
              <p class="card-text">{{ $postItem->excerpt }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">


                <a class="btn btn-sm btn-outline-secondary" href="/blog/{{ $postItem->id }}" role="button">Lasīt</a>
                <a class="btn btn-sm btn-outline-secondary" href="/malotava" role="button">Veikals</a>

                 {{-- <a href="/blog/{{ $postItem->id }}">Read</a> --}}

                  
                </div>                
                <small class="text-muted">Ideja pierakstīta: {{ $postItem->created_at }}</small>
              </div>
            </div>
          </div>
        </div>



        {{-- <div class="container">
  
                <div class="row">	
                          <!-- my-3 liek, lai būtu atstarpes (margin) augšā un apakšā (y) -->
                          <div class="col my-3">
                            <!-- ja card-deck klases nav, tad automātiski neliek vienādu augstumu -->
                              <div class="card-deck">

                                  <div class="card">
                                    <img src="{{ $postItem->img_url }}" class="card-img-top" alt="Bildes nav!">
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $postItem->title }}</h5>
                                      <p class="card-text">{{ $postItem->excerpt }}</p>
                                      <a href="#" class="btn btn-primary">Uzzināt vairāk</a>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <img src="{{ $postItem->img_url }}" class="card-img-top" alt="Bildes nav!">
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $postItem->title }}</h5>
                                      <p class="card-text">{{ $postItem->excerpt }}</p>
                                      <a href="#" class="btn btn-primary">Vairāk šeit</a>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <img src="{{ $postItem->img_url }}" class="card-img-top" alt="Bildes nav!">
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $postItem->title }}</h5>
                                      <p class="card-text">{{ $postItem->excerpt }}</p>
                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                  
                                </div>
                          </div>
                  </div>
   --}}
  
    @endforeach

        </div>
    </div>
  </div>

  @include('partials.footer')

@endsection