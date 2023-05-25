<?php
include('main/page.php');
include('main/triptop.php');
?>

<?php
//trip.php에서의 검색 결과가 여행지만 나오게
//ex) trip.php에서 서울검색시 서울의 여행지만 나오게

$page = $_GET["page"];
$a = $_GET["trip"];
$Area=urlencode($a);

include('main/case.php');

$areaUri= "https://apis.data.go.kr/B551011/KorService1/areaBasedList1?serviceKey=E%2BtYKbl8Zfj065tKHO%2BCkITDTCtAUsO%2FeBtnqQWouaJr8%2FJmVMzZ%2BTtcylbMsR%2B%2Fct28ekxvIHcWVJBbp3CEtg%3D%3D&numOfRows=10&pageNo=". $page ."&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&contentTypeId=12&areaCode=" . $a;

include('API/area.php');
?>

<nav aria-label="Page navigation example">
      <ul class="ct" >
      <ul class="pagination" >
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="trip.php?trip=<?php echo $Area;?>&page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="trip.php?trip=<?php echo $Area;?>&page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="trip.php?trip=<?php echo $Area;?>&page=3">3</a></li>
        <li class="page-item"><a class="page-link" href="trip.php?trip=<?php echo $Area;?>&page=4">4</a></li>
        <li class="page-item"><a class="page-link" href="trip.php?trip=<?php echo $Area;?>&page=5">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
          </a>
        </li>
      </ul>
      </ul>
    </nav>

</body>
</html>
 