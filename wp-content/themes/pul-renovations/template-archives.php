<?php
/*
 Template Name: Gallery Archives

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

			$images[$imageid]=get_post($imageid);
		}

	}

        if($images){ ?>
	<div id="content" role="main">
		<div id="photo-gallery_col2" role="main">

			<h1><?php wp_title("",true); ?></h1>

			<div class="pikachoose">

				<ul id="pikame">

					<?php foreach($images as $image_id => $image){

						echo "<li>\n";
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

				<p>
					<a href="<?php bloginfo('url'); ?>/photo-gallery/"><img src="<?php echo get_bloginfo('template_directory');?>/images/current_photos.png" width="123" height="33" alt="Current Photos" /></a><br />
					If anyone needs older images not found in the Archives, please contact
					<a href="mailto:mkehrer@princeton.edu">Peggy Kehrer</a>
				</p>
				<p>
					<a href="<?php bloginfo('url'); ?>/then-and-now-gallery/"><img
						src="<?php echo get_bloginfo('template_directory'); ?>/images/thenandnow.png"
						width="123" height="33" alt="Then & Now" /> </a>
				</p>

				<p>
					<span class="dropt"><img
						src="<?php echo get_bloginfo('template_directory'); ?>/images/questions.png"
						width="123" height="33" alt="Questions" /> <span
						style="width: 250px; color: white; background-color: #b32317;">For
							questions or comments, please contact:<br />Peggy Kehrer, Library
							Construction & Communications Coordinator<br />609.258.0925 or <a
							href="mailto:mkehrer@princeton.edu">mkehrer@princeton.edu</a>
					</span> </span>
				</p>

			</div>
		</div>
	</div>
	<!-- #content -->
	<div id="photo-gallery_col3">
		<img
			src="<?php echo get_bloginfo('template_directory');?>/images/preservingarchitecturaldetail.png"
			width="174" height="53" alt="Preserving Architectural Details" />
		<p>Click on image to enlarge.</p>

		<a title="Bust of Harvey S. Firestone"
			href="<?php echo get_bloginfo('template_directory');?>/images/firestone_bust_Large.jpg"
			rel="lightbox"> <img
			src="<?php echo get_bloginfo('template_directory');?>/images/firestone_bust_thumb.png"
			width="170" height="102" alt="Bust of Harvey S. Firestone" />
		</a>
		<p>Bust of Harvey S. Firestone, in whose memory Firestone Library was
			given by the Firestone Family, 21 Princeton classes, and 1,250 other
			alumni and friends.</p>

		<a title="Clock sculpture"
			href="<?php echo get_bloginfo('template_directory');?>/images/clock_Large.jpg"
			rel="lightbox"> <img
			src="<?php echo get_bloginfo('template_directory');?>/images/clock_thumb.png"
			width="170" height="102" alt="Clock Sculpture" />
		</a>
		<p>
			<a
				href="<?php echo get_bloginfo('template_directory');?>/images/Firestoneclock.pdf"
				target="_blank" style="color: #F60; text-decoration: underline;">Clock
				sculpture</a> on north wall above Circulation Desk
		</p>

		<a title="Bengal tigers"
			href="<?php echo get_bloginfo('template_directory');?>/images/tigers_Large.jpg"
			rel="lightbox"> <img
			src="<?php echo get_bloginfo('template_directory');?>/images/tigers_thumb.png"
			width="170" height="102" alt="Tigers" />
		</a>
		<p>Bengal tigers from the studio of Edward Marshall Boehm, in the
			DeLong Room. Gift of Levering Cartwrite '26.</p>

	</div>


</div>
<!-- #primary -->

<?php get_footer(); ?>
