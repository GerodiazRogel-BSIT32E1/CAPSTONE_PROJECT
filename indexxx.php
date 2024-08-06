<?php
session_start();
include('./config/db_connection.php');


if (isset($_SESSION['success'])) {
    echo "<div class='alert' id='success-message' style='padding: 20px; margin-bottom: 20px; color: #3c763d; background-color: #dff0d8; border: 1px solid #d6e9c6; border-radius: 4px;'>";
    echo $_SESSION['success'];
    echo "</div>";
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    echo "<div class='alert' id='error-message' style='padding: 20px; margin-bottom: 20px; color: black; background-color: #FF6868; border: 1px solid #DCFFB7; border-radius: 4px;'>";
    echo $_SESSION['error'];
    echo "</div>";
    unset($_SESSION['error']);
}
if (isset($_SESSION['logout_success'])) {
    echo "<div class='alert' id='logout-message' style='padding: 20px; margin-bottom: 20px; color: #3c763d; background-color: #dff0d8; border: 1px solid #d6e9c6; border-radius: 4px;'>";
    echo $_SESSION['logout_success'];
    echo "</div>";
    unset($_SESSION['logout_success']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Login</title>
</head>

<body>
    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url('./images/lyceum.jpg');">
        <div class="absolute bg-gradient-to-b from-yellow-400 to-blue-400 opacity-75 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
            <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
                <div class="self-start hidden lg:flex flex-col text-center text-black">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 font-bold text-5xl">Lyceum of Alabang OSA</h1>
                    <p class="pr-3 text-black"> Main Bldg. Km. 30 National Road, Tunasan, Muntinlupa City</p>
                </div>
            </div>
            <div class="flex justify-center self-center  z-10">
                <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
                    <div class="mb-4">
                        <h3 class="font-semibold text-2xl text-gray-800">Sign In </h3>
                        <p class="text-gray-500">Please sign in to your account.</p>
                    </div>
                    <div class="space-y-5">

                        <form action="./Login/Login.php" method="POST">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-700 tracking-wide">Username</label>
                                <input class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" name="username" type="text" placeholder="Enter your username">
                            </div>
                            <div class="space-y-2">
                                <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                                    Password
                                </label>
                                <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" name="password" type="password" placeholder="Enter your password">
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="flex items-center">

                                </div>
                                <div class="text-sm">
                                    <a href="#" class="text-green-400 hover:text-green-500">
                                        Forgot your password?
                                    </a>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="pt-5 text-center text-gray-400 text-xs">
                        <span>
                            Copyright © 2024-2025
                            <a href="https://lyceumalabang.edu.ph/" rel="" target="_blank" title="Ajimon" class="text-green hover:text-green-500 ">LOA</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="./javascript/sessionmessage.js"></script>

</html>