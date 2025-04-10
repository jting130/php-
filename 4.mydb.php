<?php
# mysqli_connect() 建立資料庫連線（參數依序是：主機、使用者、密碼、資料庫名稱）
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
# mysqli_query() 向資料庫發出查詢指令，這裡是查詢 user 資料表中所有資料
    $result=mysqli_query($conn, "select * from user");
# mysqli_fetch_array() 從查詢結果中一筆一筆取出資料（這是第一筆）
    $row=mysqli_fetch_array($result);
# 顯示第一筆資料的 id 和 pwd 欄位，用 . 做字串連接，並加上 HTML 換行標籤 <br>
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
# 再次從查詢結果中抓出下一筆資料（這是第二筆）
    $row=mysqli_fetch_array($result);
# 顯示第二筆資料的 id 和 pwd 欄位
    echo $row["id"] . " " . $row["pwd"];
?>
