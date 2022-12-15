<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="#"><img width="250" src="images/logo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('shop.index')}}">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop.aboute')}}">About </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop.product')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item px-2" >
                            <a class="btn btn-primary pe-3" href="{{ route('user.logout') }}">logout</a>
                        </li>
                        @else
                        <li class="nav-item px-2" >
                            <a class="btn btn-primary pe-3" href="{{ route('login') }}">login</a>
                        </li>
                    <li class="nav-item" >
                        <a class="btn btn-success" href="{{ route('register') }}" >Register</a>
                    </li>
                    @endauth
                    @endif
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</header>