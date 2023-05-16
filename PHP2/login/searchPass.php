<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
  <!-- CSS -->
  <?php include "../include/head.php" ?>
</head>
<body class="bgStyle1">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container login__container">
        <div class="pwdlost">
            <div class="pwdlost__inner center">
                <div class="logo">PLANTY</div>
                <h2>비밀번호찾기</h2>
                <div class="pwdlost__form">
                    <form action="#" name="#" method="post">
                        <fieldset>
                            <legend class="blind">비밀번호찾기 영역</legend>
                            <div>
                                <input class="inputStyle__pwd" type="name" id="youName" name="youName" placeholder="이름을 입력해주세요" required>
                            </div>
                            <div>
                                <input class="inputStyle__pwd" type="email" id="youEmail" name="youEmail" placeholder="이메일을 입력해주세요" required>
                            </div>
                            <div class="result">
                                <select name="#" id="#">
                                    <option value="1">당신의 보물 1호는?</option>
                                </select>
                                <input class="inputStyle__pwd__qustion" type="text" id="youResult" name="youResult" placeholder="질문의 답을 입력해주세요" required>
                            </div>
                            <button type="submit" class="btnStyle_pwd btnStyle2"><a href="modiPass.php">확인</a></button>
                            <div class="login_more mt10 btStyle">
                                <span><a href="login__searchID.html">아이디 찾기</a></span>
                                <span><a href="join_insert.html">회원가입</a></span>
                            </div>
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