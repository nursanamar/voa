<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0&appId=741793572552637&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="preloader">
		<img src="<?php echo base_url() ?>assets/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>">
					<div>
					<img width="50px" height="50px" src="<?php echo base_url() ?>assets/img/valogo.png" data-active-url="<?php echo base_url() ?>assets/img/valogo.png" alt="">
					<span class="channelTitle" >Voice Alauddin</span>
					</div>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
          				<ul class="dropdown-menu">
							<?php
								foreach ($playlist as $value) { 
							?>
								<li><a href="#"><?php echo $value ?></a></li>
									
							<?php   
								} 
							?>
          				</ul>
						<!-- <a href="sdfj">dsd</a>
						<ul>
							<li>dsd</li>
							<li>dsd</li>
							<li>dsd</li>
							<li>dsd</li>
							<li>dsd</li>
						</ul> -->
        			</li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>