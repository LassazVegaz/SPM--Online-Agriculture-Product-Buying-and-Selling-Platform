<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widthe=device-width, initial-scale.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User | Sign In</title>
        <link rel="stylesheet" href="" integrity="">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:45px">
                <div class="col-md-4 com-md-offset-4">
                    <h4>Sign in</h4>
                    <br><br>
                    <p>Sign in to your account</p>
                    <br>
                    <br>
                    <form action="{{ route('auth.check') }}" method="POST">

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
                            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        <br>
                        <a href="{{ route('auth.forgetPassword') }}">Forget Password? Reset</a>
                        <br><br>
                        <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                        <br><br>
                        <a href="{{ route('auth.register') }}">Create an account</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>