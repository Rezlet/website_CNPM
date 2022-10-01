@extends('clients')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home.css') }}">
@endsection

@section('content')
    @if (Session::has('loginId'))
        <h1>{{ Session::get('loginId') }}</h1>
    @endif

    @include('components.banner')
   <x-featured-product name="Laptop gaming"></x-featured-product>
   <x-featured-product name="Laptop gaming"></x-featured-product>
   <x-featured-product name="Laptop gaming"></x-featured-product>
   <x-featured-product name="Laptop văn phòng"></x-featured-product>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/home.js') }}"></script>
@endsection
