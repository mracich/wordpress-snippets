<?php 
foreach (array_reverse (get_post_ancestors($post)) as $id) {
	$title = get_the_title($id);
	$href = get_permalink($id);
	echo "<a href=\"$href\">$title</a> &raquo; ";
};
if ($post->post_parent) the_title();
?> 
