<div id="fullpage">
    <div class="section" id="section0">
    	<div class="row">
    		<h1 style="text-align: center">Welcome to Food Suggestion</h1>
			<div class="boxshadow1 boxshadow2 col-sm-4 col-sm-push-4 col-xs-12" style="margin-top: 150px">
				<div role="tabpanel">
					<ul class="nav nav-tabs" role="tablist" id="myTab">
					  <li class="recipe_form" role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Search by recipe</a></li>
					  <li class="ingredient_form" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Search by ingredient</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<form autocomplete="off" id="recipe_form" name="recipe_form" class="form-signin" role="form" method="post">
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
									<input autocomplete="off" id="recipe_input" name="recipe_input" type="text" class="form-control" style="width: 80%; margin: 0px auto 0px auto" placeholder="recipe" required="" autofocus="" />
									<button class="button blue medium" style="margin: 0px auto 0px auto; vertical-align: middle"><span class="glyphicon glyphicon-search"></span></button>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							<form id="ingredient_form" name="ingredient_form" class="form-signin" role="form" method="post">
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
									<input autocomplete="off" id="ingredient_input" name="ingredient_input" type="text" class="form-control" style="width: 80%; margin: 0px auto 0px auto" placeholder="ingredient" required="" autofocus="" />
									<input id="ingredient_submit" type="button" class="button green medium" style="margin: 0px auto 0px auto; vertical-align: middle" value="+" />
								</div>
							</form>
						</div>
					</div>
				</div>
				<br>
			</div>
			<div class="boxshadow1 col-sm-3 col-sm-push-4 col-xs-12" id="ingredient_table" style="margin-top: 150px; margin-left: 30px; display: none">
				<div class="box" style="color: white"><h5>Ingredient</h5></div>
				<div style="height: 3px;width: 100%; float: left; background-color: white"></div>
				<div class="box ing_insert" style="color: white; height: 50px">	
					
				</div>
				<br />
				<button class="btn btn-primary" type="button">Search</button>
			</div>
		</div>
		
    </div>
    <div class="section" id="section1">
    	<div class="slide" id="slide1" data-anchor="slide1">
			<div class="intro">
				<h1>Food01</h1>
				<p>
					You can even click on the navigation and jump directly to another section.
				</p>
				<br /><br />
				<img src="<?= base_url("public/foodimg/food01.jpg") ?>">
			</div>
		</div>

	    <div class="slide" id="slide2" data-anchor="slide2">
			<h1>Food02</h1>
			<br /><br />
			<img src="<?= base_url("public/foodimg/food02.jpg") ?>">
		</div>

		<div class="slide" id="slide3" data-anchor="slide3">
			<h1>Food03</h1>
			<br /><br />
			<img src="<?= base_url("public/foodimg/food03.jpg") ?>">
		</div>	
		
		<div class="slide" id="slide3" data-anchor="slide3">
			<h1>Food04</h1>
			<br /><br />
			<img src="<?= base_url("public/foodimg/food04.jpg") ?>">
		</div>
    </div>
</div>

<style>
.section{
	text-align:center;
}

.section img{
	border: solid;
	border-radius: 25px;
	width: 640px;
	height: 480px;	
}

.fp-slidesNav.bottom{
	bottom: 25px;
}
</style>
<!-- /container -->

<script>
	$('#myTab a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
	})

	$(document).ready(function() {
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
		
		$(".ingredient_form").click(function(){
            document.getElementById("ingredient_table").style.display = "";
    	});
    	
    	$(".recipe_form").click(function(){
            document.getElementById("ingredient_table").style.display = "none";
    	});
    	
	    $('#ingredient_form')
        // IMPORTANT: You must declare .on('init.field.fv')
        // before calling .formValidation(options)
        .on('init.field.fv', function(e, data) {
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            var $parent = data.element.parents('.form-group'),
                $icon   = $parent.find('.form-control-feedback[data-fv-icon-for="' + data.field + '"]');

            // You can retrieve the icon element by
            // $icon = data.element.data('fv.icon');

            $icon.on('click.clearing', function() {
                // Check if the field is valid or not via the icon class
                if ($icon.hasClass('glyphicon-remove')) {
                    // Clear the field
                    data.fv.resetField(data.element);
                }
            });
        })
	});
	
</script>
