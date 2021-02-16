<?php 

session_start();

$connection = mysqli_connect("localhost","root" ,"" ,"project4_ecommerce");

if(!$connection){
    die("can not connect to the server");
    }
    

?>



<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Muchmore </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<ul>
					<li class="">
					<a href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="font-size: 2.3em; color:black;"></i></a>
					<a href="https://www.instagram.com/"><i class="fab fa-instagram" style="font-size: 2.5em; color:black;"></i></a>
					<a href="https://www.twitter.com/"><i class="fab fa-twitter" style="font-size: 2.5em; color:black;"></i></a>
							<form action="#" method="post" class="last">
							<?php 
                                // if(!isset($_SESSION['customer'])){
                                //     echo "<button class='btn btn-primary'>  <a class='text-dark' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/login.php'>Login</a> 
                                //     </button>";

                                //     echo "<button class='btn btn-primary ml-3'>  <a class='text-dark' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/registration.php'>Register</a> 
                                //     </button>";
                                // }
                                // else{
								// 	echo "<button class='btn btn-primary'><a class='text-dark' href='http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/profile_orders.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Profile</a></button>";
                                //     echo "<button class='btn btn-primary ml-3'><a class='text-dark' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/logout.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Logout</a></button>";
								// }
								


                            

                               ?>
                                	
							</form>
						</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							muchmore </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
					<?php 
						if(isset($_SESSION['itemsno'])){
							echo "<a href='cart.php'> <h5 style='color:black;'> {$_SESSION['itemsno']}</h5><i style='font-size:2.5em; color:black;' class='fas fa-shopping-cart'></i></a>";
						}
						else{
							echo "<a href='cart.php'> <h5>0</h5><i style='font-size:2.5em;' class='fas fa-shopping-cart'></i></a>";
						}
						?>

						<!-- <li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li> -->
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form method="POST" class="d-flex" action="">
					<input class="form-control" type="text" name="item" placeholder="Search here..." required="">

					<button type="submit" name="search" class="btn btn-primary submit">
						<i class="fas fa-search"></i>
					</button>

					</form>
					


					<?php
						
						
						 if(isset($_POST['search'])){
							 $item=$_POST['item'];

							$_SESSION['item']=$_POST['item'];

							// if(isset($_SESSION['item'])){
							// 	echo "ok";
							// 	die();
							// }
							// else{
							// 	echo "no";
							// 	die();
							// }
							header("location:searchresults.php");}
						?>
				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
					<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						
							
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
										<h5 class="tittle-w3layouts-sub"> Categories </h5>
										<ul>
											<?php 
											 $query = "select * from categories;";
											 $result = mysqli_query($connection,$query);
											 while($row = mysqli_fetch_assoc($result)){
												 echo "<li class='media-mini mt-3'>
												 <a href='index.php'>{$row['category_name']}</a>
											 </li>";}?>
											 </ul>
											 </div>




											
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> On Sale </h5>
											<ul>
											<?php 
											 $query = "select * from products;";
											 $result = mysqli_query($connection,$query);
											 
											 while($row = mysqli_fetch_assoc($result)){
												 if(!empty($row['ondiscount'])){
													echo "<li class='media-mini mt-3'>
													<a href='products.php'>{$row['product_name']}</a>
												</li>";

												 }
												 }?>
												 </ul>
											 </div>



										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Muchmore </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/logo.png" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<?php 
						 if(!isset($_SESSION['customer'])){
							echo "<li class='nav-item'>  <a class='nav-link' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/login.php'>Login</a> 
							</li>";

							echo "<li class='nav-item'>  <a class='nav-link' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/registration.php'>Register</a> 
							</li>";
						}
						else{
							echo "<li class='nav-item'><a class='nav-link' href='http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/profile_orders.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Orders</a></li>";
							echo "<li class='nav-item'><a class='nav-link' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/logout.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Logout</a></li>";
						}
?>
					</ul>

				</div>
			</nav>
		</header>
		<!-- banner -->
		<?php
		$query= "SELECT * FROM products where product_id = {$_GET['id']}";
    	$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result); 
		
		
		
		
		
		?>
		<div class="banner_inner" style="background:url('./images/slider_2.png')no-repeat; background-size: cover;height:30em;">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a style="color:black;font-size:1.75em" href="index.php">Home</a>
							<i style="color:black;font-size:1.75em">|</i>
                        </li>
                        <li>
							<?php
							$query= "SELECT * FROM categories where category_id = {$row['category_id']}";
							$result = mysqli_query($connection,$query);
							$row = mysqli_fetch_assoc($result); ?>

							<a style="color:black;font-size:1.75em"  href="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/products.php?id=<?php echo $row['category_id']?>"><?php echo $row['category_name'];?></a>
							<i style="color:black;font-size:1.75em">|</i>
						</li>
						<?php
								$query= "SELECT * FROM products where product_id = {$_GET['id']}";
								$result = mysqli_query($connection,$query);
								$row = mysqli_fetch_assoc($result); ?>
	
						<li style="color:orange;font-size:1.75em"><?php echo $row['product_name'];?></li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
        <!--/shop-->
        <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
                        <div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
                                                <?php 

    $query= "SELECT * FROM pictures where product_id = {$_GET['id']}";
    $result = mysqli_query($connection,$query);
    
    while($row = mysqli_fetch_assoc($result)){

        
        echo "<li data-thumb={$row['gallery_image']}>
				<div class='thumb-image'> <img src={$row['gallery_image']} data-imagezoom='true' class='img-fluid' alt=''> </div>
			</li>";
    }
                                                
                ?>

												
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
                                <?php

                                        $query= "SELECT * FROM products where product_id = {$_GET['id']}";
                                        $result = mysqli_query($connection,$query);
                                        $row = mysqli_fetch_assoc($result);
									
                                        

    
                                            echo "<h2 style='font-weight:bold;'>{$row['product_name']}</h2><br>";
                                            echo "<span class='item_price text-success'><h3 class='text-success'>{$row['product_special']} JD</h3></span>
                                            <del class='text-danger'><h4 class='text-danger '>{$row['product_price']} JD</h4></del>
                                        </p>";


                                        ?>

                                    
									
                                    
									<div style="font-size:1.5em;" class="description">
										

                                        <?php

                                        $query= "SELECT * FROM products where product_id = {$_GET['id']}";
                                        $result = mysqli_query($connection,$query);
                                        $row = mysqli_fetch_assoc($result);

                                        echo "<h5 style='font-weight:bold;'>{$row['product_desc']}</h5>";


                                        ?>
                                        
										
									</div>
									<div class="color-quality">
										<!-- <div class="color-quality-right">
											<h5>Quantity:</h5>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
													<option value="null">5 Qty</option>
													<option value="null">6 Qty</option> 
													<option value="null">7 Qty</option>					
													<option value="null">10 Qty</option>								
												</select>
                                        </div> -->
                                        
									</div>
									<!-- <div class="occasional">
										<h5>Types :</h5>
										<div class="colr ert">
											<label class="radio"><input type="radio" name="radio" checked=""><i></i> Irayz Butterfly(Black)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (Grey)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (white)</label>
										</div>
										<div class="clearfix"> </div>
                                    </div> -->

                                    <?php 
                                                        $query= "SELECT * FROM products where product_id = {$_GET['id']}";
                                                        $result = mysqli_query($connection,$query);
                                                        $rows = mysqli_fetch_assoc($result);
                                                        

                                                            

                                                        ?>
                                    

									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="googles_item" value="<?php echo $rows['product_name'] ?>">
														<input type="hidden" name="amount" value="<?php echo $rows['product_special'] ?>">
														<!-- <button type="submit" class="googles-cart pgoogles-cart">
															Add to Cart
														</button> -->
                                                        </form>
		
                                                </div>
                                                </div>
                                                        
                                                        <?php 
                                                        
                                                        $query= "SELECT * FROM products where product_id = {$_GET['id']}";
                                                        $result = mysqli_query($connection,$query);
                                                        $rows = mysqli_fetch_assoc($result);

                                                        
                                                            echo "<form action='' method='POST'>";
															echo "<h5 class='text-secondary '>Quantity</h5>";
															echo "<select class='custom-select mb-3' name='quantity'>";
															if(isset($_POST['quantity'])){
																echo "<option value='{$_POST['quantity']}'>{$_POST['quantity']}</option>";
															}
															
															  echo "<option value='1'>1</option>
															  <option value='2'>2</option>
															  <option value='3'>3</option>
															  <option value='4'>4</option>
														  </select><br>";
															// <input class='mb-4' type='number' name='quantity' placeholder='1'>";
                                                            echo "<button class='btn btn-dark mr-3' name='set'>Set</button>";
                                                            
                                                            // $quantity=1;
                                                            if (isset($_POST['set'])){
                                                                $quantity=$_POST['quantity'];
                                                                

                                                            }

                                                            // $quantity=$_post['quantity'];
															// $_SESSION['quantity']=$quantity;
															if(isset($quantity)){

																echo "<button class='btn btn-success'><a class='cart text-dark' name='add' href='addtocart.php?id={$rows['product_id']}&qty=$quantity'>Add to Cart</a>
                                                            
															</button>";

															}
                                                            // echo "<button><a class='cart' name='add' href='addtocart.php?id={$rows['product_id']}&qty=$quantity'>Add to Cart</a>
                                                            
															// </button>";
															
															echo "</form>";
                                                            

                                                            

                                                        ?>


														
														
													

                                    <!-- <?php 
                                                        // $query= "SELECT * FROM products where product_id = {$_GET['id']}";
                                                        // $result = mysqli_query($connection,$query);
                                                        // $rows = mysqli_fetch_assoc($result);

                                                        

                                                        //     echo "<button><a class='cart' href='addtocart.php?id={$rows['product_id']}'>Add to Cart</a>
                                                           
                                                        //     </button>";

                                                        ?> -->
                                    
                                    


									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Share On : </li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-google-plus-g"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-linkedin-in"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fas fa-rss"></span>
												</a>
											</li>
											
										</ul>
			
								</div>
								<div class="clearfix"> </div>
								<!-/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
											<li>Reviews</li>
										</ul>
										<div class="resp-tabs-container">
											<!-/tab_one-->
											<div class="tab1">
					
												<div class="single_page">

                                                <?php

                                                    $query= "SELECT * FROM products where product_id = {$_GET['id']}";
                                                    $result = mysqli_query($connection,$query);
                                                    $row = mysqli_fetch_assoc($result);

													echo "<h6>{$row['product_name']}</h6>";
                                                    echo "<p>"."{$row['product_desc']}"."{$row['product_desc']}"."{$row['product_desc']}"."{$row['product_desc']}"."{$row['product_desc']}"."</p>";

                                                    echo "<br>";
                                                    echo "<p>"."{$row['product_desc']}"."{$row['product_desc']}"."{$row['product_desc']}"."{$row['product_desc']}"."{$row['product_desc']}"."</p>";


                                                    ?>
                                                    
													
												</div>
                                            </div> 
                                            
											<!--//tab_one-->
											 <div class="tab2">
					
												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<img src="images/reviewer.png" alt=" " class="img-fluid">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">Admin</a></li>
																	<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
																</ul>
																<p>Muchmore is a wonderful online store and the prices are wonderful and humane. Other retailers want much more for their products. I hope you can help Ebay to stay the greatest retailer online and don't let the government put tax costs on there because they already have enough tax revenue and can leave us alone at Muchmore,Purchased my 1st pair of Sketchers Relaxed Foam slip on shoes in 1998! Wore them out! Purchased my 2nd. Pair in 2020 and they are the best! Like walking on pillows. Absolutely Awesome Shoes.</p>
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>add a review</h4>
															<form action="#" method="post">
																	<input class="form-control" type="text" name="Name" placeholder="Enter your email..." required="">
																<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
																<textarea name="Message" required=""></textarea>
																<input type="submit" value="SEND">
															</form>
														</div>
													</div>
					
												</div>
											</div>
											
										</div>
									</div>
								</div> 
		










							<!-- <div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="images/d2.jpg">
													<div class="thumb-image"> <img src="images/d2.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="images/d1.jpg">
													<div class="thumb-image"> <img src="images/d1.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="images/d3.jpg">
													<div class="thumb-image"> <img src="images/d3.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>Irayz Butterfly Sunglasses  (Black)</h3>
									<p><span class="item_price">$650</span>
										<del>$1,199</del>
									</p>
									<div class="rating1">
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="description">
										<h5>Check delivery, payment options and charges at your location</h5>
										<form action="#" method="post">
												<input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
											<input type="submit" value="Check">
										</form>
									</div>
									<div class="color-quality">
										<div class="color-quality-right">
											<h5>Quality :</h5>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
													<option value="null">5 Qty</option>
													<option value="null">6 Qty</option> 
													<option value="null">7 Qty</option>					
													<option value="null">10 Qty</option>								
												</select>
										</div>
									</div>
									<div class="occasional">
										<h5>Types :</h5>
										<div class="colr ert">
											<label class="radio"><input type="radio" name="radio" checked=""><i></i> Irayz Butterfly(Black)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (Grey)</label>
										</div>
										<div class="colr">
											<label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (white)</label>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item" value="Farenheit">
														<input type="hidden" name="amount" value="575.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															Add to Cart
														</button>
														
													</form>
		
												</div>
									</div>
									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Share On : </li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-google-plus-g"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-linkedin-in"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fas fa-rss"></span>
												</a>
											</li>
											
										</ul>
			
								</div>
								<div class="clearfix"> </div>
								<!-/tabs-->
								<!-- <div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
											<li>Reviews</li>
											<li>Information</li>
										</ul>
										<div class="resp-tabs-container">
											<!-/tab_one-->
											<!-- <div class="tab1">
					
												<div class="single_page">
													<h6>Lorem ipsum dolor sit amet</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
													<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
												</div>
											</div> -->
											<!--//tab_one-->
											<!-- <div class="tab2">
					
												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<img src="images/team1.jpg" alt=" " class="img-fluid">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">Admin</a></li>
																	<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
																</ul>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
																	quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
																	autem vel eum iure reprehenderit.</p>
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>add a review</h4>
															<form action="#" method="post">
																	<input class="form-control" type="text" name="Name" placeholder="Enter your email..." required="">
																<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
																<textarea name="Message" required=""></textarea>
																<input type="submit" value="SEND">
															</form>
														</div>
													</div>
					
												</div>
											</div>
											<div class="tab3">
					
												<div class="single_page">
													<h6>Irayz Butterfly Sunglasses  (Black)</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
													<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
												</div>
											</div>
										</div>
									</div>
								</div>  --> 
								
					
					</div>
				</div>
			</div>
				
					<!--//slider-->
				</div>
		</section>
		<!--footer -->
		<!--footer -->
		<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p> Furnishings accessories at Muchmore. Discover the finest Modern and Classic furniture and furnishings for your Homes & Offices.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="https://www.facebook.com/">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="https://www.instagram.com/">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="https://www.twitter.com/">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li> -->
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li> -->
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li> -->
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>0926k 4th block building, Mecca street, Amman City.</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : +962777777999</p>
							<p>Email :
								<a href="info@muchmore.com">info@muchmore.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="index.php">About</a>
						</li>
						<li>
							<a href="404.php">Error</a>
						</li>
						<li>
							<a href="products.php">Shop</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sign up for your offers</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2020 Muchmore. All Rights Reserved 
					<!-- <a href="http://w3layouts.com/"> W3layouts </a> -->
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->
		</footer>
		<!-- //footer -->

		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie-search.js"></script>
		<script src="js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->

		<!-- single -->
		<script src="js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
	<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>