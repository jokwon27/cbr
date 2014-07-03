<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!-- saved from url=(0053)http://www.filamentgroup.com/examples/menus/ipod.php# -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Filament Group Lab Example From Page from: jQuery Menu: Dropdown, iPod Drilldown, and Flyout styles with ARIA Support and ThemeRoller Ready</title>
    
    <link rel="shortcut icon" href="http://www.filamentgroup.com/images/favicon2.ico" type="image/x-icon">

    
    <!-- required scripts -->
    <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="fg.menu.js"></script>
    
    <!-- required styles -->
    <link type="text/css" href="fg.menu.css" media="screen" rel="stylesheet">
    <link type="text/css" href="ui.all.css" media="screen" rel="stylesheet">
    
    <!-- styles for this example page only -->

	
	<!-- style exceptions for IE 6 -->
	<!--[if IE]>
	<style type="text/css">
		.fg-menu-ipod .fg-menu li { width: 95%; }
		.fg-menu-ipod .ui-widget-content { border:0; }
	</style>
	<![endif]-->	
    
    <script type="text/javascript">    
    $(function(){
    	// BUTTONS
    	
    	
    	// MENUS    	
		$('#hierarchy').menu({
			content: $('#hierarchy').next().html(),
			crumbDefaultText: ' '
		});
		
		$('#hierarchybreadcrumb').menu({
			content: $('#hierarchybreadcrumb').next().html(),
			backLink: false
		});
    });
    </script>
    
    <!-- theme switcher button -->
    
	
</head>

<body>

<p id="menuLog">You chose: <span id="menuSelection"></span></p>

<a tabindex="0" href="http://www.filamentgroup.com/examples/menus/ipod.php#news-items" class="fg-button fg-button-icon-right ui-widget ui-corner-all ui-state-default" id="hierarchy"><span class="ui-icon ui-icon-triangle-1-s"></span>ipod-style menu w/ "back" link</a>
<div id="news-items" class="hidden">
<ul>
	<li><a href="select.html">Breaking News</a>
		<ul>
			<li><a href="select.html">Entertainment</a></li>
			<li><a href="select.html">Politics</a></li>
			<li><a href="select.html">A&amp;E</a></li>
			<li><a href="select.html">Sports</a>
				<ul>
					<li><a href="select.html">Baseball</a></li>
					<li><a href="select.html">Basketball</a></li>
					<li><a href="select.html">A really long label would wrap nicely as you can see</a></li>
					<li><a href="select.html">Swimming</a>
						<ul>
							<li><a href="select.html">High School</a></li>
							<li><a href="select.html">College</a></li>
							<li><a href="select.html">Professional</a>
								<ul>
									<li><a href="select.html">Mens Swimming</a>
										<ul>
											<li><a href="select.html">News</a></li>
											<li><a href="select.html">Events</a></li>
											<li><a href="select.html">Awards</a></li>
											<li><a href="select.html">Schedule</a></li>
											<li><a href="select.html">Team Members</a></li>
											<li><a href="select.html">Fan Site</a></li>
										</ul>
									</li>
									<li><a href="select.html">Womens Swimming</a>
										<ul>
											<li><a href="select.html">News</a></li>
											<li><a href="select.html">Events</a></li>
											<li><a href="select.html">Awards</a></li>
											<li><a href="select.html">Schedule</a></li>
											<li><a href="select.html">Team Members</a></li>
											<li><a href="select.html">Fan Site</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="select.html">Adult Recreational</a></li>
							<li><a href="select.html">Youth Recreational</a></li>
							<li><a href="select.html">Senior Recreational</a></li>
						</ul>
					</li>
					<li><a href="select.html">Tennis</a></li>
					<li><a href="select.html">Ice Skating</a></li>
					<li><a href="select.html">Javascript Programming</a></li>
					<li><a href="select.html">Running</a></li>
					<li><a href="select.html">Walking</a></li>
				</ul>
			</li>
			<li><a href="select.html">Local</a></li>
			<li><a href="select.html">Health</a></li>
		</ul>
	</li>
	<li><a href="select.html">Entertainment</a>
	<ul>
		<li><a href="select.html">Celebrity news</a></li>
		<li><a href="select.html">Gossip</a></li>
		<li><a href="select.html">Movies</a></li>
		<li><a href="select.html">Music</a>
		<ul>
			<li><a href="select.html">Alternative</a></li>
			<li><a href="select.html">Country</a></li>
			<li><a href="select.html">Dance</a></li>
			<li><a href="select.html">Electronica</a></li>
			<li><a href="select.html">Metal</a></li>
			<li><a href="select.html">Pop</a></li>
			<li><a href="select.html">Rock</a>
				<ul>
					<li><a href="select.html">Bands</a>
						<ul>
							<li><a href="select.html">Dokken</a></li>
						</ul>
					</li>
					<li><a href="select.html">Fan Clubs</a></li>
					<li><a href="select.html">Songs</a></li>
				</ul>
			</li>
		</ul>
		</li>
		<li><a href="select.html">Slide shows</a></li>
		<li><a href="select.html">Red carpet</a></li>
	</ul>
	</li>
	<li><a href="select.html">Finance</a>
	<ul>
		<li><a href="select.html">Personal</a>
		<ul>
			<li><a href="select.html">Loans</a></li>
			<li><a href="select.html">Savings</a></li>
			<li><a href="select.html">Mortgage</a></li>
			<li><a href="select.html">Debt</a></li>
		</ul>
		</li>
		<li><a href="select.html">Business</a></li>
	</ul>
	</li>
	<li><a href="select.html">Food &amp; Cooking</a>
	<ul>
		<li><a href="select.html">Breakfast</a></li>
		<li><a href="select.html">Lunch</a></li>
		<li><a href="select.html">Dinner</a></li>
		<li><a href="select.html">Dessert</a>
			<ul>
				<li><a href="select.html">Dump Cake</a></li>
				<li><a href="select.html">Doritos</a></li>
				<li><a href="select.html">Both please.</a></li>
			</ul>
		</li>
	</ul>
	</li>
	<li><a href="select.html">Lifestyle</a></li>
	<li><a href="select.html">News</a></li>
	<li><a href="select.html">Politics</a></li>
	<li><a href="select.html">Sports</a>
		<ul>
			<li><a href="select.html">Baseball</a></li>
			<li><a href="select.html">Basketball</a></li>
			<li><a href="select.html">Swimming</a>
			<ul>
				<li><a href="select.html">High School</a></li>
				<li><a href="select.html">College</a></li>
				<li><a href="select.html">Professional</a>
				<ul>
					<li><a href="select.html">Mens Swimming</a>
					<ul>
							<li><a href="select.html">News</a></li>
							<li><a href="select.html">Events</a></li>
							<li><a href="select.html">Awards</a></li>
							<li><a href="select.html">Schedule</a></li>
							<li><a href="select.html">Team Members</a></li>
							<li><a href="select.html">Fan Site</a></li>
						</ul>
					</li>
					<li><a href="select.html">Womens Swimming</a>
					<ul>
						<li><a href="select.html">News</a></li>
						<li><a href="select.html">Events</a></li>
						<li><a href="select.html">Awards</a></li>
						<li><a href="select.html">Schedule</a></li>
						<li><a href="select.html">Team Members</a></li>
						<li><a href="select.html">Fan Site</a></li>
					</ul>
					</li>
				</ul>
				</li>
				<li><a href="select.html">Adult Recreational</a></li>
				<li><a href="select.html">Youth Recreational</a></li>
				<li><a href="select.html">Senior Recreational</a></li>
			</ul>
			</li>
			<li><a href="select.html">Tennis</a></li>
			<li><a href="select.html">Ice Skating</a></li>
			<li><a href="select.html">Javascript Programming</a></li>
			<li><a href="select.html">Running</a></li>
			<li><a href="select.html">Walking</a></li>
		</ul>
		</li>
	</ul>
</div>






</div></div></body></html>
