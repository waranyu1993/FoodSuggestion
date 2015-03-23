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
	        <ul class="nav navbar-nav navbar-right">
	        	<li>
					<a href="<?= base_url("search") ?>">Home</a>
				</li>
	        	<li>
		            <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
		                Category
		            </a>
		    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
		            	<li><a href="#">Some action</a></li>
		              	<li><a href="#">Some other action</a></li>
		              	<li class="divider"></li>
		              	<li class="dropdown-submenu">
			                <a tabindex="-1" href="#">Hover me for more options</a>
			                <ul class="dropdown-menu">
			                	<li><a tabindex="-1" href="#">Second level</a></li>
			                  	<li class="dropdown-submenu">
				                    <a href="#">Even More..</a>
				                    <ul class="dropdown-menu">
				                    	<li><a href="#">3rd level</a></li>
				                  		<li><a href="#">3rd level</a></li>
				                    </ul>
		                  		</li>
			                  <li><a href="#">Second level</a></li>
			                  <li><a href="#">Second level</a></li>
			                </ul>
						</li>
            		</ul>
				</li>
			</ul>
		</div>
			<form name="logout_form" id="logout_form" class="form-inline" role="form" action="<?= base_url("login/logout") ?>" method="post">
				<ul class="nav navbar-nav navbar-right">
					<?php  $log_user = get_cookie('log_cookie'); ?>
					<li><label style="color: #FFFFFF; margin-top: 15px">สวัสดี &nbsp; <?= $log_user ?> &nbsp;</label></li>
					<li>
						<buttonname="logout_btn" id="logout_btn" type="submit" class="button gray small" style="margin-top: 5px" >
							<i class="glyphicon glyphicon-log-out"></i> Logout
						</button>
					</li>
				</ul>
			</form>
		</div>
	</div>
</div>


