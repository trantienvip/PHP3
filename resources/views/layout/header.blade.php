<nav class="navbar navbar-expand-lg navbar-dark blackss">
    <div class="container menu-mobile">
        <a class="navbar-brand" href="/"><img width="100px" src="{{url('images/logo.png')}}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto col-md-6">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Tin tức 24h <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tin tức coin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">ETH</a>
                        <a class="dropdown-item" href="#">BTC</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">SOL</a>
                    </div>
                </li>
                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Đăng nhập</a>
                </li>
                @endif
                {{-- <li class="nav-item name_ss_all">
                    @if(isset($_SESSION['auth']))
                    <a class="nav-link name_ss" href="{{BASE_URL.'cpanel'}}">Hi! {{$_SESSION['auth']['name']}}</a>
                    <a class="nav-link name_ss" href="{{BASE_URL.'logout'}}"> <i class="ti-export"></i></a>
                    @endif
                </li> --}}
            </ul>
                <i class="iconsearch ti-search"></i>
            <form action="{{url('search')}}" class="form-search" action="" method="get">
                <input name="q" type="text" placeholder="Nhập từ khóa tìm kiếm">
            </form>
        </div>
    </div>
    @if(Auth::check())
    <div class="user_information">
        <img class="user_information_image" src="@if(Auth::user()->avatar !== 'no img') {{url(Auth::user()->avatar)}}) @else https://icon-library.com/images/no-user-image-icon/no-user-image-icon-0.jpg @endif" alt="">
        <div class="user_information_sm">
            <h6 class="user_information_sm_hi">Welcome ! {{Auth::user()->name}}</h6>
            <ul class="user_information_sm_cp">
                <li><a href="{{url('cpanel/information/').Auth::user()->id}}"> <i class="ti-user"></i> Information</a></li>
                <li><a href="{{url('cpanel')}}"> <i class="ti-settings"></i> Cpanel Page</a></li>
                <li><a href="{{url('logout')}}"> <i class="ti-export"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    @endif
</nav>