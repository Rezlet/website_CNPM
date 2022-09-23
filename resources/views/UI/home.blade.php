@extends('clients')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home.css') }}">
@endsection

@section('content')
<div class="home container">
    @if (Session::has("loginId"))
        <h1>{{Session::get("loginId")}}</h1>
    @endif
    
</div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/home.js') }}"></script>
@endsection
