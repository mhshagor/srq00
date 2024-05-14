<?php 
	$baseurl='http://localhost/alamin/';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home | Duplex by Al-Amin</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo $baseurl;?>css/bootstrap.min.css">
		<!-- bootstrap-extensions -->
		<link rel="stylesheet" href="<?php echo $baseurl;?>css/bootstrap-extensions.css" >
		
		<link rel="stylesheet" href="<?php echo $baseurl;?>css/animate.min.css">
		<style>
			*{
				scroll-behavior:smooth;
			}
			.breadcrumb-light .breadcrumb-item+.breadcrumb-item::before{
					color: white;
				}
		
			.group-hover:hover .hover-end-0{
				right:0!important;
			}
		</style>
	</head>
	<body>
		<!-- Blog Full Width -->
		<header id="fullNav" class="start-0 end-0  position-absolute transition-all duration-500 z-index-1090" >
			<?php include('../base-top-nav.php'); ?>
			<?php include('../base-main-nav.php'); ?>
		</header>
		<main class="overflow-hidden">
			<!-- first part -->
			<?php include('home-blog.php'); ?>
			<!-- full part -->
			<?php include('blog-fullWidth.php'); ?>
		</main>
		<footer>
			<?php include('../footer.php'); ?>
		</footer>
		<!-- Bootstrap Bundle -->
		<script src="<?php echo $baseurl;?>js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $baseurl;?>js/jquery-3.6.0.min.js"></script>
		<script src="<?php echo $baseurl;?>js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<script>
			window.onscroll = function(){
				var scrollValue = window.pageYOffset;
				var fullNav = document.getElementById('fullNav');
				var topNav = document.getElementById('topNav');
				var mainNav = document.getElementById('mainNav');
				if(scrollValue > 300 && scrollValue < 700){
					fullNav.style.top = '-200px';
					fullNav.classList.remove("position-absolute");
					topNav.classList.add("d-none");
					mainNav.classList.add("d-none");
					fullNav.classList.add("position-fixed");
					mainNav.classList.add("container-fluid");
					mainNav.classList.remove("container-lg");
				}else if(scrollValue >= 700){
					mainNav.classList.remove("d-none");
					fullNav.style.top = 0;
				}else{
					fullNav.style.top= 0;
					fullNav.classList.remove("position-fixed");
					fullNav.classList.add("position-absolute");
					topNav.classList.remove("d-none");
					mainNav.classList.remove("d-none");
					mainNav.classList.add("container-lg");
					mainNav.classList.remove("container-fluid");
				}
				//alert(scrollValue);
				
				if(scrollValue >800){
				  document.querySelector('#upper').classList.remove('opacity-0');
				  document.querySelector('#upper').classList.add('opacity-100');
				}else{
				  document.querySelector('#upper').classList.remove('opacity-100');
				  document.querySelector('#upper').classList.add('opacity-0');
				}
			}
			document.querySelector('#upper').addEventListener("click",function(){
				window.scrollTo(0,0);
			});
		</script>
		
	</body>
</html>