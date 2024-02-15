<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcommerceProject-shop</title>
        <!-- bootstrap icons link-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
 <link rel="stylesheet" href="assets/css/shop.css"/>
 <!-- google fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
  <body>
    <!-- Mobile Navigation Menu -->
    <header class="container">
    <nav class="mobilemenu">
		<div class="menu-wrapper">
		<img src="assets/img/logo.png"  class="mobilemenulogo"/>
			<ul class="desktop-menu">
				<li><a href="index.php" >Home</a></li>
				<li><a href="shop.php" id="active">Shop</a></li>
				<li><a href="trackorders.php">Track Order</a></li>
				<li><a href="signup.php">Signup</a></li>
			</ul>
			<div class="second-items">
			<a style="text-decoration:none;" href="login.php"><li class="account" id="login"><i class="bi bi-person-fill" id="acount"></i><span>login</span></li></a>
       <li class="cart" id="cart2"><i class="bi bi-cart carts" id="carticonbtn2"></i><span class="cartnumber">0</span><span class="cart-title">Cart</span></li>
    </div>
		</div>
    <ul class="mobilenav-items">
    <div class="first-items">
  <li><i class="bi bi-list"id="menubtn"></i></li>
  <img src="assets/img/logo.png"  class="mobilemenulogo"/>

    </div>
    <div class="second-items">
      <li class="account"><i class="bi bi-person-fill" id="loginicon"></i></li>
       <li class="cart" ><i class="bi bi-cart carts" id="carticonbtn"></i><span class="cartnumber">0</span></li>
    </div>
    </ui>
	
    </nav>
    </header>
    
       <!-- mobile floating Menu -->
       <div class="wrapper">
       		<div class="banner">
       		<h4 class="banner-title">Menu</h4>
       		<a href="#" class="banner-close"><i class="bi bi-x-circle close"></i></a>
       		</div>
       		<div class="row">
       		<div class="column1"> 
       		<a href="#"><span><i class="bi bi-archive"></i></span>Trouser</a>
       		<a href="#"><span><i class="bi bi-backpack2"></i></span>Boys Wear</a>
       		<a href="#"><span><i class="bi bi-smartwatch"></i></span>Smart Watches</a>
       		<a href="#"><span><i class="bi bi-bounding-box"></i></span>Caps</a>
       		<a href="#"><span><i class="bi bi-box"></i></span>Discounts</a>
       		</div>
       		<div class="column2">
       		<a href="#"><span><i class="bi bi-archive"></i></span>Trouser</a>
       		<a href="#"><span><i class="bi bi-backpack2"></i></span>Boys Wear</a>
       		<a href="#"><span><i class="bi bi-smartwatch"></i></span>Smart Watches</a>
       		<a href="#"><span><i class="bi bi-bounding-box"></i></span>Caps</a>
       		</div>
       		</div>
       		<hr style="color:#fff7f3;">
       		<div class="bottom-menu">
       		<a href="#"class="active"><i class="bi bi-house-door"></i>Home</a>
       		<a href="#"><i class="bi bi-info-circle"></i>About us</a>
       		<a href="#"><i class="bi bi-bag"></i>Shop</a>
       		<a href="#"><i class="bi bi-telephone"></i>Contact</a>
       		<a href="#"><i class="bi bi-question-circle"></i>Faq</a>
       		<a href="#"><i class="bi bi-file-earmark-lock2"></i>Privay Policy</a>
       		<a href="#"><i class="bi bi-person-lock"></i>Terms Condition</a>
       		</div>
       </div>
       
       
       
    <!-- Cart Sidebar  -->
    
    <div class="wrapper2">
    <div class="banner2">
       		<h4 class="banner-title">Cart</h4>
       		<a href="#" class="banner-close2"><i class="bi bi-x-circle close"></i></a>
       		</div>
    
    </div>
   
   </div>

<section class="containers">
    <div class="rows">
    <div class="sidebar">
		<div class="sidebar-content">
			<h4>Category</h4>
		
		<p>
			<input type="radio"/> Min Skirt
		</p>	
		<p>
			<input type="radio"/> Crop Top
		</p>	
		<p>
			<input type="radio"/> T-Shirt
		</p>	
		<p>
			<input type="radio"/> Dress
		</p>	
		<p>
			<input type="radio"/> Jacket
		</p>	
	</div>
	<div class="filter"	>
		<h5>Filter by price</h5>
		<input type="range" min="10" max="1000" id="pi_input"/>
		<p>Price: $<output id="value"></output></p>
		<button class="product-btn" style="margin-left:-10px;margin-top:10px">Apply Filtering</button>

	</div>
    </div>
    <div class="allproducts">
	<section class="products-section">
	<div class="product-wrapper">
		<!-- <h4 class="sectionheading">Popular Products</h4> -->
	<div class="product-row">
		<!-- first product card -->
	<div class="cards">
		<img src="assets/img/carousel-1.jpg" class="product-img"/>
		<div class="product-info">
		<h4 class="product-title">First Product</h4>
		<p class="product-price">$10</p>
		</div>
		<button class="product-btn"><i class="bi bi-cart"></i> Add to cart</button>
	</div>
	<!-- second product card -->
	<div class="cards">
		<img src="assets/img/carousel-1.jpg" class="product-img"/>
		<div class="product-info">
		<h4 class="product-title">First Product</h4>
		<p class="product-price">$10</p>
		</div>
		<button class="product-btn"><i class="bi bi-cart"></i> Add to cart</button>
	</div>
	<!-- third product card -->
	<div class="cards">
		<img src="assets/img/carousel-1.jpg" class="product-img"/>
		<div class="product-info">
		<h4 class="product-title">First Product</h4>
		<p class="product-price">$10</p>
		</div>
		<button class="product-btn"><i class="bi bi-cart"></i> Add to cart</button>
	</div>
	<!-- four product card -->
	<div class="cards">
		<img src="assets/img/carousel-1.jpg" class="product-img"/>
		<div class="product-info">
		<h4 class="product-title">First Product</h4>
		<p class="product-price">$10</p>
		</div>
		<button class="product-btn"><i class="bi bi-cart"></i> Add to cart</button>
	</div>
	<!-- five product card -->
	<div class="cards">
		<img src="assets/img/carousel-1.jpg" class="product-img"/>
		<div class="product-info">
		<h4 class="product-title">First Product</h4>
		<p class="product-price">$10</p>
		</div>
		<button class="product-btn"><i class="bi bi-cart"></i> Add to cart</button>
	</div>
	<!-- six product card -->
	<div class="cards">
		<img src="assets/img/carousel-1.jpg" class="product-img"/>
		<div class="product-info">
		<h4 class="product-title">First Product</h4>
		<p class="product-price">$10</p>
		</div>
		<button class="product-btn"><i class="bi bi-cart"></i> Add to cart</button>
	</div>
	</div>
	</div>	
</section>
    </div>
    </div>
</section>

<script>
	const value = document.querySelector("#value");
const input = document.querySelector("#pi_input");
value.textContent = input.value;
input.addEventListener("input", (event) => {
  value.textContent = `${ event.target.value}`;
});

</script>
 <script src="assets/js/main.js"></script>
   
  </body>
</html>
