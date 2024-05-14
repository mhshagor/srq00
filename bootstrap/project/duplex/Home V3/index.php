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
		<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,600&display=swap" rel="stylesheet">
		
		<style>
			*{
				scroll-behavior:smooth;
			}
			.swiper-button-next, .swiper-button-prev{
				margin-top:1rem;
				height: 2.7rem;
				width: 2.7rem;
				font-weight: bold;
				border-style: solid;
				border-color:white;
				border-radius:50%;
			}
			.swiper-button-next:hover, .swiper-button-prev:hover{
				background-color:#f8aa27;
				border-color:#f8aa27;
			}
			.swiper-button-next::after {
				font-size:12px;
				color:white;
			}
			.swiper-button-prev::after {
				font-size:12px;
				color:white;
			}
		</style>
	</head>
	<body>
		<!-- Home V3 -->
		<header id="fullNav" class="start-0 end-0  position-absolute transition-all duration-500 z-index-1090" >
			<?php include('../base-top-nav.php'); ?>
			<?php include('../base-main-nav.php'); ?>
		</header>
		<main class="overflow-hidden">
			<!-- slider part -->
			<?php include('../slider.php'); ?>
			<!-- about part -->
			<?php include('../home01-about.php'); ?>
			<!-- project part -->
			<div class="pt-5"><?php include('home03-project.php'); ?></div>
			<!-- service part -->
			<?php include('../home01-service.php'); ?>
			<!-- process part -->
			<div class="py-4"><?php include('../home01-process.php'); ?></div>
			<!-- testimonial part -->
			<?php include('home02-testimonials.php'); ?>
			<!-- news part -->
			<?php include('../home01-news.php'); ?>
			<!-- extra swiper part -->
			<?php include('home03-extra.php'); ?>
		</main>
		<footer>
			<?php include('../footer.php'); ?>
		</footer>
		<!-- Bootstrap Bundle -->
		<script src="../js/bootstrap.bundle.min.js"></script>
		<script src="../js/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
		<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
		<script src="../js/jquery-3.6.0.min.js"></script>
		<!-- wow js  -->
		<script src="../js/wow.min.js"></script>
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
		
		
		<script>
		  var swiper = new Swiper("#testimonial-swiper", {
			 loop: true,
			 autoplay: {
				  delay: 2500,
				  disableOnInteraction: false,
			},
			navigation: {
			  nextEl: ".swiper-button-next",
			  prevEl: ".swiper-button-prev",
			},
		  });
		</script>
		  
		<!-- Initialize Swiper -->
		<script>
		  var swiper = new Swiper('#brand-swiper', {
			  slidesPerView: 2,
			  spaceBetween: 10,
			  autoplay: {
				  delay: 2500,
				  disableOnInteraction: false,
			  },
			  breakpoints: {
				  640: {
					slidesPerView: 3,
				  },
				  768: {
					slidesPerView: 4,
				  },
				  1024: {
					slidesPerView: 5,
				  },
				},
			});

		</script>
	</body>
</html>