<?php
session_start();
if(isset($_SESSION['username']))
{
    $_SESSION['msg'] = "You must log in first to view this page";
    header("location : Login.php");
}
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header("location : Login.php");
}
?>
<?php 
if(isset($_SESSION['success'])) : ?>
<div>
    <h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div>
<?php endif ?>

<?php if(isset($_SESSION['username'])) : ?>
    <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    <button><a href = "index.php?logout='1'"></a></button>
<?php endif ?>