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
	<!-- FILL IN THE CODE BELOW TO ADD A JOB
	<div class="job">
			<div><h2 class="JOBtitles">TITLE HERE</h2></div>
			<div><h4 class="Discription">DESCRIPTION HERE</h4></div>
				<div><img class="JOBimg" src ="IMAGE LINK HERE" width="50" height="50"
				alt="image not located"></div>
				<div ><img class="arrow" src="client/images/arrow.png"></div>
			<div class="ns FOR PERSONAL, s FOR BUSINESS">Personal/Business</div> 
		-->
		<link href="client/css/index.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">

		<?php
				foreach($sponsoredEmployer as $se){
					echo '<div class="job">
							<div class="left">
								<img class="JOBimg" src ="client/images/profpics/' . $se -> Picture . '" alt="image not located">
							</div>
							<div class="middle">
								<span class="s" class="s-space" >Sponsored</span><br>
								<a class="JOBtitles" href="employer.php?e=' . $se -> employerId . '">' . $se -> employerName . '</a><br>
								<b class="Discription">' . $se -> employerDescription . '</b><br>	
								<span class="s" class="s-space" >Business</span>							
							</div>
							<div class="right">
								<img class="arrow" src="client/images/arrow.png">
							</div>
						</div>
					';
				}

				foreach($employers as $e){
					echo '<div class="job">
							<div class="left">
								<img class="JOBimg" src ="client/images/profpics/' . $e -> Picture . '" alt="image not located">
							</div>
							<div class="middle">
								<a class="JOBtitles" href="employer.php?e=' . $e -> employerId . '">' . $e -> employerName . '</a><br>
								<b class="Discription">' . $e -> employerDescription . '</b><br>
								<span class="s" class="s-space" >Business</span>
							</div>
							<div class="right">
								<img class="arrow" src="client/images/arrow.png">
							</div>
						</div>
					';
				}

			?>
	<?php require('_includes/footer.php');?>	
</body>