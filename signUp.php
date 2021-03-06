<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>부동산</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

    <script language="javascript">
      // opener관련 오류가 발생하는 경우 아래 주석을 해지하고, 사용자의 도메인정보를 입력합니다. ("팝업API 호출 소스"도 동일하게 적용시켜야 합니다.)
      //document.domain = "abc.go.kr";

      function goPopup(){
        // 호출된 페이지(jusopopup.jsp)에서 실제 주소검색URL(http://www.juso.go.kr/addrlink/addrLinkUrl.do)를 호출하게 됩니다.
          var pop = window.open("/popup/jusoPopup.jsp","pop","width=570,height=420, scrollbars=yes, resizable=yes"); 
          
        // 모바일 웹인 경우, 호출된 페이지(jusopopup.jsp)에서 실제 주소검색URL(http://www.juso.go.kr/addrlink/addrMobileLinkUrl.do)를 호출하게 됩니다.
          //var pop = window.open("/popup/jusoPopup.jsp","pop","scrollbars=yes, resizable=yes"); 
      }
      /** API 서비스 제공항목 확대 (2017.02) **/
      function jusoCallBack(roadFullAddr,roadAddrPart1,addrDetail,roadAddrPart2,engAddr, jibunAddr, zipNo, admCd, rnMgtSn, bdMgtSn
                  , detBdNmList, bdNm, bdKdcd, siNm, sggNm, emdNm, liNm, rn, udrtYn, buldMnnm, buldSlno, mtYn, lnbrMnnm, lnbrSlno, emdNo){
        // 팝업페이지에서 주소입력한 정보를 받아서, 현 페이지에 정보를 등록합니다.
        document.form.roadAddrPart1.value = roadAddrPart1;
        document.form.roadAddrPart2.value = roadAddrPart2;
        document.form.addrDetail.value = addrDetail;
        document.form.zipNo.value = zipNo;
      }
    </script>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="./index.php">부동산</a>
        <a class="nav-link js-scroll-trigger" href="./login.php">로그인</a>
        <a class="nav-link js-scroll-trigger" href="./signUp.php">회원가입</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./maemul">매물 검색</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./news">뉴스/시세</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./introduce">중개사무소 소개</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./move_interior">이사/인테리어</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./community">커뮤니티</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header >
        <div class="intro-text">
        </div>
      </div>
    </header>

</br></br></br></br></br></br></br></br></br>


    <div class="container">
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-6 mb-4">
          <h3>Sign Up</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row">  
              <div class="col-lg-4 mb-3">
                <div class="control-group form-group">
                  <div class="controls">
                    ID:
                    <input type="text" class="form-control" id="Identifier" required data-validation-required-message="Please enter your phone number.">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3"></br>
                <button type="button" class="btn btn-warning">중복확인</button>
              </div>
            </div>  
            <div class="row">
              <div class="col-lg-4 mb-3">
                <div class="control-group form-group">
                  <div class="controls">
                    비밀번호:
                    <input type="password" class="form-control" id="passward" required data-validation-required-message="Please enter your email address.">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">
                <div class="control-group form-group">
                  <div class="controls">
                    비밀번호 확인:
                    <input type="password" class="form-control" id="repassward" required data-validation-required-message="Please enter your email address.">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-3">
                <div class="control-group form-group">
                  <div class="controls">
                    성:
                    <input type="text" class="form-control" id="lastName" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="control-group form-group">
                  <div class="controls">
                    이름:
                    <input type="text" class="form-control" id="firstName" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-3">
                <div class="control-group form-group">
                  <div class="controls">
                    생년월일:
                    <input type="number" class="form-control" id="birthDate" required data-validation-required-message="Please enter your email address." placeholder="년도">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>            </label>
                    <input type="number" class="form-control" id="birthDate" required data-validation-required-message="Please enter your email address." placeholder="월">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">
                <div class="control-group form-group">
                  <div class="controls"></br>
                    <input type="number" class="form-control" id="birthDate" required data-validation-required-message="Please enter your email address." placeholder="일">
                  </div>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-lg-5 mb-3">  
                <div class="control-group form-group">
                  <div class="controls">
                    이메일:
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-3">  
                <div class="control-group form-group">
                  <div class="controls">
                    주소:
                    <input type="text" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5 mb-3">  
                <div class="control-group form-group">
                  <div class="controls">
                    휴대전화:
                    <input type="number" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                  </div>
                </div>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">SignUp</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->



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
