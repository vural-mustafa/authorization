<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    @if(session()->has('login') && session('login')=='Fail')
    Login islemi hatali
@endif
<form action="{{route('register')}}" method="POST">
    @csrf
    <div class="formelemans">
        <div>
            <input type="text" placeholder="Username" name="name" required/>
        </div>
        <div>
            <input type="email" placeholder="Email" name="email" required/>
        </div>
        <div>
            <input type="password" name="password" required placeholder="enter password"/>
        </div>
        <button type="submit">Register</button><br>
        <p>or</p>
        <p>Do you have account?<p>
        <a href="{{'login'}}">Login</a>
    </div>
</body>
</html>