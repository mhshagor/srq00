
<style>
	#project-tab button {
		border-color:transparent !important;
		
	}
	#project-tab button.active {
		border-bottom-color:black !important;
		color: black !important;
	}
</style>
<section id="" class="pb-5">
	<div class="container" >
		<div class="text-center my-5 overflow-hidden">
			<p class="text-warning small fst-normal" >OUR PROJECT</p>
			<h2 class="" >Recent Project</h2>
			<hr class="bg-warning mx-auto opacity-100" style="width:15px; height:2px; ">
			<div class="row justify-content-center my-4" >
				<div class="col-md-8 small fw-bold text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
				</div>
			</div>
		</div>
		<nav class="d-flex justify-content-center">
		  <div class="nav nav-tabs filter-button-group text-secondary border-bottom " id="project-tab" role="tablist">
			<button class="nav-link text-secondary small px-2 pb-1 active" id="nav-home-tab" data-bs-toggle="tab" data-filter="*">ALL</button>
			<button class="nav-link text-secondary small px-2 pb-1 " id="nav-home-tab" data-bs-toggle="tab" data-filter=".KITCHEN">KITCHEN</button>
			<button class="nav-link text-secondary small px-2 pb-1 " id="nav-home-tab" data-bs-toggle="tab" data-filter=".BATHROOM">BATHROOM</button>
			<button class="nav-link text-secondary small px-2 pb-1 " id="nav-profile-tab" data-bs-toggle="tab" data-filter=".BATH" >BATH</button>
			<button class="nav-link text-secondary small px-2 pb-1 " id="nav-profile-tab" data-bs-toggle="tab" data-filter=".FLOOR" >FLOOR</button>
			<button class="nav-link text-secondary small px-2 pb-1 " id="nav-profile-tab" data-bs-toggle="tab" data-filter=".MARKET" >MARKET</button>
		  </div>
		</nav>
		
		<div class="row mt-5 justify-content-center grid g-2 rounded-0" data-masonry='{"percentPosition": true }'>
			<div class="col-3 grid-item MARKET">
				<div class="card rounded-0 border-0">
					<img class="img-fluid " src="<?php echo $baseurl;?>images/demo/img-1.gif" alt="project01">
					<div class="card-img-overlay top-auto invisible opacity-0 hover-visible hover-opacity-75 transition-all">
					<a href="" class="btn btn-dark w-100 text-center">View</a>
					</div>
				</div>
			</div>
			<div class="col-3 grid-item KITCHEN MARKET BATH">
				<div class="card rounded-0 border-0">
					<img class="img-fluid " src="<?php echo $baseurl;?>images/demo/img-2.gif" alt="project02">
					<div class="card-img-overlay top-auto invisible opacity-0 hover-visible hover-opacity-75 transition-all">
					<a href="" class="btn btn-dark w-100 text-center">View</a>
					</div>
				</div>
			</div>
			<div class="col-6 grid-item KITCHEN FLOOR">
				<div class="card rounded-0 border-0">
					<img class="img-fluid " src="<?php echo $baseurl;?>images/demo/img-4.gif" alt="project03">
					<div class="card-img-overlay top-auto invisible opacity-0 hover-visible hover-opacity-75 transition-all">
						<a href="" class="btn btn-dark w-100 text-center">View</a>
					</div>
				</div>
			</div>
			
			<div class="col-3 grid-item BATHROOM">
				<div class="card rounded-0 border-0">
					<img class=" " src="<?php echo $baseurl;?>images/demo/img-5.gif" height="475" alt="project04">
					<div class="card-img-overlay top-auto invisible opacity-0 hover-visible hover-opacity-75 transition-all">
					<a href="" class="btn btn-dark w-100 text-center">View</a>
					</div>
				</div>
			</div>
			<div class="col-3 grid-item BATHROOM KITCHEN">
				<div class="card rounded-0 border-0">
					<img class="" src="<?php echo $baseurl;?>images/demo/img-6.gif" height="240" alt="project05">
					<div class="card-img-overlay top-auto invisible opacity-0 hover-visible hover-opacity-75 transition-all">
					<a href="" class="btn btn-dark w-100 text-center">View</a>
					</div>
				</div>
			</div>
			
			<div class="col-6 grid-item BATH FLOOR">
				<div class="card rounded-0 border-0">
					<img class=" " src="<?php echo $baseurl;?>images/demo/img-7.gif" height="228" alt="project06">
					<div class="card-img-overlay top-auto invisible opacity-0 hover-visible hover-opacity-75 transition-all">
						<a href="" class="btn btn-dark w-100 text-center">View</a>
					</div>
				</div>
			</div>
			<div class="col-3 grid-item BATH BATHROOM">
				<div class="card rounded-0 border-0">
					<img class=" " src="<?php echo $baseurl;?>images/demo/img-8.gif" height="227" alt="project07">
					<div class="card-img-overlay top-auto invisible opacity-0 hover-visible hover-opacity-75 transition-all">
						<a href="" class="btn btn-dark w-100 text-center">View</a>
					</div>
				</div>
			</div>
			
		
		</div>
		
	</div>
</section>
<script src="<?php echo $baseurl;?>js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $baseurl;?>js/isotope.pkgd.min.js"></script>
<script>
	var $grid = $('.grid').isotope({
	  itemSelector: '.grid-item',
	  layoutMode: 'fitRows'
	}); 
	// filter items on button click
	$('.filter-button-group').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter');
	  $grid.isotope({ filter: filterValue });
	});
</script>
		