<?php
include('main/page.php');
include('main/festivaltop2.php');
?>
<?php

$a = $_GET["search"];
$Area=urlencode($a);
echo "<br>";

include('main/case.php');

$areaUri= "https://apis.data.go.kr/B551011/KorService1/areaBasedList1?serviceKey=E%2BtYKbl8Zfj065tKHO%2BCkITDTCtAUsO%2FeBtnqQWouaJr8%2FJmVMzZ%2BTtcylbMsR%2B%2Fct28ekxvIHcWVJBbp3CEtg%3D%3D&numOfRows=10&pageNo=1&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&contentTypeId=15&areaCode=" . $a;

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
        <li class="page-item"><a class="page-link" href="festival.php?trip=<?php echo $Area;?>&page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="festival.php?trip=<?php echo $Area;?>&page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="festival.php?trip=<?php echo $Area;?>&page=3">3</a></li>
        <li class="page-item"><a class="page-link" href="festival.php?trip=<?php echo $Area;?>&page=4">4</a></li>
        <li class="page-item"><a class="page-link" href="festival.php?trip=<?php echo $Area;?>&page=5">5</a></li>
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