<?php $user_name = $this -> session -> userdata('name'); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container"> 
		
        <ul class="sm nav navbar-nav sm-blue" id="main-menu" >
        	
        	<li>
				<a href="<?= base_url("search") ?>">หน้าหลัก</a>
			</li>
        	<li><a href="<?= base_url("category") ?>">ประเภทของอาหาร</a>
		    	<ul>
		        	<!-- <li><a href="<?= base_url("recipe")?>">อาหารร้อน</a></li>
			        <li><a href="#">อาหารเย็น</a></li>
			        <li class="divider"></li>
			        <li><a href="#">A sub menu</a>
			        	<ul class="dropdown-menu"> -->
		        	<?php foreach($menu as $r) { ?>
		            	<li><a href=<?= base_url("category/type") . '/' . $r['type_id'] ?>>อาหาร<?= $r['type_name'] ?></a></li>
              		<?php } ?>
	            		<!-- </ul>
		          	</li>
		          	<li><a href="#">A separated link</a></li> -->
	       		</ul>
	       		
	      	</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php if($user_name == null) { ?>
   			<li><a href="<?= base_url('login/check') ?>">Login with Facebook</a></li>	
   			<?php } else { ?>
   			<li><a style="color: white ">สวัสดี <?= $user_name ?></a></li>
   			<li><a href="<?= base_url('login/clear') ?>">Logout</a></li>	
   			<?php }?>
   		</ul>
	</div>			
</div>

<script></script>
