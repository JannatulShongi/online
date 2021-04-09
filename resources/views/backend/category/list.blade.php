@extends ('backend.master')

@section('content')
@if(session('msg'))
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="alert alert-success" role="alert" >{{ session('msg') }}</div>
        </div>
    </div>

@endif
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Category List</h1>

                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> name</th>
                        <th scope="col"> Image</th>
                        <th scope="col"> Description</th>
                        {{-- <th scope="col"> food_number</th> --}}

                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($category as $key=>$data)
        {{-- @dd($data->name) --}}
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->image}}</td>
                        <td>{{$data->description}}</td>
                        {{-- <td>{{$data->food_no}}</td> --}}


                        <td class="text-center">
                            <a class="btn btn-primary" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
        {{--                    <a class="btn btn-warning" href="">View</a>--}}

                        <a class="btn btn-success" href="">View</a>
                        </td>
                    </tr>
        @endforeach
                    </tbody>



                </table>

            </div>

            </div>
    @endsection
