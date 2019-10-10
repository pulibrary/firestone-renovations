<?php
/*
 Template Name: Gallery

 */
get_header();
?>

<script type="text/javascript">
    ( function(window, PhotoSwipe) {

            document.addEventListener('DOMContentLoaded', function() {

                var options = {}, instance = PhotoSwipe.attach(window.document.querySelectorAll('#Gallery a'), options);

            }, false);

        }(window, window.Code.PhotoSwipe));

</script>
<div id="primary">

    <?php
        $args = array(
        'numberposts' => -1, // Using -1 loads all posts
        'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
        'order'=> 'ASC',
        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
        'post_status' => null,
        'post_type' => 'attachment'
        );

        #$images = get_children( $args );
	if (!$images) {
			
        	$gallerypost = get_post_gallery($post, false);
		foreach (explode(",",$gallerypost["ids"]) as $imageid) {
			echo $imageid;
			$images[$imageid]=get_post($imageid);
		}

	}

        if($images){ ?>
    <div id="content" role="main">
        <div id="photo-gallery_col2" role="main">

            <h1>Current & Recent Construction</h1>

            <div class="pikachoose">

                <ul id="pikame">

                    <?php foreach($images as $image_id => $image){
			
                        echo "<li class='$image_id'>\n";
                        echo wp_get_attachment_image($image_id,'medium');
                        echo "<span>".$image->post_excerpt."</span></li>\n";           
                    }
                    ?>
		
                </ul>
            </div>


        <?php } ?>
      
          
    </div>
           <div class="gallery-archives">
                    <div class="photo_hide">
                    <h2>Current & Recent Construction</h2>
                
                    <p><a href="<?php bloginfo('url'); ?>/photo-archives/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/photo_archives.png" width="123" height="33" alt="Photo Archives" /></a>
                    <br/>If anyone needs older images not found in the Archives, please contact <a href="mailto:mkehrer@princeton.edu">Peggy Kehrer</a></p>
                      <p><a href="<?php bloginfo('url'); ?>/then-and-now-gallery/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/thenandnow.png" width="123" height="33" alt="Then & Now" /></a> </p>

                    <p><span class="dropt"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/questions.png" width="123" height="33" alt="Questions" />
  <span style="width:250px; color: white; background-color: #b32317;">For questions or comments, please contact:<br />Peggy Kehrer, Library Construction & Communications Coordinator<br />609.258.0925 or <a href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a></span>
</span> </p>
      
                    </div>
                </div> 
</div>  <!-- #content --> 
        <div id="photo-gallery_col3">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/preservingarchitecturaldetail.png" width="174" height="53" alt="Preserving Architectural Details" />
            <p>
                Click on image to enlarge.
            </p>

            <a title="Compass rosette in floor outside the main elevators 3rd Floor" href="<?php echo get_bloginfo('template_directory'); ?>/images/compass_Large.jpg" rel="lightbox"> <img src="<?php echo get_bloginfo('template_directory'); ?>/images/compass.png" width="170" height="102" alt="Compass" /> </a>
            <p>
                Compass rosette in floor outside the main elevators 3rd Floor
            </p>

            <a title="Mosaic from Antioc, Main Floor, on the wall opposite the door to the Office of the University Librarian" href="<?php echo get_bloginfo('template_directory'); ?>/images/mosaic_Large.jpg" rel="lightbox"> <img src="<?php echo get_bloginfo('template_directory'); ?>/images/mosaic.png" width="170" height="102" alt="Mosaic" /> </a>
            <p>
                Mosaic from Antioc, Main Floor, on the wall opposite the door to the Office of the University Librarian
            </p>

            <a title="Architrave from University College, Oxford, and Worcester College, Oxford, on north wall of the landing between the Main Floor and A Floor, northwest stairwell." href="<?php echo get_bloginfo('template_directory'); ?>/images/architrave_Large.jpg" rel="lightbox"> <img src="<?php echo get_bloginfo('template_directory'); ?>/


images/architrave.png" width="170" height="102" alt="Mosaic" />     </a>
        <p>
            Architrave from University College, Oxford, and Worcester College, Oxford, on north wall of the landing between the Main Floor and A Floor, northwest stairwell.
        </p>

</div>
                  

</div><!-- #primary -->

<?php get_footer(); ?>
