
@extends ('backend.master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Product List</h1>
                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> category</th>
                        <th scope="col"> price</th>
                        <th scope="col"> Colour</th>
                        <th scope="col"> details</th>
                        <th scope="col"> image</th>

                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($product as $key=>$data)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                         <td>{{$data->category->name}}</td>
                        <td>{{$data->price}}  BDT</td>
                        <td>{{$data->colour}}  BDT</td>
                        <td>{{$data->details}}</td>
                        <td>{{$data->image}}   </td>




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
