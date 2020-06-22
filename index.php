<?php

$text = array('Train on how to use software','Train on icons on the card','Train on card details','Train on adding borads','Train on moving cards','Train on accepting a card');
$colors = array('white','blue', 'orange', 'purple');
$numbers = range(1, 30);
shuffle($text);
shuffle($colors);
shuffle($numbers);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Project Management Software</title>
	<link rel="stylesheet" type="text/css" href="../boostrap3/font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		* {
			font-family: 'helvetica', arial;
		}
		nav {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			max-width: 100%;
			background-color: #777;
		}
		nav li {
			display: inline-block;
			padding: 18px;
			border-right: thin solid #ccc;
		}
		nav li:hover {
			background-color: #666;
		}
		nav li a {
			text-decoration: none;
			color: #fff;
		}
		nav li:nth-child(9), li:nth-child(6) {
			border-right: none;
		}
		nav li:first-child {
			font-weight: bold;
		}

		.add {
			background-color: #0088ff;
			border-radius: 5px;
			padding: 12px;
		}
		.drop-down {
			width: 100px;
			position: absolute;
			margin-top: 18px;
			margin-left: -20px;
			background-color: #0088ff;
			padding: 10px 0;
			border-radius: 0 0 5px 5px;
			box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
			display: none;
		}
		.drop-down div {
			/*border-bottom: thin solid #fff;*/
			padding: 5px;
		}
		.drop-down div:hover {
			background-color: #777;
		}
		.show {
			display: block;
		}
		.container {
			width: 100%;
			height: auto;
			max-width: 100%;
			margin: 0 auto;
			background-color: #f5f5f5;
			margin-top: 80px;
			/*box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);*/
			border-radius: 5px;
		}
		.panel {
			width: 350px;
			height: 450px;
			max-width: 100%;
			max-height: auto;
			overflow-y: auto;
			display: inline-block;
			vertical-align: top;
			padding: 5px;
			border: thin solid #ccc;
		}
		.main-heading {
			background-color: #ccc;
			color: #008899;
			text-align: center;
			padding: 5px 0;
			font-size: 1.8em;
		}
		.panel-heading {
			background-color: #ddd;
			color: #444;
			text-align: center;
			padding: 5px;
		}
		.add-card {
			background-color: #ddd;
			color: #fff;
			border: 3px dashed #fff;
			text-align: center;
			font-size: 1.5em;
			margin: 5px 0 5px 0;
		}
		.panel a {
			text-decoration: none;
		}
		.panel a:hover .add-card {
			background-color: #b5e7a0;
		}
		.panel-card {
			height: auto;
			max-height: auto;
			padding: 10px;
			margin-top: 6px;
			background-color: #f5f5f5;
			border: thin solid #aaa;
			border-left: 15px solid transparent;
			box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
		}
		.card-text {
			margin-bottom: 8px;
		}
		.card-item {
			color: #0088ff;
			margin-top: 10px;
			margin-right: 10px;
			font-size: 1.3em;
		}
		.white {
			border-left: 15px solid transparent;
		}
		.purple {
			border-left: 15px solid #a569bd; /*#886699;*/
		}
		.orange {
			border-left: 15px solid #f39c12;
		}
		.blue {
			border-left: 15px solid #0088ff;
		}
	</style>
	<script type="text/javascript">
		function toggleMenu(i) {
			var item = document.getElementsByClassName('drop-down'); //get all items by class-names
			if(item[i].style.display == 'block') {
				item[i].style.display = 'none'; //hide item if opened
			}
			else {
				item[i].style.display = 'block'; //show item if hidden
			}
			//item[0].style.display = 'none'; //hide previous opened menu-list
			//item[1].style.display = 'none'; //hide previous opened menu-list
		}
	</script>
</head>
<body>
	<nav>
		<li><a href="index.php">BrandName</a></li>
		<li onclick="toggleMenu(0)"><a href="#">Cards <i class="fa fa-caret-down"></i></a>
			<div class="drop-down">
				<div><a href="#">item 1</a></div>
				<div><a href="#">item 2</a></div>
				<div><a href="#">item 3</a></div>
			</div>
		</li>
		<li><a href="#">Sprints</a></li>
		<li><a href="#">Team</a></li>
		<li onclick="toggleMenu(1)"><a href="#">Settings <i class="fa fa-caret-down"></i></a>
			<div class="drop-down">
				<div><a href="#">item 1</a></div>
				<div><a href="#">item 2</a></div>
				<div><a href="#">item 3</a></div>
			</div>
		</li>
		<li><a href="#">Admin</a></li>
		<span style="float:right">
		<li><a href="#" class="add">Add Card</a></li>
		<li><a href="#">Help</a></li>
		<li><a href="#">Logout</a></li>
		</span>
	</nav>

	<div class="container">
		<div class="main-heading">User Stories</div>
		<center>
		<div class="panel">
			<div class="panel-heading">To Do <i class="fa fa-edit"></i></div>
			<a href=""><div class="add-card">+</div></a>
			<!-- <div class="panel-card purple">
				<div class="card-text">Train on adding card</div>
				<div>
					<span class="card-item"><i class="fa fa-comments"></i><sub>2</sub></span>
					<span class="card-item"><i class="fa fa-list"></i><sub>1</sub></span>
					<span class="card-item"><i class="fa fa-image"></i><sub>2</sub></span>
					<span class="card-item"><i class="fa fa-tag"></i><sub>21</sub></span>
				</div>
			</div> -->
			<?php for ($i=0; $i < 4; $i++) : ?>
				<?php shuffle($text); shuffle($colors); shuffle($numbers); ?>
				<div class="panel-card <?php echo $colors[$i]; ?>">
					<div class="card-text"><?php echo $text[$i]; ?></div>
					<div>
						<span class="card-item"><i class="fa fa-comments"></i><sub><?php echo $numbers[$i]; ?></sub></span>
						<span class="card-item"><i class="fa fa-list"></i><sub><?php echo $numbers[$i]+4; ?></sub></span>
						<span class="card-item"><i class="fa fa-image"></i><sub><?php echo $numbers[$i]-2; ?></sub></span>
						<span class="card-item"><i class="fa fa-tag"></i><sub><?php echo $numbers[$i]+3; ?></sub></span>
					</div>
				</div>
			<?php endfor; ?>
		</div>
		<div class="panel">
			<div class="panel-heading">In-progress <i class="fa fa-cogs"></i></div>
			<a href=""><div class="add-card">+</div></a>

			<?php for ($i=0; $i < 2; $i++) : ?>
				<?php shuffle($text); shuffle($colors); shuffle($numbers); ?>
				<div class="panel-card <?php echo $colors[$i]; ?>">
					<div class="card-text"><?php echo $text[$i]; ?></div>
					<div>
						<span class="card-item"><i class="fa fa-comments"></i><sub><?php echo $numbers[$i]; ?></sub></span>
						<span class="card-item"><i class="fa fa-list"></i><sub><?php echo $numbers[$i]+4; ?></sub></span>
						<span class="card-item"><i class="fa fa-image"></i><sub><?php echo $numbers[$i]-2; ?></sub></span>
						<span class="card-item"><i class="fa fa-tag"></i><sub><?php echo $numbers[$i]+3; ?></sub></span>
					</div>
				</div>
			<?php endfor; ?>
		</div>
		<div class="panel">
			<div class="panel-heading">Done <i class="fa fa-check"></i></div>
			<a href=""><div class="add-card">+</div></a>

			<?php for ($i=0; $i < 3; $i++) : ?>
				<?php shuffle($text); shuffle($colors); shuffle($numbers); ?>
				<div class="panel-card <?php echo $colors[$i]; ?>">
					<div class="card-text"><?php echo $text[$i]; ?></div>
					<div>
						<span class="card-item"><i class="fa fa-comments"></i><sub><?php echo $numbers[$i]; ?></sub></span>
						<span class="card-item"><i class="fa fa-list"></i><sub><?php echo $numbers[$i]+4; ?></sub></span>
						<span class="card-item"><i class="fa fa-image"></i><sub><?php echo $numbers[$i]-2; ?></sub></span>
						<span class="card-item"><i class="fa fa-tag"></i><sub><?php echo $numbers[$i]+3; ?></sub></span>
					</div>
				</div>
			<?php endfor; ?>
		</div>
		</center>
	</div>

</body>
</html>