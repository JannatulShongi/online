<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background: black">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




        <ul class="nav navbar-nav">


          <li><a href="" class="page-scroll">Home</a></li>
          <li><a href="{{ route('frontend.product.view') }}" class="page-scroll">Product</a></li>

          <li><a href="#about" class="page-scroll">About</a></li>
          {{-- <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li> --}}
          <li><a href="#team" class="page-scroll">Chef</a></li>
          <li><a href="#contact" class="page-scroll">Contact</a></li>
          {{-- <li><a href="" class="page-scroll">profile</a></li> --}}

          @guest
          <li><a href="{{ route('frontend.user.registration') }}" class="page-scroll">registration</a></li>
          <li><a href="{{ route('frontend.user.login') }}" class="page-scroll">Login</a></li>
          @endguest

          @auth
          <li><a href="{{ route('logout') }}" class="page-scroll">LogOut</a></li>
          @endauth
          {{-- @guest
          <a href="{{ route('user.loginform') }}" class="dropdown-item">Login</a>
          <a href="{{route('user.form')}}" class="dropdown-item">Register</a>
          @endguest

          @auth
          <a href="{{route('logout')}}" class="dropdown-item">Logout</a>
          @endauth --}}
          {{-- <li class="dropdown">
            <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 18px; margin-top: 3px;" >
              Category
            </div>

            <ul class="dropdown-menu" style="background-color: black;">
                @foreach($categories as $data)
                <li><a href="{{ route('frontend.category.view',$data->id) }}" style="background: white">{{ $data->name }}</a></li>
                @endforeach
            </ul>

        </li> --}}
        <li>

            {{-- <a href="" class="page-scroll">Cart ({{ session()->get('cart')? count(session()->get('cart')): '0' }})</a></li> --}}


        {{-- <li><a href="" class="page-scroll">Support</a></li> --}}

        {{-- @guest
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Login | Registration
        </button>
        @endguest
        @auth
            <a class="btn btn-success" href="{{route('user.logout')}}">{{ auth()->user()->name }}|Logout</a>
        @endauth --}}




        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>


