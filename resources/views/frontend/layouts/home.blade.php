@extends('frontend.master')

<!-- Header -->


@section('content')


<header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1>Asif Restaurant</h1>
              <p> Contact Us : 01622025683</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Features Section -->
  <div id="features" class="text-center">
    <div class="container">
      <div class="section-title">
        <h2>Our Menu</h2>
      </div>
      {{-- @dd($list) --}}

      {{-- @foreach ($products as $key=>$data)
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="features-item">
            <p class="card-text">{{$data->name}}</p>
            <img width="200px;" src="{{ url('uploads/products/'.$data->image) }}" style="    width: 250px;
            height: 250px">
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{$data->price}} BDT</small>

            </div>
                <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="">View</a>
                    <a class="btn btn-sm btn-outline-secondary" href=""> Add To Cart</a>
                </div>


          </div>
        </div>

        @endforeach --}}

      </div>
    </div>
  </div>
  <!-- About Section -->
  <div id="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-6 about-img"> </div>
        <div class="col-xs-12 col-md-3 col-md-offset-1">
          <div class="about-text">
            <div class="section-title">
              <h2>Our Story</h2>
            </div>
            <p>Bangladesh is famous for its delicious food and deserts.The specialty of bangladeshi food. Rice, Fish curry, and lenti is the most common traditional bangladeshi food for general people.Bangladesh is also famous for Dessert.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Restaurant Menu Section -->
  {{-- <div id="restaurant-menu">
    <div class="container">
      <div class="section-title text-center">
        <h2>Menu</h2>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section"> --}}

            {{-- <ul>
                @foreach($categories as $data)
                <li><a href="{{ route('frontend.category.view',$data->id) }}" style="background: white">{{ $data->name }}</a></li>
                @endforeach
            </ul> --}}



            {{-- @foreach($categories as $data)
            <h2 class="menu-section-title">{{ $data->name }}</h2>
            <div class="menu-item">
                {{-- @foreach ($list as $item)
              <div class="menu-item-name">{{ $item->name }}</div>
              <div class="menu-item-price"> {{ $item->price }} </div>
              @endforeach --}}
              {{-- <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            @endforeach

            <div class="row">
                @foreach ($list as $item)
                <div class="col-xs-12 col-sm-4">
                    <div class="features-item">
                      <p class="card-text">{{ $item->name }}</p>
                      <img src="{{ url('uploads/products/'.$item->image) }}" style="    width: 250px;
                                height: 250px">
                      <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted">{{ $item->price }}</small>

                      </div>
                          <div class="btn-group">

                              <a class="btn btn-sm btn-outline-secondary" href="{{ route('frontend.item.addTocart',$item->id) }}"> Add To Cart</a>
                          </div>


                    </div>
                </div>
                @endforeach


            </div> --}}



            {{-- <div class="menu-item">
              <div class="menu-item-name">Fried Ravioli</div>
              <div class="menu-item-price"> $7 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Wild Mushroom Arancini</div>
              <div class="menu-item-price"> $9 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Mozzarella Sticks</div>
              <div class="menu-item-price"> $10 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Main Course</h2>
            <div class="menu-item">
              <div class="menu-item-name">Roast Stuffed Chicken</div>
              <div class="menu-item-price"> $18 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Chicken & Mushroom Pasta</div>
              <div class="menu-item-price"> $20 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Beef Lasagne</div>
              <div class="menu-item-price"> $14 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Chicken Goujons</div>
              <div class="menu-item-price"> $19 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Dinner</h2>
            <div class="menu-item">
              <div class="menu-item-name">Sesame-Ginger Beef</div>
              <div class="menu-item-price"> $15 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Crispy Fried Chicken</div>
              <div class="menu-item-price"> $17 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Mongolian Shrimp & Broccoli</div>
              <div class="menu-item-price"> $18 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Spicy Coconut Salmon</div>
              <div class="menu-item-price"> $20 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Desserts</h2>
            <div class="menu-item">
              <div class="menu-item-name">Chocolate Mud Cake</div>
              <div class="menu-item-price"> $11 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Bourbon-Pecan Tart</div>
              <div class="menu-item-price"> $14 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Texas Sheet Cake</div>
              <div class="menu-item-price"> $15 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Vanilla Cheesecake</div>
              <div class="menu-item-price"> $18 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery Section -->
  <div id="gallery">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/01.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/02.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/03.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/04.jpg" class="img-responsive" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Section -->
  <div id="team">
    <div class="container">
      <div id="row">
        <div class="col-md-6">
          <div class="col-md-10 col-md-offset-1">
            <div class="section-title">
              <h2>Meet Our Chef</h2>
            </div>
            <p>In my restaurant, I have well qualified chef.They are try to give their best.Everything is done here keeping in mind the subject of your choice.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
          </div>
        </div>
        <div class="col-md-6">

        </div>
      </div>
    </div>
  </div>
  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container text-center">
      <div class="col-md-4">
        <h3>If Needed</h3>
        <div class="contact-item">
          <p>Please call</p>
          <p>01623284090</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Address</h3>
        <div class="contact-item">
          <p>Uttara,Dhaka,</p>
          <p>Sector-10,Road-45,House-10</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Opening Hours</h3>
        <div class="contact-item">
          <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
          <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Delivery Time</h3>
        <div class="contact-item">
          <p> 10:00 AM - 08:00 PM</p>

        </div>
      </div>
    </div>
    <div class="container">

  </div>



  @endsection
