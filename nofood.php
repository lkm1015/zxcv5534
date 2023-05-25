<?php
include('main/foodtap.php');
?>

<?php
$page = $_GET["page"];
$areaUri= "https://apis.data.go.kr/B551011/KorService1/areaBasedList1?serviceKey=E%2BtYKbl8Zfj065tKHO%2BCkITDTCtAUsO%2FeBtnqQWouaJr8%2FJmVMzZ%2BTtcylbMsR%2B%2Fct28ekxvIHcWVJBbp3CEtg%3D%3D&numOfRows=10&pageNo=". $page ."&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&contentTypeId=39&areaCode=1";
include('API/area.php');//지역API
?>

<nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="nofood.php?a=<?php echo $_GET["a"];?>&page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="nofood.php?a=<?php echo $_GET["a"];?>&page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="nofood.php?a=<?php echo $_GET["a"];?>&page=3">3</a></li>
        <li class="page-item"><a class="page-link" href="nofood.php?a=<?php echo $_GET["a"];?>&page=4">4</a></li>
        <li class="page-item"><a class="page-link" href="nofood.php?a=<?php echo $_GET["a"];?>&page=5">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
          </a>
        </li>
      </ul>
    </nav>
</body>
</html>