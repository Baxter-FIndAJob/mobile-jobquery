<?php

// DATA MODEL

	// load our library of functions
	require('server/jobquery_db.php');

	// load homepage data
	extract(loadHomepageData());

// UI

	// start the web page
	require('_includes/header.php');

?>
<body>
	<div class="sticky_header">
		<h1 class="title">Company</h1>
		<img class="glass" src="client/images/glasss.png">
		<div class="breadcrumb_menu">
			<span class="text">McDonalds</span>
			<img class="img" src="client/images/downarrow.png" />
		</div>
	</div>

		<div class="job">
			<div class="left">
				<img class="JOBimg" src ="https://s3.amazonaws.com/elmenusV3/Photos/Normal/fbuhcacr.jpg" alt="image not located">
			</div>

			<div class="middle">
				<div class="JOBtitles">Frycook</div>
				<div class="Discription">Makes the French Fries</div>
				<div class="location">Portland</div>
				<span class="s" class="s-space" >Business</span>
			</div>

			<div class="right">
				<img class="arrow" src="client/images/arrow.png">
		</div>
	</div>
	<?php require('_includes/footer.php');?>
</body>