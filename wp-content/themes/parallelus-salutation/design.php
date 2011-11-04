<!doctype html>  
<?php require_once( FRAMEWORK_DIR . 'utilities/ti/ti.php'); ?>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<?php get_header('default'); ?>
</head>

<body <?php body_class(); ?>>

<div id="Wrapper">
	
	<?php // ideahack code to make "Pending Donations" happen
	if (wpsc_cart_item_count() > 0) { 
		echo '<div id="gotocheckout" style="background: none repeat scroll 0 0 #C5392F; border-radius: 0 0 4px 0; float: left; padding: 5px 15px 5px 10px;"><a style="color: #f5f5f5;" href="http://educationgeneration.org/students/checkout">View Pending Donations</a></div>'; }
	?>
	<div id="Top">
		<div class="clearfix">
		
			<?php emptyblock('top') ?>
			
		</div>		
	</div> <!--! end of #Top -->
	
	<div id="Middle">
		
		<div class="pageWrapper theContent clearfix">
			
			<div class="inner-1">
								
				<div class="inner-2 contentMargin">
			
					<?php emptyblock('middle') ?>
			
				</div>
			</div>
		</div> <!--! end of .pageWrapper -->
	</div> <!--! end of #Middle -->
	
	<div id="Bottom">		

		<?php emptyblock('bottom') ?>
		
	</div> <!--! end of #Bottom -->
</div> <!--! end of #Wrapper -->

<?php get_footer('default'); ?>
  
</body>
</html>