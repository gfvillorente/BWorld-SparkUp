<?php include 'simple_html_dom.php';?>
<?php include 'testScrape.php' ?>	
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<head>
		<title>Stock Market - Sparktionary</title>
		<meta name="description" content="Our interactive guide to the stock market">
		<meta name="author" content="SparkUp">
		<meta name="date" content="2017-04-24" scheme="YYYY-MM-DD">
		<link rel="publisher" href="https://www.facebook.com/SparkUpPH/">
		<meta name="robots" content="index,follow">
		<meta name="Googlebot" content="index,follow">
		<meta name="Googlebot-Mobile" content="index,follow">
		<meta name="keywords" content="Philippine stock exchange, stock market, listed companies, stocks, blue chip">
		<meta property="fb:app_id" content="972395896226367">
		<meta property="fb:pages" content="https://www.facebook.com/SparkUpPH/"> 
		<meta property="og:type" content="article"> 
		<meta property="og:url" content="http://sparkup.ph/sparktionary/stock-market/"> 
		<meta property="og:title" content="Stock Market - Sparktionary">
		<meta property="og:description" content="Our interactive guide to the stock market"> 
		<meta property="og:image" content="http://sparkup.ph/sparktionary/stock-market/img/Stock-Market-Cover.jpg">
		<meta property="og:image:type" content="image/jpg">
		<meta property="og:image:width" content="4272">
		<meta property="og:image:height" content="2848">
		<meta property="article:author" content="https://www.facebook.com/SparkUpPH/">
		<meta property="article:published_time" content="2017-04-24T14:00:00+08:00">
		<meta property="article:publisher" content="https://www.facebook.com/SparkUpPH/">
		<meta property="article:tag" content="Philippine stock exchange, stock market, listed companies, stocks, blue chip">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@sparkupph">
		<meta name="twitter:creator" content="@sparkupph">
		<meta name="twitter:title" content="Stock Market - Sparktionary">
		<meta name="twitter:description" content="Our interactive guide to the stock market">
		<meta name="twitter:image" content="http://sparkup.ph/sparktionary/stock-market/img/Stock-Market-Cover.jpg">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
		<meta name="HandheldFriendly" content="true">
		<link href="./css/component.css" rel="stylesheet" type="text/css">
		<link href="./css/style.css" rel="stylesheet" type="text/css">
		<link href="./img/SparkUp AppIcon 180.png" rel="apple-touch-icon">
		<link href="./img/favicon.ico" rel="icon">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://d3js.org/d3.v4.min.js"></script>
		<script src="./js/d3-legend.min.js"></script>		
		<style>
			* {
				box-sizing: inherit;
			}
			h1 {
				text-align: center;
			}
			svg {
				margin:auto;
				display:block;
			}

			.circle-overlay {
				font-size: 16px;
				border-radius: 50%;
				position: absolute;
				overflow: hidden;
				/*it's buggy with the foreignObject background right now*/
				/*background-color: rgba(255,255,255,0.5);*/
			}
			.circle-overlay__inner {
				text-align: center;
				width: 100%;
				height: 100%;
			}

			.hidden {
				display: none;
			}
			.node-icon--faded {
				opacity: 0.5;
			}
			.legend-size circle {
				fill: rgb(31, 119, 180);
			}
			.legend-size, .legend-color {
				display: none;
			}
			h2.circle-overlay__title {
				font-family: 'Raleway-ExtraBold';
				color: white;
				text-shadow: 1px 1px black;
				margin: 0px;
			}
			p.circle-overlay__body {
				font-size: 1em;
				color: white;
				line-height: 1.2em;
				text-shadow: 1px 1px black;
				display: inline-block;
				vertical-align: middle;
				margin: 0px;
			}
			p.circle-overlay__body a{
				color: skyblue;
				text-decoration: none;
				font-family: 'OpenSans-SemiBold';
			}
			div.circle-overlay__inner {
				display: flex;
				justify-content: center;
				flex-direction: column;
			}
		</style>
	</head>
	<body  class="cbp-spmenu-push">
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=972395896226367";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<form id="searchFromMenu" action="#">
				<input id="searchTextFromMenu" type="search" name="search" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search'">
				<button>
					<img id="searchButtonFromMenu" src="./img/Search Button.png" onclick="this.src='./img/Search Button Active.png'" onmouseover="this.src='./img/Search Button Active.png'" onmouseout="this.src='./img/Search Button.png'">
				</button>
			</form>
			<a id="sparktionaryFromMenu" href="#" onmouseover="activateSparktionary()" onmouseout="deactivateSparktionary()"><img id="sparktionaryImageFromMenu" src="./img/Sparktionary Button.png"><span class="menuItem">SPARKTIONARY</span></a>
			<a id="communityFromMenu"href="#" onmouseover="activateCommunity()" onmouseout="deactivateCommunity()"><img id="communityImageFromMenu" src="./img/Community Button.png"><span class="menuItem">COMMUNITY</span></a>
			<footer>
				<h6>FOLLOW US ON</h6>
				<div id="socialMediaLinks">
					<a href="https://www.facebook.com/SparkUpPH/"><img src="./img/Facebook Logo.svg"></a>
					<a href="https://twitter.com/SparkUpPH"><img src="./img/Twitter Logo.svg"></a>
					<a href="https://www.instagram.com/SparkUpPH/"><img src="./img/Instagram Logo.svg"></a>
					<a href="https://www.snapchat.com/add/SparkUpPh"><img src="./img/Snapchat Logo.svg"></a>
				</div>
			</footer>
		</nav>
		<div class="container">
			<header>
				<img id="logo" src="img/SparkUp%20Logo.png">
			</header>
			<a id="signin" href="#" onclick="signin()">SIGN IN</a>
			<a id="menu" href="#">&nbsp;</a>
			<a id="community" href="#">&nbsp;</a>
			<a id="sparktionary" href="#">&nbsp;</a>
			<form id="search" action="#">
				<input id="searchText" type="search" name="search" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search'">
				<button>
					<img id="searchButton" src="./img/Search Button.png" onclick="this.src='./img/Search Button Active.png'" onmouseover="this.src='./img/Search Button Active.png'" onmouseout="this.src='./img/Search Button.png'">
				</button>
			</form>
			<main>
				<div id="content">
					<script>
						var viewWidth = $(window).width();
						var viewHeight = $(window).height();
					</script>
					<svg id="bubble-chart" width="1024" height="1024" font-family="OpenSans" font-size="10" text-anchor="middle"></svg>
					<script>
						var bubbleChart = document.getElementById("bubble-chart");
						bubbleChart.setAttribute("width", viewWidth);
						bubbleChart.setAttribute("height", viewHeight);
						
					// Based loosely from this D3 bubble graph https://bl.ocks.org/mbostock/4063269
						// And this Forced directed diagram https://bl.ocks.org/mbostock/4062045
						/*eslint-disable indent*/
						let data = [{
							cat: 'Main', name: 'Stock Market', value: 3000000000000,
							icon: 'img/StockMarket.png',
							desc: `
								A place where stocks are bought and sold. Like any market, the price you pay or get depends on the balance of demand and supply for the commodity.
							`
						}, {
							cat: 'Main', name: 'Stock', value: 1000000000000,
							icon: 'img/Stock.png',
							desc: `
								A stock is a unit of ownership in a company. The number of stocks you hold will determine how big a share of the company you own. Owners of stocks are therefore called stockholders or shareholders. A stock has a price, which is determined in what is called a stock market.
							`
						}, {
							cat: 'Main', name: 'Brokerage Firm', value: 400000000000,
							icon: 'img/BrokerageFirm.png',
							desc: `
								A company that trades at the stock market in your behalf. The brokerage takes your order and executes it. Even if you trade online, PSE rules require that you sign up with a brokerage firm, and course your buy or sell orders through the broker's online platform.
							`
						}, {
							cat: 'Main', name: 'Volume', value: 400000000000,
							icon: 'img/Volume.png',
							desc: `
								This describes how many shares in a company is traded (i.e., bought or sold)
							`
						}, {
							cat: 'Main', name: 'Percent Change', value: 800000000000,
							icon: 'img/PercentChange.png',
							desc: `
								This represents by how much the price of a stock changes from the previous day
							`
						}, {
							cat: 'Main', name: 'Dividend', value: 200000000000,
							icon: 'img/Dividend.png',
							desc: `
								Besides benefiting from an increase in the price at which you bought a stock, an investor can partake of the profit it makes at least once a year if the company allows and sets a payout policy.
							`
						}, {
							cat: 'Main', name: 'Portfolio', value: 200000000000,
							icon: 'img/Portfolio.png',
							desc: `
								This refers to your entire holding of stocks, which may include only one or several companies, although most brokers advise that you own stocks from several companies to diversify your holdings, thus insuring you from the price of any one of those stocks going south.
							`
						}, {
							cat: 'Main', name: 'Market Capitalization', value: 500000000000,
							icon: 'img/MarketCapitalization.png',
							desc: `
								A measure of how investors value any publicly-traded company, or the entire market for that matter. The market cap is the result of multiplying the number of shares outstanding in, and the current price of, a company's stock.
							`
						}, {
							cat: 'Main', name: 'Outstanding Shares', value: 500000000000,
							icon: 'img/OutstandingShares.png',
							desc: `
								This is the number of shares in a company
							`
						}, {
							cat: 'Blue Orange', name: 'Ayala Corporation', value: <?php echo str_replace(',', '', $ac["marketCapitalization"]); ?>,
							icon: 'img/Ayala_Logo.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">AC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $ac["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $ac["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $ac["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($ac["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($ac["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $ac["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $ac["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Red Black', name: 'Aboitiz Equity Ventures, Inc.', value: <?php echo str_replace(',', '', $aev["marketCapitalization"]); ?>,
							icon: 'img/Aboitiz-Equity-Ventures.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">AEV<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $aev["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $aev["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $aev["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($aev["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($aev["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $aev["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $aev["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						},  {
							cat: 'Plain', name: 'Alliance Global Group, Inc.', value: <?php echo str_replace(',', '', $agi["marketCapitalization"]); ?>,
							icon: 'img/alliance-global.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">AGI<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $agi["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $agi["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $agi["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($agi["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($agi["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $agi["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $agi["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Green Gray', name: 'Ayala Land, Inc.', value: <?php echo str_replace(',', '', $ali["marketCapitalization"]); ?>,
							icon: 'img/Ayala_Land_logo.svg',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">ALI<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $ali["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $ali["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $ali["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($ali["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($ali["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $ali["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $ali["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Light Blue', name: 'Aboitiz Power Corporation', value: <?php echo str_replace(',', '', $ap["marketCapitalization"]); ?>,
							icon: 'img/AboitizPower.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">AP<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $ap["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $ap["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $ap["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($ap["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($ap["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $ap["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $ap["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Yellow', name: 'BDO Unibank, Inc.', value: <?php echo str_replace(',', '', $bdo["marketCapitalization"]); ?>,
							icon: 'img/BDO_Unibank.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">BDO<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $bdo["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $bdo["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $bdo["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($bdo["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($bdo["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $bdo["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $bdo["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Gold Maroon', name: 'Bank of the Philippine Islands', value: <?php echo str_replace(',', '', $bpi["marketCapitalization"]); ?>,
							icon: 'img/Bank_of_the_Philippine_Islands_logo.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">BPI<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $bpi["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $bpi["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $bpi["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($bpi["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($bpi["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $bpi["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $bpi["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue White', name: 'DMCI Holdings, Inc.', value: <?php echo str_replace(',', '', $dmc["marketCapitalization"]); ?>,
							icon: 'img/dmci.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">DMC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $dmc["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $dmc["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $dmc["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($dmc["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($dmc["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $dmc["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $dmc["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Orange Gray', name: 'Energy Development Corporation', value: <?php echo str_replace(',', '', $edc["marketCapitalization"]); ?>,
							icon: 'img/edclogo.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">EDC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $edc["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $edc["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $edc["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($edc["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($edc["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $edc["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $edc["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						},/* {
							cat: 'Yellow Red', name: 'Emperador Inc.', value: <?php echo str_replace(',', '', $emp["marketCapitalization"]); ?>,
							icon: 'img/Emperador.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">EMP<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $emp["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $emp["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $emp["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($emp["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($emp["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $emp["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $emp["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						},*/ {
							cat: 'Green Blue', name: 'First Gen Corporation', value: <?php echo str_replace(',', '', $fgen["marketCapitalization"]); ?>,
							icon: 'img/firstgen_logo.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">FGEN<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $fgen["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $fgen["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $fgen["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($fgen["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($fgen["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $fgen["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $fgen["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue White', name: 'Globe Telecom, Inc.', value: <?php echo str_replace(',', '', $glo["marketCapitalization"]); ?>,
							icon: 'img/Globe.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">GLO<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $glo["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $glo["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $glo["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($glo["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($glo["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $glo["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $glo["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Dark Blue', name: 'GT Capital Holdings, Inc.', value: <?php echo str_replace(',', '', $gtcap["marketCapitalization"]); ?>,
							icon: 'img/gt-capital-holdings-inc.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">GTCAP<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $gtcap["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $gtcap["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $gtcap["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($gtcap["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($gtcap["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $gtcap["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $gtcap["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Orange Black', name: 'International Container Terminal Services, Inc.', value: <?php echo str_replace(',', '', $ict["marketCapitalization"]); ?>,
							icon: './img/International-Container-Terminal-Services.jpg',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">ICT<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $ict["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $ict["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $ict["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($ict["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($ict["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $ict["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $ict["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Red White', name: 'Jollibee Foods Corporation', value: <?php echo str_replace(',', '', $jfc["marketCapitalization"]); ?>,
							icon: 'img/Jollibee.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">JFC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $jfc["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $jfc["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $jfc["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($jfc["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($jfc["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $jfc["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $jfc["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Green', name: 'JG Summit Holdings, Inc.', value: <?php echo str_replace(',', '', $jgs["marketCapitalization"]); ?>,
							icon: 'img/JGSUMMITLOGO.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">JGS<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $jgs["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $jgs["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $jgs["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($jgs["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($jgs["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $jgs["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $jgs["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Maroon Gray', name: 'LT Group, Inc.', value: <?php echo str_replace(',', '', $ltg["marketCapitalization"]); ?>,
							icon: 'img/LTGroup.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">LTG<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $ltg["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $ltg["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $ltg["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($ltg["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($ltg["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $ltg["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $ltg["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Light Blue', name: 'Metropolitan Bank and Trust Company', value: <?php echo str_replace(',', '', $mbt["marketCapitalization"]); ?>,
							icon: 'img/Metrobank.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">MBT<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $mbt["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $mbt["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $mbt["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($mbt["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($mbt["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $mbt["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $mbt["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue', name: 'Megaworld Corporation', value: <?php echo str_replace(',', '', $meg["marketCapitalization"]); ?>,
							icon: 'img/MEGAWORLD_CORPORATION.jpg',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">MEG<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $meg["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $meg["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $meg["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($meg["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($meg["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $meg["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $meg["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Orange Black', name: 'Manila Electric Company', value: <?php echo str_replace(',', '', $mer["marketCapitalization"]); ?>,
							icon: 'img/Meralco.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">MER<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $mer["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $mer["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $mer["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($mer["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($mer["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $mer["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $mer["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Gray', name: 'Metro Pacific Investments Corporation', value: <?php echo str_replace(',', '', $mpi["marketCapitalization"]); ?>,
							icon: 'img/Metro-Pacific-Investments-Logo.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">MPI<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $mpi["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $mpi["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $mpi["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($mpi["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($mpi["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $mpi["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $mpi["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Red', name: 'Petron Corporation', value: <?php echo str_replace(',', '', $pcor["marketCapitalization"]); ?>,
							icon: 'img/Petron.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">PCOR<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $pcor["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $pcor["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $pcor["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($pcor["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($pcor["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $pcor["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $pcor["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Green Gold', name: 'Puregold Price Club, Inc.', value: <?php echo str_replace(',', '', $pgold["marketCapitalization"]); ?>,
							icon: 'img/puregold-logo-5.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">PGOLD<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $pgold["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $pgold["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $pgold["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($pgold["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($pgold["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $pgold["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $pgold["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Red', name: 'Robinsons Land Corporation', value: <?php echo str_replace(',', '', $rlc["marketCapitalization"]); ?>,
							icon: 'img/robinsonsland.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">RLC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $rlc["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $rlc["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $rlc["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($rlc["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($rlc["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $rlc["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $rlc["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Black Orange', name: 'Semirara Mining and Power Corporation', value: <?php echo str_replace(',', '', $scc["marketCapitalization"]); ?>,
							icon: 'img/SCC.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">SCC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $scc["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $scc["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $scc["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($scc["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($scc["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $scc["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $scc["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Green', name: 'Security Bank Corporation', value: <?php echo str_replace(',', '', $secb["marketCapitalization"]); ?>,
							icon: 'img/SecurityBank.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">SECB<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $secb["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $secb["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $secb["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($secb["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($secb["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $secb["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $secb["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue', name: 'SM Investments Corporation', value: <?php echo str_replace(',', '', $sm["marketCapitalization"]); ?>,
							icon: 'img/SM-Investments-Corporation.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">SM<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $sm["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $sm["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $sm["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($sm["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($sm["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $sm["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $sm["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Yellow Red', name: 'San Miguel Corporation', value: <?php echo str_replace(',', '', $smc["marketCapitalization"]); ?>,
							icon: 'img/SanMiguelCorporation.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">SMC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $smc["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $smc["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $smc["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($smc["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($smc["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $smc["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $smc["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue', name: 'SM Prime Holdings', value: <?php echo str_replace(',', '', $smph["marketCapitalization"]); ?>,
							icon: 'img/SMPrime.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">SMPH<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $smph["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $smph["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $smph["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($smph["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($smph["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $smph["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $smph["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Gray Red', name: 'PLDT Inc.', value: <?php echo str_replace(',', '', $tel["marketCapitalization"]); ?>,
							icon: 'img/PLDT.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">TEL<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $tel["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $tel["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $tel["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($tel["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($tel["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $tel["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $tel["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Red', name: 'Universal Robina Corporation', value: <?php echo str_replace(',', '', $urc["marketCapitalization"]); ?>,
							icon: 'img/Universal_Robina.png',
							desc: `
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">URC<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $urc["marketCapitalization"]; ?><br><span style="color:lightgray;font-size:0.75em;">Market Capitalization</span></td>
									</tr>
									<tr>
										<td>&#x20b1;<?php echo $urc["price"]; ?><br><span style="color:lightgray;font-size:0.75em;">Price</span></td>
										<td><?php echo $urc["outstandingShares"]; ?><br><span style="color:lightgray;font-size:0.75em;">Outstanding Shares</span></td>
									</tr>
									<tr>
										<td><?php if ($urc["percentChange"] < 0) { echo '<span style="color:red">&#x25bc;</span>';}
															else if ($urc["percentChange"] > 0) { echo '<span style="color:limegreen">&#x25b2;</span>';}
															else { echo '<span style="color:yellow">&#x25b6;</span>';}
												?><?php echo $urc["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">% Change</span></td>
										<td><?php echo $urc["volume"]; ?><br><span style="color:lightgray;font-size:0.75em;">Volume</span></td>
									</tr>
								</table>
							`
						}, {
							cat: 'Blue Yellow', name: 'Philippine Stock Exchange', value: 1000000000000,
							icon: 'img/PSE.png',
							desc: `
								This is the local stock market, which is a company in its own right and whose shares are also traded. It operates as a self&ndash;regulatory organization that sets rules and standards on how the trading participants should behave.
							`
						}, {
							cat: 'Blue Yellow', name: 'Philippine Stock Exchange Index', value: 500000000000,
							icon: 'img/PSEI-Logo.png',
							desc: `
								A number that serves as a shorthand for how the market performed on any given day. In doing this, the index captures the combined movement in the prices of 30 stocks. 
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td width="40%">PSEi<br><span style="color:lightgray;font-size:0.75em;">Symbol</span></td>
										<td width="60%">&#x20b1;<?php echo $psei["value"]; ?><br><span style="color:lightgray;font-size:0.75em;">Value</span></td>
									</tr>
									<tr>
										<td><?php echo $psei["change"]; ?><br><span style="color:lightgray;font-size:0.75em;">Change</span></td>
										<td><?php echo $psei["percentChange"]; ?>%<br><span style="color:lightgray;font-size:0.75em;">Percent Change</span></td>
										
									</tr>
								</table>
							`
						}, {
							cat: 'Dark Blue', name: 'BusinessWorld', value: 100000000000,
							icon: 'img/bworld.png',
							desc: `
								The most reliable source of news about the stock market. <a href="http://www.bworldonline.com">www.bworldonline.com</a> 
							`
						}];
						/*eslint-enable indent*/
						/*global d3*/
						let svg = d3.select('#bubble-chart');
						let width = svg.property('clientWidth'); // get width in pixels
						let height = +svg.attr('height');
						let centerX = width * 0.5;
						let centerY = height * 0.5;
						let strength = 0.05;
						let focusedNode;
						console.log('width', width);

						let format = d3.format(',d');

						let scaleColor = d3.scaleOrdinal(d3.schemeCategory20);

						// use pack to calculate radius of the circle
						let pack = d3.pack()
							.size([width, height ])
							.padding(1.5);

						let forceCollide = d3.forceCollide(d => d.r + 1);

						// use the force
						let simulation = d3.forceSimulation()
							// .force('link', d3.forceLink().id(d => d.id))
							.force('charge', d3.forceManyBody())
							.force('collide', forceCollide)
							// .force('center', d3.forceCenter(centerX, centerY))
							.force('x', d3.forceX(centerX ).strength(strength))
							.force('y', d3.forceY(centerY ).strength(strength));

						// reduce number of circles on mobile screen due to slow computation
						if ('matchMedia' in window && window.matchMedia('(max-device-width: 767px)').matches) {
							data = data.filter(el => {
								return el.value >= 50;
							});
						}

						let root = d3.hierarchy({ children: data })
							.sum(d => d.value);

						// we use pack() to automatically calculate radius conveniently only
						// and get only the leaves
						let nodes = pack(root).leaves().map(node => {
							// console.log('node:', node.x, (node.x - centerX) * 2);
							const data = node.data;
							return {
								x: centerX + (node.x - centerX) * 3, // magnify start position to have transition to center movement
								y: centerY + (node.y - centerY) * 3,
								r: 0, // for tweening
								radius: node.r, //original radius
								id: data.cat + '.' + (data.name.replace(/\s/g, '-')),
								cat: data.cat,
								name: data.name,
								value: data.value,
								icon: data.icon,
								desc: data.desc,
							};
						});
						simulation.nodes(nodes).on('tick', ticked);

						svg.style('background-color', '#FFFFFF');
						let node = svg.selectAll('.node')
							.data(nodes)
							.enter().append('g')
							.attr('class', 'node')
							.call(d3.drag()
								.on('start', (d) => {
									if (!d3.event.active) { simulation.alphaTarget(0.2).restart(); }
									d.fx = d.x;
									d.fy = d.y;
								})
								.on('drag', (d) => {
									d.fx = d3.event.x;
									d.fy = d3.event.y;
								})
								.on('end', (d) => {
									if (!d3.event.active) { simulation.alphaTarget(0); }
									d.fx = null;
									d.fy = null;
								}));

						node.append('circle')
							.attr('id', d => d.id)
							.attr('r', 0)
							.style('fill', d => scaleColor(d.cat))
							.transition().duration(2000).ease(d3.easeElasticOut)
								.tween('circleIn', (d) => {
									let i = d3.interpolateNumber(0, d.radius);
									return (t) => {
										d.r = i(t);
										simulation.force('collide', forceCollide);
									};
								});

						node.append('clipPath')
							.attr('id', d => `clip-${d.id}`)
							.append('use')
							.attr('xlink:href', d => `#${d.id}`);

						// display text as circle icon
						node.filter(d => !String(d.icon).includes('img/'))
							.append('text')
							.classed('node-icon', true)
							.attr('clip-path', d => `url(#clip-${d.id})`)
							.selectAll('tspan')
							.data(d => d.icon.split(';'))
							.enter()
								.append('tspan')
								.attr('x', 0)
								.attr('y', (d, i, nodes) => (13 + (i - nodes.length / 2 - 0.5) * 10))
								.text(name => name);

						// display image as circle icon
						node.filter(d => String(d.icon).includes('img/'))
							.append('image')
							.classed('node-icon', true)
							.attr('clip-path', d => `url(#clip-${d.id})`)
							.attr('xlink:href', d => d.icon)
							.attr('x', d => -d.radius * 0.7)
							.attr('y', d => -d.radius * 0.7)
							.attr('height', d => d.radius * 2 * 0.7)
							.attr('width', d => d.radius * 2 * 0.7);

						node.append('title')
							.text(d => (d.cat + '::' + d.name + '\n' + format(d.value)));

						let legendOrdinal = d3.legendColor()
							.scale(scaleColor)
							.shape('circle');

						// legend 1
						svg.append('g')
							.classed('legend-color', true)
							.attr('text-anchor', 'start')
							.attr('transform', 'translate(20,30)')
							.style('font-size', '12px')
							.call(legendOrdinal);

						let sizeScale = d3.scaleOrdinal()
							.domain(['less use', 'more use'])
							.range([5, 10] );

						let legendSize = d3.legendSize()
							.scale(sizeScale)
							.shape('circle')
							.shapePadding(10)
							.labelAlign('end');

						// legend 2
						svg.append('g')
							.classed('legend-size', true)
							.attr('text-anchor', 'start')
							.attr('transform', 'translate(150, 25)')
							.style('font-size', '12px')
							.call(legendSize);


						
						let infoBox = node.append('foreignObject')
							.classed('circle-overlay hidden', true)
							.attr('x', -350 * 0.5 * 0.8)
							.attr('y', -350 * 0.5 * 0.8)
							.attr('height', 350 * 0.8)
							.attr('width', 350 * 0.8)
								.append('xhtml:div')
								.classed('circle-overlay__inner', true);

						infoBox.append('h2')
							.classed('circle-overlay__title', true)
							.text(d => d.name);

						infoBox.append('p')
							.classed('circle-overlay__body', true)
							.html(d => d.desc);


						node.on('click', (currentNode) => {
							d3.event.stopPropagation();
							console.log('currentNode', currentNode);
							let currentTarget = d3.event.currentTarget; // the <g> el

							if (currentNode === focusedNode) {
								// no focusedNode or same focused node is clicked
								return;
							}
							let lastNode = focusedNode;
							focusedNode = currentNode;

							simulation.alphaTarget(0.2).restart();
							// hide all circle-overlay
							d3.selectAll('.circle-overlay').classed('hidden', true);
							d3.selectAll('.node-icon').classed('node-icon--faded', false);

							// don't fix last node to center anymore
							if (lastNode) {
								lastNode.fx = null;
								lastNode.fy = null;
								node.filter((d, i) => i === lastNode.index)
									.transition().duration(2000).ease(d3.easePolyOut)
									.tween('circleOut', () => {
										let irl = d3.interpolateNumber(lastNode.r, lastNode.radius);
										return (t) => {
											lastNode.r = irl(t);
										};
									})
									.on('interrupt', () => {
										lastNode.r = lastNode.radius;
									});
							}

							// if (!d3.event.active) simulation.alphaTarget(0.5).restart();

							d3.transition().duration(2000).ease(d3.easePolyOut)
								.tween('moveIn', () => {
									console.log('tweenMoveIn', currentNode);
									let ix = d3.interpolateNumber(currentNode.x, centerX);
									let iy = d3.interpolateNumber(currentNode.y, centerY);
									let ir = d3.interpolateNumber(currentNode.r, centerY * 0.5);
									return function (t) {
										// console.log('i', ix(t), iy(t));
										currentNode.fx = ix(t);
										currentNode.fy = iy(t);
										currentNode.r = ir(t);
										simulation.force('collide', forceCollide);
									};
								})
								.on('end', () => {
									simulation.alphaTarget(0);
									let $currentGroup = d3.select(currentTarget);
									$currentGroup.select('.circle-overlay')
										.classed('hidden', false);
									$currentGroup.select('.node-icon')
										.classed('node-icon--faded', true);

								})
								.on('interrupt', () => {
									console.log('move interrupt', currentNode);
									currentNode.fx = null;
									currentNode.fy = null;
									simulation.alphaTarget(0);
								});

						});

						// blur
						d3.select(document).on('click', () => {
							let target = d3.event.target;
							// check if click on document but not on the circle overlay
							if (!target.closest('#circle-overlay') && focusedNode) {
								focusedNode.fx = null;
								focusedNode.fy = null;
								simulation.alphaTarget(0.2).restart();
								d3.transition().duration(2000).ease(d3.easePolyOut)
									.tween('moveOut', function () {
										console.log('tweenMoveOut', focusedNode);
										let ir = d3.interpolateNumber(focusedNode.r, focusedNode.radius);
										return function (t) {
											focusedNode.r = ir(t);
											simulation.force('collide', forceCollide);
										};
									})
									.on('end', () => {
										focusedNode = null;
										simulation.alphaTarget(0);
									})
									.on('interrupt', () => {
										simulation.alphaTarget(0);
									});

								// hide all circle-overlay
								d3.selectAll('.circle-overlay').classed('hidden', true);
								d3.selectAll('.node-icon').classed('node-icon--faded', false);
							}
						});

						function ticked() {
							node
								.attr('transform', d => `translate(${d.x},${d.y})`)
								.select('circle')
									.attr('r', d => d.r);
						}


					</script>
					<p class="credits">Visual art <a href="https://www.facebook.com/gfvillorente" target="_blank">Gabriel Fojas Villorente</a></p>
					<p class="credits">Words <a href="https://twitter.com/arnoldtenorio" target="_blank">Arnold S. Tenorio</a>, <a href="http://research.bworldonline.com/" target="_blank">BusinessWorld Research</a></p>
					<br>
					<div id="line"></div>
					<div id="footnote">
						<p>Companies featured here are the 30 members of the <a href="http://www.pse.com.ph/stockMarket/marketInfo-marketActivity.html?tab=1&indexName=PSEi" target="_blank">PSEi</a></p>
						<p>All data are scraped, in real&ndash;time, from <a href="http://edge.pse.com.ph/" target="_blank">edge.pse.com.ph</a></p>
					</div>
					<br>							
				</div>
				<div id="footer">
					<div id="two-columns">
						<img id="logo-footer" src="./img/SparkUp Logo Footer.png">
						<div id="details">
							<p><a href="./" class="details-label">About Us</a></p>
							<p>SparkUp is powered by <a class="details-shortcuts" href="http://www.bworldonline.com/">BusinessWorld Publishing Corporation</a></p>
							<br>
							<p><a href="#" class="details-label">Contact Us</a></p>
							<p>At <a class="details-shortcuts" href="https://www.google.com.ph/maps/place/Businessworld+Publishing+Corporation/@14.6248702,121.0323969,17z/data=!3m1!4b1!4m5!3m4!1s0x3397b7cbb34a9861:0xbaed799a5035c9ff!8m2!3d14.6248702!4d121.0345856?hl=en">95 Balete Drive Ext., New Manila, Quezon City, Metro Manila, Philippines 1112</a></p>
							<p>Call <a class="details-shortcuts" href="tel:+6325359901">+63 (2) 535-9901</a> local 407</p>
							<p>Email <a class="details-shortcuts" href="mailto:hello@sparkup.ph?Subject=Hello" target="_top">hello@sparkup.ph</a></p>
							<br>
						</div>
					</div>
					<h6 class="center-label" id="socials-label">FOLLOW US ON</h6>
					<div id="footer-socials">
						<a href="https://www.facebook.com/SparkUpPH/"><img src="./img/Facebook Logo.svg"></a>
						<a href="https://twitter.com/SparkUpPH"><img src="./img/Twitter Logo.svg"></a>
						<a href="https://www.instagram.com/SparkUpPH/"><img src="./img/Instagram Logo.svg"></a>
						<a href="https://www.snapchat.com/add/SparkUpPh"><img src="./img/Snapchat Logo.svg"></a>
					</div>
					<h6 class="center-label" id="copyright">&copy; <script>var d=new Date();var y=d.getFullYear();document.write(y);</script> All Rights Reserved</h6>
				</div>
			</main>
		</div>
		<script src="./js/classie.js"></script>
		<script src="./js/pushMenuLeft.js"></script>
		<script src="./js/facebook-login.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-40717316-4', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>