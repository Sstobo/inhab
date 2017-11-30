<form role="search" method="get" class="search-form1" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field1" placeholder="Type and hit enter" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Enter Search" />
		</label>
		
		
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form>
