<?php
/*
Template Name: 5 block
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



<div class="block3">
<div class="sidebar-user1"><?php if (is_active_sidebar(10)){	echo '<ul>'; dynamic_sidebar(10); echo '</ul>'; }?></div>
	<div class="block3-center">
		<div class="block3-center3">
			<div class="sidebar-user2 span2"><?php if (is_active_sidebar(11)){	echo '<ul>'; dynamic_sidebar(11); echo '</ul>'; }?></div>
			<div class="sidebar-user3 span2"><?php if (is_active_sidebar(12)){	echo '<ul>'; dynamic_sidebar(12); echo '</ul>'; }?></div>
			<div class="sidebar-user4 span2"><?php if (is_active_sidebar(13)){	echo '<ul>'; dynamic_sidebar(13); echo '</ul>'; }?></div>
		</div>
	</div>
</div>	



<div class="block4">
<div class="sidebar-user1"><?php if (is_active_sidebar(14)){	echo '<ul>'; dynamic_sidebar(14); echo '</ul>'; }?></div>
	<div class="block4-center">
		<div class="block4-center1">
			<div class="sidebar-user2 span2"><?php if (is_active_sidebar(15)){	echo '<ul>'; dynamic_sidebar(15); echo '</ul>'; }?></div>
			<div class="sidebar-user3 span2"><?php if (is_active_sidebar(16)){	echo '<ul>'; dynamic_sidebar(16); echo '</ul>'; }?></div>
			<div class="sidebar-user4 span2"><?php if (is_active_sidebar(17)){	echo '<ul>'; dynamic_sidebar(17); echo '</ul>'; }?></div>
		</div>
	</div>
</div>	



<div class="block5">
<div class="sidebar-user1"><?php if (is_active_sidebar(18)){	echo '<ul>'; dynamic_sidebar(18); echo '</ul>'; }?></div>
	<div class="block5-center">
		<div class="block5-center1">
			<div class="sidebar-user2 span2"><?php if (is_active_sidebar(19)){	echo '<ul>'; dynamic_sidebar(19); echo '</ul>'; }?></div>
			<div class="sidebar-user3 span2"><?php if (is_active_sidebar(20)){	echo '<ul>'; dynamic_sidebar(20); echo '</ul>'; }?></div>
			<div class="sidebar-user4 span2"><?php if (is_active_sidebar(21)){	echo '<ul>'; dynamic_sidebar(21); echo '</ul>'; }?></div>
		</div>
	</div>
</div>	

</div>	
	
<?php get_footer(); ?>