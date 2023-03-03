@extends('layouts.auth-master')
    <style>
        .vux-header {
            background: #155ba6;
            font-size:1.1875rem
        }
        {
            padding: 10px;
            font-size: 1.1875rem;
            color: #fff;
        }
        .fa.fa-angle-left {
            font-size: 1.5rem;
            padding: 10px;
            color: #fff
        }
        .vux-header.header {
            color: #fff;
            display: flex;
            margin: auto;
        }
        .vux-header-title {
            margin: auto;
            padding: 10px;
            color: #fff;
            font-size: 1.5rem;
        }
    </style>
    <div class="header">
        <div class="vux-header header">
            <div class="vux-header-left">
                <a class="vux-header-back" href="{{route('login.show')}}">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
            </div> 
            <h1 class="vux-header-title">Đăng ký tài khoản</h1>  
        </div>
    </div>
@section('content')
    <form method="post" action="{{ route('register.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('image/c752ea2e0e6c9c445c3032359c940788.png') !!}" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Đăng ký tài khoản</h1>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Tài khoản <span class="text-danger">*</span></label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Mật khẩu <span class="text-danger">*</span></label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Xác nhận mật khẩu <span class="text-danger">*</span></label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="code" value="{{ old('code') }}" placeholder="Ma moi">
            <label for="code">Mã mời</label>
            @if ($errors->has('code'))
                <span class="text-danger text-left">{{ $errors->first('code') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" placeholder="Tên thật" required="required" autofocus>
            <label for="fullname">Tên thật <span class="text-danger">*</span></label>
            @if ($errors->has('fullname'))
                <span class="text-danger text-left">{{ $errors->first('fullname') }}</span>
            @endif
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Tạo tài khoản</button>
    </form>
@endsection
