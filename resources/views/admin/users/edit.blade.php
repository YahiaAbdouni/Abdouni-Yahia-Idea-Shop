@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-5 shadow-lg p-5">
                <div class="mb-5"><h3>Edit profile</h3></div>
                
                <div class="">
                    <form action="{{route('users.update', $user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input class="form-control my-3" type="text" name="name" value="{{$user->name}}">
                        <input class="form-control my-3" name="email" value="{{$user->email}}">
                        <input class="homebtn btn shadow-lg px-5" type="submit" value="Update">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
