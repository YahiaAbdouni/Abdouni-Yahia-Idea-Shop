@extends('layouts.user')

@section('content')
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, rgba(0,0,0,0.9), rgba(0,0,0,0.3)), url(../../assets/img/thumb/19.jpg);">
        <div class="container">
  
          <div class="row">
            <div class="col-md-8 mx-auto">
  
              <h1>Create a category</h1>
  
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
                        <form action="{{route('categories.store')}}" method="POST">
                            @csrf
                            <input class="form-control my-3" type="text" name="name" placeholder="Name">
                            <input class="btn btn-round btn-sm btn-outline-primary" type="submit" value="Create">
                        </form>
                    </div>
  
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection

    


    

