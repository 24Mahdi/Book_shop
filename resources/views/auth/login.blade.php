@extends('layouts.app')

@section('content')
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

        .login-form-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 20px;
            padding: 0 20px;
            box-sizing: border-box;
        }

        form {
            background: #fff;
            border: var(--border);
            width: 450px;
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
            width: 100%;
            border: 10px solid #27ae60;
            margin: 15px 0;
            font-size: 24px;
            cursor: pointer;
            font-weight: bold;
            background: var(--green);
            color: #fff;
            border-radius: 9px;
            /* padding: 9px 30px; */
            display: inline-block;
            margin-top: 10px;
        }

        p {
            color: #f2f2f2;
        }

        a {
            color: #f2f2f2;
        }

        .p {
            margin: 14px auto;
            padding-top: 8px;
            color: var(--light-color);
            font-size: 18px;
            font-weight: bold;
            text-align: right;
        }

        .a {
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
    </style>
    <div
        style='position: fixed;/* background: #fff; */width: 100%;top: 0px;padding: 10px;/* box-shadow: 1px 1px 50px #000; */z-index: 1;display: block;'>
        <a href="{{ route('index') }}"
            style='float: left;margin-left: 5%;font-weight: bold;font-size: 28px;text-shadow: 1px 1px 7px #333;cursor: pointer;text-decoration: none;color: #000;padding: 0px 50px 0px 0px;'>
            <i class="fa-solid fa-reply"></i></a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div>
                        <div class="login-form-container">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <img src="public\Books\IMG\login.png" alt="">
                                <h3>تسجيل دخول</h3>
                                <div>
                                    <div>
                                        <input id="email" type="email" class="box @error('email')  @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <input id="password" type="password" class="box @error('password') @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3" style="text-align: left !important;">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label
                                                style="font-size: 1.2rem;font-family: auto;font-weight: bold;color: #4a4a4a;"
                                                class="form-check-label" for="remember">
                                                {{ __('تذكرني') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" value="تسجيل دخول" class="btn">
                                    <p class="p">لا أمتلك حساب ؟<a class="a" href="{{ route('register') }}">أنشاء
                                            حساب</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
