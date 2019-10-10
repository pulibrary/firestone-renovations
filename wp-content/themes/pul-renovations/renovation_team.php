<?php
/*
Template Name: renovation_team
*/

get_header(); ?>

		<div id="primary">
        	
          <div class="center">
        		<div id="renovation_team_col1">
                <h1>Renovation<br />Team</h1>
                <p>&nbsp;</p>
       		    <img src="<?php echo get_bloginfo('template_directory');?>/images/team-quote1.png" width="124" height="239" alt="This project - above all- is about our scholars and providing them with an environment in which to excel." /> </div>
        	
            <div class="column_divider"></div>
            
			<div id="renovation_team_col2" role="main">
				<?php the_block('main content'); ?>
            </div><!-- #content -->
            
            <div class="column_divider"></div>
            
            <div id="renovation_team_col3">
       	    <img src="<?php echo get_bloginfo('template_directory');?>/images/team-quote2.png" width="125" height="207" alt="Firestone's central vision for scholarship remains a constant in a setting that reinforces its strong sense of place." /> </div>
            
            </div>
            
		</div><!-- #primary -->
			<p>&nbsp;</p>

<?php get_footer(); ?>