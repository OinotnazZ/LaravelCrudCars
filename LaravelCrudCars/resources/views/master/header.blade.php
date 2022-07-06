<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Brands and Cars</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{url('brands')}}">Brands List</a>
            <a class="nav-link" href="{{url('cars')}}">Cars List</a>

            @auth
                @if(Auth::user()->admin == 1)
                    <a class="nav-link" href="{{url('brands/create')}}">Add Brand</a>
                    <a class="nav-link" href="{{url('cars/create')}}">Add Car</a>
                @endif
            @endauth

        </div>
    </div>
    <form action="{{url('brands')}}" method="GET" role="search" class="form-inline my-2 my-lg-0">
        <input  name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    @guest
        <div class="nav-item">
           <a  class="nav-link" href="{{ route('login') }}"><button type="button" class="mt-2 mb-5 btn btn-primary">Login</button></a>
        </div>
        @if (Route::has('register'))
            <div class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><button type="button" class="mt-2 mb-5 btn btn-primary">Register</button></a>
            </div>
        @endif
    @else
        <div class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    @endguest
</nav>
