<?php
/*
Template Name: then_now
*/


get_header(); ?>

   
		<div id="primary">
        	
          <div class="center">
        		<div id="then_and_now_col1">
            		<h1>Then & Now <br />Images</h1>
                    <p><a href="<?php bloginfo('url'); ?>/photo-gallery/"><img src="<?php echo get_bloginfo('template_directory');?>/images/current_photos.png" width="123" height="33" alt="Photo Gallery" /></a><br />
      				<p><a href="<?php bloginfo('url'); ?>/photo-archives/"><img src="<?php echo get_bloginfo('template_directory');?>/images/photo_archives.png" width="123" height="33" alt="Photo Archives" /></a>
                     </p>
      				<p>&nbsp;</p>  
      				<p><span class="dropt"><img src="<?php echo get_bloginfo('template_directory');?>/images/questions.png" width="123" height="33" alt="Questions" />
  <span style="width:250px; color: white; background-color: #b32317;">For questions or comments, please contact:<br />Peggy Kehrer, Library Construction & Communications Coordinator<br />609.258.0925 or <a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a></span>
</span> </p>


            	</div>
        	
            
            
			<div id="then_and_now_col2" role="main">
				
				<?php the_block('Main Content'); ?>
            </div><!-- #content -->
            
            
            
            
            
            </div>
            
		</div><!-- #primary -->
			<p>&nbsp;</p>

<?php get_footer(); ?>