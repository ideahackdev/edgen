<?php
	// Setup globals
	// @todo: Get these out of template
	global $wp_query, $purchlogs, $wpdb;

	// Setup image width and height variables
	// @todo: Investigate if these are still needed here
	$image_width  = get_option( 'single_view_image_width' );
	$image_height = get_option( 'single_view_image_height' );
?>

<div id="single_product_page_container">
	
	<?php
		// Breadcrumbs
		wpsc_output_breadcrumbs();

		// Plugin hook for adding things to the top of the products page, like the live search
		do_action( 'wpsc_top_of_products_page' );
	?>
	
	<div class="single_product_display group">
<?php
		/**
		 * Start the product loop here.
		 * This is single products view, so there should be only one
		 */

// $donations = file("http://edgen.evometrix.com/wp-content/uploads/2011/11/donations-final.csv");
// $donationsarray = explode(",",$donations[0]);
// var_dump($donationsarray);





///////////////////////////////////////////////////////////////////////////////////////////////////////
// ideahack - we are writing some code to import users, add some stuff, and email them new passwords //
///////////////////////////////////////////////////////////////////////////////////////////////////////


// $parsedarray = array_chunk($userarray,4);

// code to test that the array parses properly (it does)
// foreach($parsedarray as $a){
// 	echo $a[0];
// 	echo $a[1];
// 	echo $a[2];
// 	echo $a[3];
// 	echo "<br/>";
// }

#### TO DO #### 

## figure out if old user ID is storing somewhere we can use it later to map things with
## figure out why BP profile not working and fix it
## figure out if we need "usernames" - if so add
## run the code on the real user array on the real edgen site
## figure out if we want to use 


// the test array (looks just like the real one)
// $testarray = array('9927489237939','hello','test9999','thisisnotatest1111+1@gmail.com', '99743242939','hello','test9999','thisisnotatest1111+2@gmail.com');

// 
// var_dump($testarray);
// var_dump($userarray);

// var_dump($testarray);
// var_dump($parsedarray);

// foreach ($arrayparsed as $a){
	// echo $a[3];
	// $usename = explode("@", $a[3]);
	// echo $usename[0];
// }

// the code to run once we're good to go - we are currently not using / storing the users first a[1] or last a[2] name

// IDEAHACK MIGRATION SCRIPT

// $students = array(
//  
// );
// 
// 
// if(isset($_GET['doitnow2']) && $_GET['doitnow2'] == 'yes' ){
// 	foreach($students as $student){
// 	
// 			$stFirstName = $student["cFirstName"];
// 			$stLastName = $student["cLastName"];
// 			$stName = $stFirstName . " " .$stLastName ;
// 			$stID = $student['cStudentID'];
// 			$stDetails = $student["cDescription"];
// 		
// 			if($student["dBirth"] != 0){
// 				$stBirth = $student["dBirth"];
// 			}else{
// 				$stBirth = '';
// 			}
// 		
// 			if($student["cGender"] == 'F'){
// 				$stGender = 'female';
// 			}else{
// 				$stGender = 'male';
// 			}
// 			$stCity = $student["cCity"];
// 			$stCountry = $student["cCountryBak"];
// 		
// 			// map program name with cProgramBak
// 			$stProgram = $student["cProgramBak"];
// 		
// 			$stSchool = $student["cSchool"];
// 	
// 			// old to new category mapping
// 			if($student["cPartnerID"]==2){
// 				$stCategory = 16;
// 			}elseif($student["cPartnerID"]==3){
// 				$stCategory = 17;
// 			}elseif($student["cPartnerID"]==4){
// 				$stCategory = 18;
// 			}elseif($student["cPartnerID"]==5){
// 				$stCategory = 19;
// 			}elseif($student["cPartnerID"]==6){
// 				$stCategory = 20;
// 			}elseif($student["cPartnerID"]==7){
// 				$stCategory = 21;
// 			}elseif($student["cPartnerID"]==8){
// 				$stCategory = 6;
// 			}elseif($student["cPartnerID"]==9){
// 				$stCategory = 22;
// 			}
// 		
// 			//echo($stProgram . "  |  ");
// 		
// 			$my_post = array(
// 			'post_name' => $stName,
// 			'post_title' => $stName, 
// 			'post_content' => $stDetails,
// 			'post_status' => 'publish', 
// 			'post_type' => 'wpsc-product',
// 			'post_author' => 1,
// 			'comment_status' => get_option('default_comment_status'),
// 			'ping_status' => get_option('default_ping_status'), 
// 			'tax_input' => array('wpsc_product_category' => array(5,$stCategory)));
// 
// 			$post_id = wp_insert_post( $my_post );
// 		
// 			add_post_meta($post_id, 'Expiration Date (yyyy/mm/dd)', '2011/11/01');
// 			add_post_meta($post_id, 'Active', 'false');
// 			add_post_meta($post_id, 'Birth Date', $stBirth);
// 			add_post_meta($post_id, 'Gender', $stGender);
// 			add_post_meta($post_id, 'Hometown', $stCity);
// 			add_post_meta($post_id, 'Country', $stCountry);
// 			add_post_meta($post_id, 'Program Title', $stProgram); 
// 			add_post_meta($post_id, 'School Name', $stSchool);
// 			add_post_meta($post_id, 'old_id', $stID);
// 			
// 			echo "student ID:" . $stID . "::::";
// 			$filename = "/wp-content/uploads/2010/10/" .$stID . ".jpg";
// 			var_dump($filename);
// 	  		$attachment = array(
// 	  		     'post_mime_type' => "image/jpeg" ,
// 	  		     'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
// 	  		     'post_content' => '',
// 	  		     'post_status' => 'inherit'
// 	  		);
// 	
// 			var_dump($attachment);
// 	  	 	$attach_id = wp_insert_attachment( $attachment, $filename, $post_id );
// 	  		// you must first include the image.php file
// 	  		// for the function wp_generate_attachment_metadata() to work
// 		  	require_once(ABSPATH . 'wp-admin/includes/image.php');
// 	  		$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
// 	  		var_dump($attach_data);
// 			wp_update_attachment_metadata( $attach_id, $attach_data );
// 	  	 	set_post_thumbnail( $post_id, $attach_id );		
// 	}
// }

//end of student migration.


// 
// // get the txt file - order is ID, FirstName, LastName, Email
// $userfile = file_get_contents("http://edgen.evometrix.com/wp-content/uploads/2011/11/test-array2.txt");
// 
// // make an array and chunk it into many arrays each containing all relevant info for 1 user
// $userarray = explode(",",$userfile);
// 
// $arrayparsed = array_chunk($userarray,4); // replace $testarray with $userarray when ready to go
// 
// foreach($arrayparsed as $a){
// 	if(isset($_GET['doitnow']) && $_GET['doitnow'] == 'yes' ){
// 		
// 		$usename = explode("@", $a[3]); // get everything before the @ symbol in the email
// 		$user_name = $usename[0]; //username will be the first part of their email
// 
// 		// $user_name = $a[3];
// 		// var_dump($user_name);
// 		
// 		$user_id = username_exists( $user_name );
// 		if ( !$user_id ) {
// 			$random_password = wp_generate_password( 12, false );
// 			$email = $a[3];
// 
// 			$user_id = wp_create_user($user_name, $random_password, $email); 
// 			
// 			var_dump($user_id);
// 			
// 			$old_user_id = $a[0];
// 			
// 			if (!is_object($user_id)) {
// 			
// 			add_user_meta($user_id, "old_user_id", $old_user_id, true);
// 			
// 			//var_dump($user_id);
// 			//$our_user_meta = get_user_meta($user_id, "old_user_id", true);
// 			
// 			$message = 
// 
// "Dear Education Generation donors,
// 
// If you've stopped by for a visit, you may have noticed things look a little different around here today.  We are very excited to launch a new look and feel for Education Generation, in conjunction with upcoming new field partners, fellows programs, and growing opportunities to engage with our community! These changes will help us better tell the stories of our students, fellows, partners and all of you, as donors.
// 
// We write this email to you because you are going to be some of the very first to see this soft launch of the new site and brand. While we make the transition today know that:
// Most importantly - you will receive an email with a new temporary password, and will be asked to go back to the site to set up a new secure password. We've changed log-in procedures to introduce Facebook log-in and easier registration in general, as well as upgraded password security. Unfortunately, this means we can't transfer the old passwords.
// 				
// 			
// Your new password is:       $random_password
// Your username is: 	$user_name
// 			 
// Please go here login: http://www.educationgeneration.org
// 			
// 						
// The site will be shifting a bit in the coming days, so short outages are nothing to worry about, nor are things that seem obviously very out of place. 
// 			
// Very temporarily, you may be unable to see your donation history and past students supported. We're aware of this and it’s our first priority. This is an important step we need to take to enhance student information and donation tracking in the future.
// 			
// This release is not being promoted for another week, as we're eager to engage our current community in reviewing the changes as they happen, and to hear what you like or hope to see implemented - we can't promise we can accommodate all requests for changes or features, but they will definitely be heard as we continue evolving the platform. 
// 
// While we tested everything thorough before launch, inevitably we expect some bugs and problems during this phase. Please bear with us as we iron out the kinks, and as you use the new platform, it is quite helpful to hear about issues or questions you may have. Drop us an email at info@educationgeneration.org, or use the new contact forms implemented throughout the site.  
// 
// Thank you for continuing to believe in our platform and of course, in these intelligent, promising young leaders of tomorrow! 
// 
// The Education Generation Team";
// 			
// 			wp_mail($email, "an IMPORTANT notice from Education Generation", $message);
// 
// 			echo 'success ' . $user_id;
// 			
// 		}
// 		} 
// 		
// 		else {
// 			echo "this user already exists";
// 		}
// 	}
// }
// 

// the loop
// if(isset($_GET['doitnow']) && $_GET['doitnow'] == 'yes' ){
// 	foreach ($userarray as $user) {
// 		
// }

//?getitdone=yes

	// if(isset($_GET['doitnow']) && $_GET['doitnow'] == 'yes' ){
	// 			
	// 		$user_name = 'ramcio6443';
	// 		
	// 		$user_id = username_exists( $user_name );
	// 		if ( !$user_id ) {
	// 			$random_password = wp_generate_password( 12, false );
	// 			$email = "raden.andre+3@gmail.com";
	// 
	// 			$user_id = wp_create_user($user_name, $random_password, $email); 
	// 			
	// 			$old_user_id = 23;
	// 			add_user_meta($user_id, "old_user_id", $old_user_id, true);
	// 			var_dump($user_id);
	// 			$our_user_meta = get_user_meta($user_id, "old_user_id", true);
	// 			
	// 			$message = "Dear Education Generation donors,
	// 
	// 			If you've stopped by for a visit, you may have noticed things look a little different around here today.  We are very excited to launch a new look and feel for Education Generation, in conjunction with upcoming new field partners, fellows programs, and growing opportunities to engage with our community! These changes will help us better tell the stories of our students, fellows, partners and all of you, as donors.
	// 
	// 			We write this email to you because you are going to be some of the very first to see this soft launch of the new site and brand. While we make the transition today know that:
	// 			Most importantly - you will receive an email with a new temporary password, and will be asked to go back to the site to set up a new secure password. We've changed log-in procedures to introduce Facebook log-in and easier registration in general, as well as upgraded password security. Unfortunately, this means we can't transfer the old passwords.
	// 			
	// 			
	// 			
	// 			Your new password is:       $random_password
	// 			Your username is still: 	$user_name
	// 			 
	// 			
	// 			
	// 			The site will be shifting a bit in the coming days, so short outages are nothing to worry about, nor are things that seem obviously very out of place. 
	// 			
	// 			Very temporarily, you may be unable to see your donation history and past students supported. We're aware of this and it’s our first priority. This is an important step we need to take to enhance student information and donation tracking in the future.
	// 			
	// 			
	// 			This release is not being promoted for another week, as we're eager to engage our current community in reviewing the changes as they happen, and to hear what you like or hope to see implemented - we can't promise we can accommodate all requests for changes or features, but they will definitely be heard as we continue evolving the platform. 
	// 
	// 			While we tested everything thorough before launch, inevitably we expect some bugs and problems during this phase. Please bear with us as we iron out the kinks, and as you use the new platform, it is quite helpful to hear about issues or questions you may have. Drop us an email at info@educationgeneration.org, or use the new contact forms implemented throughout the site.  
	// 
	// 			Thank you for continuing to believe in our platform and of course, in these intelligent, promising young leaders of tomorrow! 
	// 
	// 			The Education Generation Team";
	// 			
	// 			wp_mail($email, "an IMPORTANT notice from Education Generation", $message);
	// 			echo $user_id;
	// 		} else {
	// 			echo "this user already exists";
	// 		}
	// 			
	// 			
	// 			
	// 
	// 			
	// 	}

	
		while ( wpsc_have_products() ) : wpsc_the_product(); ?>
					<div class="imagecol">
						<?php if ( wpsc_the_product_thumbnail() ) : ?>
								<a rel="<?php echo wpsc_the_product_title(); ?>" class="<?php echo wpsc_the_product_image_link_classes(); ?>" href="<?php echo wpsc_the_product_image(); ?>">
									<img class="product_image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(get_option('product_image_width'),get_option('product_image_height'),'','single'); ?>"/>
								</a>
								<?php 
								if ( function_exists( 'gold_shpcrt_display_gallery' ) )
									echo gold_shpcrt_display_gallery( wpsc_the_product_id() );
								?>
						<?php else: ?>
									<a href="<?php echo wpsc_the_product_permalink(); ?>">
									<img class="no-image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="No Image" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo WPSC_CORE_THEME_URL; ?>wpsc-images/noimage.png" width="<?php echo get_option('product_image_width'); ?>" height="<?php echo get_option('product_image_height'); ?>" />
									</a>
						<?php endif; ?>
						
						<?php //ideahack putting product button above description   ?>

							<?php
							/**
							 * Form data
							 */
							?>
					<?php if(( 'true' == get_post_meta(wpsc_the_product_id(), 'Active', true) ) or (get_post_meta(wpsc_the_product_id(), 'Active', true) == "")): ?>
							<form class="product_form" enctype="multipart/form-data" action="<?php echo wpsc_this_page_url(); ?>" method="post" name="1" id="product_<?php echo wpsc_the_product_id(); ?>">
								<?php do_action ( 'wpsc_product_form_fields_begin' ); ?>
								<?php if ( wpsc_product_has_personal_text() ) : ?>
									<fieldset class="custom_text">
										<legend><?php _e( 'Personalize Your Product', 'wpsc' ); ?></legend>
										<p><?php _e( 'Complete this form to include a personalized message with your purchase.', 'wpsc' ); ?></p>
										<textarea cols='55' rows='5' name="custom_text"></textarea>
									</fieldset>
								<?php endif; ?>


								<?php
								/**
								 * Quantity options - MUST be enabled in Admin Settings
								 */
								?>
								<?php if(wpsc_has_multi_adding()): ?>
						        	<fieldset><legend><?php _e('', 'wpsc'); ?></legend>
									<div class="wpsc_quantity_update">
					<?php ih_quantity_display( wpsc_the_product_id() ); ?>
									<input type="hidden" name="key" value="<?php echo wpsc_the_cart_item_key(); ?>"/>
									<input type="hidden" name="wpsc_update_quantity" value="true" />
						            </div><!--close wpsc_quantity_update-->
						            </fieldset>
								<?php endif ;?>


								<input type="hidden" value="add_to_cart" name="wpsc_ajax_action" />
								<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="product_id" />					
								<?php if( wpsc_product_is_customisable() ) : ?>
									<input type="hidden" value="true" name="is_customisable"/>
								<?php endif; ?>

								<?php
								/**
								 * Cart Options
								 */
								?>

								<?php if((get_option('hide_addtocart_button') == 0) &&  (get_option('addtocart_or_buynow') !='1')) : ?>
									<?php if(wpsc_product_has_stock()) : ?>
										<div class="wpsc_buy_button_container">
												<?php if(wpsc_product_external_link(wpsc_the_product_id()) != '') : ?>
												<?php $action = wpsc_product_external_link( wpsc_the_product_id() ); ?>
												<input class="wpsc_buy_button" type="submit" value="<?php echo wpsc_product_external_link_text( wpsc_the_product_id(), __( 'Buy Now', 'wpsc' ) ); ?>" onclick="return gotoexternallink('<?php echo $action; ?>', '<?php echo wpsc_product_external_link_target( wpsc_the_product_id() ); ?>')">
												<?php else: ?>
											<input type="submit" value="<?php _e('Donate', 'wpsc'); ?>" name="Buy" class="wpsc_buy_button" id="product_<?php echo wpsc_the_product_id(); ?>_submit_button"/>
												<?php endif; ?>
											<div class="wpsc_loading_animation">
												<img title="Loading" alt="Loading" src="<?php echo wpsc_loading_animation_url(); ?>" />
												<?php _e('Updating cart...', 'wpsc'); ?>
											</div><!--close wpsc_loading_animation-->
										</div><!--close wpsc_buy_button_container-->
									<?php else : ?>
										<p class="soldout"><?php _e('This product has sold out.', 'wpsc'); ?></p>
									<?php endif ; ?>
								<?php endif ; ?>

								<?php do_action ( 'wpsc_product_form_fields_end' ); ?>
							</form><!--close product_form-->
						<?php endif ; ?>
							<?php
								if ( (get_option( 'hide_addtocart_button' ) == 0 ) && ( get_option( 'addtocart_or_buynow' ) == '1' ) )
									echo wpsc_buy_now_button( wpsc_the_product_id() );

								echo wpsc_product_rater();

								echo wpsc_also_bought( wpsc_the_product_id() );

							?>
							<!--sharethis-->
							<?php if ( get_option( 'wpsc_share_this' ) == 1 ): ?>
							<div class="st_sharethis" displayText="ShareThis"></div>
							<?php endif; ?>
							<!--end sharethis-->
							<?php 
							if(wpsc_show_fb_like()): ?>
						        <div class="FB_like">
						        <iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo wpsc_the_product_permalink(); ?>&amp;layout=standard&amp;show_faces=true&amp;width=435&amp;action=like&amp;font=arial&amp;colorscheme=light" frameborder="0"></iframe>
						        </div><!--close FB_like-->
						    <?php endif; ?>						

					

						<?php // ideahack end of add /remove from cart stuffs.?>						
						
						
					</div><!--close imagecol-->

					<div class="productcol">
						<?php
						/** Ideahack Meta custom
						 * Custom meta HTML and loop
						 */
						?>
                        <?php if (wpsc_have_custom_meta()) : ?>
						<div class="custom_meta">
								<?php
								
								
									$birthdate = get_post_meta(wpsc_the_product_id(), 'Birthdate (yyyy/mm/dd)', true);
									$country = get_post_meta(wpsc_the_product_id(), 'Country', true);
									$area_of_study = get_post_meta(wpsc_the_product_id(), 'Program Title', true);
									$funding_deadline = get_post_meta(wpsc_the_product_id(), 'Expiration Date (yyyy/mm/dd)', true);

									$funding_needed = get_post_meta(wpsc_the_product_id(), 'Funding Needed', true);					
					
									if ( $birthdate != "" )
										echo "<div id='birthdate'><strong>Birthdate:</strong> " . $birthdate . "</div>";
									if ( $country != "" )
										echo "<div id='country'><strong>Country:</strong> " . $country . "</div>";
									if ( $area_of_study != "" )
										echo "<div id='areaofstudy'><strong>Area of Study:</strong> " . $area_of_study . "</div>";
									if ( $funding_deadline != "" )
										echo "<div id='deadline'><strong>Funding Deadline:</strong> " . $funding_deadline . "</div>";
						
												if ( $funding_needed != "" ){			
				$raised = $funding_needed - (20* wpsc_product_remaining_stock(wpsc_the_product_id()));		
				echo "<div id='raised'>Raised: $" . $raised . " out of $" . $funding_needed . "</div>"  ;
				
				} 
				 //$our_category = get_the_product_category(wpsc_the_product_id());
				//echo "Partner: " . $ourcategory[0]->name;
				//var_dump($our_category);
								?>
						</div><!--close custom_meta-->
                        <?php endif; ?>						
						
<?php //ideahack end of custom meta?>						
						
						
									
						<?php do_action('wpsc_product_before_description', wpsc_the_product_id(), $wp_query->post); ?>
						<div class="product_description">
							<h4><?php echo wpsc_the_product_title(); ?>'s story:</h4>
								
							<?php echo wpsc_the_product_description(); ?>
						</div><!--close product_description -->
						<?php do_action( 'wpsc_product_addons', wpsc_the_product_id() ); ?>		
						<?php if ( wpsc_the_product_additional_description() ) : ?>
							<div class="single_additional_description">
								<p><?php echo wpsc_the_product_additional_description(); ?></p>
							</div><!--close single_additional_description-->
						<?php endif; ?>		
						<?php do_action( 'wpsc_product_addon_after_descr', wpsc_the_product_id() ); ?>

					
					</div><!--close productcol-->
		
					<form onsubmit="submitform(this);return false;" action="<?php echo wpsc_this_page_url(); ?>" method="post" name="product_<?php echo wpsc_the_product_id(); ?>" id="product_extra_<?php echo wpsc_the_product_id(); ?>">
						<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="prodid"/>
						<input type="hidden" value="<?php echo wpsc_the_product_id(); ?>" name="item"/>
					</form>
		</div><!--close single_product_display-->
		
		<div><!-- ideahack users who have donated -->

		
		
		<!-- display the avatar -->
		<?php
		$contributor_ids = get_post_meta( wpsc_the_product_id(), 'contributor');
		
	if(!empty($contributor_ids)){
	?> 		<h3>User's who have donated</h3>
	<?php

	
	// get products/students
	$productName = wpsc_the_product_title();
	$cartcontent = $wpdb->get_results( "SELECT * FROM " . WPSC_TABLE_CART_CONTENTS . " WHERE name='$productName'");

	//var_dump($cartcontent);

	foreach ( (array)$cartcontent as $formdata ) {

		// get purchase log for selected ID
		$sql = "SELECT DISTINCT `" . WPSC_TABLE_PURCHASE_LOGS . "` . * FROM `" . WPSC_TABLE_SUBMITED_FORM_DATA . "` LEFT JOIN `" . WPSC_TABLE_PURCHASE_LOGS . "` ON `" . WPSC_TABLE_SUBMITED_FORM_DATA . "`.`log_id` = `" . WPSC_TABLE_PURCHASE_LOGS . "`.`id` WHERE `" . WPSC_TABLE_PURCHASE_LOGS . "`.`id`=" . $formdata->purchaseid; 
		$logs = $wpdb->get_results($sql);
		$purchaseLog = $logs[0];
		
		$donationDate = $purchaseLog->date;
		$userid = $purchaseLog->user_ID; 
		$users = get_userdata($userid);
		
		$donorName = $users->display_name;
		if($formdata->name == $productName){
			$totalDonation = $formdata->price * $formdata->quantity;
		}
		
		echo ("<a href='" . bp_core_get_user_domain($userid) . "'>" . $donorName . "</a> donated " . wpsc_currency_display($totalDonation)) . " on " . date( 'M d Y', $donationDate ) . "<br/>";
    }
	?> <br/> <?php
		foreach( $contributor_ids as $contributor_id){
		
		?>
			<div id="item-header-avatar">
				<a href="<?php echo bp_core_get_user_domain($contributor_id) ?>">
					<?php  
					$size = 120;
					// get the avatar image
					$avatarURL = bp_theme_avatar_url($size,$size,'', bp_core_fetch_avatar(array( 'item_id' => $contributor_id, 'type' => 'full', 'html' => 'false', 'width' => $size, 'height' => $size )) );
					echo '<div class="avatar" style="background-image: url(\''.$avatarURL.'\'); width:'.$size.'px; height:'.$size.'px; "></div>';  //bp_displayed_user_avatar( 'type=full' ) 
					//echo bp_core_fetch_avatar(array( 'item_id' => $GLOBALS['bp']->displayed_user->id, 'type' => 'full', 'html' => 'false' ));?>
				</a>
			</div><!-- #item-header-avatar -->
		
		<?php } 
		}
		?>
		
		
		</div><!-- ideahack close users who have donated-->
		<?php echo wpsc_product_comments(); ?>

<?php endwhile;

    do_action( 'wpsc_theme_footer' ); ?> 	

</div><!--close single_product_page_container-->
