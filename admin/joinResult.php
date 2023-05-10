<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

    <?php include "../include/head.php" ?>
</head>

<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->
    
    
    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="assets/img/join01.png, assets/img/join01@2x.png 2x, assets/img/join01@3x.png 3x" />
                <img src="/assets/img/join01.png" alt="회원가입 이미지">
                <div class="join__result">
                    <canvas class="illo"></canvas>
                </div>
            </picture>
            <p class="intro__text">
                회원가입이 완료되었습니다.
            </p>
        </div>
        <!-- //intro__inner -->


        <div class="join__inner">
            <h2> 완료</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
            <div class="intro__btn center">
                <a href="#">관리자 로그인</a>
            </div>
        </div>

       
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>

</html>