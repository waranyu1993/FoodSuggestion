<div id="fullpage">
    <div class="section" id="section0">
<div class="container">
	<br/><br/><br/><br/>
	<h2>อาหารผัด</h2>
	<div class="owl-demo">
	  <div class="item"><img src="<?= base_url("public/foodimg/food01.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food02.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food03.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food04.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food03.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food02.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food01.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food04.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	</div>
	<br/><br/><br/>
	<h2>อาหารทอด</h2>
	<div class="owl-demo">
	  <div class="item"><img src="<?= base_url("public/foodimg/food01.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food02.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food03.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food04.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food03.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food02.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food01.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food04.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	</div>
	<br/><br/><br/>
	<h2>อาหารย่าง</h2>
	<div class="owl-demo">
	  <div class="item"><img src="<?= base_url("public/foodimg/food01.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food02.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food03.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food04.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food03.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food02.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food01.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	  <div class="item"><img src="<?= base_url("public/foodimg/food04.jpg") ?>" alt="Owl Image" width= "132px" height= "132px"></div>
	</div>
</div>
</div>
</div>
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