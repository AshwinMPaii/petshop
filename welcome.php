<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
	<title>Pet Shop</title>
	<meta  charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />  
	<![endif]-->
</head>

<body>

	  
			<div id="header">
	           		<a href="welcome.php" id="logo"><img src="images/logo.gif" width="310" height="114" alt="" title=""></a>
					<ul class="navigation">
						<li class="active"><a href="welcome.php">Home</a></li>
						<li><a href="petmart.html">PetMart</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="petguide.html">PetGuide</a></li>
						<li><a href="contact.html">Contact us</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
			</div>
			
			<div id="body">
			
					<div class="banner">&nbsp;</div>
					
			       <div id="content">
				   
				        <div class="content">
								<ul>
									<li>
										<a href="welcome.php"><img src="images/puppy.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>What they need</h2>
										<p>Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="welcome.php">View all</a></p>
									</li>
									<li>
										<a href="welcome.php"><img src="images/cat.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Something good</h2>
										<p>Gothica, quam nun c putamus parum claram, anteposuerit litterarum formas humani tatis per seacula. <a class="more" href="welcome.php">View all</a></p>
									</li>
									<li>
										<a href="welcome.php"><img src="images/koi.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Kinds of Fish</h2>
										<p>Quam nunc putamus parum claram, antep osuerit litter arum formas humanitatis per seacula quarta. <a class="more" href="welcome.php">View all</a></p>
									</li>
									<li>
										<a href="welcome.php"><img src="images/bird.jpg" width="114" height="160" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Fun birds</h2>
										<p>Mirum est notare quam littera gothica , quam nunc putamus parum claram, anteposuerit. <a class="more" href="welcome.php">View all</a></p>
									</li>
								</ul>
						</div>
						
					    <div id="sidebar">
								<div class="search">
									<input type="text" name="s" value="Find"><button>&nbsp;</button>
									<label for="articles"><input type="radio" id="articles"> Articles</label>
									<label for="products"><input type="radio" id="products" checked> PetMart Products</label>
								</div>
								
                                <div class="section"> 								
									<ul class="navigation">
										<li class="active"><a href="welcome.php">Shopping Guides</a></li>
										<li><a href="welcome.php">Discounted Items</a></li>
									</ul>
									
									<div class="aside">
									 <div>
										<div>
											 <ul>
												<li><a href="welcome.php">Pet Accesories </a> <a class="more" href="welcome.php">see all</a></li>
												<li><a href="welcome.php">Bath Essentials</a> <a class="more" href="welcome.php">see all</a></li>
												<li><a href="welcome.php">Pet Food</a> <a class="more" href="welcome.php">see all</a></li>
												<li><a href="welcome.php">Pet Vitamins</a> <a class="more" href="welcome.php">see all</a></li>
												<li><a href="welcome.php">Pet Needs</a> <a class="more" href="welcome.php">see all</a></li>
												<li><a href="welcome.php">Pet Toy and Treats</a> <a class="more" href="welcome.php">see all</a></li>
												<li><a href="welcome.php">Pet Supplies</a> <a class="more" href="welcome.php">see all</a></li>
												<li><a href="welcome.php">Pet Emergency Kit</a> <a class="more" href="welcome.php">see all</a></li>
											 </ul>
										</div>
									 </div>
									</div>
								</div>
								
					    </div>
				   </div>
				   
				   <div class="featured">
				        <ul>
							<li><a href="welcome.php"><img src="images/organic-and-chemical-free.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li><a href="welcome.php"><img src="images/good-food.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
							<li class="last"><a href="welcome.php"><img src="images/pet-grooming.jpg" width="300" height="90" alt="Pet Shop" title="Pet Shop" ></a></li>
						</ul>
				        
				   </div>
				  
			
			</div>
			
			<div id="footer">
			        <div class="section">
						<ul>
							<li>
								<img src="images/friendly-pets.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="welcome.php">Friendly Pets</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonummy nib. <a class="more" href="welcome.php">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="images/pet-lover2.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="welcome.php">How dangerous are they</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="welcome.php">Read More</a> 
								</p>
							</li>	
							<li>
								<img src="images/healthy-dog.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="welcome.php">Keep them healthy</a></h2>
								<p>
								   Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonu mmy. <a class="more" href="welcome.php">Read More</a> 
								</p>
							</li>	
							<li>
								
								<h2><a href="welcome.php">Love...love...love...pets</a></h2>
								<p>
								     Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diameusim. <a class="more" href="welcome.php">Read More</a> 
								</p>
								<img src="images/pet-lover.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
							</li>	
						</ul>
					</div>
					<div id="footnote">
						<div class="section">
						   &copy; 2011 <a href="welcome.php">Petshop</a>. All Rights Reserved.
						</div>
					</div>
			</div>
			
	
</body>
</html>