<?php

use Connection\Database;

require_once __DIR__ . "/Connection/Database.php";

$con = new Database();
$db = $con->connection();

$to = isset($_GET['to']) ? $_GET['to'] : '';

?>

<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body>

<div class="flex justify-center" id="card">
    <div class="w-fit relative">
        <img src="image/landing.jpg" class="w-auto h-screen" alt="">
        <div class="bg-black w-full absolute top-0 h-screen opacity-60"></div>
        <div class="absolute top-0 h-screen w-full">
            <div class="flex h-screen">
                <div class="m-auto">
                    <h3 class="text-4xl md:text-5xl font-playball text-white text-center ">The Wedding Of</h3>
                    <img src="image/landing2.png" class="w-52 md:w-56 mx-auto" alt="">
                    <h3 class="text-4xl md:text-5xl font-playball text-white text-center mb-2">Yakob & Ranti</h3>
                    <h3 class="text-2xl md:text-3xl font-playball text-white text-center">Kepada</h3>
                    <h3 class="text-2xl md:text-3xl font-playball text-white text-center mb-5"><?= $to ?></h3>
                    <a href="invitation" class="cursor-pointer text-center block font-gantari w-full hover:bg-neutral-300 transition-all bg-neutral-200 rounded-md px-3 py-1.5 shadow-md active:ring-2 ring-blue-500"><i class="fa-solid fa-book-open-reader"></i> <span class="ml-3">Buka Undangan</span></a>
                    <p class="text-xs md:text-sm font-gantari text-white text-center mt-2">Minggu, 24 Juli 2022</p>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="asset/js/all.js"></script>
    <script src="asset/js/script.js"></script>
</body>

</html>


