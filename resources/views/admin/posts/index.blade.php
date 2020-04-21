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
                <th width="100px">Rasm</th>
                <th>Sarlavha</th>
                <th width="100">Vaqti</th>
                <th width="180px">Amallar</th>
            </thead>
            <tbody>
               
                @foreach($posts as $post)
                <tr>
                    <td>
                <img class="img img-thumbnail" width="80px" src="{{ '/storage/'.$post->thumb }}" alt="{{ $post->title }}">
                    </td>
                    <td> {{$post->title}}  </td>
                    <td>{{$post->updated_at->format('H:i d/m/Y')}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                         <a target="_blank" href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">
                         <i class="fa fa-eye"></i>Ko'rish</a>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="{{route('admin.posts.edit', ['id' => $post-> id])}}">
                                    <i class="fa fa-edit"></i> Taxrirlash
                                    </a>   
                                    <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item" type="submit"><i class="fa fa-trash"></i>O`chirish</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection