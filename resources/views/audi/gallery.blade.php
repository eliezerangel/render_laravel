@extends('master.main')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')

    @component('components.header.header')
    @endcomponent

    <div class="container">
        @component('components.gallery.images')
        @endcomponent
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum facere inventore nostrum placeat suscipit tempore vero? Cumque dolorum ex molestiae placeat possimus, quo sit voluptatem! Commodi dolorem illum nostrum quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum facere inventore nostrum placeat suscipit tempore vero? Cumque dolorum ex molestiae placeat possimus</p>
    </div>
    <br>

@endsection
