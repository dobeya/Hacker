<?php
// PHP代码，可能会根据某些条件设置一个变量
$showPopup = true;
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Popup Example</title>
    <script type="text/javascript">
        // 当页面加载完成时执行的函数
        window.onload = function() {
            <?php if ($showPopup) : ?>
                // 如果$showPopup为true，则弹出警告窗口
                alert("Hello,i'm little hacker! Don't be worry,i am very friendly！");
            <?php endif; ?>
        };
    </script>
</head>
<body>
    <h1>页面内容</h1>
    <!-- 页面的其他内容 -->
</body>
</html>