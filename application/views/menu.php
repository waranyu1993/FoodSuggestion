<?php $session_page = $this->session->userdata('session_page'); ?>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container"> 
        <ul class="sm nav navbar-nav sm-blue" id="main-menu" >
        	<li>
				<a href="<?= base_url("search") ?>">หน้าหลัก</a>
			</li>
        	<li><a href="<?= base_url("recipe")?>">ประเภทของอาหาร</a>
		        <ul>
		        	<li><a href="<?= base_url("recipe")?>">อาหารร้อน</a></li>
			        <li><a href="#">อาหารเย็น</a></li>
			        <li class="divider"></li>
			        <li><a href="#">A sub menu</a>
			        	<ul class="dropdown-menu">
			            	<li><a href="#">Action</a></li>
			            	<li><a href="#">Another action</a></li>
			            	<li><a href="#">Something else here</a></li>
		             		<li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
	              			<li><a href="#">One more link</a></li>
	            		</ul>
		          	</li>
		          	<li><a href="#">A separated link</a></li>
	       		</ul>
	      	</li>
		</ul>
	</div>			
</div>
		


