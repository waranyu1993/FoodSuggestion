<div id="fullpage">
    <div class="section" id="section0">
		<div class="jumbotron">
			<h1 style="text-align: center"><?= $detail[0]["menu_name"] ?></h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
					<img src="<?= $detail[0]['pic_url'] ?>" />
				</div>
				<div class="col-sm-offset-4 col-sm-7">
					<h1>Description</h1>
					<p>
						อาหารนี้คืออารายยยย
					</p>
				</div>
			</div> 
			<div class="row">
				<div class="col-sm-4">
					<h1>Ingredient</h1>
					<p class="well">
						<?php $count = 1;
						foreach($ingredient as $ing) { 
							echo $count . ". " . $ing["ing_name"] . " " . (($ing["ing_weg"] != 0 ) ? $ing["ing_weg"] : "") . " " . $ing["ing_num"];
						?><br />
						<?php
							$count++;
						} ?>
					</p>
			  	</div>
			  	<div class="col-sm-offset-1 col-sm-4">
			  		<h1>Method</h1>
			  		<p class="well">
			  		<?php 
						$x = explode("|", $detail[0]["menu_met"]); 
						for($i=0; $i< sizeof($x); $i++) {
					?>
					<?= $x[$i] ?><br /><br />
					<?php } ?>
					</p>
			  	</div>
			</div>
		</div>
	</div>
</div>

<style>
img {
	border: solid;
	border-radius: 25px;
	width: 360px;
	height: 360px;	
}
</style>

<script>
	$(document).ready(function() {
		$('#fullpage').fullpage({
			anchors: ['searchpage'],
			sectionsColor: ['#FFFFFF'],
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