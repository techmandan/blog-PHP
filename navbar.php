 <!-- Navigation -->
<?
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];}else{
	$id = '';}
if($id === '1'){
	$about = true;
} else {
	$about = false; }?>
<body onload="<?=$names['onload']; ?>">
<link rel="icon" sizes="192x192" href="<?=$names['icourl']; ?>">
<link rel="icon" type="image/x-icon" href="<?=$names['icourl']; ?>" />
<meta name="theme-color" content="<?=$names['theme']; ?>">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?=$names['url']; ?>"><?=$names['title']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
			  <li class="nav-item active">
              <a class="nav-link" href="#"><?=$currentPage; ?>
                <span class="sr-only">(current)</span>
              </a>
            </li>
		<? if($names['show1']){?>	  
            <li class="nav-item">
              <a class="nav-link" href="<?=$page['custom1url']; ?>"><?=$page['custom1']; ?></a>
            </li><?} if($names['show2']){?>
            <li class="nav-item">
              <a class="nav-link" href="<?=$page['custom2url']; ?>"><?=$page['custom2']; ?></a>
            </li><?}?>
          </ul>
        </div>
      </div>
    </nav>
