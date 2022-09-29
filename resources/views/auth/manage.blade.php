@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/manage.css') }}">
@endsection

@section('content')
    <div class="manage">


        <div class="manage__container container">
            <span class="text-danger">
                @error('numberphone')
                    {{ $message }}
                @enderror

                @error('email')
                    {{ $message }}
                @enderror
            </span>

            <span class="text-success">
                @if (Session::has('success'))
                    {{ Session::get('success') }}
                @endif
            </span>
            <table class="manage__container__table">
                <thead>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Số điện thoại</th>
                    <th>Chức năng</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @if ($user->deleted_at == null)
                            <tr>
                                <td class="manage__container__table__name">{{ $user->name }}</td>
                                <td class="manage__container__table__email">{{ $user->email }}</td>
                                <td class="manage__container__table__role">{{ $user->roles->name }}</td>
                                <td class="manage__container__table__numberphone">{{ $user->numberphone }}</td>
                                <td><a class="manage__container__table__change btn btn-primary">Sửa</a>
                                    <a class="manage__container__table__logout btn btn-danger">Xóa</a>
                                </td>
                                <input type="hidden" class="manage__container__table__id"
                                    name="user__id__{{ $user->id }}" id="user__id__{{ $user->id }}"
                                    value="{{ $user->id }}">
                                <div class="manage__logout">
                                    <h3 class="manage__logout__title">Bạn có muốn xóa người dùng này ?</h3>
                                    <h4 class="manage__logout__content">Người dùng này sẽ biến mất vĩnh viễn</h4>
                                    <div class="manage__logout__confirm">
                                        <a href="{{ route('auth.delete', ['id' => $user->id]) }}"
                                            class="manage__logout__confirm__item btn btn-danger">Xóa</a>
                                        <a class="manage__logout__confirm__item manage-close-js  btn btn-primary">Hủy</a>
                                    </div>
                                </div>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="manage__overlay"></div>


        <div class="manage__change">
            <h3 class="manage__change__title">Bạn có muốn Thay đổi thông tin</h3>
            <form class="manage__change__content" method="POST" action="{{ route('auth.change') }}">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email-label">Email</span>
                    </div>
                    <input type="text" class="form-control disable" id="email" name="email" placeholder="Email..."
                        value="" aria-label="Email..." aria-describedby="email-label">

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="name-label">Họ và tên</span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên..."
                        value="" aria-label="Họ và tên..." aria-describedby="name-label">

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="name-label">Số điện thoại</span>
                    </div>
                    <input type="number" class="form-control" id="numberphone" name="numberphone"
                        placeholder="Số điện thoại ..." value="" aria-label="Số điện thoại..."
                        aria-describedby="name-label">

                </div>
                <div style="display: flex;" class="input-group mb-3">
                    <label for="role" class="manage__input__content__list input-group-text">
                        Vai trò
                    </label>

                    <select style="flex: 1; padding: 0px 20px;" class="manage__input__content__select disable"
                        value="" name="role" id="role">
                        @foreach ($roles as $role)
                            @if ($user->roles->name === $role->name)
                                <option class="manage__input__content__option" selected value="{{ $role->name }}">
                                    {{ $role->name }}
                                </option>
                            @else
                                <option class="manage__input__content__option" value="{{ $role->name }}">
                                    {{ $role->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>

                </div>
                <input type="hidden" name="id" id="id" value="{{ $user->id }}">

                <div class="manage__change__confirm">
                    <button type="submit"class="manage__change__confirm__item btn btn-primary">Sửa</button>
                    <div class="manage__change__confirm__item manage-close-change-js  btn btn-primary">Hủy</div>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/manage.js') }}"></script>
@endsection
