
	<div id="BP-Container">
		<div id="BP-Content">

			<?php do_action( 'bp_before_member_home_content' ) ?>
	
			<header class="entry-header clearfix">
				<div class="item-header">
					<?php locate_template( array( 'members/single/member-header.php' ), true ) ?>
				</div>
		You may note your profile is a little empty at this point. Please rest assured that we will be adding in all of the information regarding your past donations and links to students you have supported. In the meantime, you can use the profile tab below to update your information, and other tabs to change passwords or other information. This section may experience updates and changes in the coming weeks - we'd love to hear any concerns or feedback. 
			</header>
	
			<div id="item-nav">
				<div class="item-list-tabs no-ajax bp-content-tabs" id="object-nav">
					<ul>
						<?php bp_get_displayed_user_nav() ?>
	
						<?php do_action( 'bp_members_directory_member_types' ) ?>
					</ul>
				</div>
			</div><!-- #item-nav -->
		
			<div id="item-body">
				<?php do_action( 'bp_before_member_body' ) ?>
	
				<?php if ( bp_is_user_activity() || !bp_current_component() ) : ?>
					<?php locate_template( array( 'members/single/activity.php' ), false ) ?>
	
				<?php elseif ( bp_is_user_blogs() ) : ?>
					<?php locate_template( array( 'members/single/blogs.php' ), true ) ?>
	
				<?php elseif ( bp_is_user_friends() ) : ?>
					<?php locate_template( array( 'members/single/friends.php' ), true ) ?>
	
				<?php elseif ( bp_is_user_groups() ) : ?>
					<?php locate_template( array( 'members/single/groups.php' ), true ) ?>
	
				<?php elseif ( bp_is_user_messages() ) : ?>
					<?php locate_template( array( 'members/single/messages.php' ), true ) ?>
	
				<?php elseif ( bp_is_user_profile() ) : ?>
					<?php locate_template( array( 'members/single/profile.php' ), true ) ?>
	
				<?php endif; ?>
	
				<?php do_action( 'bp_after_member_body' ) ?>
	
			</div><!-- #item-body -->
	
			<?php do_action( 'bp_after_member_home_content' ) ?>


		</div><!-- #content -->
	</div><!-- #container -->

	<?php //locate_template( array( 'sidebar.php' ), true ) ?>
