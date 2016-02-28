<div class="flexslider" id="metaslider-demo">
	<div style="position: absolute; z-index: 9999; left: 0; right: 0; bottom: 50%;">
		<form>
			<select style="margin-right: 10px;">
				<option value="carpentry">-Select Service-</option>
				<option value="carpentry">Carpentry</option>
				<option value="carpentry">Electrical</option>
				<option value="carpentry">Plumbing</option>
				<option value="carpentry">Painting</option>
				<option value="carpentry">Office</option>
				<option value="carpentry">-Specialty-</option>
				<option value="carpentry">Basic Bathroom Reno</option>
				<option value="carpentry">Basic Kitchen Reno</option>
				<option value="carpentry">Exterior Services</option>
			</select>
			<input type="submit" value="Book Service">
		</form>
	</div>
	<ul class="slides">
		<li>
			<div class="content">
				<img src="<?php echo get_template_directory_uri() ?>/slider/backgrounds/slide_01.jpg" class="ms-default-image" width="1200" height="480" alt="<?php esc_attr_e('Demo Slide', 'ultra') ?>" />
			</div>
			<img src="<?php echo get_template_directory_uri() ?>/slider/backgrounds/slide_01_overlay.png" class="ms-default-image" width="1200" height="480" alt="<?php esc_attr_e('Demo Slide', 'ultra') ?>" />
		</li>
		<li>
			<div class="content">
				<img src="<?php echo get_template_directory_uri() ?>/slider/backgrounds/slide_02.jpg" class="ms-default-image" width="1200" height="480" alt="<?php esc_attr_e('Demo Slide', 'ultra') ?>" />
			</div>		
			<img src="<?php echo get_template_directory_uri() ?>/slider/backgrounds/slide_02_overlay.png" class="ms-default-image" width="1200" height="480" alt="<?php esc_attr_e('Demo Slide', 'ultra') ?>" />
		</li>
		<li>
			<div class="content">
				<img src="<?php echo get_template_directory_uri() ?>/slider/backgrounds/slide_03.jpg" class="ms-default-image" width="1200" height="480" alt="<?php esc_attr_e('Demo Slide', 'ultra') ?>" />
			</div>		
			<img src="<?php echo get_template_directory_uri() ?>/slider/backgrounds/slide_03_overlay.png" class="ms-default-image" width="1200" height="480" alt="<?php esc_attr_e('Demo Slide', 'ultra') ?>" />
		</li>
	</ul>
</div><!-- .flexslider #metaslider-demo -->