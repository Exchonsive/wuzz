<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'index_user':
                include "pages_user/base_user.php";
                break;
            case 'index_admin':
                include "pages_admin/base_admin.php";
                break;

            default:
                include "404.php";
                break;
        }
    } else {
        include "login.php";
    }
    ?>
</body>

</html>