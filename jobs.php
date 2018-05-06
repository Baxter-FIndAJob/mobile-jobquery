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
				foreach($sponsoredJob as $sj){
					echo '<div class="job">
							<div class="middle">
								<span class="s" class="s-space" >Sponsored</span><br>
								<a class="JOBtitles" href="job.php?j=' . $sj -> jobId . '">' . $sj -> jobTitle . '</a><br>
								<b class="Discription">' . $sj -> jobDescription . '</b><br>	
								<span class="s" class="s-space" >Business</span>							
							</div>
							<div class="right">
								<img class="arrow" src="client/images/arrow.png">
							</div>
						</div>
					';
				}

				foreach($jobs as $j){
					echo '<div class="job" href="job.php?j=' . $j -> jobId . '">
							<div class="middle">
								<a class="JOBtitles" href="job.php?j=' . $j -> jobId . '">' . $j -> jobTitle . '</a><br>
								<b class="Discription">' . $j -> jobDescription . '</b><br>
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