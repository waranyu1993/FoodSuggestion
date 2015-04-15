<div id="fullpage">
    <div class="section" id="section0">
		<div class="container">
			<br/><br/><br/><br/>
			<?php foreach($menu as $r) { ?>
			<h2>อาหาร<?= $r["type_name"] ?></h2>
			<div class="owl-demo">
				<?php 
				foreach($type_cate as $c) {
					if($r["type_id"] == $c["type_id"]) {
				?>
					<div class="form-group">
			  			<div class="item"><a href="<?= base_url("category/name") . '/' . $c['menu_id'] ?>"><img id=<?= $c["menu_id"] ?> src='<?= $c["pic_url"] ?>' alt="Owl Image"></a></div>
			  			<div class="center_textowl"><a href="<?= base_url("category/name") . '/' . $c['menu_id'] ?>"><?= $c["menu_name"] ?></a></div>
			  		</div>	
				<?php 
					}
				} 
				?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<style>
img {
	border: solid;
	border-radius: 25px;
	width: 160px;
	height: 160px;	
}
</style>

<script>
$(document).ready(function() {
 
	$(".owl-demo").owlCarousel({
 
      //autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 6,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
 	});
 	
 	$('#fullpage').fullpage({
		anchors: ['searchpage', 'toprecipe'],
		sectionsColor: ['#FFFFFF', '#ABCDEF'],
		slidesNavigation: true,
		autoScrolling: false,
		menu: '#menu',
		resize: false,
        animateAnchor:false,
		scrollOverflow: true,
		responsive: 900,
		fitSection: false,
		//navigation:true,
		continuousVertical:true,
        css3: true,
	}); 
});
</script>