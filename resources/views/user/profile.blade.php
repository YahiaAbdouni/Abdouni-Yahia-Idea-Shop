@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-white h-fullscreen pb-80" style="background-image: url(../assets/img/thumb/5.jpg);" data-overlay="9">
        <div class="container text-center">
  
          <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
  
              <h1 class="display-4 mt-7 mb-5">{{$user->name}}</h1>
              <p><a class="text-white" href="#">{{$user->email}}</a></p>
              {{-- <p><img class="avatar avatar-xl" src="../assets/img/avatar/2.jpg" alt="..."></p> --}}

              @auth
                @if (auth()->id() == $user->id)
                  <a class="btn btn-round btn-outline-primary btn-l mb-8 mt7" href="{{route('edit-user', $user->id)}}">Edit profile</a>
                @endif
              @endauth

  
            </div>
  
            <div class="col-12 align-self-end text-center">
              <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
            </div>
  
          </div>
  
        </div>
      </header><!-- /.header -->
  
  
      <!-- Main Content -->
      <main class="main-content">
  
  
        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Blog content
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section" id="section-content">
          <div class="container">
  
            <div class="row">
              <div class="col-lg-12 mx-auto text-center">
                @auth
                  @if (auth()->id() == $user->id)
                  <a class="btn btn-round btn-outline-primary btn-xl mb-8 mt7" href="{{route('post.create')}}">Create Post</a>
                  @endif
                @endauth
                @foreach ($user->posts as $post)
                    <div class="col-md-12 container-sm">
                      <div class="card border hover-shadow-6 mb-6 d-block">
                        <a href="{{route('post.show',$post->id)}}"><img class="card-img-top" src="../assets/img/thumb/1.jpg" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                          <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{route('category.show',$post->category->id)}}">{{$post->category->name}}</a></p>
                          <h5 class="mb-0"><a class="text-dark" href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h5>
                          @auth
                              @if (auth()->id() == $user->id)
                                <div class="d-flex align-items-center justify-content-center mt-5">
                                  <a class="btn btn-xs btn-round btn-outline-primary" href="{{route('post.edit',$post->id)}}">Edit</a>
                                  <form action="{{route('post.destroy',$post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-round btn-outline-danger mx-1" onclick="return confirm('Are you sure??')">Delete</button>
                                  </form>
                                </div>
                              @endif
                          @endauth
                        </div>
                      </div>
                    </div>
                  @endforeach
              </div>
            </div>
  
          </div>
        </div>
      </main>
@endsection