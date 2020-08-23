@extends('layouts.dash')

@section('content')
  @foreach ($categories as $category)
    <div class="col-md-6">
      <div class="card border hover-shadow-6 mb-6 d-block">
        <div class="p-6 text-center">
            <h5 class="mb-0"><a class="text-dark" href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></h5>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-5">
            <a class="btn btn-xs btn-round btn-outline-primary mx-1" href="{{route('categories.edit', $category->id)}}">Edit</a>
            <form action="{{route('categories.destroy',$category->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-xs btn-round btn-outline-danger mx-1" onclick="return confirm('Are you sure??')">Delete</button>
            </form>
          </div>
      </div>
    </div>
  @endforeach
@endsection

    


    

