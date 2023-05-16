<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 페이지</title>
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
            <div class="login btStyle bmStyle">
                <div class="login__inner mb60">
                    <div class="logo">PLANTY</div>
                    <h2 class="mb20">로그인</h2>
                    <div>
                        <form action="#" name="#" method="post">
                            <fieldset>
                                <legend class="blind">로그인 영역</legend>
                                <div>
                                    <label for="youEmail" class="required blind">이메일</label>
                                    <input class="inputStyle_login inputStyle" type="email" id="youEmail" name="youEmail"
                                        placeholder="이메일을 입력해주세요" required>
                                </div>
                                <div>
                                    <label for="youPass" class="required blind">비밀번호</label>
                                    <input class="inputStyle_login inputStyle" type="password" id="youPass"
                                        name="youPass" placeholder="비밀번호를 입력해주세요" required>
                                </div>
                                <button type="submit" class="btnStyle2_login btnStyle2 mt20 mb20">로그인</button>
                                <div class="login_more mt10 btStyle">
                                    <span><a href="searchId.php">아이디 찾기</a></span>
                                    <span><a href="searchPass.php">비밀번호 찾기</a></span>
                                    <span><a href="../join/joinAgree.php">회원가입</a></span>
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