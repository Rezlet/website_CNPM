@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/user.css') }}">
@endsection
@section('content')
    <div class="user">
        <div class="user__container container">
            <table class="user__container__table">
                <thead>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Chức năng</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->name }}</td>
                        <td><a href="" class="btn btn-primary">Sửa</a>
                            <a href="{{route("auth.logout")}}" class="btn btn-danger">Đăng xuất</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- <div class="user__overlay"></div>
        <div class="user__logout popup">
            <div class="user__logout__title">Bạn có muốn thoát</div>
            <div class="user__logout__content">Bạn sẽ đăng xuất và trở lại trang đăng nhập</div>
            <div class="user__logout__confirm">
                <div class="user__logout__confirm__item"></div>
            </div>
        </div> --}}
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/user.js') }}"></script>
@endsection
