
@extends('layouts.dash')

@section('content')
  <div class="col-md-4">
    <div class="card border hover-shadow-6 mb-6 d-block">
      <div class="p-6 text-center">
        <a href="{{route('posts.index')}}" class="btn">Posts: {{$postCount}}</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">  
    <div class="card border hover-shadow-6 mb-6 d-block">
      <div class="p-6 text-center">
        <a href="{{route('categories.index')}}" class="btn">Categories: {{$categoryCount}}</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border hover-shadow-6 mb-6 d-block">
      <div class="p-6 text-center">
        <a href="{{route('users.index')}}" class="btn">Users: {{$userCount}}</a>
      </div>
    </div>
  </div>
@endsection

    


    
