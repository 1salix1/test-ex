<?php
/**
 * Created by PhpStorm.
 * User: salix
 * Date: 24.11.2018
 * Time: 17:11
 */
?>

<html>
<body>
<a href="/">Main page</a>
<?php
if (isset($_GET['result'])){
    echo "result=".$_GET['result'];
}
?>
</body>
</html>