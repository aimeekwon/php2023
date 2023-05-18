<?php
    if(!isset($_SESSION['memberID'])){//! : memberID가 없으면(글을 쓰려는데 아이디가 없는 경우 로그인창으로 연결 )
      
        echo "<script>alert('로그인을 먼저 해야 합니다.')</script>";
        echo "<script>location.href='../login/login.php'</script>";
      //  Header("Location:../login/login.php");
    }
