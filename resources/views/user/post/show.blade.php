@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-white h-fullscreen pb-80" style="background-image: url(../../assets/img/thumb/19.jpg);" data-overlay="9">
      <div class="container text-center">

        <div class="row h-100">
          <div class="col-lg-8 mx-auto align-self-center">

            <p class="opacity-70 text-uppercase small ls-1">{{$post->category->name}}</p>
            <h1 class="display-4 mt-7 mb-8">{{$post->title}}</h1>
            <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">{{$post->user->name}}</a></p>
            <!-- <p><img class="avatar avatar-xl" src="../../assets/img/avatar/2.jpg" alt="..."></p> -->

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
            <div class="col-lg-8 mx-auto">
                <p>{{$post->content}}</p>
                @auth
                  @if (auth()->id() == $post->user_id)
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
      </div>
    </main>
@endsection