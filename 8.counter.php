<?php
    // 啟動 session 機制，這樣才能使用 $_SESSION 來儲存資料
    session_start();

    // 檢查是否已經有 "counter" 這個 session 變數
    if (!isset($_SESSION["counter"]))
        // 如果沒有，代表是第一次進入此頁，將 counter 初始化為 1
        $_SESSION["counter"] = 1;
    else
        // 如果已存在，代表使用者已經重新整理或再次進入此頁，將 counter 增加 1
        $_SESSION["counter"]++;

    // 顯示目前的 counter 值
    echo "counter=" . $_SESSION["counter"];

    // 顯示一個連結，指向 9.reset_counter.php，讓使用者可以重置 counter
    echo "<br><a href='9.reset_counter.php'>重置counter</a>";
?>
