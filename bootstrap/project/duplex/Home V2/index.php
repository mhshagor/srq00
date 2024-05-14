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
		
	</head>
	<body>
		<header id="fullNav" class="start-0 end-0  position-absolute transition-all duration-500 z-index-1090" >
			<?php include('../base-top-nav.php'); ?>
			<?php include('../base-main-nav.php'); ?>
		</header>
		<main class="overflow-hidden">
			<!-- slider part -->
			<?php include('../slider.php'); ?>
			<!-- about part -->
			<?php include('home02-weAreDuplex.php'); ?>
			<!-- project part -->
			<?php include('../home01-project.php'); ?>
			<!-- service part -->
			<?php include('../home01-service.php'); ?>
			<!-- process part -->
			<?php include('../home01-process.php'); ?>
			<!-- testimonial part -->
			<?php include('home02-testimonials.php'); ?>
			<!-- news part -->
			<?php include('../home01-news.php'); ?>
		</main>
		<footer>
			<?php include('../footer.php'); ?>
		</footer>
		<!-- Bootstrap Bundle -->
		<script src="<?php echo $baseurl;?>js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $baseurl;?>js/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
		<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
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
			}
		</script>
		
		<script>
		  var swiper = new Swiper("#testimonial-swiper", {
			direction: "vertical",
			autoHeight: true,
			autoplay: {
				  delay: 2500,
				  disableOnInteraction: false,
			},
			pagination: {
			  el: ".swiper-pagination",
			  clickable: true,
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