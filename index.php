<?php 
include_once 'components/action/actions.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<!-- Header Component -->
    <?php include('components/common-components/Head.php') ?>  
<body>
    <?php 
    // Checker for session, if !$_SESSION['userid'] return LoginPage Component
        include (!isset($_SESSION['userID'])? 'components/login/LoginPage.php' : 'components/homepage/HomePage.php');
    //scripts
        include 'components/scripts/scripts.php';   
    ?>
</body>
    <!-- Packages -->
    <?php include './components/scripts/root.php'; ?>
</html>
 