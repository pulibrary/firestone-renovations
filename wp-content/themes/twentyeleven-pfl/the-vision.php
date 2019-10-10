<?php
/*
Template Name: the_vision
*/

get_header(); ?>

	<div id="primary">
        	
		<div class="center">
        
			<div id="the_vision_col1">
				<h1>The Vision</h1>
				<p>&nbsp;</p>
				<img src="<?php echo get_bloginfo('template_directory');?>/images/vision_quote1.png" width="139" height="327" />
			</div>
            
            <div class="column_divider" style="height: 600px;"></div>
            
			<div id="the_vision_col2" role="main">
				<?php the_block('Main Content'); ?>
            </div>
			
            <div class="column_divider" style="height: 600px;"></div>
            
            <div id="the_vision_col3">
				<p style="text-align: center;">
                	<a href="<?php echo get_bloginfo('template_directory');?>/images/1984firestone.pdf" target="_blank">
                	<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/12/pawcover_small.jpg" alt="" width="175" height="251" /></a>
                </p>
                
				<p><a href="<?php echo get_bloginfo('template_directory');?>/images/1984firestone.pdf" target="_blank">Click here for the full 1948 PAW article (PDF).</a></p>
                <p>&nbsp;</p>
                
                <a href="<?php bloginfo('url'); ?>/then-and-now-gallery/">
                	<img src="<?php echo get_bloginfo('template_directory');?>/images/thenandnow.png" width="123" height="33" alt="Then & Now" />
                </a>
                
                <p><a href="<?php bloginfo('url'); ?>/then-and-now-gallery/">Click here to see historical photos.</a></p>
                
                <p>&nbsp;</p>
                
                <a title="Compass rosette in floor outside the main elevators 3rd Floor" href="<?php bloginfo('url'); ?>/photo-gallery/">
					<img src="<?php echo get_bloginfo('template_directory');?>/images/compass.png" width="170" height="102" alt="Compass" />
                </a>
                
				<p>Preserving Historical Details<br />
                <a href="<?php bloginfo('url'); ?>/photo-gallery/">Click here to see photos.</a>
                </p>
				
                <p>&nbsp;</p>
                
           		<span class="droptR">
                	<img src="<?php echo get_bloginfo('template_directory');?>/images/questions.png" width="123" height="33" alt="Questions" />
					<span style="width:250px; color: white; background-color: #b32317;">
                       	For questions or comments, please contact:<br />
                        Peggy Kehrer, Library Construction & Communications Coordinator<br />
                        609.258.0925 or <a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a>
                    </span>
				</span>
            </div><!-- #col3 -->
            
		</div><!-- .center -->
            
	</div><!-- #primary -->
	
    <p>&nbsp;</p>

<?php get_footer(); ?>