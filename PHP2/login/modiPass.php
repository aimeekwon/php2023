<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>
        <!-- CSS -->
        <?php include "../include/head.php" ?>
</head>
<body class="bgStyle1">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="login__container">
            <div class="pwdlost">
                <div class="pwdlost__inner center">
                    <div class="logo">PLANTY</div>
                    <h2>비밀번호 변경하기</h2>
                    <div class="pwdlost__form">
                        <form action="#" name="#" method="post">
                            <fieldset>
                                <legend class="blind">비밀번호 변경 영역</legend>
                                <div>
                                    <input class="inputStyle__pwd" type="password" id="youPass" name="youPass" placeholder="비밀번호을 입력해주세요" required>
                                </div>
                                <div>
                                    <input class="inputStyle__pwd" type="password" id="youPassC" name="youPassC" placeholder="비밀번호을 다시 입력해주세요" required>
                                </div>
                                <button type="submit" class="btnStyle_pwd mt20 mb20">로그인</button>
                                <div class="login_more mt10 btStyle">
                                    <span><a href="login__searchID.html">아이디 찾기</a></span>
                                    <span><a href="join_insert.html">회원가입</a></span>
                                </div>
                            </fieldset>
                        </form>
                    </div>
    
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer_min.php" ?>
    <!-- //footer -->
    
</body>
</html>