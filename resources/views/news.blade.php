@extends('layouts/app', ['title' => "news"])

@section('content')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Yangiliklar </h1>
                <p class="lead mb-5">We Make Beautiful Things</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  
    
    <section class="site-section">
      <div class="container">
        <div class="row">
          @foreach($posts as $post)
          <div class="col-md-8">
            <div class="row mb-5">
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="images/img_6.jpg" alt="Image" class="img-fluid">
                  <a href="{{route('news.more', '$post->$id') }}">
                    <h2 class="font-size-regular">{{$post->title}}</h2>
                  </a>
                  <div class="meta mb-4">
                    <span class="mx-2">&bullet;</span>
                    {{$post->created_at->format('d/m/y')}}
                    <span class="mx-2">&bullet;</span>
                    <a href="#">News</a>
                  </div>
                  <p>{{$post->short}}</p>
                </div> 
              </div>
            </div>
          </div> 
          @endforeach
          <div class="col-md-3 ml-auto">
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Search</h3>
              <form action="#" method="post">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </div>
              </form>
            </div>

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Popular Posts</h3>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li class="mb-2"><a href="#">Quaerat rerum voluptatibus veritatis</a></li>
                <li class="mb-2"><a href="#">Maiores sapiente veritatis reprehenderit</a></li>
                <li class="mb-2"><a href="#">Natus eligendi nobis</a></li>
              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Recent Comments</h3>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="#">Joefrey</a> <em>in</em> <a href="#">Lorem ipsum dolor sit amet</a></li>
                <li class="mb-2"><a href="#">Joefrey</a> <em>in</em> <a href="#">Quaerat rerum voluptatibus veritatis</a></li>
                <li class="mb-2"><a href="#">Joefrey</a> <em>in</em> <a href="#">Maiores sapiente veritatis reprehenderit</a></li>
                <li class="mb-2"><a href="#">Joefrey</a> <em>in</em> <a href="#">Natus eligendi nobis</a></li>
              </ul>
            </div>

          </div>

        </div>
      </div>
    </section>

@endsection