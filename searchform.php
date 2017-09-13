<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
			<div class="large-7 small-9 columns left">
				<input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('SØG...', 'reverie'); ?>">
			</div>
			<div class="large-3 small-3 columns left">
				<input type="submit" id="searchsubmit" value="<?php esc_attr_e('SØG', 'reverie'); ?>" class="button radius postfix">
			</div>
	</div>
</form>