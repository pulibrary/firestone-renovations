<?php
/*
Template Name: renovation_update
*/

get_header(); ?>

		<div id="primary">
        	
          <div class="center">
        		<div id="renovation_update_col1">
            		<?php the_block('Renovation Update'); ?>
            	</div>
        	
            <div class="column_divider"></div>
            
			<div id="renovation_update_col2" role="main">
				
                <img src="<?php echo get_bloginfo('template_directory');?>/images/areas_of_construction.png" width="301" height="18" alt="Areas of Construction" />
				<?php the_block('Areas of Construction'); ?>
            </div><!-- #content -->
            
            <div class="column_divider"></div>
            
            <div id="renovation_update_col3">
            	<h2>Weather & Traffic Report</h2>
            	<?php the_block('Weather Report'); ?>
                <p>&nbsp;</p>
           		<span class="droptR"><img src="<?php echo get_bloginfo('template_directory');?>/images/questions.png" width="123" height="33" alt="Questions" />
  <span style="width:250px; color: white; background-color: #b32317;">For questions or comments, please contact:<br />Peggy Kehrer, Library Construction & Communications Coordinator<br />609.258.0925 or <a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a></span>
</span>
            </div>
            
            </div>
            
		</div><!-- #primary -->
			<p>&nbsp;</p>

<?php get_footer(); ?>