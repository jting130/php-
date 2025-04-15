<?php
    // 關閉錯誤報告（不建議在開發時使用，除非你有明確的理由）
    error_reporting(0);

    // 啟動 session
    session_start();

    // 檢查是否有登入（session 裡是否有 "id"）
    if (!$_SESSION["id"]) {
        // 如果尚未登入，顯示提示訊息並在 3 秒後導回登入頁面
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    } else {
        // 如果已登入，顯示歡迎訊息及功能選單
        echo "歡迎, " . $_SESSION["id"] . " ";
        echo "[<a href='12.logout.php'>登出</a>] ";
        echo "[<a href='18.user.php'>管理使用者</a>] ";
        echo "[<a href='22.bulletin_add_form.php'>新增佈告</a>]<br>";

        // 建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 從 bulletin 資料表中查詢所有佈告
        $result = mysqli_query($conn, "SELECT * FROM bulletin");

        // 顯示佈告表格的標題列
        echo "<table border=2>
                <tr>
                    <td>操作</td>
                    <td>佈告編號</td>
                    <td>佈告類別</td>
                    <td>標題</td>
                    <td>佈告內容</td>
                    <td>發佈時間</td>
                </tr>";

        // 使用迴圈列出所有查詢到的佈告資料
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

            // 提供修改與刪除的超連結，將 bid 當作參數傳遞
            echo "<td>
                    <a href='26.bulletin_edit_form.php?bid={$row["bid"]}'>修改</a> 
                    <a href='28.bulletin_delete.php?bid={$row["bid"]}'>刪除</a>
                  </td>";

            // 顯示各欄位資料
            echo "<td>" . $row["bid"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["content"] . "</td>";
            echo "<td>" . $row["time"] . "</td>";

            echo "</tr>";
        }

        // 關閉表格
        echo "</table>";
    }
?>
