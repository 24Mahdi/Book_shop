@extends('layouts.app')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --green: #27ae60;
        --dark-color: #219150;
        --black: #444;
        --light-color: #666;
        --border: 0.1rem solid rgba(0, 0, 0, 0.1);
        --box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #f2f2f2;
        font-size: 16px;
        text-align: right;
        display: block;
        font-weight: bold;
    }



    form {
        background: #fff;
        border: var(--border);
        width: 26rem;
        padding: 9px;
        box-shadow: var(--box-shadow);
        border-radius: 8px;
        margin: 0 auto;
    }

    h3 {
        margin: 10px auto;
        padding: 10px;
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        font-family: auto;
        text-transform: uppercase;
        color: var(--black);
    }

    .box {
        margin: 10px 0;
        font-size: 20px;
        border: var(--border);
        border-radius: 4px;
        padding: 10px 2px;
        color: var(--black);
        text-transform: none;
        width: 100%;
        font-weight: bold;
        text-align: center;
    }

    .btn {
        text-align: center;
        width: 85% !important;
        border: 2px solid #27ae60 !important;
        margin: 0px 0;
        font-size: 22px;
        cursor: pointer;
        font-weight: bold;
        background: var(--green);
        color: #fff;
        border-radius: 4px;
        padding: 9px 30px;
        display: inline-block;
        margin-top: 10px;
    }

    .input:hover {
        background: #2aa25d;
        border: 2px solid #2aa25d !important;
    }

    p {
        margin: 14px auto;
        padding-top: 8px;
        color: var(--light-color);
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }

    a {
        color: var(--green);
        text-decoration: none;
    }

    @media screen and (max-width: 768px) {
        .login-form-container {
            margin: 10px;
            padding: 0 10px;
        }

        form {
            width: 400px;
            padding: 10px;
            margin: 0 auto;
        }
    }

    a {
        color: #f2f2f2;
        text-decoration: none;
        text-align: center;
        margin: auto;
    }
</style>
<div style='position: fixed;width: 100%;top: 0px;padding: 10px;z-index: 1;display: block;'>
    <a href="{{ route('index') }}"
        style='float: left;margin-left: 5%;font-weight: bold;font-size: 28px;text-shadow: 1px 1px 7px #333;cursor: pointer;text-decoration: none;color: #000;padding: 0px 50px 0px 0px;'>
        <i class="fa-solid fa-reply"></i></a>
</div>
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="text-align: right;">
            <div class="col-md-8"
                style='position: fixed;/* background: #fff; */width: 100%;top: 0px;padding: 10px;/* box-shadow: 1px 1px 50px #000; */z-index: 1;display: block;'>
                <style>
                    .box {
                        margin: 7px 0;
                        font-size: 20px;
                        border: var(--border);
                        border-radius: 4px;
                        padding: 8px 2px;
                        color: var(--black);
                        text-transform: none;
                        width: 80% !important;
                        /* font-weight: bold; */
                        text-align: center
                    }

                    .btn {
                        text-align: center;
                        width: 82% !important;
                        border: 12px solid #27ae60;
                        margin: 15px 0;
                        font-size: 22px;
                        cursor: pointer;
                        font-weight: bold;
                        background: var(--green);
                        color: #fff;
                        border-radius: 5px;
                        /* padding: 9px 30px; */
                        display: inline-block;
                        margin-top: 10px;
                    }

                    @media screen and (max-width: 768px) {
                        form {
                            width: 24rem !important;
                            padding: 10px;
                            margin: 0 auto;
                        }
                    }
                </style>
                <div>

                    <div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h3>انشاء حساب</h3>
                            <div style="text-align: center;">
                                <div>

                                    <input id="name" type="text" class="box @error('name')  @enderror"
                                        name="name" class="box" placeholder=" أسم المستخدم"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- email --}}
                                <div>

                                    <input placeholder="البريد الأكتروني" id="email" type="email"
                                        class="box form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div>

                                    <input placeholder='كلمة المرور' id="password" type="password"
                                        class="box @error('password') @enderror" name="password" required
                                        autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>

                                    <input placeholder=" كلمة المرور مرة أخرى" id="password-confirm" type="password"
                                        class="box" name="password_confirmation" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div>

                                    <input placeholder="رقم الهاتف" id="phone" type="tel"
                                        class="box @error('phone') box  @enderror" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <style>
                                    .p {
                                        margin: 14px auto;
                                        padding-top: 8px;
                                        color: #666;
                                        font-size: 18px;
                                        font-weight: bold;
                                        text-align: right;
                                        padding-right: 2rem;
                                    }

                                    .a {
                                        color: #27ae60;
                                        text-decoration: none;
                                    }
                                </style>
                                <div class="">
                                    <input type="submit" value="أنشاء حساب" class="input btn">
                                    <p class="p">أمتلك حساب؟ <a class="a" href="{{ route('login') }}">تسجيل
                                            دخول</a></p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
