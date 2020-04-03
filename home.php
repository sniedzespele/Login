<?php
session_start();
if(!isset($_SESSION['username'])){
    header('index.php');
}
require_once 'head.php';
?>
<a href="logout.php">LOGOUT</a>
<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
<?php
require_once 'footer.php';
