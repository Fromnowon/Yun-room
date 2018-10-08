<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
<table style="width: 100%">
    <tr>
        <td style="width: 500px">
            <div class="course_list_div">
                <table class="course_list">
                    <tr class="course_th">
                        <td>
                            课程名称
                        </td>
                        <td>
                            时间
                        </td>
                        <td colspan="2">
                            操作
                        </td>
                    </tr>
                    <?php
                    include 'modules/course_list.php';
                    ?>
                </table>
            </div>
            <div class="page">这是页码</div>
        </td>
        <td>
            <div class="player">

            </div>
        </td>
    </tr>
</table>


</body>
</html>