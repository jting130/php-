<?php
    // 啟動 session 機制，才能使用 $_SESSION 儲存與讀取資料
    session_start();

    // 如果 session 中尚未存在 "counter" 變數（代表第一次進入此頁面）
    if (!isset($_SESSION["counter"])) {
        // 將 counter 初始化為 1
        $_SESSION["counter"] = 1;
    } else {
        // 如果已經存在（使用者重新整理或再次造訪頁面）
        // 就把 counter 加 1
        $_SESSION["counter"]++;
    }

    // 顯示目前的 counter 值
    echo "counter=" . $_SESSION["counter"];

    // 顯示一個超連結，讓使用者可以點擊來重設 counter
    echo "<br><a href='9.reset_counter.php'>重置counter</a>";
?>
