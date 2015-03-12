<script>
$('#myTab a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
})

$(document).ready(function() {
	$('#fullpage').fullpage({
		anchors: ['searchpage', 'toprecipe'],
		autoScrolling: false,
		menu: '#menu',
		resize: false,
        animateAnchor:false,
		scrollOverflow: true,
		responsive: 900,
		fitSection: false,
		navigation:true,
		continuousVertical:true,
        css3: true,
		afterLoad: function(anchorLink, index){

			//section 2
			if(index == 2){
				//moving the image
				$('#section1').find('img').delay(500).animate({
					left: '0%'
				}, 1500, 'easeOutExpo');

				$('#section1').find('p').first().fadeIn(1800, function(){
					$('#section1').find('p').last().fadeIn(1800);
				});;

			}

			//section 3
			if(anchorLink == '3rdPage'){
				//moving the image
				$('#section2').find('.intro').delay(500).animate({
					left: '0%'
				}, 1500, 'easeOutExpo');
			}
		}
	});
});
</script>

<div id="fullpage">
    <div class="section" id="section0">
    	<div class="row">
    		<div class="col-sm-push-4 col-xs-12">
    			<h1>Welcome to Food Suggestion TEST</h1>
    		</div>
			<div class="boxshadow1 boxshadow2 col-sm-4 col-sm-push-4 col-xs-12" style="margin-top: 150px">
				<div role="tabpanel">
					<ul class="nav nav-tabs" role="tablist" id="myTab">
					  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Search by recipe</a></li>
					  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Search by ingredient</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<form id="recipe_form" name="recipe_form" class="form-signin" action="<?= base_url('search/check') ?>" role="form" method="post">
								<center>
									<h2 class="form-signin-heading" style="color: white">Recipe Search</h2>
								</center>
								<div style="height: 5px;width: 20%; float: left; background-color: #d81b60"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #3f51b5"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #259b24"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #ff9800"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #e51c23"></div>
								<br>
								<br>
								<div class="form-inline">
								<input id="recipe_input" name="recipe_input" type="username" class="form-control" style="width: 80%; margin: 0px auto 0px auto" placeholder="recipe" required="" autofocus="" />
								<button class="button blue medium" type="submit" style="margin: 0px auto 0px auto; vertical-align: middle"><span class="glyphicon glyphicon-search"></span></button>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							<form id="ingredient_form" name="ingredient_form" class="form-signin" action="<?= base_url('search/check') ?>" role="form" method="post">
								<center>
									<h2 class="form-signin-heading" style="color: white">Ingredient Search</h2>
								</center>
								<div style="height: 5px;width: 20%; float: left; background-color: #d81b60"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #3f51b5"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #259b24"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #ff9800"></div>
								<div style="height: 5px;width: 20%; float: left; background-color: #e51c23"></div>
								<br>
								<br>
								<div class="form-inline">
									<input id="ingredient_input" name="ingredient_input" type="username" class="form-control" style="width: 80%; margin: 0px auto 0px auto" placeholder="ingredient" required="" autofocus="" />
									<button class="button green medium" type="submit" style="margin: 0px auto 0px auto; vertical-align: middle"><span class="glyphicon glyphicon-plus"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
    </div>
    <div class="section" id="section1">
    	
    	<div class="fp-slides">    	
    	<div class="row">
    		<div class="col-center-block col-sm-2 col-xs-12">
				<h1>[Food Name]</h1>
			</div>
		</div>
		<div class="fp-controlArrow fp-prev"></div>
		<div class="fp-controlArrow fp-next"></div>
		</div>
	</div>
</div>
<!-- /container -->