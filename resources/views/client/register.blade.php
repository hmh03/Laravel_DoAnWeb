@extends('client.main')
@section('content')
@section('title', 'Đăng ký')


<div class="container-fluid justify-content-center d-flex align-items-center">
    <div class="row px-xl-5">
        <div class="col-lg-5 mx-auto">
            <div class="mb-4">
                <h3 class="font-weight-semi-bold mb-4 " style="font-size: 25px; text-align: center">Tạo tài khoản</h3>
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Tên tài khoản</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                   name="username" placeholder="username" value="{{ old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Tên</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                name="name" placeholder="Họ và tên" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Địa chỉ email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                name="email" placeholder="abc@gmail.com" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                name="phone" placeholder="09871234" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control @error('password') is-invalid @enderror" name="password"
                                type="password" placeholder="">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" type="password" placeholder="">
                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" style="font-size: 18px"
                                class="btn btn-lg btn-block btn-primary my-3 py-3">Đăng ký</button>
                        </div>
                        <div class="col-md-12 form-group">
                            <a href="{{ route('loginUser') }}">Đăng nhập ở đây</a>
                        </div>
                    </div>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection
