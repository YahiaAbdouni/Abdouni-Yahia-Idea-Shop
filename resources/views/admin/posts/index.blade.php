
@extends('layouts.dash')

@section('content')
  @foreach ($posts as $post)
    <div class="col-md-6">
      <div class="card border hover-shadow-6 mb-6 d-block">
        <div class="p-6 text-center">
            <h5 class="mb-0"><a class="text-dark" href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h5>
            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{route('category-show', $post->category->id)}}">{{$post->category->name}}</a></p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-5">
            @auth
                @if (auth()->id() == $post->user_id)
                    <a class="btn btn-xs btn-round btn-outline-primary mx-1" href="{{route('posts.edit', $post->id)}}">Edit</a>
                @endif
            @endauth
            <form action="{{route('posts.destroy',$post->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-xs btn-round btn-outline-danger mx-1" onclick="return confirm('Are you sure??')">Delete</button>
            </form>
          </div>
      </div>
    </div>
  @endforeach
@endsection

    


    
