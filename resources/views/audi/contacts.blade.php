@extends('master.main')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
        @component('components.form.form_contact')
        @endcomponent
    </div>
    </div>
</div>

@endsection
