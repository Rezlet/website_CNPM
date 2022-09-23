@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/register.css') }}">
@endsection

@section('content')
    <div class="register container">
        <h1 style="text-align: center;">Đăng nhập</h1>
        <form action="{{ route('login.register-user') }}" method="POST" class="register__form">
            @method('post')
            @if (Session::has("success"))
                <div class="alert alert-success">{{Session::get("success")}}</div>
            @endif
            @if (Session::has("error"))
            <div class="alert alert-danger">{{Session::get("error")}}</div>
        @endif
            <div class="register__form__container">
                <label for="name" class="register__form__label"><i class="fa-solid fa-user"></i>Tên người dùng </label>
                <input type="text" value="{{ old("name") }}" id="name" name="name" placeholder="Họ và tên..."
                    class="register__form__input">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="register__form__container">
                <label for="email" class="register__form__label"><i class="fa-solid fa-envelope"></i>Email </label>
                <input type="text" value="{{ old("email") }}" id="email" name="email" placeholder="Email..."
                    class="register__form__input">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="register__form__container">
                <label for="password" class="register__form__label"> <i class="fa-solid fa-lock"></i>Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Mật khẩu..."
                    class="register__form__input">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="register__form__container">
                <label for="password" class="register__form__label"><i class="fa-solid fa-lock"></i> Nhập lại Mật khẩu
                </label>
                <input type="password" id="retype-password" name="retype-password"
                    placeholder="Nhập lại mật khẩu..." class="register__form__input">
                <span class="text-danger">
                    @error('retype-password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="register__form__submit">Đăng kí</button>
        </form>
        <div class="register__direction">
            <div class="register__direction__login">
                <a href="{{ route('login.index') }}" class="register__direction__register__link">Đăng nhập</a>
                <a href="{{ route('login.registration') }}" class="register__direction__register__link">Đăng kí</a>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/register.js') }}"></script>
@endsection
