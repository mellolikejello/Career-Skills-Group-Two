<?php
	//main
		
		if ($main == ""){
				$main = $mainB;
		}
		else{
		$main = $tarDir . basename($_FILES['mainImage']['name']);
			if(move_uploaded_file($_FILES['mainImage']['tmp_name'], $main)) { 
				$main = $tarDirU . basename($_FILES['mainImage']['name']);
			} 
		}
	//s1
		if ($s1 == ""){
			$s1 = $s1B;
		}
		else{
		$s1 = $tarDir . basename($_FILES['s1']['name']);
			if(move_uploaded_file($_FILES['s1']['tmp_name'], $s1)) { 
				$s1 = $tarDirU . basename($_FILES['s1']['name']);
			} 
		}
		
	//s2
		if ($s2 == ""){
			$s2 = $s2B;
		}
		else{
		$s2 = $tarDir. basename($_FILES['s2']['name']);
			if(move_uploaded_file($_FILES['s2']['tmp_name'], $s2)) { 
				$s2 = $tarDirU . basename($_FILES['s2']['name']);
			} 
		}
	
	//s3
		if ($s3 == ""){
			$s3 = $s3B;
		}
		else{
		$s3 = $tarDir . basename($_FILES['s3']['name']);
			if(move_uploaded_file($_FILES['s3']['tmp_name'], $s3)) { 
				$s3 = $tarDirU . basename($_FILES['s3']['name']);
			} 
		}
		
	//s4
		if ($s4 == ""){
			$s4 = $s4;
		}
		else{
		$s4 = $tarDir. basename($_FILES['s4']['name']);
			if(move_uploaded_file($_FILES['s4']['tmp_name'], $s4)) { 
				$s4 = $tarDirU . basename($_FILES['s4']['name']);
			} 
		}
		
	//s5
		if ($s5 == ""){
			$s5 = $s5;
		}
		else{
		$s5 = $tarDir . basename($_FILES['s5']['name']);
			if(move_uploaded_file($_FILES['s5']['tmp_name'], $s5)) { 
				$s5 = $tarDirU . basename($_FILES['s5']['name']);
			} 
		}
		
	//s6
		if ($s6 == ""){
			$s6 = $s6B;
		}
		else{
		$s6 = $tarDir . basename($_FILES['s6']['name']);
			if(move_uploaded_file($_FILES['s6']['tmp_name'], $s6)) { 
				$s6 = $tarDirU . basename($_FILES['s6']['name']);
			} 
		}
		
	//t1	
		if ($t1 == ""){
			$t1 = $t1B;
		}
		else{
		$t1 = $tarDir . basename($_FILES['t1']['name']);
			if(move_uploaded_file($_FILES['t1']['tmp_name'], $t1)) { 
				$t1 = $tarDirU . basename($_FILES['t1']['name']);
			} 
		}
	
	//t2
		if ($t2 == ""){
			$t2 = $t2B;
		}
		else{
		$t2 = $tarDir . basename($_FILES['t2']['name']);
			if(move_uploaded_file($_FILES['t2']['tmp_name'], $t2)) { 
				$t2 = $tarDirU . basename($_FILES['t2']['name']);
			} 
		}
	
	//t3
		if ($t3 == ""){
			$t3 = $t3B;
		}
		else{
		$t3 = $tarDir . basename($_FILES['t3']['name']);
			if(move_uploaded_file($_FILES['t3']['tmp_name'], $t3)) { 
				$t3 = $tarDirU . basename($_FILES['t3']['name']);
			} 
		}
		
	//t4
		if ($t4 == ""){
			$t4= $t4B;
		}
		else{
		$t4 = $tarDir . basename($_FILES['t4']['name']);
			if(move_uploaded_file($_FILES['t4']['tmp_name'], $t4)) { 
				$t4 = $tarDirU . basename($_FILES['t4']['name']);
			} 
		}
	
	//t5
		if ($t5 == ""){
			$t5 = $t5B;
		}
		else{
		$t5 = $tarDir . basename($_FILES['t5']['name']);
			if(move_uploaded_file($_FILES['t5']['tmp_name'], $t5)) { 
				$t5 = $tarDirU . basename($_FILES['t5']['name']);
			} 
		}
		
	//t6
		if ($t6 == ""){
			$t6 = $t6B;
		}
		else{
		$t6 = $tarDir . basename($_FILES['t6']['name']);
			if(move_uploaded_file($_FILES['t6']['tmp_name'], $t6)) { 
				$t6 = $tarDirU . basename($_FILES['t6']['name']);
			} 
		}
	
	//t7
		if ($t7 == ""){
			$t7 = $t7B;
		}
		else{
		$t7 = $tarDir . basename($_FILES['t7']['name']);
			if(move_uploaded_file($_FILES['t7']['tmp_name'], $t7)) { 
				$t7 = $tarDirU . basename($_FILES['t7']['name']);
			} 
		}
		
	//t8
		if ($t8 == ""){
			$t8 = $t8B;
		}
		else{
		$t8 = $tarDir . basename($_FILES['t8']['name']);
			if(move_uploaded_file($_FILES['t8']['tmp_name'], $t8)) { 
				$t8 = $tarDirU . basename($_FILES['t8']['name']);
			} 
		}
	
	//video
		if ($video == ""){
			$video = $videoB;
		}
		else{
		$video = $tarDir . basename($_FILES['video']['name']);
			if(move_uploaded_file($_FILES['video']['tmp_name'], $video)) { 
				$video = $tarDirU . basename($_FILES['video']['name']);
			} 
		}
		
		if ($tile== ""){
			$tile = $tileB;
		}
		else{
		$tile = $tarDir . basename($_FILES['tile']['name']);
			if(move_uploaded_file($_FILES['tile']['tmp_name'], $tile)) { 
				$tile = $tarDirU . basename($_FILES['tile']['name']);
			} 
		}
?>