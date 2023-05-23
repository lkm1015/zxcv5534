<div style="font:size 30px;font-weight:bold; color:red;">
<?php
echo "<h1>재난문자 정보</h1>";
?>
</div>
<?php
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch1, CURLOPT_URL, $messageUri);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch1, CURLOPT_VERBOSE, 0);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
$response1 = curl_exec($ch1);
$arr2= json_decode($response1,true);

    foreach($arr2["DisasterMsg2"][1]["row"] as $arr3){
        echo $arr3["create_date"]."<br>"; //재난문자 수신 날짜
        echo $arr3["location_name"]."<br>"; //재난이 발생한 주소
        echo $arr3["msg"]."<hr><br>"; //재난문자 내용
    
    }
?>