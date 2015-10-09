<div class="col-md-9">
	<div class="page-header">
		<h1>Bootie <small>Micro Web Application Framework</small></h1>
	</div>

	<blockquote>
		<em>Developing code to run fast</em>
	</blockquote>

    <ul>
    <?php foreach(\Bootie\App::$routes as $url => $route):?>
        <li>
            <a href="<?php echo $url;?>">
            	<?php echo $route->request_method?:'GET';?> <?php echo $url;?>
            </a>
        </li>
    <?php endforeach;?>
    </ul>


    <em>Take a look <a href="<?php echo site_url('/about');?>">README</a></em>
    <em>See <a href="http://bootie.devmeta.net" target="_blank">here</a> for an online demo</em>
</div>