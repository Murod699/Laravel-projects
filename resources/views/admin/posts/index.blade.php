@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Maqolalar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.posts.create')}}">Yaratish</a>
        </h6>
        
    </div>
    <div class="card-body">

        @if(session()->has('success'))
            <div class="aler alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        @if(session()->has('delete'))
            <div class="aler alert-danger">
                {{session()->get('delete')}}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <th>Rasm</th>
                <th>sarlavha</th>
                <th width="130px">amallar</th>
            </thead>
            <tbody>
               
                @foreach($posts as $post)
                <tr>
                <td>{{$post->img}}</td>
                    <td> {{$post->title}}  </td>
                    <td>
                        <a class="btn btn-sm btn-white float-left " href="{{route('admin.posts.show', $post->id)}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        
                        <a class="btn float-left btn-sm btn-white" href="{{route('admin.posts.edit', ['id' => $post-> id])}}">
                            <i class="fa fa-edit"></i> 
                        </a>
                        
                        <form method="POST" action="{{route('admin.posts.destroy', ['id' => $post-> id])}}">
                            @csrf
                            @method('delete')
                            <button class= "btn btn-sm btn-white"> <i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection