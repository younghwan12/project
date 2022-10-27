<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    unset($_SESSION['myMemberID']);
?>



<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 재설정 완료</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">
    
    <!-- 비밀번호 찾음 CSS -->
    <link rel="stylesheet" href="../asset/css/login/idPassConfirm.css">



    <style>

    </style>
</head>
<body>
    <div class="login__popup score inner_height2">
        <div class="login__inner">
            <div class="login__header">
                <h3><a href="findID.html">I.D/P.W 찾기</a></h3>
            </div>
            <div class="tab_menu">
                <span class="id"><a href="findID.html">ID</a></span> <em>|</em> <span class="pass active">Password</span>
                <div class="search_contents">
                    <h4 class="user_search">비밀번호 재설정</h4>
                    <div class="id_find2">
                        <figure class="findLogo2">
                            <img src="../../asset/img/loginFind.jpg" alt="">
                        </figure>
                        <p>비밀번호 재설정이<br> 완료되었습니다!</p>
                    </div>
                    <div class="searchPassBox">
                        <p>개인정보의 안전을 위해 비밀번호<br> 유출을 조심해주세요.</p>
                    </div>
                </div>
                <div class="go_login">
                    <a href="loginpopup.php">로그인</a>
                </div>
            </div>
            <div class="close_btn"><a href="main.php">
                <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#ffffff"/>
                    <path d="M5.33334 4.66675L14.6667 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                    <path d="M14.6667 4.66675L5.33333 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                </svg>
            </a></div>
        </div>
    </div>

    <!-- 모달 및 탭메뉴 -->
    <script src="../asset/js/close_modal.js"></script>

    <script>

    </script>

</body>
</html>