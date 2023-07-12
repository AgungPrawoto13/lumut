<div class="wrap">
    <nav id="w1" class="navbar-inverse navbar-fixed-top navbar">
    	<div class="container">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w1-collapse">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand" href="/blog/web/">My Application</a>
    		</div>
    		<div id="w1-collapse" class="collapse navbar-collapse">
    			<ul id="w2" class="navbar-nav navbar-right nav">
    				<li>
    					<a href="/blog/web/site/index">Home</a>
    				</li>
    				<li>
    					<a href="/blog/web/post/index">Post</a>
    				</li>
    				<li class="active">
    					<a href="/blog/web/account/index">Akun</a>
    				</li>
    				<li>
    					<form action="/blog/web/site/logout" method="post">
    						<input type="hidden" name="_csrf" value="jDy0Br1GboAsCh5HYW5uVAi4tqzahYe2mHzB_FYb1b76TIVv6B8M2mhlTCELLCk1ed3H-ZvBwOXhEbe6FEyKhw==">
    						<button type="submit" class="btn btn-link logout">Logout (admin)</button>
    					</form>
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
        	<li class="active">Accounts</li>
        </ul>         
        <div class="account-index">
        	<h1>Accounts</h1>
        	<p>
        		<a class="btn btn-success" href="/blog/web/account/create">Create Account</a>    
        	</p>
        	<div id="w0" class="grid-view">
        		<div class="summary">Menampilkan <b>1-5</b> dari <b>5</b> item.</div>
        		<table class="table table-striped table-bordered">
        			<thead>
        				<tr>
        					<th>#</th>
        					<th>
        						<a href="/blog/web/account/index?sort=username" data-sort="username">Username</a>
        					</th>
        					<th>
        						<a href="/blog/web/account/index?sort=name" data-sort="name">Name</a>
        					</th>
        					<th>
        						<a href="/blog/web/account/index?sort=role" data-sort="role">Role</a>
        					</th>
        					<th class="action-column">&nbsp;</th>
        				</tr>
        			</thead>
        			<tbody>
<tr data-key="admin"><td>1</td><td>admin</td><td>Admin</td><td>admin</td><td><a href="/blog/web/account/view?id=admin" title="Lihat" aria-label="Lihat" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/blog/web/account/update?id=admin" title="Ubah" aria-label="Ubah" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/blog/web/account/delete?id=admin" title="Hapus" aria-label="Hapus" data-pjax="0" data-confirm="Apakah Anda yakin ingin menghapus item ini?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="aku"><td>2</td><td>aku</td><td>aku</td><td>author</td><td><a href="/blog/web/account/view?id=aku" title="Lihat" aria-label="Lihat" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/blog/web/account/update?id=aku" title="Ubah" aria-label="Ubah" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/blog/web/account/delete?id=aku" title="Hapus" aria-label="Hapus" data-pjax="0" data-confirm="Apakah Anda yakin ingin menghapus item ini?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="author"><td>3</td><td>author</td><td>Author</td><td>author</td><td><a href="/blog/web/account/view?id=author" title="Lihat" aria-label="Lihat" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/blog/web/account/update?id=author" title="Ubah" aria-label="Ubah" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/blog/web/account/delete?id=author" title="Hapus" aria-label="Hapus" data-pjax="0" data-confirm="Apakah Anda yakin ingin menghapus item ini?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="dimas"><td>4</td><td>dimas</td><td>dimas</td><td>author</td><td><a href="/blog/web/account/view?id=dimas" title="Lihat" aria-label="Lihat" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/blog/web/account/update?id=dimas" title="Ubah" aria-label="Ubah" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/blog/web/account/delete?id=dimas" title="Hapus" aria-label="Hapus" data-pjax="0" data-confirm="Apakah Anda yakin ingin menghapus item ini?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
<tr data-key="rafli"><td>5</td><td>rafli</td><td>rafli</td><td>author</td><td><a href="/blog/web/account/view?id=rafli" title="Lihat" aria-label="Lihat" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/blog/web/account/update?id=rafli" title="Ubah" aria-label="Ubah" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/blog/web/account/delete?id=rafli" title="Hapus" aria-label="Hapus" data-pjax="0" data-confirm="Apakah Anda yakin ingin menghapus item ini?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
</tbody></table>
</div></div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company 2023</p>

        <p class="pull-right">Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a></p>
    </div>
</footer>
</body>
</html>
