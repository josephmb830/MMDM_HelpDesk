<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>MMDM HelpDesk::Acceso</title>

	<link href="public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="public/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="public/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="public/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="public/img/favicon.png" rel="icon" type="image/png">
	<link href="public/img/favicon.ico" rel="shortcut icon">

<link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box">
                    <div class="sign-avatar">
                        <img src="public/img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">Acceso</header>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-Mail or Phone"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>


<script src="public/js/lib/jquery/jquery.min.js"></script>
<script src="public/js/lib/tether/tether.min.js"></script>
<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
<script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script>
    $(function() {
        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function(){
            setTimeout(function(){
                $('.page-center').matchHeight({ remove: true });
                $('.page-center').matchHeight({
                    target: $('html')
                });
            },100);
        });
    });
</script>
<script src="public/js/app.js"></script>
</body>
</html>