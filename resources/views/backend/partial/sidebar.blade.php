<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">

          </div>
      <div class="sidebar-brand-text mx-3">Restaurant Management System</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>





    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>

    <li class="nav-item">



        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Category Setup</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                    <a class="dropdown-item" href="{{ route('backend.category.create') }}">Create</a>
                    <a class="collapse-item" href="{{ route('backend.category.list') }}">List</a>

            </div>
        </div>

</li>

<li class="nav-item">

        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-cog"></i>
        <span>Product</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">


                <a class="dropdown-item" href="{{ route('backend.product.create') }}">Create</a>
                <a class="collapse-item" href="{{ route('backend.product.list') }}">List</a>

        </div>
    </div>

</li>

 
<hr class="sidebar-divider">
  <div class="sidebar-heading">
    LogOut Option
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
      aria-controls="collapsePage">


    </a>
    <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">

    </div>
  </li>

  <hr class="sidebar-divider">

  </ul>

















