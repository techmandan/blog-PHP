 <!-- Navigation -->
<?
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];}else{
	$id = '';}
if($id === '1'){
	$about = true;
} else {
	$about = false; }?>
<meta name="google-site-verification" content="7YYmL1DX9ji1Rw7Z_QR24wqhqSw3arBsdMjYQ7YqmIg" />
<link rel="icon" sizes="192x192" href="http://danbulant.jecool.net/favicon.ico">
<link rel="icon" type="image/x-icon" href="http://danbulant.jecool.net/favicon.ico" />
<meta name="theme-color" content="#268cff"><!-- 0379FE"-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="//blog.danbulant.eu">Daniel Bulant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <? if($about){ ?><li class="nav-item">
              <a class="nav-link" href="http://blog.danbulant.eu/post/index.php?id=1">domov</a>
			  </li><? } ?>
			  <li class="nav-item active">
              <a class="nav-link" href="//blog.danbulant.eu"><?=$currentPage; ?>
                <span class="sr-only">(current)</span>
              </a>
            </li>
			  <? if(!$about){ ?><li class="nav-item">
              <a class="nav-link" href="http://blog.danbulant.eu/post/index.php?id=1">O mně</a>
			  </li><? } ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Služby</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>