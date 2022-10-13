<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>약관 동의</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">

    <!-- 약관 동의 CSS -->
    <link rel="stylesheet" href="../asset/css/login/Agree.css">
    <link rel="stylesheet" href="../asset/css/login/login.css">
</head>
<body>
    <?php include "../include/header.php"?>
    
    <div class="agree__popup">            
        <div class="agree__inner">
            <div class="agree__header">
                <h2>회원가입</h2>
            </div>
            <div>
                <div class="check">
                    <input type="checkbox" name="agreeCheck" id="agreeCheck1" value="agreeCheck1" required>
                    <label for="agreeCheck1">개인정보 수집 동의</label>
                </div>
                <div class="desc">
                    <div class="desc_in">
                        <ul>
                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다.</li>
                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다.</li>
                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다.</li>
                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다.</li>
                        </ul>
                    </div>
                </div>
            </div>                
            <div>
                <div class="check">
                    <input type="checkbox" name="agreeCheck" id="agreeCheck2" value="agreeCheck2" required>
                    <label for="agreeCheck2">PHP 개인정보 수집 동의</label>
                </div>
                <div class="desc">
                    <div class="desc_in">
                        <ul>
                            <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                            <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                            <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                            <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                            <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                            <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                            <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                            <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="check">
                    <input type="checkbox" name="agreeCheck" id="agreeCheck3" value="agreeCheck3">
                    <label for="agreeCheck3">마케팅 정보 수신동의 (선택)</label>
                </div>
                <div class="desc">
                    <div class="desc_in">
                        <ul>
                            <li>개인정보 이용 상세내용</li>
                            <li>이용하는 개인정보 : 휴대전화번호,이메일 주소, 쿠키정보</li>
                            <li>보유 이용 목적 : 혜택 정보,각종 이벤트 정보 등 광고성 정보 제공</li>
                            <li>보유기간 : 회원탈퇴 후 5일까지</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="checkAll">
                <input type="checkbox" name="agreeCheckAll" id="agreeCheckAll" onclick="selectAll(this)">
                <label for="agreeCheckAll">전체 동의하기</label>
            </div>
            <div class="agree__footer">
                <li class="cancel_btn">취소</li>
                <li class="confirm_btn"><a href="../php/join.php">확인</a></li>
            </div>
            <div class="close_btn">
                <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#ffffff"/>
                    <path d="M5.33334 4.66675L14.6667 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                    <path d="M14.6667 4.66675L5.33333 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
        <div class="agree_require close">
            <div>
                <p>약관 동의에 체크해주세요.</p>
                <button onclick="requireBtn(this)">확인</button>
            </div>
        </div>
    </div>

    <script>
        // 공통 선택자
        const agree_checkAll = document.querySelector("#agreeCheckAll");
        const agree_check = document.querySelectorAll(".check input");


        const aggre_checkArray = [...agree_check];

        // 전체 동의 on일시 전부 on, off일시 전부 off 
        function selectAll(selectAll){  
            agree_check.forEach((checkbox) => {
                checkbox.checked = selectAll.checked;
            })
            confirmButton(selectAll);
        };

        // 각각 개별적으로 전부 선택시 전체 동의 on 하나라도 아닐시 off
        aggre_checkArray.forEach((e, i) => {
            aggre_checkArray[i].addEventListener("click", () => {
                if(aggre_checkArray[0].checked == true && aggre_checkArray[1].checked == true && aggre_checkArray[2].checked == true){
                    agree_checkAll.checked = true;
                } else if(aggre_checkArray[0].checked == false || aggre_checkArray[1].checked == false || aggre_checkArray[2].checked == false){
                    agree_checkAll.checked = false;
                }
                    confirmButton();
            });
        });

        // 필수 동의 체크시 확인 버튼 활성화
        function confirmButton(){
            const agree_conBtn = document.querySelector(".confirm_btn");
            if(aggre_checkArray[0].checked == true && aggre_checkArray[1].checked){
                agree_conBtn.classList.add("confirm_btnC")

                agreeToJoin(agree_conBtn);
            } else if(aggre_checkArray[0].checked == false || aggre_checkArray[1].checked == false){
                agree_conBtn.classList.remove("confirm_btnC")
            }
        }
        confirmButton();

        // // alert 창
        // const agree_conBtn = document.querySelector(".confirm_btn");
        // const agree_require = document.querySelector(".agree_require");
        // agree_conBtn.addEventListener("click", (e) => {
        //     if (aggre_checkArray[0].checked !== true || aggre_checkArray[1].checked !== true) {
        //         agree_require.classList.remove("close");
        //     }
        // });

        // function requireBtn(click) {
        //     click.addEventListener("click", () => {
        //         agree_require.classList.add("close");
        //     });
        // }


    </script>
</body>
</html>