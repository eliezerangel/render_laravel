<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
    <a class="navbar-brand" href="{!! asset('/')!!}"> Eliezer Rangel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="{!! asset('/')!!}">Home <span class="sr-only"></span></a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('/gallery')!!}">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('/blog')!!}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('/contacts')!!}">Contact Us</a>
            </li>
        </ul>
{{--        <form class="form-inline">--}}
{{--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>--}}
{{--        </form>--}}
    </div>
</nav>
