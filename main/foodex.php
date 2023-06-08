<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>가라GO</title>
    <link rel="stylesheet" href="mainup.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bighead">
  <div class="searchArea">
            <form method="get" action="pro.php?page=1" >
            <input type="text" placeholder="검색어를 입력하세요" name="search">
            <button type="submit">검색</button>
        </form>
          </div>
          <ul class="nav">
            <div class="home-button">
              <a href="main.html">
                <img src="photo/exlogo.png">
              </a>
            </div>
            <li><a href="nofood.php?page=1">맛집</a></li>
            <li><a href="notrip.php?page=1">여행지</a></li>
            <li><a href="noculture.php?page=1">문화재</a></li>
            <li><a href="nofestival.php?page=1">축제</a></li>
          </ul>
  </div>
    <div class="con">
    <nav id="topNav" class="top-bar__menu-box-1">
      <ul>
        <li>
          <a href="naver1.php?trip=<?php echo "서울";?>">서울</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "강남";?>">강남</a></li>
            <li><a href="naver1.php?trip=<?php echo "강동";?>">강동</a></li>
            <li><a href="naver1.php?trip=<?php echo "강북";?>">강북</a></li>
            <li><a href="naver1.php?trip=<?php echo "강서";?>">강서</a></li>
            <li><a href="naver1.php?trip=<?php echo "관악";?>">관악</a></li>
            <li><a href="naver1.php?trip=<?php echo "광진";?>">광진</a></li>
            <li><a href="naver1.php?trip=<?php echo "구로";?>">구로</a></li>
            <li><a href="naver1.php?trip=<?php echo "금천";?>">금천</a></li>
            <li><a href="naver1.php?trip=<?php echo "노원";?>">노원</a></li>
            <li><a href="naver1.php?trip=<?php echo "도봉";?>&">도봉</a></li>
            <li><a href="naver1.php?trip=<?php echo "동대문";?>&">동대문</a></li>
            <li><a href="naver1.php?trip=<?php echo "동작";?>&">동작</a></li>
            <li><a href="naver1.php?trip=<?php echo "마포";?>&">마포</a></li>
            <li><a href="naver1.php?trip=<?php echo "서대문";?>&">서대문</a></li>
            <li><a href="naver1.php?trip=<?php echo "서초";?>&">서초</a></li>
            <li><a href="naver1.php?trip=<?php echo "성동";?>&">성동</a></li>
            <li><a href="naver1.php?trip=<?php echo "성북";?>&">성북</a></li>
            <li><a href="naver1.php?trip=<?php echo "송파";?>&">송파</a></li>
            <li><a href="naver1.php?trip=<?php echo "양천";?>&">양천</a></li>
            <li><a href="naver1.php?trip=<?php echo "영등포";?>&">영등포</a></li>
            <li><a href="naver1.php?trip=<?php echo "용산";?>&">용산</a></li>
            <li><a href="naver1.php?trip=<?php echo "은평";?>&">은평</a></li>
            <li><a href="naver1.php?trip=<?php echo "종로";?>&">종로</a></li>
            <li><a href="naver1.php?trip=<?php echo "중구";?>&">중구</a></li>
            <li><a href="naver1.php?trip=<?php echo "중랑";?>&">중랑</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?trip=<?php echo "부산";?>">부산</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "강서";?>">강서</a></li>
            <li><a href="naver1.php?trip=<?php echo "금정";?>">금정</a></li>
            <li><a href="naver1.php?trip=<?php echo "기장";?>">기장</a></li>
            <li><a href="naver1.php?trip=<?php echo "남구";?>">남구</a></li>
            <li><a href="naver1.php?trip=<?php echo "동구";?>">동구</a></li>
            <li><a href="naver1.php?trip=<?php echo "동래";?>">동래</a></li>
            <li><a href="naver1.php?trip=<?php echo "부산진구";?>">부산진구</a></li>
            <li><a href="naver1.php?trip=<?php echo "북구";?>">북구</a></li>
            <li><a href="naver1.php?trip=<?php echo "사상";?>">사상</a></li>
            <li><a href="naver1.php?trip=<?php echo "사하";?>&">사하</a></li>
            <li><a href="naver1.php?trip=<?php echo "서구";?>&">서구</a></li>
            <li><a href="naver1.php?trip=<?php echo "수영";?>&">수영</a></li>
            <li><a href="naver1.php?trip=<?php echo "연제";?>&">연제</a></li>
            <li><a href="naver1.php?trip=<?php echo "영도";?>&">영도</a></li>
            <li><a href="naver1.php?trip=<?php echo "중구";?>&">중구</a></li>
            <li><a href="naver1.php?trip=<?php echo "해운대";?>&">해운대</a></li>
           </ul>
        </li>
        <li>
          <a href="#">인천</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "강화";?>">강화</a></li>
            <li><a href="naver1.php?trip=<?php echo "계양";?>">계양</a></li>
            <li><a href="naver1.php?trip=<?php echo "미추홀";?>">미추홀</a></li>
            <li><a href="naver1.php?trip=<?php echo "남동";?>">남동</a></li>
            <li><a href="naver1.php?trip=<?php echo "동구";?>">동구</a></li>
            <li><a href="naver1.php?trip=<?php echo "부평";?>">부평</a></li>
            <li><a href="naver1.php?trip=<?php echo "서구";?>">서구</a></li>
            <li><a href="naver1.php?trip=<?php echo "연수";?>">연수</a></li>
            <li><a href="naver1.php?trip=<?php echo "옹진";?>">옹진</a></li>
            <li><a href="naver1.php?trip=<?php echo "중구";?>&">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="#">대구</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "남구";?>">남구</a></li>
            <li><a href="naver1.php?trip=<?php echo "달서";?>">달서</a></li>
            <li><a href="naver1.php?trip=<?php echo "달성";?>">달성</a></li>
            <li><a href="naver1.php?trip=<?php echo "동구";?>">동구</a></li>
            <li><a href="naver1.php?trip=<?php echo "북구";?>">북구</a></li>
            <li><a href="naver1.php?trip=<?php echo "서구";?>">서구</a></li>
            <li><a href="naver1.php?trip=<?php echo "수성";?>">수성</a></li>
            <li><a href="naver1.php?trip=<?php echo "중구";?>">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="#">대전</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "대덕";?>">대덕</a></li>
            <li><a href="naver1.php?trip=<?php echo "동구";?>">동구</a></li>
            <li><a href="naver1.php?trip=<?php echo "서구";?>">서구</a></li>
            <li><a href="naver1.php?trip=<?php echo "유성";?>">유성</a></li>
            <li><a href="naver1.php?trip=<?php echo "중구";?>">중구</a></li>
          </ul>
        </li>
        <li>
          <a href="#">광주</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "광산";?>">광산</a></li>
            <li><a href="naver1.php?trip=<?php echo "남구";?>">남구</a></li>
            <li><a href="naver1.php?trip=<?php echo "동구";?>">동구</a></li>
            <li><a href="naver1.php?trip=<?php echo "북구";?>">북구</a></li>
            <li><a href="naver1.php?trip=<?php echo "서구";?>">서구</a></li>
          </ul>
        </li>
        <li>
          <a href="#">울산</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "중구";?>">중구</a></li>
            <li><a href="naver1.php?trip=<?php echo "남구";?>">남구</a></li>
            <li><a href="naver1.php?trip=<?php echo "동구";?>">동구</a></li>
            <li><a href="naver1.php?trip=<?php echo "북구";?>">북구</a></li>
            <li><a href="naver1.php?trip=<?php echo "울주";?>">울주</a></li>
          </ul>
        </li>
        <li>
          <a href="naver1.php?trip=<?php echo "세종";?>">세종</a>
          <!-- <ul>
            <li><a href="naver1.php?trip=<?// echo "세종";?>">중구</a></li>
          </ul> -->
        </li>
        <li>
          <a href="#">강원</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "강릉";?>">강릉</a></li>
            <li><a href="naver1.php?trip=<?php echo "고성";?>">고성</a></li>
            <li><a href="naver1.php?trip=<?php echo "동해";?>">동해</a></li>
            <li><a href="naver1.php?trip=<?php echo "삼척";?>">삼척</a></li>
            <li><a href="naver1.php?trip=<?php echo "속초";?>">속초</a></li>
            <li><a href="naver1.php?trip=<?php echo "양구";?>">양구</a></li>
            <li><a href="naver1.php?trip=<?php echo "양양";?>">양양</a></li>
            <li><a href="naver1.php?trip=<?php echo "영월";?>">영월</a></li>
            <li><a href="naver1.php?trip=<?php echo "원주";?>">원주</a></li>
            <li><a href="naver1.php?trip=<?php echo "인제";?>&">인제</a></li>
            <li><a href="naver1.php?trip=<?php echo "정선";?>&">정선</a></li>
            <li><a href="naver1.php?trip=<?php echo "철원";?>&">철원</a></li>
            <li><a href="naver1.php?trip=<?php echo "춘천";?>&">춘천</a></li>
            <li><a href="naver1.php?trip=<?php echo "태백";?>&">태백</a></li>
            <li><a href="naver1.php?trip=<?php echo "평창";?>&">평창</a></li>
            <li><a href="naver1.php?trip=<?php echo "홍천";?>&">홍천</a></li>
            <li><a href="naver1.php?trip=<?php echo "화천";?>&">화천</a></li>
            <li><a href="naver1.php?trip=<?php echo "횡성";?>&">횡성</a></li>
          </ul>
        </li>
        <li>
          <a href="#">경기</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "가평";?>">가평</a></li>
            <li><a href="naver1.php?trip=<?php echo "고양";?>">고양</a></li>
            <li><a href="naver1.php?trip=<?php echo "과천";?>">과천</a></li>
            <li><a href="naver1.php?trip=<?php echo "광명";?>">광명</a></li>
            <li><a href="naver1.php?trip=<?php echo "광주";?>">광주</a></li>
            <li><a href="naver1.php?trip=<?php echo "구리";?>">구리</a></li>
            <li><a href="naver1.php?trip=<?php echo "군포";?>">군포</a></li>
            <li><a href="naver1.php?trip=<?php echo "김포";?>">김포</a></li>
            <li><a href="naver1.php?trip=<?php echo "남양주";?>">남양주</a></li>
            <li><a href="naver1.php?trip=<?php echo "동두천";?>&">동두천</a></li>
            <li><a href="naver1.php?trip=<?php echo "부천";?>&">부천</a></li>
            <li><a href="naver1.php?trip=<?php echo "성남";?>&">성남</a></li>
            <li><a href="naver1.php?trip=<?php echo "수원";?>&">수원</a></li>
            <li><a href="naver1.php?trip=<?php echo "시흥";?>&">시흥</a></li>
            <li><a href="naver1.php?trip=<?php echo "안산";?>&">안산</a></li>
            <li><a href="naver1.php?trip=<?php echo "안성";?>&">안성</a></li>
            <li><a href="naver1.php?trip=<?php echo "안양";?>&">안양</a></li>
            <li><a href="naver1.php?trip=<?php echo "양주";?>&">양주</a></li>
            <li><a href="naver1.php?trip=<?php echo "양평";?>&">양평</a></li>
            <li><a href="naver1.php?trip=<?php echo "여주";?>&">여주</a></li>
            <li><a href="naver1.php?trip=<?php echo "연천";?>&">연천</a></li>
            <li><a href="naver1.php?trip=<?php echo "오상";?>&">오상</a></li>
            <li><a href="naver1.php?trip=<?php echo "용인";?>&">용인</a></li>
            <li><a href="naver1.php?trip=<?php echo "의왕";?>&">의왕</a></li>
            <li><a href="naver1.php?trip=<?php echo "의정부";?>&">의정부</a></li>
            <li><a href="naver1.php?trip=<?php echo "이천";?>&">이천</a></li>
            <li><a href="naver1.php?trip=<?php echo "파주";?>&">파주</a></li>
            <li><a href="naver1.php?trip=<?php echo "평택";?>&">평택</a></li>
            <li><a href="naver1.php?trip=<?php echo "포천";?>&">포천</a></li>
            <li><a href="naver1.php?trip=<?php echo "하남";?>&">하남</a></li>
            <li><a href="naver1.php?trip=<?php echo "화성";?>&">화성</a></li>
          </ul>
        </li>
        <li>
          <a href="#">전북</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "고창";?>">고창</a></li>
            <li><a href="naver1.php?trip=<?php echo "군산";?>">군산</a></li>
            <li><a href="naver1.php?trip=<?php echo "김제";?>">김제</a></li>
            <li><a href="naver1.php?trip=<?php echo "남원";?>">남원</a></li>
            <li><a href="naver1.php?trip=<?php echo "무주";?>">무주</a></li>
            <li><a href="naver1.php?trip=<?php echo "부안";?>">부안</a></li>
            <li><a href="naver1.php?trip=<?php echo "순창";?>">순창</a></li>
            <li><a href="naver1.php?trip=<?php echo "완주";?>">완주</a></li>
            <li><a href="naver1.php?trip=<?php echo "익산";?>">익산</a></li>
            <li><a href="naver1.php?trip=<?php echo "임실";?>&">임실</a></li>
            <li><a href="naver1.php?trip=<?php echo "장수";?>&">장수</a></li>
            <li><a href="naver1.php?trip=<?php echo "전주";?>&">전주</a></li>
            <li><a href="naver1.php?trip=<?php echo "정읍";?>&">정읍</a></li>
            <li><a href="naver1.php?trip=<?php echo "진안";?>&">진안</a></li>
          </ul>
        </li>
        <li>
          <a href="#">전남</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "강진";?>">강진</a></li>
            <li><a href="naver1.php?trip=<?php echo "고흥";?>">고흥</a></li>
            <li><a href="naver1.php?trip=<?php echo "곡성";?>">곡성</a></li>
            <li><a href="naver1.php?trip=<?php echo "광양";?>">광양</a></li>
            <li><a href="naver1.php?trip=<?php echo "구례";?>">구례</a></li>
            <li><a href="naver1.php?trip=<?php echo "나주";?>">나주</a></li>
            <li><a href="naver1.php?trip=<?php echo "담양";?>">담양</a></li>
            <li><a href="naver1.php?trip=<?php echo "목포";?>">목포</a></li>
            <li><a href="naver1.php?trip=<?php echo "무안";?>">무안</a></li>
            <li><a href="naver1.php?trip=<?php echo "보성";?>&">보성</a></li>
            <li><a href="naver1.php?trip=<?php echo "순천";?>&">순천</a></li>
            <li><a href="naver1.php?trip=<?php echo "신안";?>&">신안</a></li>
            <li><a href="naver1.php?trip=<?php echo "여수";?>&">여수</a></li>
            <li><a href="naver1.php?trip=<?php echo "영광";?>&">영광</a></li>
            <li><a href="naver1.php?trip=<?php echo "영암";?>&">영암</a></li>
            <li><a href="naver1.php?trip=<?php echo "완도";?>&">완도</a></li>
            <li><a href="naver1.php?trip=<?php echo "장성";?>&">장성</a></li>
            <li><a href="naver1.php?trip=<?php echo "장흥";?>&">장흥</a></li>
            <li><a href="naver1.php?trip=<?php echo "진도";?>&">진도</a></li>
            <li><a href="naver1.php?trip=<?php echo "함평";?>&">함평</a></li>
            <li><a href="naver1.php?trip=<?php echo "해남";?>&">해남</a></li>
            <li><a href="naver1.php?trip=<?php echo "화순";?>&">화순</a></li>
          </ul>
        </li>
        <li>
          <a href="#">충북</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "괴산";?>">괴산</a></li>
            <li><a href="naver1.php?trip=<?php echo "단양";?>">단양</a></li>
            <li><a href="naver1.php?trip=<?php echo "보은";?>">보은</a></li>
            <li><a href="naver1.php?trip=<?php echo "영동";?>">영동</a></li>
            <li><a href="naver1.php?trip=<?php echo "옥천";?>">옥천</a></li>
            <li><a href="naver1.php?trip=<?php echo "음성";?>">음성</a></li>
            <li><a href="naver1.php?trip=<?php echo "제천";?>">제천</a></li>
            <li><a href="naver1.php?trip=<?php echo "진천";?>">진천</a></li>
            <li><a href="naver1.php?trip=<?php echo "청원";?>">청원</a></li>
            <li><a href="naver1.php?trip=<?php echo "청주";?>&">청주</a></li>
            <li><a href="naver1.php?trip=<?php echo "충주";?>&">충주</a></li>
            <li><a href="naver1.php?trip=<?php echo "증평";?>&">증평</a></li>
          </ul>
        </li>
        <li>
          <a href="#">충남</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "공주";?>">공주</a></li>
            <li><a href="naver1.php?trip=<?php echo "금산";?>">금산</a></li>
            <li><a href="naver1.php?trip=<?php echo "논산";?>">논산</a></li>
            <li><a href="naver1.php?trip=<?php echo "당진";?>">당진</a></li>
            <li><a href="naver1.php?trip=<?php echo "보령";?>">보령</a></li>
            <li><a href="naver1.php?trip=<?php echo "부여";?>">부여</a></li>
            <li><a href="naver1.php?trip=<?php echo "서산";?>">서산</a></li>
            <li><a href="naver1.php?trip=<?php echo "서천";?>">서천</a></li>
            <li><a href="naver1.php?trip=<?php echo "아산";?>">아산</a></li>
            <li><a href="naver1.php?trip=<?php echo "예산";?>&">예산</a></li>
            <li><a href="naver1.php?trip=<?php echo "천안";?>&">천안</a></li>
            <li><a href="naver1.php?trip=<?php echo "청양";?>&">청양</a></li>
            <li><a href="naver1.php?trip=<?php echo "태안";?>&">태안</a></li>
            <li><a href="naver1.php?trip=<?php echo "홍성";?>&">홍성</a></li>
            <li><a href="naver1.php?trip=<?php echo "계롱";?>&">계롱</a></li>
          </ul>
        </li>
        <li>
          <a href="#">경북</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "경산";?>">경산</a></li>
            <li><a href="naver1.php?trip=<?php echo "경주";?>">경주</a></li>
            <li><a href="naver1.php?trip=<?php echo "고령";?>">고령</a></li>
            <li><a href="naver1.php?trip=<?php echo "구미";?>">구미</a></li>
            <li><a href="naver1.php?trip=<?php echo "군위";?>">군위</a></li>
            <li><a href="naver1.php?trip=<?php echo "김천";?>">김천</a></li>
            <li><a href="naver1.php?trip=<?php echo "문경";?>">문경</a></li>
            <li><a href="naver1.php?trip=<?php echo "봉화";?>">봉화</a></li>
            <li><a href="naver1.php?trip=<?php echo "상주";?>">상주</a></li>
            <li><a href="naver1.php?trip=<?php echo "성주";?>&">성주</a></li>
            <li><a href="naver1.php?trip=<?php echo "안동";?>&">안동</a></li>
            <li><a href="naver1.php?trip=<?php echo "영덕";?>&">영덕</a></li>
            <li><a href="naver1.php?trip=<?php echo "영양";?>&">영양</a></li>
            <li><a href="naver1.php?trip=<?php echo "영주";?>&">영주</a></li>
            <li><a href="naver1.php?trip=<?php echo "영천";?>&">영천</a></li>
            <li><a href="naver1.php?trip=<?php echo "예천";?>&">예천</a></li>
            <li><a href="naver1.php?trip=<?php echo "울릉";?>&">울릉</a></li>
            <li><a href="naver1.php?trip=<?php echo "울진";?>&">울진</a></li>
            <li><a href="naver1.php?trip=<?php echo "의성";?>&">의성</a></li>
            <li><a href="naver1.php?trip=<?php echo "청도";?>&">청도</a></li>
            <li><a href="naver1.php?trip=<?php echo "청송";?>&">청송</a></li>
            <li><a href="naver1.php?trip=<?php echo "칠곡";?>&">칠곡</a></li>
            <li><a href="naver1.php?trip=<?php echo "포항";?>&">포항</a></li>
        </ul> 
        </li>
        <li>
          <a href="#">경남</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "거제";?>">거제</a></li>
            <li><a href="naver1.php?trip=<?php echo "거창";?>">거창</a></li>
            <li><a href="naver1.php?trip=<?php echo "고성";?>">고성</a></li>
            <li><a href="naver1.php?trip=<?php echo "김해";?>">김해</a></li>
            <li><a href="naver1.php?trip=<?php echo "남해";?>">남해</a></li>
            <li><a href="naver1.php?trip=<?php echo "마산";?>">마산</a></li>
            <li><a href="naver1.php?trip=<?php echo "밀양";?>">밀양</a></li>
            <li><a href="naver1.php?trip=<?php echo "사천";?>">사천</a></li>
            <li><a href="naver1.php?trip=<?php echo "산청";?>">산청</a></li>
            <li><a href="naver1.php?trip=<?php echo "양산";?>&">양산</a></li>
            <li><a href="naver1.php?trip=<?php echo "의령";?>&">의령</a></li>
            <li><a href="naver1.php?trip=<?php echo "진주";?>&">진주</a></li>
            <li><a href="naver1.php?trip=<?php echo "진해";?>&">진해</a></li>
            <li><a href="naver1.php?trip=<?php echo "창녕";?>&">창녕</a></li>
            <li><a href="naver1.php?trip=<?php echo "창원";?>&">창원</a></li>
            <li><a href="naver1.php?trip=<?php echo "통영";?>&">통영</a></li>
            <li><a href="naver1.php?trip=<?php echo "하동";?>&">하동</a></li>
            <li><a href="naver1.php?trip=<?php echo "함안";?>&">함안</a></li>
            <li><a href="naver1.php?trip=<?php echo "함양";?>&">함양</a></li>
            <li><a href="naver1.php?trip=<?php echo "합천";?>&">합천</a></li>
          </ul>
        </li>
        <li>
          <a href="#">전북</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "고창";?>">고창</a></li>
            <li><a href="naver1.php?trip=<?php echo "군산";?>">군산</a></li>
            <li><a href="naver1.php?trip=<?php echo "김제";?>">김제</a></li>
            <li><a href="naver1.php?trip=<?php echo "남원";?>">남원</a></li>
            <li><a href="naver1.php?trip=<?php echo "무주";?>">무주</a></li>
            <li><a href="naver1.php?trip=<?php echo "부안";?>">부안</a></li>
            <li><a href="naver1.php?trip=<?php echo "순창";?>">순창</a></li>
            <li><a href="naver1.php?trip=<?php echo "완주";?>">완주</a></li>
            <li><a href="naver1.php?trip=<?php echo "익산";?>">익산</a></li>
            <li><a href="naver1.php?trip=<?php echo "임실";?>&">임실</a></li>
            <li><a href="naver1.php?trip=<?php echo "장수";?>&">장수</a></li>
            <li><a href="naver1.php?trip=<?php echo "전주";?>&">전주</a></li>
            <li><a href="naver1.php?trip=<?php echo "정읍";?>&">정읍</a></li>
            <li><a href="naver1.php?trip=<?php echo "진안";?>&">진안</a></li>
          </ul>
        </li>
        <li>
          <a href="#">전남</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "강진";?>">강진</a></li>
            <li><a href="naver1.php?trip=<?php echo "고흥";?>">고흥</a></li>
            <li><a href="naver1.php?trip=<?php echo "곡성";?>">곡성</a></li>
            <li><a href="naver1.php?trip=<?php echo "광양";?>">광양</a></li>
            <li><a href="naver1.php?trip=<?php echo "구례";?>">구례</a></li>
            <li><a href="naver1.php?trip=<?php echo "나주";?>">나주</a></li>
            <li><a href="naver1.php?trip=<?php echo "담양";?>">담양</a></li>
            <li><a href="naver1.php?trip=<?php echo "목포";?>">목포</a></li>
            <li><a href="naver1.php?trip=<?php echo "무안";?>">무안</a></li>
            <li><a href="naver1.php?trip=<?php echo "보성";?>&">보성</a></li>
            <li><a href="naver1.php?trip=<?php echo "순천";?>&">순천</a></li>
            <li><a href="naver1.php?trip=<?php echo "신안";?>&">신안</a></li>
            <li><a href="naver1.php?trip=<?php echo "여수";?>&">여수</a></li>
            <li><a href="naver1.php?trip=<?php echo "영광";?>&">영광</a></li>
            <li><a href="naver1.php?trip=<?php echo "영암";?>&">영암</a></li>
            <li><a href="naver1.php?trip=<?php echo "완도";?>&">완도</a></li>
            <li><a href="naver1.php?trip=<?php echo "장성";?>&">장성</a></li>
            <li><a href="naver1.php?trip=<?php echo "장흥";?>&">장흥</a></li>
            <li><a href="naver1.php?trip=<?php echo "진도";?>&">진도</a></li>
            <li><a href="naver1.php?trip=<?php echo "함평";?>&">함평</a></li>
            <li><a href="naver1.php?trip=<?php echo "해남";?>&">해남</a></li>
            <li><a href="naver1.php?trip=<?php echo "화순";?>&">화순</a></li>
          </ul>
        </li>
        <li>
          <a href="#">제주</a>
          <ul>
            <li><a href="naver1.php?trip=<?php echo "서귀포";?>">서귀포</a></li>
            <li><a href="naver1.php?trip=<?php echo "제주";?>">제주</a></li>
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
  <!-- <script>
    var nav = $("#topNav");

  //add indicators and hovers to submenu parents
    nav.find("li").each(function() {
    if ($(this).find("ul").length > 0) {

        $("<span>").text("^").appendTo($(this).children(":first"));

        //show subnav on hover
        $(this).click(function() {
            $(this).find("ul").stop(true, true).slideToggle();
        });
    }
});
  </script> -->

</body>
</html>


	</header>
</body>