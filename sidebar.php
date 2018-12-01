</section><!-- /#main -->

<aside class="do-not-print">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

		<h3>Search Posts</h3>
    	<?php get_search_form(); ?>
    
    
    	<h3>Post Archives</h3>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
        <!-- <h3>Categories</h3>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul> -->
		
		<!-- <?php wp_list_bookmarks(); ?> -->

		<?php get_links_list('order'); ?>
		
		<h3>Subscribe</h3>
    	<ul>
			<!-- <li><a href="http://www.facebook.com/">Facebook</a></li>
			<li><a href="http://www.twitter.com/">Twitter</a></li> -->
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<!-- <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li> -->
    	</ul>
	
	<?php endif; ?>

</aside>