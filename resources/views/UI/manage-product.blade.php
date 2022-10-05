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

            <div class="manage__container__function">
                <a href="" class="manage__container__function__item btn btn-link">Quản lý sản phẩm</a>
                <a href="" class="manage__container__function__item btn btn-link">Quản lý Loại sản phẩm</a>
                <a href="" class="manage__container__function__item btn btn-link">Quản lý Khách hàng</a>
            </div>

            <table class="manage__container__table">
                <thead>
                    <th>Tên sản phẩm</th>
                    <th>Thể loại</th>
                    <th>Giá tiền</th>
                    <th>Hình ảnh</th>
                    <th>Giảm giá</th>
                    <th>Mô tả</th>
                    <th>Chức năng</th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        @if ($product->deleted_at == null)
                            <tr>
                                <td >{{ $product->title }}</td>
                                <td >{{ $product->categories->name }}</td>
                                <td >{{ number_format($product->price, 0, ',', ',')  }}</td>
                                <td ><img src="{{$product->thumbnail}}" alt=""></td>
                                <td >{{$product->discount}}</td>
                                <td >{{ $product->description}}</td>

                                <td><a class="manage__container__table__change btn btn-primary">Sửa</a>
                                    <a class="manage__container__table__logout btn btn-danger">Xóa</a>
                                </td>
                                <input type="hidden" class="manage__container__table__id"
                                    name="user__id__{{ $product->id }}" id="user__id__{{ $product->id }}"
                                    value="{{ $product->id }}">
                                <div class="manage__logout">
                                    <h3 class="manage__logout__title">Bạn có muốn xóa người dùng này ?</h3>
                                    <h4 class="manage__logout__content">Người dùng này sẽ biến mất vĩnh viễn</h4>
                                    <div class="manage__logout__confirm">
                                        <a href="{{ route('manage.delete-product', ['id' => $product->id]) }}"
                                            class="manage__logout__confirm__item btn btn-danger">Xóa</a>
                                        <a class="manage__logout__confirm__item manage-close-js  btn btn-primary">Hủy</a>
                                    </div>
                                </div>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

            {{ $products->links() }}
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
                <input type="hidden" name="id" id="id" value="{{ $product->id }}">
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
