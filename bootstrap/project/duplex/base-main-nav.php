<?php 
	$baseurl='http://localhost/alamin/';
?>
<style>
	.hover-dropdown .dropdown-menu{
		display:block;
		visibility:hidden;
		opacity:0;
		top:125%;
		box-shadow: 0 5px 5px rgb(24 24 24 / 25%);
		
	}
	.hover-dropdown:hover .dropdown-menu{
		top:100%;
		visibility:visible;
		opacity:100;
		transition:all 1s;
	}
	#mainNav .dropdown-menu{
		width:225px;
	}
	.dropdown-item:hover{
		background-color: #f39f13;
		transition:600ms ease all;
	}
	.text-hover:hover{
		color:#f39f13;
	}
	
	.list-hover:hover{
		color:#f39f13!important;
		transition:600ms ease all;
	}

</style>

<nav id="mainNav" class="container-lg navbar navbar-expand-lg navbar-light rounded-lg-bottom px-2 py-0 px-sm-3 bg-white" >
    <div class="container-fluid px-0 px-sm-3">
	  <a class="navbar-brand" href="#">
	    <img class="img-fluid" src="<?php echo $baseurl;?>images/demo/logo.png" alt="Company Name Logo" >
	  </a>

      <div class="navbar-collapse collapse d-none d-lg-flex">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item py-4 dropdown hover-dropdown">
		  	 <button type="button" class="btn text-hover  box-shadow-none" data-bs-toggle="" aria-expanded="false">
				HOME
			 </button>
			 <ul class="dropdown-menu rounded-1 bg-dark text-white py-0 border-2 border-start-0 border-end-0 border-bottom-0 border-warning ">
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/">Home V1</a></li>
				<li><hr class="dropdown-divider my-0"></li>          
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/home%20V2/">Home V2</a></li>
				<li><hr class="dropdown-divider my-0"></li>           
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/home%20V3/">Home V3</a></li>
			 </ul>
		  </li>
          <li class="nav-item py-4 text-hover">
            <a class="nav-link text-reset px-3" href="http://localhost/alamin/about/">ABOUT</a>
          </li>
          <li class="nav-item py-4 text-hover">
            <a class="nav-link text-reset px-3" href="http://localhost/alamin/service/">SERVICE</a>
          </li>
          <li class="nav-item py-4  dropdown hover-dropdown">
		  	 <button type="button" class="btn text-hover box-shadow-none" data-bs-toggle="" aria-expanded="false">
				PROJECTS
			 </button>
			 <ul class="dropdown-menu rounded-1 bg-dark text-white py-0 border-2 border-start-0 border-end-0 border-bottom-0 border-warning ">
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/Project%20V1/">Project V1</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item  small text-white py-3" href="http://localhost/alamin/Project%20V2/">Project V2</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/Project%20V3/">Project V3</a></li>
			 </ul>
		  </li>

          <li class="nav-item py-4  dropdown hover-dropdown">
		  	 <button type="button" class="btn text-hover box-shadow-none" data-bs-toggle="" aria-expanded="false">
				BLOG
			 </button>
			 <ul class="dropdown-menu rounded-1 bg-dark text-white py-0 border-2 border-start-0 border-end-0 border-bottom-0 border-warning ">
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/blog/">Blog</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/Blog%20Full-Width/">Full-Width Blog</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/blog%20details/">Blog Details</a></li>
			 </ul>
		  </li>
		  <li class="nav-item py-4  dropdown hover-dropdown">
			<button type="button" class="btn text-hover box-shadow-none" data-bs-toggle="" aria-expanded="false">
				SHOP
			</button>
			<ul class="dropdown-menu rounded-1 bg-dark text-white py-0 border-2 border-start-0 border-end-0 border-bottom-0 border-warning ">
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/shop/">Shop</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item small text-white py-3" href="http://localhost/alamin/shop%20productDetails/">Product Detail</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item small text-white py-3" href="#">Cart</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item small text-white py-3" href="#">Checkout</a></li>
				<li><hr class="dropdown-divider my-0"></li>
				<li><a class="dropdown-item small text-white py-3" href="#">My Account</a></li>
			</ul>
		  </li>
          <li class="nav-item py-4 text-hover">
            <a class="nav-link text-reset px-3" href="http://localhost/alamin/contact%20us/">CONTACT US</a>
          </li>
        </ul>
      </div>
	  <div class="d-flex align-items-center text-nowrap">
		  
		  <button class="navbar-toggler ms-auto collapsed bg-warning box-shadow-none px-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#mainOffCanvas" aria-controls="mainNav" >
			<div class=" " >
				<span class="navbar-toggler-icon "></span>
			</div>
		  </button>
		  <button class="btn btn-light ms-2 box-shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchOffCanvas">
			<svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
		  </button>
		</div>
	</div>
</nav>
<!-- Main Offcanvas -->

<div class="offcanvas offcanvas-end bg-dark d-lg-none" tabindex="-1" id="mainOffCanvas" >
	<div class="offcanvas-header px-0 pt-1">
		<button type="button" class="btn-close text-reset bg-white p-3 rounded-0" data-bs-dismiss="offcanvas"></button>
	</div>
	<div class="text-center " style="margin-top:-1rem" >
		<a class="navbar-brand" href="#">
			<img src="<?php echo $baseurl;?>images/demo/logo-2.png" alt="Company Name Logo 2" >
		</a>
	</div>
  
	<div class="offcanvas-body px-0">
		<div class="accordion accordion-flush" id="accordionFlushExample">
		  <div class="accordion-item bg-transparent">
		    <div class="px-3 py-2 d-flex justify-content-between bg-transparent border border-start-0 border-end-0 border-bottom-0 border-secondary" >
			  <a href="" class="text-decoration-none mt-1 text-white small" >HOME</a>
			  <button class="btn border rounded-0 px-2 py-1 mb-auto mt-0 text-white collapsed box-shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#home-collapse" ><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg></button>
		    </div>
			<div id="home-collapse" class="accordion-collapse collapse border-top" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
				<div class="list-group list-group-flush bg-transparent text-white" >
					<a href="http://localhost/alamin/" class="list-group-item list-group-item-action bg-transparent small text-white">HOME 01</a> 
					<a href="http://localhost/alamin/home%20V2/" class="list-group-item list-group-item-action bg-transparent small text-white">HOME 02</a> 
					<a href="http://localhost/alamin/home%20V3/" class="list-group-item list-group-item-action bg-transparent small text-white">HOME 03</a> 
				</div>
			</div>
		  </div>
		  
		  <div class="accordion-item bg-transparent border border-start-0 border-end-0 border-bottom-0 border-secondary">
			  <a href="http://localhost/alamin/about/" class="d-block px-3 py-2 text-decoration-none small text-white ">
				ABOUT
			  </a>
		  </div>
		  
		  <div class="accordion-item bg-transparent border border-start-0 border-end-0 border-secondary">
			  <a href="http://localhost/alamin/service/" class="d-block px-3 py-2 text-decoration-none small text-white ">
				SERVICE
			  </a>
		  </div>
		  
		  <div class="accordion-item bg-transparent">
		    <div class="d-flex px-3 py-2 justify-content-between bg-transparent" >
				<a href="" class="text-decoration-none mt-1 small text-white" >PROJECTS</a>
				<button class="btn border rounded-0 px-2 py-1 mb-auto mt-0 text-white collapsed box-shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#project-collapse" ><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg></button>
		    </div>
			<div id="project-collapse" class="accordion-collapse collapse border-top " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
				<div class="list-group list-group-flush bg-transparent" >
					<a href="http://localhost/alamin/Project%20V1/" class="list-group-item list-group-item-action bg-transparent small text-white">PROJECT 01</a> 
					<a href="http://localhost/alamin/Project%20V2/" class="list-group-item list-group-item-action bg-transparent small text-white">PROJECT 02</a> 
					<a href="http://localhost/alamin/Project%20V3/" class="list-group-item list-group-item-action bg-transparent small text-white">PROJECT 03</a> 
				</div>
			</div>
		  </div>
		  
		  <div class="accordion-item bg-transparent">
		    <div class="d-flex px-3 py-2 justify-content-between bg-transparent border border-start-0 border-bottom-0 border-end-0 border-secondary" >
				<a href="" class="text-decoration-none mt-1 small text-white" >BLOGS</a>
				<button class="btn border rounded-0 px-2 py-1 mb-auto mt-0 text-white collapsed box-shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#blog-collapse" ><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg></button>
		    </div>
			<div id="blog-collapse" class="accordion-collapse collapse border-top " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
				<div class="list-group list-group-flush bg-transparent" >
					<a href="http://localhost/alamin/blog/" class="list-group-item list-group-item-action bg-transparent small text-white">BLOG</a> 
					<a href="http://localhost/alamin/Blog%20Full-Width/" class="list-group-item list-group-item-action bg-transparent small text-white">FULL-WIDTH BLOG</a> 
					<a href="http://localhost/alamin/blog%20details/" class="list-group-item list-group-item-action bg-transparent small text-white">BLOG DETAILS</a> 
				</div>
			</div>
		  </div>
		  <div class="accordion-item bg-transparent">
		    <div class="d-flex px-3 py-2 justify-content-between bg-transparent border border-start-0 border-end-0 border-bottom-0 border-secondary" >
				<a href="" class="text-decoration-none mt-1 small text-white" >SHOP</a>
				<button class="btn border rounded-0 px-2 py-1 mb-auto mt-0 text-white collapsed box-shadow-none box-shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#shop-collapse" ><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg></button>
		    </div>
			<div id="shop-collapse" class="accordion-collapse collapse border-top " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
				<div class="list-group list-group-flush bg-transparent" >
					<a href="http://localhost/alamin/shop/" class="list-group-item list-group-item-action bg-transparent small text-white">SHOP</a> 
					<a href="http://localhost/alamin/shop%20productDetails/" class="list-group-item list-group-item-action bg-transparent small text-white">PRODUCT DETAIL</a> 
					<a href="#" class="list-group-item list-group-item-action bg-transparent small text-white">CART</a> 
					<a href="#" class="list-group-item list-group-item-action bg-transparent small text-white">CHECK OUT</a> 
					<a href="#" class="list-group-item list-group-item-action bg-transparent small text-white">MY ACCOUNT</a> 
				</div>
			</div>
		  </div>
		  <div class="accordion-item bg-transparent border border-start-0 border-end-0 border-secondary">
			  <a href="http://localhost/alamin/contact%20us/" class="d-block px-3 py-2 text-decoration-none small text-white ">
				CONTACT US
			  </a>
		  </div>
		</div>     
		<ul class="nav justify-content-center my-5">
		  <li class="nav-item  px-1">
			<a class="nav-link btn-warning btn-outline-light text-light hover-text-warning box-shadow-none px-2 py-1 rounded" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="18" class="" fill="currentColor" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
		  </li>
		  <li class="nav-item px-1">
			<a class="nav-link btn-warning btn-outline-light text-light hover-text-warning box-shadow-none px-2 py-1 rounded" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="18"  fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
		  </li>
		  <li class="nav-item px-1">
			<a class="nav-link btn-warning btn-outline-light text-light hover-text-warning box-shadow-none px-2 py-1 rounded" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="18" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256,8C119.1,8,8,119.1,8,256S119.1,504,256,504,504,392.9,504,256,392.9,8,256,8ZM185.3,380a124,124,0,0,1,0-248c31.3,0,60.1,11,83,32.3l-33.6,32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9,0-77.2,35.5-77.2,78.1S142.3,334,185.3,334c32.6,0,64.9-19.1,70.1-53.3H185.3V238.1H302.2a109.2,109.2,0,0,1,1.9,20.7c0,70.8-47.5,121.2-118.8,121.2ZM415.5,273.8v35.5H380V273.8H344.5V238.3H380V202.8h35.5v35.5h35.2v35.5Z"/></svg></a>
		  </li>
		  <li class="nav-item px-1">
			<a class="nav-link btn-warning btn-outline-light text-light hover-text-warning box-shadow-none px-2 py-1 rounded" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="18" fill="currentColor" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"/></svg></a>
		  </li>
		  <li class="nav-item px-1">
			<a class="nav-link btn-warning btn-outline-light text-light hover-text-warning box-shadow-none px-2 py-1 rounded" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="13" width="18" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"/></svg></a>
		  </li>
		</ul>
	</div>
</div>

<!-- Search Offcanvas -->
<div class="offcanvas offcanvas-top vh-100 bg-dark bg-opacity-50" tabindex="-1" id="searchOffCanvas" >
  <div class="offcanvas-header">
    <h5 id="offcanvasTopLabel"></h5>
    <button type="button" class="btn text-white box-shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="currentColor"  viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg></button>
  </div>
  <div class="offcanvas-body px-sm-5">
	<div class="d-flex flex-column justify-content-center h-100" >
		<h4 class="text-center text-white mb-5" >Recent Search Keywords</h4>
		<div class="row g-0 my-3 border border-3 rounded-3 bg-warning ">
			<div class="col-md-9">
			  <input type="text" class="form-control p-4 rounded-0 box-shadow-none" placeholder="Search Here" style="height:4rem; font-size:1.5rem;">
			</div>
			<div class="col-md-3">
			  <button class="btn btn-outline-dark px-5 py-3 btn-lg border-0 rounded-0 w-100 h-100 box-shadow-none" type="button" id="button-addon2">SEARCH</button>
			</div>
		</div>
	</div>
  </div>
</div>