<?php
include('main/page.php');
include('main/maintop.php');
?>
<?php

//$trip = $_POST["search"];
//$Area=urlencode($_POST["search"]);

$messageUri="https://apis.data.go.kr/1741000/DisasterMsg4/getDisasterMsg2List?serviceKey=k2FhBBQxor2i%2B9pBvFADgh%2B6ld8CDQul1g46DdYsfyg40rzqKGlBNpHWPcgV88Nj0FFBbu2iFfC24Q3cNzUCXg%3D%3D&pageNo=1&numOfRows=10&type=JSON&create_date=2023/04/07%2000:00:00&location_name=%EC%84%9C%EC%9A%B8";


include('API/emer.php');//재난API
?>
</body>
</html>
