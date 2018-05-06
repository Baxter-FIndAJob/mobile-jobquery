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
	<div class="sticky_header">
		<h1 class="title">Job Listing</h1>
		<div class="breadcrumb_menu">
			<span class="text">Fry Cook</span>
			<img class="img" src="client/images/downarrow.png" />
		</div>
	</div>

	<div>
		<img class="POSTimg" src ="https://s3.amazonaws.com/elmenusV3/Photos/Normal/fbuhcacr.jpg" alt="image not located">
		<div class="POSTjobtitle">Fry Cook</div>

		<div class="POSTlocation">Portland ME</div>
		<div class="POSTwage">$10.01/hr</div>

		<div class="POSTdisc">
			<p>Lorem ipsum dolor sit amet, nulla moderatius eu eos, te nam quis exerci definiebas. In erant affert docendi pri. In habeo iisque mentitum eam, id vim ignota similique, an duo feugiat nostrum suscipit. In admodum minimum legendos mea, est te ipsum appellantur, pro at nihil mucius fierent.</p>

<p>Ei quo omittam convenire definiebas, duo possit nemore an. Pro atqui libris oporteat at, mel porro dicant intellegebat eu. Pri ea sint referrentur, cibo regione an ius, eu tibique intellegam vel. Modo idque singulis ius an, ad lobortis moderatius est. Dicat dolore inermis in his, ea ius option feugait postulant.</p>

<p>Sed id commodo aeterno luptatum. Tota molestiae suscipiantur ei mel. Et exerci soluta sed. At iusto posidonium disputationi vel, errem scriptorem cotidieque pro et. Dico laudem molestie pri eu, nam eirmod percipit similique at.</p>

<p>Eum no dolore lucilius repudiare, elit vocibus cum at, cu dicit soleat est. Cu delenit vocibus honestatis eam, hinc iudicabit democritum vix ne. Ad legere equidem mei, tempor consequuntur mei an, propriae expetenda assueverit at mea. Mea aliquam tibique complectitur in, odio repudiandae has ei. Vide labore euripidis duo in, an est suscipit epicurei delectus.</p>
</div>
				
			
     </div>	

	<?php require('_includes/footer.php');?>
</body>