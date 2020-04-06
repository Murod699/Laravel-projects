@extends('layouts.app', ['title' => 'Qidiruv'])

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
          
          <div class="col-md-8">
            <div>
                <form action="{{route('search')}}" method="GET">
                    <div class="form-group d-flex">
                        <input type="text" name='key' class="form-control" placeholder="Qidiruv.." value="{{ request()->get('key')}}">
            
                    </div>
                </form>
            </div>
            @if(!count($results))
                <div class="alert alert-primary">
                 Sizning "{{ request()->get('key')}}" so'rovingiz bo'yicha hech nima topilmadi!
                </div>
            @endif
            @foreach($results as $result)
            @include('parts._news-item', ['post' => $result])
            @endforeach
            <nav class="blog-pagination justify-content-center d-flex">
            {{ $links }}
            </nav>
          </div> 
          
          @include('parts._sidebar')

        </div>
      </div>
    </section>

@endsection