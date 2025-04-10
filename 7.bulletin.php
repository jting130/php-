<?php
# mysqli_connect() 建立資料庫連線，這裡是連接到 db4free.net 資料庫
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

# mysqli_query() 執行 SQL 查詢，這裡查詢 bulletin 表格中的所有資料
    $result = mysqli_query($conn, "select * from bulletin");

# 開始輸出 HTML 表格，並設定表格的邊框為 2
    echo "<table border=2>";

# 設定表格的表頭，顯示欄位名稱
    echo "<tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

# 使用 while 迴圈，逐筆抓取資料庫中的每一筆資料
    while ($row = mysqli_fetch_array($result)) {
# 開始一行表格資料
        echo "<tr><td>";
# 顯示每一筆資料中的佈告編號（bid）
        echo $row["bid"];
        echo "</td><td>";

# 顯示每一筆資料中的佈告類別（type）
        echo $row["type"];
        echo "</td><td>"; 

# 顯示每一筆資料中的標題（title）
        echo $row["title"];
        echo "</td><td>";

# 顯示每一筆資料中的佈告內容（content）
        echo $row["content"];
        echo "</td><td>";

# 顯示每一筆資料中的發佈時間（time）
        echo $row["time"];
        echo "</td></tr>";
    }

# 結束表格的輸出
    echo "</table>";
?>
