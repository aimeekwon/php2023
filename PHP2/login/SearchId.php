<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 찾기</title>
  <!-- CSS -->
  <?php include "../include/head.php" ?>
</head>
<body class="bgStyle1">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container login__container">
        <div class="login btStyle bmStyle">
            <div class="login__inner mb60">
                <div class="logo">PLANTY</div>
                <h2 class="mb20">아이디 찾기</h2>
                <div>
                    <form action="#" name="#" method="post">
                        <fieldset>
                            <legend class="blind">아이디 찾기 영역</legend>
                            <div>
                                <label for="youName" class="required blind"></label>
                                <input class="inputStyle_login inputStyle" type="name" id="youName" name="youName"
                                    placeholder="이름을 입력해 주세요" required>
                            </div>
                            <div>
                                <label for="youPhone" class="required blind"></label>
                                <input class="inputStyle_login inputStyle" type="" id="youPhone"
                                    name="youPhone" placeholder="전화번호를 입력해주세요" required>
                            </div>
                            <button type="submit" class="btnStyle2_login btnStyle2 mt20 mb20 ">확인</button>
                            <div class="login_more mt10 btStyle">
                                <span><a href="login__searchPass.html">비밀번호 찾기</a></span>
                                <span><a href="join_insert.html">회원가입</a></span>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <div class="login__footer">

                </div>
            </div>
        </div>
    </main>
    <!-- //main -->


    <?php include "../include/footer_min.php" ?>
    <!-- //footer -->
</body>

</html>