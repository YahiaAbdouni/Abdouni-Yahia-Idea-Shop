
@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, rgba(0,0,0,0.9), rgba(0,0,0,0.3)), url(../assets/img/thumb/19.jpg);">
        <div class="container">
  
          <div class="row">
            <div class="col-md-8 mx-auto">
  
              <h1>Welcome to IdeaShop</h1>
              <p class="lead-2 opacity-90 mt-6">Search for projects and post your own.</p>

              @auth
              @else
                <a class="btn btn-xl btn-round btn-outline-primary ml-2" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endauth
  
            </div>
          </div>
  
        </div>
      </header><!-- /.header -->
  
  
      <!-- Main Content -->
      <main class="main-content">
        <div class="section bg-gray">
          <div class="container">
            <div class="row">
  
  
              <div class="col-md-8 col-xl-9">
                <div class="row gap-y">
  
                  @foreach ($posts as $post)
                    <div class="col-md-6">
                      <div class="card border hover-shadow-6 mb-6 d-block">
                        <a href="{{route('post.show',$post->id)}}"><img class="card-img-top" src="../assets/img/thumb/1.jpg" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                          <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{route('category.show',$post->category->id)}}">{{$post->category->name}}</a></p>
                          <h5 class="mb-0"><a class="text-dark" href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h5>
                        </div>
                      </div>
                    </div>
                  @endforeach
  
                </div>
              </div>
  
  
  
              <div class="col-md-4 col-xl-3">
                <div class="sidebar px-4 py-md-0">
  
                  <!-- <h6 class="sidebar-title">Search</h6>
                  <form class="input-group" target="#" method="GET">
                    <input type="text" class="form-control" name="s" placeholder="Search">
                    <div class="input-group-addon">
                      <span class="input-group-text"><i class="ti-search"></i></span>
                    </div>
                  </form> -->
  
                  <hr>
  
                  <h6 class="sidebar-title">Categories</h6>
                  <div class="row link-color-default fs-14 lh-24">
                    @foreach ($categories as $category)
                    <div class="col-6"><a href="{{route('category.show', $category->id)}}">{{$category->name}}</a></div>
                    @endforeach
                  </div>
  
                  <hr>
  
                  <!-- <h6 class="sidebar-title">Top posts</h6>
                  <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/4.jpg">
                    <p class="media-body small-2 lh-4 mb-0">Thank to Maryam for joining our team</p>
                  </a>
  
                  <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/3.jpg">
                    <p class="media-body small-2 lh-4 mb-0">Best practices for minimalist design</p>
                  </a>
  
                  <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/5.jpg">
                    <p class="media-body small-2 lh-4 mb-0">New published books for product designers</p>
                  </a>
  
                  <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class="rounded w-65px mr-4" src="../assets/img/thumb/2.jpg">
                    <p class="media-body small-2 lh-4 mb-0">Top 5 brilliant content marketing strategies</p>
                  </a>
  
                  <hr> -->
  
                  <h6 class="sidebar-title">About</h6>
                  <p class="small-3">TheSaaS is a responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4. TheSaaS is a powerful and super flexible tool for any kind of landing pages.</p>
  
  
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </main>
@endsection

    


    
