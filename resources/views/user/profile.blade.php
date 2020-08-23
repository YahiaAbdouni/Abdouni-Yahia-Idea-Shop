@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-white h-fullscreen pb-80" style="background-image: url(../assets/img/thumb/5.jpg);" data-overlay="9">
        <div class="container text-center">
  
          <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
  
              <h1 class="display-4 mt-7 mb-8">{{$user->name}}</h1>
              <p><a class="text-white" href="#">{{$user->email}}</a></p>
              <p><img class="avatar avatar-xl" src="../assets/img/avatar/2.jpg" alt="..."></p>
  
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
              <div class="col-lg-12 mx-auto">
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
  
  
  
        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Comments
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section bg-gray">
          <div class="container">
  
            <div class="row">
              <div class="col-lg-8 mx-auto">
  
                <div class="media-list">
  
                  <div class="media">
                    <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/1.jpg" alt="...">
  
                    <div class="media-body">
                      <div class="small-1">
                        <strong>Maryam Amiri</strong>
                        <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">24 min ago</time>
                      </div>
                      <p class="small-2 mb-0">Thoughts his tend and both it fully to would the their reached drew project the be I hardly just tried constructing I his wonder, that his software and need out where didn't the counter productive.</p>
                    </div>
                  </div>
  
  
  
                  <div class="media">
                    <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/2.jpg" alt="...">
  
                    <div class="media-body">
                      <div class="small-1">
                        <strong>Hossein Shams</strong>
                        <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">6 hours ago</time>
                      </div>
                      <p class="small-2 mb-0">Was my suppliers, has concept how few everything task music.</p>
                    </div>
                  </div>
  
  
  
                  <div class="media">
                    <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/3.jpg" alt="...">
  
                    <div class="media-body">
                      <div class="small-1">
                        <strong>Sarah Hanks</strong>
                        <time class="ml-4 opacity-70 small-3" datetime="2018-07-14 20:00">Yesterday</time>
                      </div>
                      <p class="small-2 mb-0">Been me have the no a themselves, agency, it that if conduct, posts, another who to assistant done rattling forth there the customary imitation.</p>
                    </div>
                  </div>
  
                </div>
  
  
                <hr>
  
  
                <form action="#" method="POST">
  
                  <div class="row">
                    <div class="form-group col-12 col-md-6">
                      <input class="form-control" type="text" placeholder="Name">
                    </div>
  
                    <div class="form-group col-12 col-md-6">
                      <input class="form-control" type="text" placeholder="Email">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Comment" rows="4"></textarea>
                  </div>
  
                  <button class="btn btn-primary btn-block" type="submit">Submit your comment</button>
                </form>
  
              </div>
            </div>
  
          </div>
        </div>
  
  
  
      </main>
@endsection