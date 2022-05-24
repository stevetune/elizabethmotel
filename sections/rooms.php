<div class="in-page-link" id="rooms-sec"></div> 
	<div class="rooms-section section">
		<div class="rooms-header">
			<h2>ROOMS</h2>
		</div>
		<div class="rooms-section-flex">
			<?php foreach($rooms as $room): ?>
			
				<div class="room-container">
					<img src="<?php echo './assets/images/'.$room['image']; ?>" />
					<div class="upper-content">
						<h3><?php echo $room['name']; ?></h3> 
						<div class="rooms-ruler"></div>

						<p><?php echo $room['desc']; ?></p>
					</div>
					<div class="lower-content">
						<!-- <div class="price">
							<span class="brown">$<?php //echo $room['price_per_night']; ?>&nbsp;</span> / NIGHT 
						</div> -->
						<a target="_blank" class="button" href="<?php echo $be_step1_full; ?>">BOOK NOW</a>
					</div>
				</div>
			
			<?php endforeach; ?>
		</div>
	</div>