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

<!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">매물 검색
        <small>Search</small>

        <!-- 수정/추가 admin -->
        <a href="index.php?edit=1" style="text-align:right;"><small style="font-size:15px;">수정하기</small></a>
      </h1>
      
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Search</li>
      </ol>

        <?php
          if(isset($_GET['edit']) && $_GET['edit']){
          //if($edit_on){
            ?>  

            <div class="container">
                <form role="form">
                    <div class="form-group">
                        <label>File input</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>Text area</label>
                        <textarea class="form-control" rows="20">매물 검색 부분 수정하기 상세구현</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </form>
            </div></br></br>

          <?php
          }?>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,126.7&amp;spn=37.5,126.7&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>

        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

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
