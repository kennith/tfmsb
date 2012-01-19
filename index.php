<!DOCTYPE html> 
<html> 
	<head> 
		<title>Page Title</title> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<link rel="stylesheet" href="core.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	</head> 

	<body> 
		<div data-role="page">
			<div data-role="header">
				<h1>Header</h1>
			</div>
			
			<div data-role="content" class="content">
				<div class="content-primary">
					

					
					<ul data-role="listview" data-inset="true" class="ui-listview" data-theme="d">
						<li data-role="list-divider">
							header
						</li>
						
						<li>
							<a href="song-of-the-week.php" >歌書1</a>
						</li>
						
						<li>
							<a href="song-book.php">歌書</a>
						</li>
					</ul>
				</div>
				
			</div>
			
			<div data-role="footer">
				<h4>Footer</h4>
			</div>
		</div>
	</body>
</html>