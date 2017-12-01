<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER.." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Enter Search" />
		</label>
		<button class="search-submit">	
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form>
