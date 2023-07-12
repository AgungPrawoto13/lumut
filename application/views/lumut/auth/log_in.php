<div class="wrap">
    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/blog/web/">My Application</a>
            </div>
            <div id="w0-collapse" class="collapse navbar-collapse">
                <ul id="w1" class="navbar-nav navbar-right nav">
                    <li>
                        <a href="<?= base_url('admin');?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/post');?>">Post</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/akun');?>">Akun</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url('auth');?>">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/blog/web/">Beranda</a>
            </li>
            <li class="active">Login</li>
        </ul>
        <div class="site-login">
            <h1>Login</h1>

            <p>Please fill out the following fields to login:</p>

            <form action="<?= base_url('auth/login_admin');?>" class="form-horizontal" id="login-form" method="post">
                <input type="hidden" name="_csrf" value="H7BaGdUvRsh1rgCF72KrK5aLbo8gPLwp7zo_1qf3qKFpwGtwgHYkkjHBUuOFIOxK5-4f2mF4-3qWV0mQ5aD3mA==">
                <div class="form-group field-loginform-username required">
                    <label class="col-lg-1 control-label" for="loginform-username">Username</label>
                    <div class="col-lg-3">
                        <input type="text" id="loginform-username" class="form-control" name="username" autofocus aria-required="true">
                    </div>
                    <div class="col-lg-8">
                        <div class="help-block help-block-error "></div>
                    </div>
                </div>
                <div class="form-group field-loginform-password required">
                    <label class="col-lg-1 control-label" for="loginform-password">Password</label>
                    <div class="col-lg-3">
                        <input type="password" id="loginform-password" class="form-control" name="password" aria-required="true">
                    </div>
                    <div class="col-lg-8">
                        <div class="help-block help-block-error "></div>
                    </div>
                </div>
                <div class="form-group field-loginform-rememberme">
                    <div class="col-lg-offset-1 col-lg-3">
                        <input type="hidden" name="LoginForm[rememberMe]" value="0">
                        <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked> 
                        <label for="loginform-rememberme">Remember Me</label>
                    </div>
                        <div class="col-lg-8"><div class="help-block help-block-error "></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <button type="submit" class="btn btn-primary" name="login-button">Login</button>            
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company 2023</p>

        <p class="pull-right">Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a></p>
    </div>
</footer>

