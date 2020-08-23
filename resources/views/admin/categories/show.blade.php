@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
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
                            <h5 class="mb-0"><a class="text-dark" href="#">{{$post->title}}</a></h5>
                        </div>
                        @auth
                                <div class="d-flex justify-content-center align-items-center mb-5">
                                    @if (auth()->id() == $post->user_id)
                                        <a class="btn btn-xs btn-round btn-outline-primary mx-1" href="#">Edit</a>
                                    @endif
                                  <form action="{{route('posts.destroy',$post->id)}}" method="POST">
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
  
  
            <nav class="flexbox mt-6">
              <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-2"></i> Newer</a>
              <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-2"></i></a>
            </nav>
  
          </div>
        </section>
  
      </main>
  
@endsection
    
