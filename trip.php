<?php
include('main/triptop.php');
?>

<?php
//trip.php에서의 검색 결과가 여행지만 나오게
//ex) trip.php에서 서울검색시 서울의 여행지만 나오게

$a = $_GET["trip"];
$Area=urlencode($a);

include('main/case.php');

$areaUri= "https://apis.data.go.kr/B551011/KorService1/areaBasedList1?serviceKey=E%2BtYKbl8Zfj065tKHO%2BCkITDTCtAUsO%2FeBtnqQWouaJr8%2FJmVMzZ%2BTtcylbMsR%2B%2Fct28ekxvIHcWVJBbp3CEtg%3D%3D&numOfRows=10&pageNo=1&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&contentTypeId=12&areaCode=" . $a;

include('API/area.php');
?>

</body>
</html>
 