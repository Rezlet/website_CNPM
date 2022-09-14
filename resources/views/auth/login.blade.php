@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/login.css') }}">
@endsection

@section('content')
    <div class="login container">
        <form action="" method="GET" class="login__form">
            <label for="username" class="login__form__label">Tên người dùng</label>
            <input type="text" id="username" name="username" class="login__form__input">
            <label for="password" class="login__form__label">Mật khẩu</label>
            <input type="password" id="password" name="password" class="login__form__input">
            <button type="submit" class="login__form__submit">Đăng nhập</button>
        </form>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/login.js') }}"></script>
@endsection
