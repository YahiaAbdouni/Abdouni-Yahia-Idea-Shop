@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
        <div class="container">
  
          <div class="row">
            <div class="col-md-8 mx-auto">
  
              <h1>Create a post</h1>
  
            </div>
          </div>
  
        </div>
      </header><!-- /.header -->
  
  
      <!-- Main Content -->
      <main class="main-content">
        <div class="section bg-gray">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xl-12 text-center">
  
                    <div class="container-sm rounded-md shadow-6 p-6 border">
                        <form action="{{route('posts.update', $post->id)}}" method="POST">
                            @csrf
                            <input class="form-control my-3" type="text" name="title" placeholder="{{$post->title}}">
                            <textarea class="form-control my-3" name="content" rows="5" placeholder="{{$post->content}}"></textarea>
                            <select class="form-control my-3" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <input class="btn btn-round btn-sm btn-outline-primary" type="submit" value="Update">
                        </form>
                    </div>
  
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection
