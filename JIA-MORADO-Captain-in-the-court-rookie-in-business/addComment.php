<?php
	if(empty($_POST)){
		$response_array['status'] = 'error';
		return;		
	}
	$sectionId = $_POST['sectionId'];
	$comment = $_POST['comment'];
	$authorAvatarUrl = $_POST['authorAvatarUrl'];
	$authorName = $_POST['authorName'];
	$authorId = $_POST['authorId'];
	
	$string = file_get_contents('./side-comments.json');
	$jsonArray = json_decode($string);
	$new = true;
	
	for($i = 0; $i < count($jsonArray); $i++){
		if ($jsonArray[$i]->sectionId == $sectionId) {
			$newComment = new stdClass();
			$newComment->authorAvatarUrl = $authorAvatarUrl;
			$newComment->authorName = $authorName;
			$newComment->comment = $comment; 
			
			$jsonArray[$i]->comments[] = $newComment;
			$new = false;
		}
	}
	if ($new == true) {
		$newSection = new stdClass();
		$newSection->sectionId = $sectionId;
		$newSection->comments = array();
		$newComment = new stdClass();
		$newComment->authorAvatarUrl = $authorAvatarUrl;
		$newComment->authorName = $authorName;
		$newComment->comment = $comment;
		$newSection->comments[] = $newComment;
		$jsonArray[] = $newSection;
	}
	print_r($jsonArray);
	$str = json_encode($jsonArray);
	
	$file = fopen("side-comments.json","w");
	fwrite($file, $str);
	fclose($file);
	
	$response_array['status'] = 'success';
	return;
?>