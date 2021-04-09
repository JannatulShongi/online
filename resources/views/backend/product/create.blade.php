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
        <h1>Item Form</h1>
        <form  action="{{ route('product.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input name="name"type="text" class="form-control" id="name" >
            </div>
             <div class="form-group">
                <label for="category_id"> Category</label>
                <select name="category_id" id="category_id"class="form-control">

                    @foreach ($category  as $cat )
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price"type="text" class="form-control" id="price" >
            </div>
            <div class="form-group">
                <label for="colour">Colour</label>
                <input name="colour"type="text" class="form-control" id="colour" >
            </div>
            <div class="form-group">
                <label for="details">Details</label>
                <input name="details"type="text" class="form-control" id="details" >
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control" id="image" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
  @endsection
