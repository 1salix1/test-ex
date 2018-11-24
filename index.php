<?php
/**
 * Created by PhpStorm.
 * User: salix
 * Date: 24.11.2018
 * Time: 17:05
 */
?>
<html>
<body>
<?php
session_start() ;
if (isset($_SESSION['error']))
{
    ?>
    <div style="color:red">
    <?php echo $_SESSION['error']; ?>
    </div>
<?php
    unset($_SESSION['error']);
}
?>
<form action="/action.php" method="post">
<input type="tel" name="one"><br>
<input type="tel" name="two"><br>
    <input type="submit" value="calculate">
</form>
</body>
</html>
