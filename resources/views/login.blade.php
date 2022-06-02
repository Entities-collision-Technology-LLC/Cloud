
<!DOCTYPE html>
<html lang="zh-CN">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登录 | {{ env('APP_NAME') }} - 中国新一代云提供商|高速虚拟主机|云服务器|挂机宝|免费CDN</title>

        <!-- Common Plugins -->
        <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('assets/lib/jquery/dist/jquery.min.js')}}"></script>

        <!-- Custom Css-->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="96x96" href="{{$Webfavicon}}">
        <!-- SweetAlert -->
        <script src="{{asset('assets/lib/sweet-alerts2/sweetalert2.all.min.js')}}"></script>



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            html,body{
                height: 100%;
            }
        </style>
    </head>
    <body class="bg-light">

        <div class="misc-wrapper">
            <div class="misc-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="">
                            <div class="misc-header text-center">
								<a href="/"><img alt="" src="{{$Weblogo}}"  width="60%;" class="toggle-none hidden-xs"></a>
                            </div>
                            <div class="misc-box">
                                <div class="form-group">
                                    <label  for="login_account">用户名/邮箱</label>
                                    <div class="group-icon">
                                    <input id="login_account" type="text" placeholder="用户名 / 邮箱" class="form-control" required="">
                                    <span class="icon-user text-muted icon-input"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="login_passwd">密码</label>
                                    <div class="group-icon">
                                    <input id="login_passwd" type="password" placeholder="密码" class="form-control">
                                    <span class="icon-lock text-muted icon-input"></span>
                                    </div>
                                </div>

                                <div class="checkbox checkbox-primary margin-r-5">
                                    <input id="rememberme" type="checkbox" style="display: none">
                                    <label for="rememberme"> 信任此设备，15天内自动登录 </label>
                                  </div>

                                <div class="clearfix">
                                    <button type="submit" onclick="loginHandler()" class="btn btn-block btn-primary btn-rounded box-shadow">登录</button>
                                    <script>
                                        $("#login_passwd").on('keypress',function(e) {
                                            if(e.which === 13) {
                                                loginHandler()
                                            }
                                        });
                                    </script>
                                </div>
                                <hr>
                                <br>
                                <div class="text-center">
                                    <a href="/recover">找回密码</a> |
                                    <a href="/register">没有账号？前往注册</a>
                                </div>
                            </div>
                            <div class="text-center misc-footer" style="color:white;">
                               <p>Copyright © 2018-2022 {{env('APP_NAME')}} All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>

            function isURL(str) {
                var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
                '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
                '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
                '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
                '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
                '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
                return pattern.test(str);
            }

            function loginHandler() {
                var username = $("#login_account").val();
                var password = $("#login_passwd").val();
                if(username === "" || password === ""){
                    Swal.fire(
                    '错误',
                    '请填写完整',
                    'error'
                    )
                    return;
                }
                var isremember = $("#rememberme").is(':checked') === true ? 1 : 0;

                if(isURL(username)){
                    $.ajax({
                        url: '/api/login',
                        type: 'POST',
                        data: {
                            username: username,
                            password: password,
                            isremember: isremember
                        },
                        success: function(data){
                            if(data.code === 0){
                                Swal.fire(
                                '成功',
                                '登录成功',
                                'success'
                                )
                                setTimeout(function(){
                                    window.location.href = "/";
                                },1000);
                            }else{
                                Swal.fire(
                                '错误',
                                data.msg,
                                'error'
                                )
                            }
                        }
                    });
                }}
        </script>
        <!-- Common Plugins -->
        <script src="{{asset('assets/lib/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('assets/lib/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/lib/pace/pace.min.js')}}"></script>
        <script src="{{asset('assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/lib/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/lib/nano-scroll/jquery.nanoscroller.min.js')}}"></script>
        <script src="{{asset('assets/lib/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <link href="https://cdn.staticfile.org/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    </body>

</html>