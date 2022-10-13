@extends('clients')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home.css') }}">
@endsection

@section('content')
    {{-- {{Session()->pull("loginId")}} --}}

    @if (Session()->has('success'))
        {{ Session()->pull('listProductId') }}
        {{-- {{Session()->get("success")}} --}}
    @endif

    @include('components.banner')
    @foreach ($categories as $category)
        <x-featured-product title="{{$category->name}} Bán chạy" name="{{ $category->name }}"></x-featured-product>
    @endforeach
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/home.js') }}"></script>
@endsection
