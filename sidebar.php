<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93897496-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-93897496-1');
</script>

<!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header"><?=$names['search']; ?></h5>
            <div class="card-body">
              <div class="input-group">
				  <form action='<?=$names['url']; ?>' method='GET'>
                <input type="text" class="form-control" name='search' placeholder="<?=$names['search']; ?>">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit"><?=$names['searchbtn']; ?></button>
                </span>
				  </form>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header"><?=$names['category']; ?></h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                   
                    <li>
                      <a href="http://blog.danbulant.eu/?category=html">HTML</a>
                    </li>
                    <li>
                      <a href="http://blog.danbulant.eu/?category=php">PHP</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="http://blog.danbulant.eu/?category=web">Web</a>
                    </li>
                    <li>
                      <a href="http://blog.danbulant.eu/?category=tutorial">Tutorialy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header"><?=$names['author']; ?></h5>
            <div class="card-body">
            <?=$names['cardText']; ?>
			  </div>
          </div>
