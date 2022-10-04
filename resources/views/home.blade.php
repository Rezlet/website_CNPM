@extends('clients')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home.css') }}">
@endsection

@section('content')
{{-- {{Session()->pull("loginId")}} --}}

@if(Session()->has("success"))
{{Session()->pull("listProductId")}}
    {{-- {{Session()->get("success")}} --}}
@endif
@if (Session()->has("listProductId"))
    @foreach (Session()->get("listProductId") as $item)
        <h1>{{$item}}</h1>
    @endforeach
    @endif

    @include('components.banner')
   @foreach ($categories as $category)
   <x-featured-product name="{{$category->name}}"></x-featured-product>
   @endforeach
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/home.js') }}"></script>
@endsection
