<?php
	//Ayala Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=57');
	$int = 0;
	$ac = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ac["marketCapitalization"] = $tableStringArray[4];
		  $ac["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ac["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ac["percentChange"] = '-'.$percentChangeString;
				$ac["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ac["percentChange"] = $percentChangeString;
				$ac["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Aboitiz Equity Ventures, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=16');
	$int = 0;
	$aev = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $aev["marketCapitalization"] = $tableStringArray[4];
		  $aev["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $aev["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$aev["percentChange"] = '-'.$percentChangeString;
				$aev["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$aev["percentChange"] = $percentChangeString;
				$aev["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Alliance Global Group, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=212');
	$int = 0;
	$agi = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $agi["marketCapitalization"] = $tableStringArray[4];
		  $agi["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $agi["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$agi["percentChange"] = '-'.$percentChangeString;
				$agi["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$agi["percentChange"] = $percentChangeString;
				$agi["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Ayala Land, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=180');
	$int = 0;
	$ali = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ali["marketCapitalization"] = $tableStringArray[4];
		  $ali["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ali["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ali["percentChange"] = '-'.$percentChangeString;
				$ali["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ali["percentChange"] = $percentChangeString;
				$ali["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Aboitiz Power Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=609');
	$int = 0;
	$ap = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ap["marketCapitalization"] = $tableStringArray[4];
		  $ap["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ap["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ap["percentChange"] = '-'.$percentChangeString;
				$ap["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ap["percentChange"] = $percentChangeString;
				$ap["volume"] = $tableStringArray[31];
		  }
		}
	}
	//BDO Unibank, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=260');
	$int = 0;
	$bdo = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $bdo["marketCapitalization"] = $tableStringArray[4];
		  $bdo["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $bdo["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$bdo["percentChange"] = '-'.$percentChangeString;
				$bdo["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$bdo["percentChange"] = $percentChangeString;
				$bdo["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Bank of the Philippine Islands
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=234');
	$int = 0;
	$bpi = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $bpi["marketCapitalization"] = $tableStringArray[4];
		  $bpi["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $bpi["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$bpi["percentChange"] = '-'.$percentChangeString;
				$bpi["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$bpi["percentChange"] = $percentChangeString;
				$bpi["volume"] = $tableStringArray[31];
		  }
		}
	}
	//DMCI Holdings, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=188');
	$int = 0;
	$dmc = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $dmc["marketCapitalization"] = $tableStringArray[4];
		  $dmc["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $dmc["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$dmc["percentChange"] = '-'.$percentChangeString;
				$dmc["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$dmc["percentChange"] = $percentChangeString;
				$dmc["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Energy Development Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=603');
	$int = 0;
	$edc = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $edc["marketCapitalization"] = $tableStringArray[4];
		  $edc["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $edc["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$edc["percentChange"] = '-'.$percentChangeString;
				$edc["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$edc["percentChange"] = $percentChangeString;
				$edc["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Emperador Inc.
	/*$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=632');
	$int = 0;
	$emp = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $emp["marketCapitalization"] = $tableStringArray[4];
		  $emp["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $emp["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$emp["percentChange"] = '-'.$percentChangeString;
				$emp["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$emp["percentChange"] = $percentChangeString;
				$emp["volume"] = $tableStringArray[31];
		  }
		}
	}*/
	//First Gen Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=600');
	$int = 0;
	$fgen = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $fgen["marketCapitalization"] = $tableStringArray[4];
		  $fgen["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $fgen["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$fgen["percentChange"] = '-'.$percentChangeString;
				$fgen["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$fgen["percentChange"] = $percentChangeString;
				$fgen["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Globe Telecom, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=69');
	$int = 0;
	$glo = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $glo["marketCapitalization"] = $tableStringArray[4];
		  $glo["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $glo["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$glo["percentChange"] = '-'.$percentChangeString;
				$glo["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$glo["percentChange"] = $percentChangeString;
				$glo["volume"] = $tableStringArray[31];
		  }
		}
	}
	//GT Capital Holdings, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=633');
	$int = 0;
	$gtcap = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $gtcap["marketCapitalization"] = $tableStringArray[4];
		  $gtcap["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $gtcap["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$gtcap["percentChange"] = '-'.$percentChangeString;
				$gtcap["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$gtcap["percentChange"] = $percentChangeString;
				$gtcap["volume"] = $tableStringArray[31];
		  }
		}
	}
	//International Container Terminal Services, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=83');
	$int = 0;
	$ict = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ict["marketCapitalization"] = $tableStringArray[4];
		  $ict["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ict["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ict["percentChange"] = '-'.$percentChangeString;
				$ict["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ict["percentChange"] = $percentChangeString;
				$ict["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Jollibee Foods Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=86');
	$int = 0;
	$jfc = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $jfc["marketCapitalization"] = $tableStringArray[4];
		  $jfc["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $jfc["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$jfc["percentChange"] = '-'.$percentChangeString;
				$jfc["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$jfc["percentChange"] = $percentChangeString;
				$jfc["volume"] = $tableStringArray[31];
		  }
		}
	}
	//JG Summit Holdings, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=210');
	$int = 0;
	$jgs = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $jgs["marketCapitalization"] = $tableStringArray[4];
		  $jgs["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $jgs["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$jgs["percentChange"] = '-'.$percentChangeString;
				$jgs["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$jgs["percentChange"] = $percentChangeString;
				$jgs["volume"] = $tableStringArray[31];
		  }
		}
	}
	//LT Group, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=12');
	$int = 0;
	$ltg = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ltg["marketCapitalization"] = $tableStringArray[4];
		  $ltg["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $ltg["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ltg["percentChange"] = '-'.$percentChangeString;
				$ltg["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$ltg["percentChange"] = $percentChangeString;
				$ltg["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Metropolitan Bank and Trust Company
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=128');
	$int = 0;
	$mbt = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $mbt["marketCapitalization"] = $tableStringArray[4];
		  $mbt["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $mbt["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$mbt["percentChange"] = '-'.$percentChangeString;
				$mbt["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$mbt["percentChange"] = $percentChangeString;
				$mbt["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Megaworld Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=127');
	$int = 0;
	$meg = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $meg["marketCapitalization"] = $tableStringArray[4];
		  $meg["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $meg["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$meg["percentChange"] = '-'.$percentChangeString;
				$meg["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$meg["percentChange"] = $percentChangeString;
				$meg["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Manila Electric Company
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=118');
	$int = 0;
	$mer = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $mer["marketCapitalization"] = $tableStringArray[4];
		  $mer["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $mer["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$mer["percentChange"] = '-'.$percentChangeString;
				$mer["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$meg["percentChange"] = $percentChangeString;
				$meg["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Metro Pacific Investments Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=604');
	$int = 0;
	$mpi = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $mpi["marketCapitalization"] = $tableStringArray[4];
		  $mpi["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $mpi["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$mpi["percentChange"] = '-'.$percentChangeString;
				$mpi["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$mpi["percentChange"] = $percentChangeString;
				$mpi["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Petron Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=136');
	$int = 0;
	$pcor = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $pcor["marketCapitalization"] = $tableStringArray[4];
		  $pcor["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $pcor["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$pcor["percentChange"] = '-'.$percentChangeString;
				$pcor["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$pcor["percentChange"] = $percentChangeString;
				$pcor["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Puregold Price Club, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=629');
	$int = 0;
	$pgold = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $pgold["marketCapitalization"] = $tableStringArray[4];
		  $pgold["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $pgold["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$pgold["percentChange"] = '-'.$percentChangeString;
				$pgold["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$pgold["percentChange"] = $percentChangeString;
				$pgold["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Robinsons Land Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=195');
	$int = 0;
	$rlc = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $rlc["marketCapitalization"] = $tableStringArray[4];
		  $rlc["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $rlc["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$rlc["percentChange"] = '-'.$percentChangeString;
				$rlc["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$rlc["percentChange"] = $percentChangeString;
				$rlc["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Semirara Mining and Power Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=157');
	$int = 0;
	$scc = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $scc["marketCapitalization"] = $tableStringArray[4];
		  $scc["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $scc["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$scc["percentChange"] = '-'.$percentChangeString;
				$scc["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$scc["percentChange"] = $percentChangeString;
				$scc["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Security Bank Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=32');
	$int = 0;
	$secb = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $secb["marketCapitalization"] = $tableStringArray[4];
		  $secb["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $secb["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$secb["percentChange"] = '-'.$percentChangeString;
				$secb["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$secb["percentChange"] = $percentChangeString;
				$secb["volume"] = $tableStringArray[31];
		  }
		}
	}
	//SM Investments Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=599');
	$int = 0;
	$sm = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $sm["marketCapitalization"] = $tableStringArray[4];
		  $sm["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $sm["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$sm["percentChange"] = '-'.$percentChangeString;
				$sm["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$sm["percentChange"] = $percentChangeString;
				$sm["volume"] = $tableStringArray[31];
		  }
		}
	}
	//San Miguel Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=154');
	$int = 0;
	$smc = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $smc["marketCapitalization"] = $tableStringArray[4];
		  $smc["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $smc["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$smc["percentChange"] = '-'.$percentChangeString;
				$smc["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$smc["percentChange"] = $percentChangeString;
				$smc["volume"] = $tableStringArray[31];
		  }
		}
	}
	//SM Prime Holdings, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=112');
	$int = 0;
	$smph = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $smph["marketCapitalization"] = $tableStringArray[4];
		  $smph["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $smph["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$smph["percentChange"] = '-'.$percentChangeString;
				$smph["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$smph["percentChange"] = $percentChangeString;
				$smph["volume"] = $tableStringArray[31];
		  }
		}
	}
	//PLDT, Inc.
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=6');
	$int = 0;
	$tel = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $tel["marketCapitalization"] = $tableStringArray[4];
		  $tel["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $tel["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$tel["percentChange"] = '-'.$percentChangeString;
				$tel["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$tel["percentChange"] = $percentChangeString;
				$tel["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Universal Robina Corporation
	$html = file_get_html('http://edge.pse.com.ph/companyPage/stockData.do?cmpy_id=124');
	$int = 0;
	$urc = array(
		"marketCapitalization" => "",
		"outstandingShares" => "",
		"price" => "",
		"percentChange" => "",
		"volume" => "",
	);
	foreach($html->find('table[class=view]') as $table) {
		if($int == 0){
		  $tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $urc["marketCapitalization"] = $tableStringArray[4];
		  $urc["outstandingShares"] = $tableStringArray[10];
		  $int = 1;
		} else if ($int == 1) {
			$tableString = $table->plaintext;
		  $tableString = trim($tableString);
		  $tableString = preg_replace('/\s+/', ' ', $tableString);
		  $tableStringArray = explode(' ', $tableString);
		  $urc["price"] = $tableStringArray[3];
		  if ($tableStringArray[18] == '(') {
				$percentChangeString = str_replace('%', '', $tableStringArray[19]);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$urc["percentChange"] = '-'.$percentChangeString;
				$urc["volume"] = $tableStringArray[32];
		  }
		  else {
				$percentChangeString = str_replace('(', '', $tableStringArray[18]);
				$percentChangeString = str_replace('%', '', $percentChangeString);
				$percentChangeString = str_replace(')', '', $percentChangeString);
				$urc["percentChange"] = $percentChangeString;
				$urc["volume"] = $tableStringArray[31];
		  }
		}
	}
	//Philippine Stock Exchange Index
	$html = file_get_html('http://edge.pse.com.ph/index/form.do');
	$int = 0;
	$psei = array(
		"value" => "",
		"change" => "",
		"percentChange" => "",
	);
	foreach($html->find('div[id=index]') as $index) {
		$indexString = $index->plaintext;
		$indexString = trim($indexString);
		$indexString = preg_replace('/\s+/', ' ', $indexString);
		$indexStringArray = explode(' ', $indexString);
		$psei["value"] = $indexStringArray[5];
		$psei["change"] = $indexStringArray[6];
		$psei["percentChange"] = $indexStringArray[7];
	}
?>
