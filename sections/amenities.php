<div class="in-page-link" id="amenities"></div> 
	<div class="amenities-section section">
		<h2 class="amenities-header white">AMENITIES</h2>
		<div class="amenities-flex">
			<ul>
				<li><h3>Hotel Amenities</h3></li>
				<?php foreach($hotel_amenities as $hotel_amenity): ?>
					<li><?php echo $hotel_amenity; ?></li>
				<?php endforeach; ?>
			</ul>
			<ul>
				<li><h3>In-Room Amenities</h3></li>
				<?php foreach($in_room_amenities as $in_room_amenity): ?>
					<li><?php echo $in_room_amenity; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<!-- <span class="disclaimer">
			*Only available in Luxury King Suite rooms
		</span> -->
	</div>