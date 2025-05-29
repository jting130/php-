<html>
    <head>
        <title>新增使用者</title> <!-- 網頁標題 -->
    </head>
    <body>

<?php        
    // 關閉錯誤訊息顯示
    error_reporting(0);

    // 啟用 session 功能
    session_start();

    // 檢查是否有登入（session 中是否有 "id" 這個變數）
    if (!$_SESSION["id"]) {
        // 如果沒有登入，顯示提示訊息
        echo "請登入帳號";

        // 3 秒後重新導向到登入頁面 (2.login.html)
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {    
        // 如果已經登入，顯示新增使用者的表單
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br> <!-- 使用者帳號輸入框 -->
                密碼：<input type=text name=pwd><p></p> <!-- 使用者密碼輸入框 -->
                <input type=submit value=新增> <!-- 提交表單按鈕 -->
                <input type=reset value=清除> <!-- 重設表單按鈕 -->
            </form>
        ";
    }
?>

    </body>
</html>
