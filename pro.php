<?php
include('main/page.php');
include('main/maintop.php');
?>
<?php
$page = $_GET["page"];
$trip = $_GET["search"];
$Area=urlencode($_GET["search"]);
$areaUri= "https://apis.data.go.kr/B551011/KorService1/searchKeyword1?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&numOfRows=10&pageNo=". $page ."&MobileOS=ETC&MobileApp=AppTest&_type=json&listYN=Y&arrange=A&keyword=". $Area ."&contentTypeId=39";

include('API/area.php');//지역API



?>

<nav aria-label="Page navigation example">
      <ul class="ct" >
      <ul class="pagination" >
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=3">3</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=4">4</a></li>
        <li class="page-item"><a class="page-link" href="pro2.php?search=<?php echo $Area;?>&page=5">5</a></li>
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
