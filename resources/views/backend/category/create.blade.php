
@extends ('backend.master')
@section('content')
@if(session('message'))
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="alert alert-success" role="alert" >{{ session('message') }}</div>
        </div>
    </div>

@endif

<div class="row justify-content-center">
    <div class="col-md-10">
        <h1>Category Form</h1>
        <form  action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name"type="text" class="form-control" id="name" >

            </div>
         <div class="form-group">
                <label for="image">Image</label>
                <input name="image"type="file" class="form-control" id="image" >
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input name="description"type="text" class="form-control" id="description" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
  @endsection
