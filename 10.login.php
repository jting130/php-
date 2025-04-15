<?php
   // 使用 mysqli_connect() 建立與資料庫的連線
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   // 使用 mysqli_query() 從 user 資料表查詢所有使用者資料
   $result = mysqli_query($conn, "SELECT * FROM user");

   // 設定登入狀態變數，預設為 FALSE（尚未登入）
   $login = FALSE;

   // 使用 mysqli_fetch_array() 一筆一筆抓出資料
   while ($row = mysqli_fetch_array($result)) {
       // 檢查使用者輸入的帳號密碼是否與資料庫中的某筆資料相符
       if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
           $login = TRUE;  // 若符合，設為已登入
       }
   } 

   // 根據登入結果做回應
   if ($login == TRUE) {
       // 登入成功，啟動 session
       session_start();

       // 將使用者 id 存入 session 變數中
       $_SESSION["id"] = $_POST["id"];

       // 顯示登入成功訊息
       echo "登入成功";

       // 3 秒後跳轉到 11.bulletin.php 頁面
       echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
   } else {
       // 登入失敗，顯示錯誤訊息
       echo "帳號/密碼 錯誤";

       // 3 秒後跳轉回登入頁面
       echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
   }
?>
