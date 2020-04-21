@extends('layouts/app', ['title' => "Batafsil"])

@section('content')

<section class="site-section">
      <div class="container">
        <div class="row">
          
          <div class="col-md-8">
            <div class="row mb-5">
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="/storage/{{$post->img}}" alt="Image" class="img-fluid">
                  
                    <h2 class="font-size-regular">{{$post->title}}</h2>
                  
                  <div class="meta mb-4">
                    <a href="#"><i class="fa fa-eye"></i>{{$post->views}}</a>              
                    <span class="mx-2">&bullet;</span>
                    {{$post->created_at->format('d/m/y')}}
                    <span class="mx-2">&bullet;</span>
                    <a href="#">News</a>
                  </div>
                  <p>{{$post->content}}</p>
                </div> 
              </div>
            </div>
          </div> 
          
          @include('parts._sidebar')

        </div>
      </div>
    </section>



@endsection