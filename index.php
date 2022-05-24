<?php include './variables.php'; ?>


<!DOCTYPE html>
<html>
<head>
    <?php include './sections/head.php' ?>
</head>
<body>
	<div id="home"></div>
	<div class="header">
        <?php include './sections/header.php'; ?>
		<?php include './sections/booking-bar.php'; ?>
			
    </div>
	<div class="menu-bar">
    
    
    
    
        <h3><?php echo $hotel_title_header; ?>
            <span><?php echo $hotel_title_subheader; ?></span>
        </h3>
    
    
    
    
    
    
	<div class="menu">
		<ul>
			<li>
				<a href="#home" class="active" title="Home">Home</a> 
			</li>
			<li>
				<a href="#about" title="About Us">About Us</a> 
			</li>
			<li>
				<a href="#rooms-sec" title="Rooms">Rooms</a> 
			</li>
			<li>
				<a href="#amenities" title="Amenities">Amenities</a> 
			</li>
			<li>
				<a href="#gallery" title="Gallery">Gallery</a> 
			</li>
			<li>
				<a href="#contact" title="Contact Us">Contact Us</a>
			</li>
		</ul>
	</div>
</div>
	
		<script>
		var menuItem = document.querySelectorAll('.menu ul li a');

		menuItem.forEach(function(el){
			el.onclick = function(e){
				
				menuItem.forEach(function(el2){
					el2.classList.remove('active');
				});

				el.classList.add('active');
			}
			
		});
		

	</script>
	<?php include './sections/about-us.php'; ?>
	<?php include './sections/rooms.php'; ?>
	<?php include './sections/amenities.php'; ?>
	<?php include './sections/gallery.php'; ?>
	<?php include './sections/contact.php'; ?>
	<?php include './sections/footer.php'; ?>
</body>
</html>