<?php
/*
Template Name: contact
*/

get_header(); ?>

		<div id="primary">
        	
          <div class="center">
        		<div id="contact_col1">
                <h1>Contact Us</h1>
      		    	<?php the_block('contact_information'); ?>
                </div>
        	
            <div class="column_divider"></div>
            
			<div id="contact_col2" role="main">
				<?php the_block('main content'); ?>
            </div><!-- #content -->
                      
                       
            </div>
            
		</div><!-- #primary -->
			<p>&nbsp;</p>

<?php get_footer(); ?>