<?php
/**
 * The WP Cloudy Theme 1 template
 *
 */
?>
<style>
    div[class^="wpc-flexslider"] {
        background-color: inherit !important;
        border: none !important;
    }
div[id^="wpc-weather"] .infos .wind,
div[id^="wpc-weather"] .infos .humidity,
div[id^="wpc-weather"] .infos .pressure,
div[id^="wpc-weather"] .infos .cloudiness,
div[id^="wpc-weather"] .infos .precipitation {
    width: 100%;
}
</style>
<!-- Start #wpc-weather -->
<?php echo $wpc_html["container"]["start"]; ?>
	<div class="custom-navigation d-none">
  	<a href="#" class="flex-prev">Prev</a>
  	<div class="custom-controls-container"></div>
  	<a href="#" class="flex-next">Next</a>
	</div>

	<!-- Current weather -->
	<?php echo $wpc_html["now"]["start"]; ?>
		<?php echo $wpc_html["now"]["location_name"]; ?>
		<?php echo $wpc_html["now"]["time_symbol"]; ?>
		<?php echo $wpc_html["now"]["time_temperature"]; ?>
		<?php echo $wpc_html["now"]["weather_description"]; ?>
	<?php echo $wpc_html["now"]["end"]; ?>

	<!-- Alert button -->
   	<?php echo $wpc_html["alert_button"]; ?>

	<div class="wpc-toggle-infos">

		<!-- Current infos: wind, humidity, pressure, cloudiness, precipitation -->
		<div class="infos">
			<div class="wpc-flexslider flexslider carousel">
				<ul class="slides">
					<li><?php echo $wpc_html["info"]["wind"]; ?></li>
					<li><?php echo $wpc_html["info"]["humidity"]; ?></li>
					<li><?php echo $wpc_html["info"]["pressure"]; ?></li>
					<li><?php echo $wpc_html["info"]["cloudiness"]; ?></li>
					<li><?php echo $wpc_html["info"]["precipitation"]; ?></li>
					<li><?php echo $wpc_html["today"]["sun_hor"]; ?></li>
					<li><?php echo $wpc_html["today"]["moon_hor"]; ?></li>
				</ul>
			</div>
		</div>

    	<?php if ($wpc_opt["hours_forecast_no"] > 0) { ?>
	    	<!-- Hourly Forecast -->
		    <?php echo $wpc_html["hour"]["start"]; ?>
			<div class="wpc-flexslider-hours flexslider carousel">
	    		<ul class="slides">
    	    	<?php
	    	    	for ($i = 0; $i < $wpc_opt["hours_forecast_no"]; $i++) {
		    	        if (isset($wpc_html["hour"]["info"][$i])) {
		    	            echo "<li>";
    		    	    	echo $wpc_html["hour"]["info"][$i];
		    	            echo "</li>";
        			    }
        			}
    	    	?>
		        <?php echo $wpc_html["hour"]["end"]; ?>
            	<?php
            	}
            	?>
        	    </ul>
        	</div>

		<?php if ($wpc_opt["days_forecast_no"] > 0) { ?>
			<!-- Daily Forecast -->
			<div class="wpc-flexslider-forecast flexslider carousel">
				<?php echo $wpc_html["forecast"]["start"]; ?>
				    <ul class="slides">
					<?php
					for ($i = 0; $i < $wpc_opt["days_forecast_no"]; $i++) {
						if ($i % 3  == 0) {
							echo '<li>';
						}

						echo $wpc_html["forecast"]["info"][$i];

						if ($i % 3  == 2) {
							echo '</li>';
						}
					};
					?>
					</ul>
				<?php echo $wpc_html["forecast"]["end"]; ?>
			</div>
		<?php } ?>
	</div><!-- End .toggle-infos -->

	<!-- Weather Map -->
	<?php echo $wpc_html["map"]; ?>

    	<!-- OWM Link -->
    	<?php echo $wpc_html["owm_link"]; ?>

	<!-- OWM Last Update -->
    	<?php echo $wpc_html["last_update"]; ?>


	<!-- Alert Modals -->
	<?php echo $wpc_html["alert_modal"]; ?>

	<!-- CSS/Scripts -->
	<?php echo $wpc_html["custom_css"]; ?>
	<?php echo $wpc_html["temperature_unit"]; ?>
	<?php echo $wpc_html["gtag"]; ?>

<!-- End #wpc-weather -->
<?php echo $wpc_html["container"]["end"]; ?>

<script type="text/javascript" charset="utf-8">
	jQuery(window).ready(function() {
		jQuery('#<?php echo $wpc_html["weather_id"] ?> .wpc-flexslider').flexslider({
	        controlsContainer: jQuery("#<?php echo $wpc_html["weather_id"] ?> .custom-controls-container"),
            customDirectionNav: jQuery("#<?php echo $wpc_html["weather_id"] ?> .custom-navigation a"),
            animation: "slide",
            animationLoop: true,
            itemWidth: 250,
            itemMargin: 5,
            maxItems: 4
		});
		jQuery('#<?php echo $wpc_html["weather_id"] ?> .wpc-flexslider-hours').flexslider({
	        controlsContainer: jQuery("#<?php echo $wpc_html["weather_id"] ?> .custom-controls-container"),
            customDirectionNav: jQuery("#<?php echo $wpc_html["weather_id"] ?> .custom-navigation a"),
            animation: "slide",
            animationLoop: true,
            itemWidth: 50,
            itemMargin: 5,
            maxItems: 8
    	});
		jQuery('#<?php echo $wpc_html["weather_id"] ?> .wpc-flexslider-forecast').flexslider({
	        controlsContainer: jQuery("#<?php echo $wpc_html["weather_id"] ?> .custom-controls-container"),
            customDirectionNav: jQuery("#<?php echo $wpc_html["weather_id"] ?> .custom-navigation a"),
		});
	});
</script>