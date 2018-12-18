<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>부동산</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">부동산</a>
        <a class="nav-link js-scroll-trigger" href="../login.php">로그인</a>
        <a class="nav-link js-scroll-trigger" href="../signUp.php">회원가입</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../maemul">매물 검색</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../news">뉴스/시세</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../introduce">중개사무소 소개</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../move_interior">이사/인테리어</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../community">커뮤니티</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Header -->
    <header >
        <div class="intro-text">
        </div>
    </header>

</br></br></br></br></br></br></br></br></br>

  <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">중개사무소 소개
        <small>Introduce</small>
        <a href="index.php?edit=1" style="text-align:right;" ><small style="font-size:15px;">수정하기</small></a>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Introduce</li>
      </ol>


        <?php 
            if(isset($_POST['edit']) && $_POST['edit']){ ?>
              <div class="container">
                  <form role="form">
                      <div class="form-group">
                          <label>File input</label>
                          <input type="file">
                      </div>
          <?php } ?>
              <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-lg-6">
        <?php
            if(isset($_POST['edit']) && $_POST['edit']){ ?>
            <div class="form-group">
              <textarea class="form-control" rows="10">
            <?php
            }?>
          <h2>About Modern Business</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
          <?php
            if(isset($_POST['edit']) && $_POST['edit']){?>
                </textarea>
              </div>
            <?php
            }?>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
              <?php
                  if(isset($_POST['edit']) && $_POST['edit']){ ?>
                    <input type="radio" name="delete" value="posttitle_1" style="font-size: 10px;"><small style="font-size:15px;">삭제하기</small></input>
                  <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title"> Team Member </h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
              <?php
                  if(isset($_POST['edit']) && $_POST['edit']){?>
                    <input type="radio" name="delete" value="posttitle_1" style="font-size: 10px;"><small style="font-size:15px;">삭제하기</small></input>
                  <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
              <?php
                  if(isset($_POST['edit']) && $_POST['edit']){ ?>
                    <input type="radio" name="delete" value="posttitle_1" style="font-size: 10px;"><small style="font-size:15px;">삭제하기</small></input>
                  <?php } ?>
            </div>
          </div>
        </div>
        <?php
          if(isset($_POST['edit']) && $_POST['edit']){ ?>
        <div class="col-lg-3 mb-4">
          <div class="card h-100 text-center">
            <a href="edit.php">
              <img class="card-img-top" src="https://via.placeholder.com/750x450.png?text=add" alt="">
            </a>
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
            </div>
          </div>
        </div>
        <?php
          } ?>
      </div>
      <!-- /.row -->
    </div>
    <?php
      if(isset($_POST['edit']) && $_POST['edit']){?>
        <button type="submit" class="btn btn-default">Submit Button</button>
        <button type="reset" class="btn btn-default">Reset Button</button>
      </form>
    </div>
      <?php 
    } ?>



    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>

  </body>

</html>
