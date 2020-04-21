@extends('layouts/app', ['title' => "Contact"])

@section('content')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Aloqa</h1>
                <p class="lead mb-5">Sizga xizmat ko`rsatishdan mamnunmiz!</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
         

            <form action="{{route('contact.store')}}" method="POST" class="p-5 bg-white">
            @if(session()->has('success'))
          <div class="alert alert-success">
            {{session()->get('success')}}
          </div>
          @endif
          @if( $errors -> any() )
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>         
            </div>
          @endif
              @csrf
              <h2 class="h4 text-black mb-5">Biz bilan aloqa</h2> 

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="fname">F.I.O</label>
                  <input type="text" id="fname" value="{{old('name')}}" name="name" placeholder="Isminggiz..." class="form-control">
                </div>
                
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Pochta manzilinggiz</label> 
                  <input type="email" id="email" value="{{old('email')}}" name="email" placeholder="e-mailni kiriting..." class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Mavzu</label> 
                  <input type="subject" id="subject" value="{{old('subject')}}" name="subject" placeholder="Mavzuni kiriting..." class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Xabar</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Xabarni kiriting...">{{old('message')}}</textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Yuborish" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Manzil:</p>
              <p class="mb-4">O`zbekiston Respublikasi,Xorazm viloyati,Urganch shahri,Al-Xorazmiy ko`chasi,TATU Urganch filiali</p>

              <p class="mb-0 font-weight-bold">Telefon:</p>
              <p class="mb-4"><a href="#">+99890 433-36-99</a></p>

              <p class="mb-0 font-weight-bold">Elektron pochta:</p>
              <p class="mb-0"><a href="#">murodbek.0338@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary btn-md text-white">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection