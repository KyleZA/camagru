<?php
require "header.php";
require 'config/database.php';

if (isset($_SESSION['userId']))
{
	$user_id = $_SESSION['userId'];
}
//$username = $_SESSION['username'];
//$email = $_SESSION['email'];
$sql = "SELECT * FROM `images` ORDER BY image_id DESC";
$stmt = $conn->prepare($sql);
// $stmt->bindParam(":userId", $user_id);
$stmt->execute();
$count = $stmt->rowCount();
$total = 0;
if ($count > 0) {
	$result = $stmt->fetchAll(PDO::FETCH_COLUMN, 1);
	$total = count($result);
	// $username = $result['image_src'];
}

?>
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
	if (!isset($_SESSION['userId']) && !isset($_GET['guest']))
	{
		header("Location: index.php");
		exit();
	}
	?>
	<body>
	<div id="demo">
    <button type="button" style="float:left;"onclick="loadDoc()">Don't click!</button>
   </div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "text.php", true);
  xhttp.send();
}
	</script>
		<div class="gallery">
			<h2>Gallery</h2>
			<?php
			$i = 0;
			while ($i < $total)
			{ ?>
				<img style ="float:center; margin: auto; margin-top: 20px; border-radius: 10px;" src="<?php echo $result[$i]; ?>">
				<!-- <form>
				<textarea rows="4" cols="50" name="comment" form="usrform">
				<button id="comment" type="submit" name="comments">Comment here</button> 
				</form> -->
			<?php $i++;} ?>
		</div>
	</body>
</main>
    </body>
</html>
<?php require "footer.php"; ?>