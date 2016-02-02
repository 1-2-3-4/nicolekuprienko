<div id="work">

	<a id="left_arrow" href="index.php?id=work&img=<?php
	//clicking the left arrow will queue the previous background photo
		$img_left = $img - 1;
		echo $img_left;
	?>" style="display:<?php
	//hide the left hand button if there are no more photos to the left
	if ($img == 1) {
		echo "none;";
	}
	else {
		echo "block;";
	}
	?>" >&lt;</a>
	
	<a id="right_arrow" href="index.php?id=work&img=<?php
		//clicking the right arrow will queue the next background photo
		$img_right = $img + 1;
		echo $img_right;
	?>" style="display:<?php
	//hide the right hand button if there are no more photos to the right
	if ($img >= 22) {
		echo "none;";
	}
	else {
		echo "block;";
	}
	?>">&gt;</a>
	<div class="clearfix"></div>

	<h2 id="img_number"><?php 
	//if the number is less than ten, add two zeroes before it
		if ($img < 10) {
			echo "00" . $img;
		}
	//if the number is greater than ten, add one zero before it	
		else {
			echo "0" . $img; 
		}
	?></h2>

</div>