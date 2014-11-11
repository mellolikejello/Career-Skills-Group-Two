<?php
if($t1 != "" || $t2 != "" || $t3 != "" || $t4 != "" || $t5 != "" || $t6 != "" || $t7 !="" || $t8 != ""){
echo '<div id="gallery">';

	if($t1 != "" || $t2 != "" || $t3 != "" || $t4 != ""){
			echo '<div id="row1"> ';
			if($t1 != ""){
				echo '<div class="small">';
				echo '<img src="' .$t1.'" />';
				echo '</div>';
			}
			else{
				echo '<div class="small">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
			
			if($t2 != ""){
				echo '<div class="big">';
				echo '<img src="' .$t2.'" />';
				echo '</div>';
			}
			else{
				echo '<div class="big">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
			
			if($t3 != ""){
				echo '<div class="small">';
				echo '<img src="' .$t3.'" >';
				echo '</div>';
			}	
			else{
				echo '<div class="small">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
			
			if($t4 != ""){
				echo '<div class="big">';
				echo '<img src="' .$t4.'" />';
				echo '</div>';
				}
		else{
				echo '<div class="big">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
				echo '</div>';
		}	
		if($t5 != "" || $t6 != "" || $t7 !="" || $t8 != ""){
			echo '<div id="row2"> ';
			
			if($t5 != ""){
				echo '<div class="big">';
				echo '<img src="' .$t5.'" />';
				echo '</div>';
			}
			else{
				echo '<div class="big">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
			
			if($t6 != ""){
				echo '<div class="small">';
				echo '<img src="' .$t6.'" />';
				echo '</div>';
			}	
			else{
				echo '<div class="small">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
			
			if($t7 != ""){
				echo '<div class="big">';
				echo '<img src="' .$t7.'" >';
				echo '</div>';
			}
			else{
				echo '<div class="big">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
			
			if($t8 != ""){
				echo '<div class="small">';
				echo '<img src="' .$t8.'" />';
				echo '</div>';
			}	
			else{
				echo '<div class="small">';
				echo '<img src="' . $tile .'" />';
				echo '</div>';
			}
			
			echo '</div>';
		
	}
echo '</div>';

}
?>