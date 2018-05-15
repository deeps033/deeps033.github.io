<?php
$main_gallery =scandir("jaipur");
	$gallery_string="";

	foreach ($main_gallery as $img_name) {
		if (strlen($img_name) > 2) {
		$gallery_string .='<img src="jaipur/'.$img_name.'">';
		}
	}
	echo $gallery_string;
	?>