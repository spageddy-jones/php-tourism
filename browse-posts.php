<?php require_once 'code/DOA.class.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<title>Posts</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style><?php require_once "css/styles.css"; ?></style>
</head>

<body>
<header>
<?php require_once "code/header.php"; ?>
</header>

<main class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<?php require_once 'code/leftNav.php'; ?>
		</div>
		<div class="col-md-8">
		<h2>List of Travel Posts</h2>
		<hr>
		<?php
			$allPosts = new PostDAO;
			$stmt = $allPosts->getAll();
			while($row = $stmt->fetch()){
				echo "<a href='singlePost.php?id=" . $row['PostID'] . "'>" . $row['Title'] . "</a></br>";
				echo "<div class='message'>" . $row['Message'] . "</div><hr>";
			}
		?>
		</div>
		<div class="col-md-2">
			<img src="images/verticalBanner.jpg" alt="Time to travel!">
		</div>
	</div>
	<div class="row">
		<img src="images/horizontalBanner.jpg" alt="Time to travel!" class="responsive">
	</div>
</main>

</body>
</html>