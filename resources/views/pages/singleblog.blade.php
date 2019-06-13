@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
          <div>

          <img src="/{{ $post->img_url }}" class="normalimage" alt="Bildes nav!">

          {{-- <img src="{{ $postItem->img_url }}" class="normalimage" alt="Bildes nav!"> --}}
     
          
          <h1>{{$post->title}}</h1>
            </div>

            <div class="body">
                {{$post->body}}
              </div>
            </div>
          </div>           

@endsection