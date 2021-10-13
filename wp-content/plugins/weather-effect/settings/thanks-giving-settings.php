<!--thanksgiving Falls Settings -->
		<div id="thanksgiving_weather_effect" class="tab-content">
			<!-- thanksgiving Effect Falls Settings -->
			<div id="thanksgiving_effect_sh"><br>
				<p class="bg-title"><?php _e('Thanks Giving Effect Settings', WE_TXTD); ?></p>
				<!-- icons Start -->
				<div>
					<div class="checkbox">
						<label style="font-size: 1.2em">
							<?php if(isset($weather_effect_settings['turkey'])) $turkey = $weather_effect_settings['turkey']; else $turkey = ""; ?>
							<input type="checkbox" id="turkey" name="turkey" value="turkey" <?php if($turkey == "turkey") echo "checked"; ?>>
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
								<?php _e('1. Thanks Giving Turkey ', WE_TXTD); ?>
						</label>
					</div>
					<div class="thanksgiving_turkey_sh">
						<div>
							<label class="lower_label"> <?php _e('Select Thanks Giving Falling Turkey', WE_TXTD); ?></label>
							<?php if(isset($weather_effect_settings['thanksgiving_turkey'])) $thanksgiving_turkey = $weather_effect_settings['thanksgiving_turkey']; else $thanksgiving_turkey = "turkey1"; ?>
							<select id="thanksgiving_turkey" name="thanksgiving_turkey" class="form-control" style="margin-left: 25px; width: 300px;">
								<option value="turkey1" <?php if($thanksgiving_turkey == "turkey1") echo "selected=selected"; ?>> <?php _e('Turkey 1', WE_TXTD); ?></option>
							</select>
							<p class="lower_label"><a href="https://awplife.com/account/signup/weather-effect-premium" target="_blank"><?php _e('For More Falls Turkey Buy Now', WE_TXTD); ?></a></p>
						</div>
					</div>
				</div>
			</div><br>
			<!-- icons  End-->	
				
			<div class="row" style="padding-left: 10px;">&nbsp;&nbsp;&nbsp;
				<label class="bg_lower_label"><?php _e('2. Minimum Fall Size On page', WE_TXTD); ?></label>
				<?php if(isset($weather_effect_settings['thanksgiving_min_size_leaf'])) $thanksgiving_min_size_leaf = $weather_effect_settings['thanksgiving_min_size_leaf']; else $thanksgiving_min_size_leaf = 20; ?>			
				<p class="range-slider padding_settings">
					<input id="thanksgiving_min_size_leaf" name="thanksgiving_min_size_leaf" class="range-slider__range" type="range" value="<?php echo esc_attr($thanksgiving_min_size_leaf); ?>" min="1" step="1" max="30">
					<span class="range-slider__value">0</span>
				</p>
			</div>	
			<div class="row" style="padding-left: 10px;">&nbsp;&nbsp;&nbsp;
				<label class="bg_lower_label"><?php _e('3. Maximum Fall Size On page', WE_TXTD); ?></label>
				<?php if(isset($weather_effect_settings['thanksgiving_max_size_leaf'])) $thanksgiving_max_size_leaf = $weather_effect_settings['thanksgiving_max_size_leaf']; else $thanksgiving_max_size_leaf = 50; ?>			
				<p class="range-slider padding_settings">
					<input id="thanksgiving_max_size_leaf" name="thanksgiving_max_size_leaf" class="range-slider__range" type="range" value="<?php echo esc_attr($thanksgiving_max_size_leaf); ?>" min="10" step="1" max="200">
					<span class="range-slider__value">0</span>
				</p>
			</div>
			<div class="row" style="padding-left: 10px;">&nbsp;&nbsp;&nbsp;
				<label class="bg_lower_label"><?php _e('4. Falls On page', WE_TXTD); ?></label>
				<?php if(isset($weather_effect_settings['thanksgiving_flakes_leaf'])) $thanksgiving_flakes_leaf = $weather_effect_settings['thanksgiving_flakes_leaf']; else $thanksgiving_flakes_leaf = 5; ?>			
				<p class="range-slider padding_settings">
					<input id="thanksgiving_flakes_leaf" name="thanksgiving_flakes_leaf" class="range-slider__range" type="range" value="<?php echo esc_attr($thanksgiving_flakes_leaf); ?>" min="1" step="1" max="10">
					<span class="range-slider__value">0</span>
				</p>
			</div>
			<div class="row" style="padding-left: 10px;">&nbsp;&nbsp;&nbsp;
				<label class="bg_lower_label"><?php _e('5. Falls Speed On page', WE_TXTD); ?></label>
				<?php if(isset($weather_effect_settings['thanksgiving_speed'])) $thanksgiving_speed = $weather_effect_settings['thanksgiving_speed']; else $thanksgiving_speed = 5; ?>			
				<p class="range-slider padding_settings">
					<input id="thanksgiving_speed" name="thanksgiving_speed" class="range-slider__range" type="range" value="<?php echo esc_attr($thanksgiving_speed); ?>" min="1" step="1" max="10">
					<span class="range-slider__value">0</span>
				</p>
			</div>
		</div>
	<!-- thanksgiving Falls Settings End -->
<script>
<?php if($weather_occasion == "thanks_giving_check") { ?>
// thanksgiving Effect Start
	jQuery(document).ready(function(){
		<?php if($turkey == "turkey") { ?>
			snowFall.snow(document.body, {
				image : "<?php echo WE_PLUGIN_PATH ?>assets/images/thanksgiving/<?php echo $thanksgiving_turkey; ?>.png",
				minSize: <?php echo $thanksgiving_min_size_leaf; ?>, 
				maxSize: <?php echo $thanksgiving_max_size_leaf; ?>,
				flakeCount: <?php echo $thanksgiving_flakes_leaf; ?>,
				maxSpeed: <?php echo $thanksgiving_speed; ?>
			});
		<?php } ?>
	}); 
// thanksgiving Effect End
<?php } ?> 

// Checkbox Show And Hide Settings Start
var turkey = jQuery('input[name="turkey"]:checked').val();
if(jQuery('#turkey').is(":checked")) {
	jQuery('.thanksgiving_turkey_sh').show();
}else{
	jQuery('.thanksgiving_turkey_sh').hide();
}

jQuery(document).ready(function() {
	jQuery('input[name="turkey"]').change(function(){
		var turkey = jQuery('input[name="turkey"]:checked').val();
		if(jQuery(this).is(":checked")) {
			jQuery('.thanksgiving_turkey_sh').show();
		}else{
			jQuery('.thanksgiving_turkey_sh').hide();
		}
	});
});
// Checkbox Show And Hide Settings	End
</script>