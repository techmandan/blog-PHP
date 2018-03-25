<?
require_once('functions.php');
//config file
if(isset($_GET['search']) | !empty($_GET['search'])){
	//if not searching, show all
	$search = $_GET['search'];
$result = $mysqli->query("SELECT * FROM ".$database['subname']." WHERE ".$database['desc']." LIKE '%".$_GET['search']."%'");
} elseif(isset($_GET['category']) | !empty($_GET['category'])){
	//searching from description
	$category = $_GET['category'];
if($result = $mysqli->query("SELECT * FROM ".$database['subname']." WHERE ".$database['category']." LIKE '%".$_GET['category']."%'")){
	echo '<br/><br/>NICE';
} else {
	echo '<script>alert("ERROR")</script>';
}
} else {
	//do not show post with category "secret"
	if(!$result = $mysqli->query("SELECT * FROM ".$database['subname']." WHERE NOT ".$database['category']."='secret'")){
	echo '<script>alert("ERROR")</script>';
	}}
$currentPage = $names['home'];
//".$database['subname']."
//".$database['category']."
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=$names['desc']; ?>">
    <meta name="author" content="<?=$names['author']; ?>, Daniel Bulant"><!--keep me there(see MIT license)-->

    <title><?=$names['pageTitle']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>


   <? include('navbar.php');?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4"><?=$names['blogTitle']; ?>
            <small><?=$names['blogSubtitle']; ?></small>
          </h1>
			 <!-- Blog Post -->
          
	<?php if($result->num_rows && !empty($result)) { ?>
			<?php while($a = $result->fetch_assoc()) { ?>
          <!-- Blog Post -->
          <div class="card mb-4">
				<? if(isset($a['img'])){ ?>
            <img class="card-img-top" src="<?=$a['img']; ?>" alt="Card image cap">
										 <?}?>
            <div class="card-body">
              <h2 class="card-title"><?=$a['title']; ?></h2>
              <p class="card-text"><?
						if(isset($_GET['search']) && !empty($_GET['search'])){ echo preg_replace("/\p{L}*?".preg_quote($_GET['search'])."\p{L}*/ui", "<b>$0</b>",$a['description']);
																			 } else{ echo $a['description'];}?></p>
              <a href="./post/index.php?id=<?=$a['id']; ?>" class="btn btn-primary"><?=$names['readmore']; ?> &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?=$names['writen']; echo $a['date'].' '.$names['by']; ?>
              <a href="#"><? if(isset($a['author'])){ echo $a['author']; } else { echo $names['author']; }?></a>
			  </div></div>
          	<?php } ?>
			<?php } else { ?>
			  <div class="card mb-4">
            <!--img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"-->
            <div class="card-body">
              <h2 class="card-title"><?=$names['404Title']; ?></h2>
              <p class="card-text"><?=$names['404Desc']; ?></p>
              <a href="<?=$names['url']; ?>" class="btn btn-primary"><?=$names['showAll']; ?> &rarr;</a>
            </div>
            <div class="card-footer text-muted">
             Some error comes...
				  </div></div>
			<?php } ?>


		  </div>
		  <? include('sidebar.php'); ?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-info">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; <?=$names['url']; ?> 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
