@extends('master.main')

@section('content')

    <div class="container-fluid mb-5">
        @component('components.carousel.carousel')
        @endcomponent
    </div>

    <div class="container">
        @component('components.cards.cards')
        @endcomponent
    </div>
    <br>
    <div class="container">
        @component('components.text.text_and_image')
        @endcomponent
    </div>
    <br>
    <br>
@endsection
