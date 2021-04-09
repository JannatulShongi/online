@extends ('frontend.master')
@section('content')
<div class="container">
    <form class="row" style="padding-top: 120px;">



        <h2>Item View</h2>


        @foreach ($product as $data )

        <div class="col-md-4">
            <div class="product-item">
                <div class="product-title">
                    <a href="#">{{ $data->name }}</a>

                </div>
                <div class="product-title">
                    <a href="#">{{ $data->price }}</a>

                </div>
                <div class="product-title">
                    <a href="#">{{ $data->colour }}</a>

                </div>
                <div class="product-title">
                    <a href="#">{{ $data->details }}</a>

                </div>
                <div class="product-image">
                    <a href="">
                        <img src="{{ asset('upload/'.$data->image) }}" alt="Product Image" style="width:400px; height:300px">
                    </a>

                </div>
                <div class="product-price">
                    <h3><span>BDT </span>{{ $data->selling_price }}</h3>
                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                </div>
            </div>
        </div>

@endforeach

                   
                </div>
    </form>
</div >

@endsection


