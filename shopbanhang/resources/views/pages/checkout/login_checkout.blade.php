@extends('welcome')
@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập</h2>
                        <form action="#">
                            <input type="text" name="email_account" placeholder="Tài khoản" />
                            <input type="password" name="password_account" placeholder="Mật khẩu" />
                            <span>
								<input type="checkbox" class="checkbox">
								ghi nhớ đăng nhập
							</span>
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">Hoặc</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng ký</h2>
                        <form action="#">
                            <input type="text" placeholder="Tài khoản"/>
                            <input type="email" placeholder="Email"/>
                            <input type="password" placeholder="Mật khẩu"/>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection
