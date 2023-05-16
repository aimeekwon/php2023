<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료</title>
        <!-- CSS -->
        <?php include "../include/head.php" ?>
</head>
<body class="bgStyle1">
    
<?php include "../include/skip.php" ?>
<!-- //skip -->

<?php include "../include/header.php" ?>
<!-- //header -->
    <main id="main" class="mt120 container">
        <div class="main__container">
            <div class="intro__inner mb40">
                <h2 class="intro__h2">PLANTY</h2>
                <h4>회원가입</h4>
            </div>
            <!-- join__inner -->
            <div class="join__inner">
                <div class="join__form">
                    <form action="#" name="#" method="post">
                        <fieldset>
                            <legend class="blind">회원가입 영역</legend>
                            <div class="join_end__desc">
                                <p>회원가입이 완료 되었습니다.<br>
                                    환영합니다.
                                </p>
                            </div>
                            <button type="submit" class="btnStyle4"><a href="login.html">로그인</a></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer_min.php" ?>
    <!-- //footer -->
    
</body>
</html>