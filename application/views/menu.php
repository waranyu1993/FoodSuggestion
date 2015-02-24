<?php $session_page = $this->session->userdata('session_page'); ?>

<div class="navbar navbar-inverse" id='header' style="border-radius: 0px; border: 0px;">
	<div class="container">
		<div class="navbar-header">
			<img style="" height="50" src=<?= base_url('public/images/Image001.png') ?> /> 
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        </button>
		</div>
			<form name="logout_form" id="logout_form" class="form-inline" role="form" action="<?= base_url("login/logout") ?>" method="post">
				<ul class="nav navbar-nav navbar-right">
					<?php  $log_user = get_cookie('log_cookie'); ?>
					<li><label style="color: #FFFFFF; margin-top: 15px">สวัสดี &nbsp; <?= $log_user ?> &nbsp;</label></li>
					<li>
						<button name="logout_btn" id="logout_btn" type="submit" class="button gray small" style="margin-top: 5px" >
							Logout
						</button>
					</li>
				</ul>
			</form>
		</div>
	</div>
</div>


