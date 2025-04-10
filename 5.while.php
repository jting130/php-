<?php
# mysqli_connect() 建立資料庫連線（參數分別是：主機、使用者、密碼、資料庫名稱）
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
# mysqli_query() 向資料庫送出查詢指令，這裡是查詢 user 資料表中的所有資料
   $result=mysqli_query($conn, "select * from user");
# mysqli_fetch_array() 從查詢結果中一筆一筆抓出資料
# 使用 while 迴圈，直到所有資料都被抓完為止
   while ($row=mysqli_fetch_array($result)) {
# 顯示每一筆資料的 id 和 pwd 欄位，用空格分隔，並加上 HTML 的換行標籤 <br>
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
