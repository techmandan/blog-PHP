<?
include('../hyperlight/hyperlight.php');
require_once('../functions.php');
if(isset($_GET['id']) | !empty($_GET['id'])){
	$search = $_GET['id'];
$result = $mysqli->query("SELECT * FROM blog WHERE id='".$_GET['id']."'");
} else {
	header('location: ../index.php');
	exit;
}
if(isset($_POST["name"])){
	$sql = "INSERT INTO comments (name, text, post_id)
VALUES ('". $_POST["name"] . "', '".$_POST['text'] ."', '".$_GET["id"]. "')";

if ($mysqli->query($sql) === TRUE) {
} } 
$currentPage = 'článek';
if($_GET['id'] === '1'){
	$currentPage = 'O mně';}
function getContents($str, $startDelimiter, $endDelimiter) {
  $contents = array();
  $startDelimiterLength = strlen($startDelimiter);
  $endDelimiterLength = strlen($endDelimiter);
  $startFrom = $contentStart = $contentEnd = 0;
  while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
    $contentStart += $startDelimiterLength;
    $contentEnd = strpos($str, $endDelimiter, $contentStart);
    if (false === $contentEnd) {
      break;
    }
    $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
    $startFrom = $contentEnd + $endDelimiterLength;
  }

  return $contents;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daniel Bulant - blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

  </head>

  <body>

   <?
include('../navbar.php');?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

	<?php if($result->num_rows) { ?>
			<?php while($a = $result->fetch_assoc()) { ?>
          <!-- Title -->
          <h1 class="mt-4"><?=$a['title']; ?></h1>
			<? if($a['category'] == 'PHP'){ ?>
			<div class="alert alert-danger fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Pozor!</strong> Všechny PHP tutorialy jsou napsány ve verzi 7.1! U starších(<7.1) nemusí vše fungovat!
</div>
			<?}?>
          <!-- Author -->
          <p class="lead">
            od
            <a href="#"><?=$a['author']; ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Napsal v <?=$a['date']; ?></p>

          <hr>

          <!-- Preview Image -->
          <!--img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr-->

          <!-- Post Content -->
          <p class="lead"><?=$a['description']; ?></p>

          <p><?/*
$parsed = getContents($a['text'], '<code>', '</code>');
			$nParsed = count($parsed)-1;
			$i = 0;
$array = array();
while ($i++ < $nParsed)
{
	$highlighted[] = hyperlight(html_entity_decode($parsed[$i]), 'PHP');
}
													  */
													  echo $a['text']; ?>
			 </p>

          <!--blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote-->
          <hr>
	<?php } ?>
			<?php } else { ?>
			<p>ERROR, bad ID.</p>
			<?php } ?>
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Zanech koment:</h5>
            <div class="card-body">
              <form method='POST'>
                <div class="form-group">
					<textarea name='name' rows='1' class="form-control" placeholder='jmeno'></textarea>
                  <textarea name='text' placeholder='text' class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Odeslat</button>
              </form>
            </div>
          </div>
			<?
$result1 = $mysqli->query("SELECT * FROM comments WHERE post_id='".$_GET['id']."'");
?><?php if($result->num_rows) { ?>
			<?php while($a1 = $result1->fetch_assoc()) { ?>
          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/60x60?text=<?=$a1['name']; ?>" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?=$a1['name']; ?></h5>
              <?=$a1['text']; ?>
            </div>
          </div>	<?php } ?>
			<?php } else { ?>
			<p>Žádné komentáře. Buď první!</p>
			<?php } ?>

          <!-- Comment with nested comments >
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div-->

        </div>

        <? include('../sidebar.php'); ?>
        

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; danbulant.eu 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
