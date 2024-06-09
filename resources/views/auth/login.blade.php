<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    @if(session()->has('login'))
        {{session('login')}}
    @endif
    @if(session()->has('register'))
    {{session('resgister')}}
    @endif
    @if(!auth()->check())
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="formelemans">
            <div>
                <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div>
                <input type="password" name="password" required placeholder="enter password"/>
            </div>
            <button type="submit">Login</button><br>
            <p>or</p>
            <p>Don't you have an account?</p>
            <a href="{{'register'}}">Register</a>    
        </div>
      
    </form>
    @endif

    @auth
    <a href="{{'logout'}}">Logout</a>    
    @endauth
   
</body>
</html>