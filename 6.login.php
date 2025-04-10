<?php
# mysqli_connect() 建立資料庫連線，這裡是連接到 db4free.net 的資料庫
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
# mysqli_query() 執行 SQL 查詢，這裡查詢 user 資料表中的所有資料
   $result=mysqli_query($conn, "select * from user");
# mysqli_fetch_array() 用來逐筆取出資料，並將帳號密碼比對
# 設定一個變數 $login 用來儲存是否登入成功的結果，預設為 FALSE
   $login=FALSE;
# 使用 while 迴圈一筆一筆檢查查詢結果中的資料
   while ($row=mysqli_fetch_array($result)) {
# 如果表單輸入的帳號（id）和密碼（pwd）與資料庫中的資料相符，則登入成功
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
# 如果成功比對，就將 $login 設為 TRUE     
        $login=TRUE;
     }
   } 
# 判斷 $login 是否為 TRUE，若為 TRUE 表示登入成功，否則顯示錯誤訊息  
if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
