<?php
require_once 'core.php';

?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title><?php echo $gTitlePrefix; ?> Summer Retreat</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="<?php echo $gJQCSS; ?>" />
		<link rel="stylesheet" href="css/core.css" />
		<script type="text/javascript" src="<?php echo $gJQ; ?>"></script>
		<script type="text/javascript" src="<?php echo $gJQJS; ?>"></script>
	</head> 

	<body> 
		<div data-role="page">
			<div data-role="header" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="#day1">6/29</a></li>
						<li><a href="#day2">6/30</a></li>
						<li><a href="#day3">7/1</a></li>
					</ul>
				</div><!-- /navbar -->

			</div><!-- /header -->
		</div>

<!-- Start of second page: #p20120629-->
<div data-role="page" id="p20120629">

	<div data-role="header" data-position="fixed">
		<h1>Schedule</h1>
		<a href="2012-summer-retreat.php" data-icon="home" data-iconpos="notext"  title="Home"></a>
		<div data-role="navbar">
			<ul>
				<li><a href="#p20120629" class="ui-btn-active">6/29</a></li>
				<li><a href="#p20120630">6/30</a></li>
				<li><a href="#p20120701">7/1</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /header -->

	<div data-role="content">	
		<ul data-role="listview">
			<li>
				<p class="ui-li-aside">9:00pm</p>
				<h3 class="ui-li-heading">Sharing</h3>
				<p class="ui-li-desc">Lead by Caca</p>
			</li>
			<li>
				<p class="ui-li-aside">10:00pm</p>
				<h3 class="ui-li-heading">Dessert</h3>
				<p class="ui-li-desc">Prepared by Caca and Heather</p>
			</li>
		</ul>
	</div><!-- /content -->
	
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page p20120629-->
		

<!-- Start of page: #p20120630-->
<div data-role="page" id="p20120630">

	<div data-role="header" data-position="fixed">
		<h1>Schedule</h1>
		<a href="2012-summer-retreat.php" data-icon="home" data-iconpos="notext"  title="Home"></a>
		<div data-role="navbar">
			<ul>
				<li><a href="#p20120629">6/29</a></li>
				<li><a href="#p20120630" class="ui-btn-active">6/30</a></li>
				<li><a href="#p20120701">7/1</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /header -->

	<div data-role="content">	
		<ul data-role="listview">
			<li>
				<p class="ui-li-aside">8:00am</p>
				<h3 class="ui-li-heading">Get up</h3>
				<p class="ui-li-desc">Everyone</p>
			</li>
			<li>
				<a href="2012-summer-retreat-devotion.php#p20120630" rel="external">
				<p class="ui-li-aside">8:30am</p>
				<h3 class="ui-li-heading">Devotion</h3>
				<p class="ui-li-desc">Read your own's, or
				</p>
				<p class="ui-li-desc"> 
					touch to see today's devotion</p>
				</a>
			</li>
			<li>
				<p class="ui-li-aside">9:00am</p>
				<h3 class="ui-li-heading">Exercise</h3>
				<p class="ui-li-desc">Heather will lead us to do some exercise...</p>
			</li>
			<li>
				<p class="ui-li-aside">9:30am</p>
				<h3 class="ui-li-heading">Breakfast</h3>
				<p class="ui-li-desc">Prepared by Katie</p>
			</li>
			<li>
				<a href="2012-summer-retreat-songs.php#song-kleung" rel="external">
				<p class="ui-li-aside">10:30am</p>
				<h3 class="ui-li-heading">Singspiration</h3>
				<p class="ui-li-desc">Lead by Kennith</p>
				</a>
			</li>
			<li>
				<p class="ui-li-aside">11:00am</p>
				<h3 class="ui-li-heading">Topic</h3>
				<p class="ui-li-desc">Lead by Jason</p>
			</li>
			<li>
				<p class="ui-li-aside">11:45am</p>
				<h3 class="ui-li-heading">Lunch</h3>
				<p class="ui-li-desc">Prepared by Vivian & Cat</p>
			</li>
			<li>
				<p class="ui-li-aside">2:00pm</p>
				<h3 class="ui-li-heading">Activities</h3>
				<p class="ui-li-desc">Lead by Karen</p>
			</li>
			<li>
				<p class="ui-li-aside">6:00pm</p>
				<h3 class="ui-li-heading">HotPot -- GOOD!</h3>
				<p class="ui-li-desc">Prepared by everyone</p>
			</li>
			<li>
				<a href="2012-summer-retreat-songs.php#song-achen" rel="external">
					<p class="ui-li-aside">7:30pm</p>
					<h3 class="ui-li-heading">Singspiration</h3>
					<p class="ui-li-desc">Lead by Aron</p>
				</a>
			</li>
			<li>
				<a href="2012-summer-retreat-topics.php#alice" rel="external">
					<p class="ui-li-aside">8:00pm</p>
					<h3 class="ui-li-heading">Topic</h3>
					<p class="ui-li-desc">Lead by Alice</p>
				</a>
			</li>
			<li>
				<p class="ui-li-aside">9:00pm</p>
				<h3 class="ui-li-heading">Sharing</h3>
				<p class="ui-li-desc">Lead by Tim</p>
			</li>
			<li>
				<p class="ui-li-aside">10:00pm</p>
				<h3 class="ui-li-heading">Dessert</h3>
				<p class="ui-li-desc">Prepared by Heather</p>
			</li>
		</ul>
	</div><!-- /content -->
	
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page p20120630-->

<!-- Start of second page: #p20120701-->
<div data-role="page" id="p20120701">

	<div data-role="header" data-position="fixed">
		<h1>Schedule</h1>
		<a href="2012-summer-retreat.php" data-icon="home" data-iconpos="notext"  title="Home"></a>
		<div data-role="navbar">
			<ul>
				<li><a href="#p20120629">6/29</a></li>
				<li><a href="#p20120630">6/30</a></li>
				<li><a href="#p20120701" class="ui-btn-active">7/1</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /header -->

	<div data-role="content">	
		<ul data-role="listview">
			<li>
				<p class="ui-li-aside">8:00am</p>
				<h3 class="ui-li-heading">Get up</h3>
				<p class="ui-li-desc">Everyone</p>
			</li>
			<li>
				<a href="2012-summer-retreat-devotion.php#p20120701" rel="external">
				<p class="ui-li-aside">8:30am</p>
				<h3 class="ui-li-heading">Devotion</h3>
				<p class="ui-li-desc">Read your own, or 
				<p class="ui-li-desc">Touch to see today's devotion.</p>
				</a>
			</li>
			<li>
				<p class="ui-li-aside">9:00am</p>
				<h3 class="ui-li-heading">Exercise</h3>
				<p class="ui-li-desc">Gordon will lead us to do some exercise...</p>
			</li>
			<li>
				<p class="ui-li-aside">9:30am</p>
				<h3 class="ui-li-heading">Breakfast</h3>
				<p class="ui-li-desc">Prepared by Katie</p>
			</li>
			<li>
				<a href="2012-summer-retreat-songs.php#song-skwok" rel="external">
				<p class="ui-li-aside">10:30am</p>
				<h3 class="ui-li-heading">Singspiration</h3>
				<p class="ui-li-desc">Lead by Suki</p>
				</a>
			</li>
			<li>
				<a href="2012-summer-retreat-topics.php#cat" rel="external">
					<p class="ui-li-aside">11:00am</p>
					<h3 class="ui-li-heading">Topic</h3>
					<p class="ui-li-desc">Lead by Cat and Harold</p>
				</a>
			</li>
			<li>
				<p class="ui-li-aside">11:45am</p>
				<h3 class="ui-li-heading">Lunch</h3>
				<p class="ui-li-desc">Prepared by Suki and Cat</p>
				<p class="ui-li-desc">
					2012 Euro Cup Final – Tim will provide snacks.
				</p>
				<p class="ui-li-desc">
					(Steaks & Lobsters)
				</p>
				<p class="ui-li-desc">
					All Party clean up and leave by
					4.
				</p>
			</li>
		</ul>
	</div><!-- /content -->
	
	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page p20120701-->

	</body>
</html>
