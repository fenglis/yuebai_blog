<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('/style/font/css/font-awesome.min.css')}}">
</head>
<body style="background:#F3F3F4;">
<div class="login_box">
    <h1>Blog</h1>
    <h2>欢迎使用博客管理平台</h2>
    <div class="form">
        @include("admin.errors.error")
        <form action="/admin/login" method="post">
            {{ csrf_field() }}
            <ul>
                <li>
                    <input type="text" name="username" class="text"/>
                    <span><i class="fa fa-user"></i></span>
                </li>
                <li>
                    <input type="password" name="password" class="text"/>
                    <span><i class="fa fa-lock"></i></span>
                </li>
                <li>
                    <input type="text" class="code" name="captcha"/>
                    <span><i class="fa fa-check-square-o"></i></span>
                    <img class="thumbnail captcha" src="{{ captcha_src() }}" onclick="this.src='/captcha?'+Math.random()" title="点击图片重新获取验证码">
                </li>
                <li>
                    <input type="submit" value="立即登陆"/>
                </li>
            </ul>
        </form>
        <p><a href="#">返回首页</a> &copy; 2018 Powered by <a href="http://www.houdunwang.com" target="_blank">http://www.houdunwang.com</a></p>
    </div>
</div>
</body>
</html>