<div class="row mb-5">
    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
        <div class="h-entry">
                  <img src="/storage/{{$post->thumb}}" alt="Image" class="img-fluid">
                  <a href="{{route('news.more', $post->id) }}">
                    <h2 class="font-size-regular">{{$post->title}}</h2>
                  </a>
            <div class="meta mb-4">
                    <a href="#"><i class="fa fa-eye"></i>{{$post->views}}</a>              
                    <span class="mx-2">&bullet;</span>
                    {{$post->created_at->format('d/m/y')}}
                    <span class="mx-2">&bullet;</span>
                    <a href="#">News</a>
            </div>
                  <p>{{$post->short}}</p>
        </div> 
    </div>
</div>