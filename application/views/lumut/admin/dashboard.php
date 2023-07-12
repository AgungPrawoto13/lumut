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
                        <a href="<?= base_url('admin/log_out');?>">Log Out</a>
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
            <li class="active"><?= $this->session->userdata('username');?></li>
        </ul>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company 2023</p>

        <p class="pull-right">Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a></p>
    </div>
</footer>

