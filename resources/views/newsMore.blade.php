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
          </div>

        </div>
      </div>
    </section>



@endsection