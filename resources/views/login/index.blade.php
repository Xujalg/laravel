<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户登录</title>
</head>
<body>
<form action="{{ route('login') }}" method="post">
    {{--csrf验证--}}
    @csrf
    <div>
        <input type="text" name="username" value="admin" autocomplete="off" placeholder="用户名">
    </div>
    <div>
        <input type="text" name="password" value="admin" autocomplete="off" placeholder="密码">
    </div>
    <div>
        <input type="submit" value="登录用户">
    </div>
</form>
</body>
</html>
