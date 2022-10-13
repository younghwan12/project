<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 메인</title>

    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">

    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/loginBanner.css">
    <link rel="stylesheet" href="../asset/css/boardType.css">
    <link rel="stylesheet" href="../asset/css/imageType.css">
    <link rel="stylesheet" href="../asset/css/footerType.css">

</head>



<body>
<?php include "../include/header.php"?>

    <section id="loginBanner" class="loginBanner">
        <h2 class="blind">dd</h2>
        <div class="lB__inner">
            <figure class="MyprofileL">
                <img src="../../asset/img/profile.png" alt="프로필">
                <figcaption>누군가님 어서오세요!</figcaption>
                <a href="#">LOGOUT</a>
            </figure>            
            <div class="Myprofile">
                <ul>
                    <li>최근 접속 기록 : 00/ 00/ 00</li>
                    <li><a href="#">나의 정보</a></li>
                    <li><a href="#">나의 반려견</a></li>
                    <li>나의 글 : 00개</li>
                    <li>댓글 수 : 00개</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="imageType" class="imageType">
        <div class="imageType__inner">
            <h2>COMMUNITY</h2>
            <p>위니멀 커뮤니티에서 다양한 사람들과 좋은 정보를 나눠보세요!</p>
            <figure>
                <img src="../../asset/img/mainBanner.jpg" alt="">
            </figure>
        </div>

    </section>

    <section id="boardType" class="boardType container">
        <div class="board__inner">
            <div class="Option">
                <div class="Option_category">
                    <p>CATEGORY<em>|</em></p>
                    <select name="searchOption" id="searchOption1" class="searchOption">
                        <option value="Category1">옵션1</option>
                        <option value="Category2">옵션2</option>
                        <option value="Category3">옵션3</option>
                    </select>
                </div>
                <div class="Option_category">
                    <p>날짜선택<em>|</em></p>
                    <!-- <select type="date" name="searchOption" id="searchOption2" class="searchOption">
                        <option value="Date"></option>
                    </select> -->
                    <input type="date" name="searchOption" id="searchOption2" class="searchOption" value="2022-01-01">
                </div>
            </div>
            <div class="board_ranking">
                <h3>BEST Ranking</h3>
                <div class="ranking__inner">
                    <span class="weekBest active">주간 인기글</span><span class="MonthBest">월간 인기글</span>
                    <table class="weekTable">
                        <colgroup>
                            <col style="width: 3%">
                            <col style="width: 67%">
                            <col style="width: 8%; text-align: right;">
                            <col style="width: 12%; text-align: right;">
                        </colgroup>
                        <tr class="board_ranking_tr">
                            <td>1</td>
                            <td>홀란드는 진짜 전설이다 ㄷㄷ</td>
                            <td>이영환 님</td>
                            <td>2022 / 10 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>2</td>
                            <td>아니 우리 강아지 배고프다는데요</td>
                            <td>문병내 님</td>
                            <td>2022 / 10 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>3</td>
                            <td>제라드가 더 좋지않나요?</td>
                            <td>김다빈 님</td>
                            <td>2022 / 10 / 08</td>
                        </tr>
                    </table>
                    <table class="monthTable close">
                        <colgroup>
                            <col style="width: 3%">
                            <col style="width: 67%">
                            <col style="width: 8%; text-align: right;">
                            <col style="width: 12%; text-align: right;">
                        </colgroup>
                        <tr class="board_ranking_tr">
                            <td>4</td>
                            <td>홀란드 득점왕 갱신할듯</td>
                            <td>이영환 님</td>
                            <td>2022 / 09 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>5</td>
                            <td>고양이는 배부르데요</td>
                            <td>문병내 님</td>
                            <td>2022 / 09 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>6</td>
                            <td>리버풀 개망함</td>
                            <td>김다빈 님</td>
                            <td>2022 / 09 / 08</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="borad__table">
                <table class="table">
                    <colgroup>
                        <col style="width: 7%">
                        <col style="width: 66%">
                        <col style="width: 9%">
                        <col style="width: 14%">
                        <col style="width: 5%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>글쓴이</th>
                            <th>글쓴날짜</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tbody class="main_table_body">
                        <tr>
                            <td>1</td>
                            <td>미국강아지 어떤가요?</td>
                            <td>이영환</td>
                            <td>2022-09-16</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>강아지가 보고싶어요 </td>
                            <td>우모래</td>
                            <td>2022-09-16</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>고양이보단 강아지가 나은거같아요</td>
                            <td>가슴동</td>
                            <td>2022-09-16</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>요즘 강아지 털갈이가..</td>
                            <td>사장님</td>
                            <td>2022-09-16</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>강아지가 이상해요 요즘</td>
                            <td>언사소</td>
                            <td>2022-09-16</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>님들 이거 왜이런거임?</td>
                            <td>꺼펑이</td>
                            <td>2022-09-16</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>아.. 집에가고싶다..</td>
                            <td>정벽처</td>
                            <td>2022-09-16</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>강아지보단 고양이가 더 좋은거같아요</td>
                            <td>서렬등</td>
                            <td>2022-09-16</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>요즘 어떤 강아지들이 인기많나요??</td>
                            <td>흰여로</td>
                            <td>2022-09-16</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>우리 강아지 상태좀 봐주세요!!</td>
                            <td>뽈란드</td>
                            <td>2022-09-16</td>
                            <td>34</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
            <div class="borad__pages">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
            <div class="search__box">
                <form action="." method="post">
                    <fieldset>
                        <input class="search-txt" type="text" placeholder="검색어를 입력해주세요." required>
                        <button class="search-btn" type="submit">SEARCH</button>
                        <a href="#" class="board_write">글쓰기</a>
                    </fieldset>
                </form>
              </div>
        </div>
    </section>
    
</body>

<footer id="footer" class="footer">
    <h2>
        winimal Copyright 2022. All Rights Reserved
        <button><a href="">문의하기</a></button>
    </h2>
</footer>

<script src="../../asset/js/header_hamburger.js"></script>
<script>
    //date 오늘 날짜 출력
    const now = new Date();
    // yyyy-mm-dd 포맷 날짜 생성
    function getYmd10() {     
        var d = new Date();
        return d.getFullYear() + "-" + ((d.getMonth()+1)>9 ? (d.getMonth()+1).toString() : "0"+(d.getMonth()+1)) + "-" + (d.getDate()>9 ? d.getDate().toString() : "0"+d.getDate().toString());
    }
    var myElement = document.getElementById("searchOption2");
    myElement.value = getYmd10();
    console.log("오늘: " + getYmd10());  // 오늘 날짜 출력됨 


    // 인기글 탭메뉴
    const tabMenuWeek = document.querySelector(".weekBest");
    const tabMenuMonth = document.querySelector(".MonthBest");
    const weekTable = document.querySelector(".weekTable");
    const monthTable = document.querySelector(".monthTable");

    tabMenuMonth.addEventListener("click", () => {
        tabMenuMonth.classList.add("active");
        tabMenuWeek.classList.remove("active");
        monthTable.classList.remove("close");
        weekTable.classList.add("close");
    });

    tabMenuWeek.addEventListener("click", () => {
        tabMenuWeek.classList.add("active");
        tabMenuMonth.classList.remove("active");
        weekTable.classList.remove("close");
        monthTable.classList.add("close");
    });


    // 게시판 링크 부여
    const tableTitle = document.querySelectorAll("table tr td:nth-child(2)");

    tableTitle.forEach((e, i) => {
        let tableContents = e.innerText;
        tableContents = "<a href=#'>" + tableContents + "</a>";
        e.innerHTML = tableContents;
    });


    //게시판 글쓴이 p태그 부여
    const tableUsername = document.querySelectorAll(".main_table_body tr td:nth-child(3)");

    tableUsername.forEach((e, i) => {
        let tableborder = e.innerText;
        tableborder = "<p>" + tableborder + "</p>";
        e.innerHTML = tableborder;
    });
</script>

</html>