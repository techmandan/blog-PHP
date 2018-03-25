<?
require_once('functions.php');
if(isset($_GET['search']) | !empty($_GET['search'])){
	$search = $_GET['search'];
$result = $mysqli->query("SELECT * FROM blog WHERE description LIKE '%".$_GET['search']."%'");
} elseif(isset($_GET['category']) | !empty($_GET['category'])){
	$category = $_GET['category'];
$result = $mysqli->query("SELECT * FROM blog WHERE category LIKE '%".$_GET['category']."%'");
} else {
	$result = $mysqli->query("SELECT * FROM blog WHERE NOT category='secret'");
}
$currentPage = 'domov';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<meta name="google-site-verification" content="7YYmL1DX9ji1Rw7Z_QR24wqhqSw3arBsdMjYQ7YqmIg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Můj osobní blog.">
    <meta name="author" content="Daniel Bulant">

    <title>Blog - danbulant.eu</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

   <? include('navbar.php');?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Daniel Bulant
            <small>a jeho blog</small>
          </h1>
	<?php if($result->num_rows && !empty($result)) { ?>
			<?php while($a = $result->fetch_assoc()) { ?>
          <!-- Blog Post -->
          <div class="card mb-4">
            <!--img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"-->
            <div class="card-body">
              <h2 class="card-title"><?=$a['title']; ?></h2>
              <p class="card-text"><?
						if(isset($_GET['search']) && !empty($_GET['search'])){ echo preg_replace("/\p{L}*?".preg_quote($_GET['search'])."\p{L}*/ui", "<b>$0</b>",$a['description']);
																			 } else{ echo $a['description'];}?></p>
              <a href="./post/index.php?id=<?=$a['id']; ?>" class="btn btn-primary">Číst dál &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Napsano <?=$a['date']; ?> by
              <a href="#">Daniel Bulant</a>
			  </div></div>
          	<?php } ?>
			<?php } else { ?>
			  <div class="card mb-4">
            <!--img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"-->
            <div class="card-body">
              <h2 class="card-title">Nic nenalezeno</h2>
              <p class="card-text">Bohužel jsme nic nenašly.</p>
              <a href="http://blog.danbulant.eu/" class="btn btn-primary">zobrazit vše &rarr;</a>
            </div>
            <div class="card-footer text-muted">
             Chybička se vloudila..
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
        <p class="m-0 text-center text-white">Copyright &copy; danbulant.eu 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
