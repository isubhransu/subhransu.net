<?php
/*
Template Name: 2 block
*/
?>

<?php get_header(); ?> 
	<div class="block1">
		<div class="sidebar-user1"><?php if (is_active_sidebar(2)){	echo '<ul>'; dynamic_sidebar(2); echo '</ul>'; }?></div>
		<div class="block1-center">
			<div class="block1-center1">
				<div class="sidebar-user2 span2"><?php if (is_active_sidebar(3)){	echo '<ul>'; dynamic_sidebar(3); echo '</ul>'; }?></div>
				<div class="sidebar-user3 span2"><?php if (is_active_sidebar(4)){	echo '<ul>'; dynamic_sidebar(4); echo '</ul>'; }?></div>
				<div class="sidebar-user4 span2"><?php if (is_active_sidebar(5)){	echo '<ul>'; dynamic_sidebar(5); echo '</ul>'; }?></div>
			</div>
		</div>
	</div>	

	<div class="block2">
	<div class="sidebar-user1"><?php if (is_active_sidebar(6)){	echo '<ul>'; dynamic_sidebar(6); echo '</ul>'; }?></div>
		<div class="block1-center">
			<div class="block2-center2">
				<div class="sidebar-user2 span2"><?php if (is_active_sidebar(7)){	echo '<ul>'; dynamic_sidebar(7); echo '</ul>'; }?></div>
				<div class="sidebar-user3 span2"><?php if (is_active_sidebar(8)){	echo '<ul>'; dynamic_sidebar(8); echo '</ul>'; }?></div>
				<div class="sidebar-user4 span2"><?php if (is_active_sidebar(9)){	echo '<ul>'; dynamic_sidebar(9); echo '</ul>'; }?></div>
			</div>
		</div>
	</div>

	</div>
<?php get_footer(); ?>