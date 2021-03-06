@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, rgba(0,0,0,0.9), rgba(0,0,0,0.3)), url(../../assets/img/thumb/19.jpg);">
        <div class="container">
  
          <div class="row">
            <div class="col-md-8 mx-auto">
  
              <h1>{{$category->name}}</h1>
  
            </div>
          </div>
  
        </div>
      </header><!-- /.header -->
  
  
      <!-- Main Content -->
      <main class="main-content">
  
        <section class="section bg-gray">
          <div class="container">
  
            <div class="row gap-y">
  
              @foreach ($category->posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card d-block border hover-shadow-6 mb-6">
                        <div class="p-6 text-center">
                            <h5 class="mb-0"><a class="text-dark" href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h5>
                        </div>
                        @auth
                                <div class="d-flex justify-content-center align-items-center mb-5">
                                    @if (auth()->id() == $post->user_id)
                                        <a class="btn btn-xs btn-round btn-outline-primary mx-1" href="{{route('post.edit',$post->id)}}">Edit</a>
                                    @endif
                                  <form action="{{route('post.destroy',$post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-round btn-outline-danger mx-1" onclick="return confirm('Are you sure??')">Delete</button>
                                  </form>
                                </div>
                        @endauth
                    </div>
                </div>
              @endforeach
  
            </div>
  
          </div>
        </section>
  
      </main>
  
@endsection
    
