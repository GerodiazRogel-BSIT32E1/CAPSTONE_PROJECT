<?php
session_start();
include('./config/db_connection.php');

if (isset($_SESSION['UserID'])) {
    $userId = $_SESSION['UserID'];

    $query = "SELECT FirstName, LastName FROM tblUsers WHERE UserID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $_SESSION['FirstName'] = $user['FirstName'];
    $_SESSION['LastName'] = $user['LastName'];
} else {
    // Redirect to login page or show an error
}

// Display session messages
// if (isset($_SESSION['success'])) {
//     echo "<div class='alert' id='success-message' style='padding: 20px; margin-bottom: 20px; color: #3c763d; background-color: #dff0d8; border: 1px solid #d6e9c6; border-radius: 4px;'>";
//     echo $_SESSION['success'];
//     echo "</div>";
//     unset($_SESSION['success']);
// }

if (isset($_SESSION['error'])) {
    echo "<div class='alert' id='error-message' style='padding: 20px; margin-bottom: 20px; color: black; background-color: #FF6868; border: 1px solid #DCFFB7; border-radius: 4px;'>";
    echo $_SESSION['error'];
    echo "</div>";
    unset($_SESSION['error']);
}

// $activeMenu = 'dashboard';
// include('./components/sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Main Dashboard</title>
</head>

<body style="display: flex; flex-direction: row;">
    <div style="width: 20%; height: 100%;">
    <?php 
        $activeMenu = 'dashboard';
        include('./components/sidebar.php'); 
        ?>
    </div>
    <div id="content" style="flex-grow: 1; height: 100%;">
        <?php include('./components/BarGraph.php') ?>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./javascript/sessionmessage.js"></script>
<script src="./javascript//active.js"></script>

</html>