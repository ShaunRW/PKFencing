<div class="SingleBanner grid-container fluid no-padding">
	<div class="grid-x">
		<div class="cell">
			<img class="orbit-image SingleBannerImage" src="/images/<?php echo $Data->ImageName; ?>.jpg" alt="<?php echo $Data->ImageName; ?>">
			
			<?php
				/* Optional HTML Overlay */
				if ( isset($Data->OptionalOverlayView) )
				{
					// Include the overlay view enclosed in a html div
					echo "<div class='SingleBannerOverlay'>";
					$Application->AddComponent( 'page', $Data->OptionalOverlayView );
					echo "</div>";
				}
			?>

		</div>
	</div>
</div>