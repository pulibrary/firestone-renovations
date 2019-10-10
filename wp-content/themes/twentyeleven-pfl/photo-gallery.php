<?php
/*
Template Name: photo-gallery
*/


get_header(); ?>

<script type="text/javascript">

		(function(window, PhotoSwipe){
		
			document.addEventListener('DOMContentLoaded', function(){
			
				var
					options = {},
					instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
			
			}, false);
			
			
		}(window, window.Code.PhotoSwipe));
		
</script>


	
   
		<div id="primary">
        	
          <div class="center">
           
           	
           <div id="mobile-hide">
           
			<div id="photo-gallery_col2" role="main">
            
            
				<h1>Photo Gallery</h1>
                
                
                
				
                
                <div class="pikachoose">
					
					<ul id="pikame">
                    	<li><img src="../wp-content/uploads/2013/05/1st-Floor-bathrooms.jpg"/><span>1st Floor bathrooms</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/2nd-Floor.jpg"/><span>2nd Floor</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/3rd-Floor-former-Faculty-Lounge-cleared-for-new-construction.jpg"/><span>3rd Floor former Faculty Lounge cleared for new construction</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/3rd-Floor-looking-south.jpg"/><span>3rd Floor looking south</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/3rd-Floor-workman.jpg"/><span>3rd Floor workman</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/A-Floor-Graduate-Study-Rooms.jpg"/><span>A Floor Graduate Study Rooms</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Crane-lift.jpg"/><span>Crane lift</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Demolition-of-former-faculty-lounge.jpg"/><span>Demolition of former faculty lounge</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Gallery-lightswithout-a-ceiling.jpg"/><span>Gallery lights(without a ceiling!)</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Library-stepstool-works-perfectly.jpg"/><span>Library stepstool works perfectly</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Mechanical-chase-reaches-3rd-Floor.jpg"/><span>Mechanical chase reaches 3rd Floor</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Numbered-stones-for-reinstallation.jpg"/><span>Numbered stones for reinstallation</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Steel-for-shaft-openings.jpg"/><span>Steel for shaft openings</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Stone-locations-and-numbers.jpg"/><span>Stone locations and numbers</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Stone-work-at-roof.jpg"/><span>Stone work at roof</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/Stonework-at-roof-penthouse-locations.jpg"/><span>Stonework at roof penthouse locations</span></li>
                    	<li><img src="../wp-content/uploads/2013/05/View-from-former-Faculty-Lounge-Mezzanine.jpg"/><span>View from former Faculty Lounge Mezzanine</span></li>
        
					</ul>
    
				</div>


				<div style="clear: left;">
                	<div class="photo_hide">
                	<p>Current & Recent<br />Construction</p>
                
     				<p><a href="<?php bloginfo('url'); ?>/photo-archives/"><img src="<?php echo get_bloginfo('template_directory');?>/images/photo_archives.png" width="123" height="33" alt="Photo Archives" /></a><br />
                    If anyone needs older images <br />not found in the Archives, please <br />contact Peggy Kehrer, <br /><a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a></p>
                      <a href="<?php bloginfo('url'); ?>/then-and-now-gallery/"><img src="<?php echo get_bloginfo('template_directory');?>/images/thenandnow.png" width="123" height="33" alt="Then & Now" /></a> </p>
      				<p>&nbsp;</p>  
      				<p><span class="dropt"><img src="<?php echo get_bloginfo('template_directory');?>/images/questions.png" width="123" height="33" alt="Questions" />
  <span style="width:250px; color: white; background-color: #b32317;">For questions or comments, please contact:<br />Peggy Kehrer, Library Construction & Communications Coordinator<br />609.258.0925 or <a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a></span>
</span> </p>
      
      				</div>
      			</div>         
                
                
                
            </div><!-- #content -->
            
            <div id="photo-gallery_col3">
   	    	  <img src="<?php echo get_bloginfo('template_directory');?>/images/preservingarchitecturaldetail.png" width="174" height="53" alt="Preserving Architectural Details" />
              <p>Click on image to enlarge.</p>
              
              <a title="Compass rosette in floor outside the main elevators 3rd Floor" href="<?php echo get_bloginfo('template_directory');?>/images/compass_Large.jpg" rel="lightbox">
<img src="<?php echo get_bloginfo('template_directory');?>/images/compass.png" width="170" height="102" alt="Compass" /> </a>
<p>Compass rosette in floor outside the main elevators 3rd Floor</p>

              <a title="Mosaic from Antioc, Main Floor, on the wall opposite the door to the Office of the University Librarian" href="<?php echo get_bloginfo('template_directory');?>/images/mosaic_Large.jpg" rel="lightbox">
<img src="<?php echo get_bloginfo('template_directory');?>/images/mosaic.png" width="170" height="102" alt="Mosaic" /> </a>
<p>Mosaic from Antioc, Main Floor, on the wall opposite the door to the Office of the University Librarian</p>

			<a title="Architrave from University College, Oxford, and Worcester College, Oxford, on north wall of the landing between the Main Floor and A Floor, northwest stairwell." href="<?php echo get_bloginfo('template_directory');?>/images/architrave_Large.jpg" rel="lightbox">
<img src="<?php echo get_bloginfo('template_directory');?>/images/architrave.png" width="170" height="102" alt="Mosaic" /> </a>
<p>Architrave from University College, Oxford, and Worcester College, Oxford, on north wall of the landing between the Main Floor and A Floor, northwest stairwell.</p>

            </div>
            
           </div> 
           
           <div id="mobile-only">
           
           <h1 style="font-size: 36px; font-weight: bold;">Photo Gallery</h1>
         

	
	<ul id="Gallery" class="gallery">
		<li><a href="../wp-content/uploads/2013/05/1st-Floor-bathrooms.jpg"/><img src="../wp-content/uploads/2013/05/1st-Floor-bathrooms.jpg" alt="1st Floor bathrooms" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/2nd-Floor.jpg"/><img src="../wp-content/uploads/2013/05/2nd-Floor.jpg" alt="2nd Floor" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/3rd-Floor-former-Faculty-Lounge-cleared-for-new-construction.jpg"/><img src="../wp-content/uploads/2013/05/3rd-Floor-former-Faculty-Lounge-cleared-for-new-construction.jpg" alt="3rd Floor former Faculty Lounge cleared for new construction" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/3rd-Floor-looking-south.jpg"/><img src="../wp-content/uploads/2013/05/3rd-Floor-looking-south.jpg" alt="3rd Floor looking south" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/3rd-Floor-workman.jpg"/><img src="../wp-content/uploads/2013/05/3rd-Floor-workman.jpg" alt="3rd Floor workman" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/A-Floor-Graduate-Study-Rooms.jpg"/><img src="../wp-content/uploads/2013/05/A-Floor-Graduate-Study-Rooms.jpg" alt="A Floor Graduate Study Rooms" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Crane-lift.jpg"/><img src="../wp-content/uploads/2013/05/Crane-lift.jpg" alt="Crane lift" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Demolition-of-former-faculty-lounge.jpg"/><img src="../wp-content/uploads/2013/05/Demolition-of-former-faculty-lounge.jpg" alt="Demolition of former faculty lounge" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Gallery-lightswithout-a-ceiling.jpg"/><img src="../wp-content/uploads/2013/05/Gallery-lightswithout-a-ceiling.jpg" alt="Gallery lights(without a ceiling!)" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Library-stepstool-works-perfectly.jpg"/><img src="../wp-content/uploads/2013/05/Library-stepstool-works-perfectly.jpg" alt="Library stepstool works perfectly" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Mechanical-chase-reaches-3rd-Floor.jpg"/><img src="../wp-content/uploads/2013/05/Mechanical-chase-reaches-3rd-Floor.jpg" alt="Mechanical chase reaches 3rd Floor" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Numbered-stones-for-reinstallation.jpg"/><img src="../wp-content/uploads/2013/05/Numbered-stones-for-reinstallation.jpg" alt="Numbered stones for reinstallation" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Steel-for-shaft-openings.jpg"/><img src="../wp-content/uploads/2013/05/Steel-for-shaft-openings.jpg" alt="Steel for shaft openings" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Stone-locations-and-numbers.jpg"/><img src="../wp-content/uploads/2013/05/Stone-locations-and-numbers.jpg" alt="Stone locations and numbers" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Stone-work-at-roof.jpg"/><img src="../wp-content/uploads/2013/05/Stone-work-at-roof.jpg" alt="Stone work at roof" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/Stonework-at-roof-penthouse-locations.jpg"/><img src="../wp-content/uploads/2013/05/Stonework-at-roof-penthouse-locations.jpg" alt="Stonework at roof penthouse locations" /></a></li>
		<li><a href="../wp-content/uploads/2013/05/View-from-former-Faculty-Lounge-Mezzanine.jpg"/><img src="../wp-content/uploads/2013/05/View-from-former-Faculty-Lounge-Mezzanine.jpg" alt="View from former Faculty Lounge Mezzanine" /></a></li>

		
	</ul>
	

           <p><a href="<?php bloginfo('url'); ?>/photo-archives/"><img src="<?php echo get_bloginfo('template_directory');?>/images/photo_archives.png" width="123" height="33" alt="Photo Archives" /></a>
                      <a href="<?php bloginfo('url'); ?>/then-and-now-gallery/"><img src="<?php echo get_bloginfo('template_directory');?>/images/thenandnow.png" width="123" height="33" alt="Then & Now" /></a> </p>
      				
      				<p><span class="dropt"><img src="<?php echo get_bloginfo('template_directory');?>/images/questions.png" width="123" height="33" alt="Questions" />
  <span style="width:250px; color: white; background-color: #b32317;">For questions or comments, please contact:<br />Peggy Kehrer, Library Construction & Communications Coordinator<br />609.258.0925 or <a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a></span>
</span> </p>
           
           
           </div>
           
           
           
            
          </div>
            
		</div><!-- #primary -->
			<p>&nbsp;</p>
            

<?php get_footer(); ?>