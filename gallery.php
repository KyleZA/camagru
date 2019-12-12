<?php require "header.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Camguru</title>
        <link rel="stylesheet" href="style.css">
        </head>
    <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
            <main>
	<?php
	if (!$_SESSION['userId'] && !$_GET['guest'])
	{
		header("Location: index.php");
		exit();
	}
	?>
	<body>
		<div class="gallery">
			<h2>Gallery</h2>
			<div>1</div>
			<div>2</div>
			<div>3</div>
			<div>4</div>
		</div>
	</body>
</main>
    </body>
</html>
<?php require "footer.php"; ?>