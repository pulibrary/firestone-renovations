<?php
/*
Template Name: phases-of-construction
*/

get_header(); ?>

   
	<div id="primary">
        	
		<div class="center">
          
			<div id="phases_of_construction_col1">
				<h1>Phases of <br />Construction</h1>
				<ul class="phase_nav">
					<li><a href="<?php bloginfo('url'); ?>/phases-of-construction/">Overview</a></li>
					<li><a href="<?php bloginfo('url'); ?>/phase-1/">Phase 1</a></li>
					<li><a href="<?php bloginfo('url'); ?>/phase-2">Phase 2A</a></li>
					<li><a href="<?php bloginfo('url'); ?>/phase-2b">Phase 2B</a></li>
					<li><a href="<?php bloginfo('url'); ?>/phase-3">Phase 3</a></li>
					<li><a href="<?php bloginfo('url'); ?>/phase-4">Phase 4</a></li>
					<li><a href="<?php bloginfo('url'); ?>/phase-5">Phase 5</a></li>
					<li><a href="<?php bloginfo('url'); ?>/phase-6">Phase 6</a></li>
				</ul>   
			</div>
        	
            <div class="column_divider"></div>
            
			<div id="phases_of_construction_col2" role="main">          
          		<h1>OVERVIEW</h1>	                    
				<?php the_block('Main Content'); ?>	          
				<?php the_block('current phasing legend'); ?>   
            </div>
            
            <div class="column_divider"></div>
                       
			<div id="phases_of_construction_col3">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/phases-quote.png" width="136" height="327" />
				<p>&nbsp;</p> 
				<span class="droptR">
					<img src="<?php echo get_bloginfo('template_directory');?>/images/questions.png" width="123" height="33" alt="Questions" />
					<span style="width:250px; color: white; background-color: #b32317;">
						For questions or comments, please contact:<br />
						Peggy Kehrer, Library Construction & Communications Coordinator<br />
						609.258.0925 or <a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a>
					</span>
				</span>     
			</div>
            
		</div><!-- .center -->
  
	</div><!-- #primary -->

<?php get_footer(); ?>