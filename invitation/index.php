<?php

use Connection\Database;

require_once __DIR__ . "/../Connection/Database.php";

$con = new Database();
$db = $con->connection();

$to = isset($_GET['to']) ? $_GET['to'] : '';

$db = $db->prepare('SELECT * FROM message ORDER BY id DESC');
$db->execute();

$data = $db->fetchAll();

?>

<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Gantari&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/all.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body>

    <div class="full-card overflow-x-hidden overflow-y-hidden" id="card-invite">
        <section id="home">
            <div class="bg-first w-full">
                <div class="container mx-auto px-10 md:px-16 pt-10">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <div class="md:flex md:justify-center md:items-center md:gap-x-10">
                            <div class="mb-10 md:md-0">
                                <img src="../image/first.jpg" class="rounded-full w-52 md:w-60 mx-auto" alt="">
                                <h3 class="text-center text-2xl md:text-3xl text-neutral-50 font-playball mt-3">Yakob & Ranti</h3>
                            </div>
                            <div class="md:w-3/6 text-center md:text-left">
                                <h3 class="text-neutral-50 text-xl md:text-2xl mb-5">
                                    وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُوْنَ
                                </h3>
                                <p class="text-neutral-50 text-sm md:text-base font-gantari">
                                    "Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah)." (QS. Az Zariyat: 49).
                                </p>
                            </div>
                        </div>
                        <div class="ayat-second text-center mt-10 md:mt-0">
                            <h3 class="text-neutral-50 text-xl md:text-2xl mb-5">
                                فَجَعَلَ مِنۡهُ الزَّوۡجَيۡنِ الذَّكَرَ وَالۡاُنۡثٰىؕ
                            </h3>
                            <p class="text-neutral-50 text-sm md:text-base font-gantari">
                                "Lalu Allah menjadikan daripadanya sepasang: laki-laki dan perempuan." (QS. Al-Qiyamah Ayat 39).
                            </p>
                        </div>
                        <h3 class="my-10 text-2xl md:text-3xl text-center text-neutral-50 font-gantari">Menuju Hari Bahagia</h3>
                        <div class="flex justify-center items-center gap-x-4 sm:gap-x-5 md:gap-x-6 lg:gap-x-7 mt-10">
                            <div class="bg-sky-600 rounded-md py-1 px-4 md:px-5 md:py-1.5 w-20 md:w-24 text-center font-gantari bg-sky-500 text-neutral-50">
                                <h3 class="block font-bold" id="day"></h3>
                                <p>Hari</p>
                            </div>
                            <div class="bg-sky-600 rounded-md py-1 px-4 md:px-5 md:py-1.5 w-20 md:w-24 text-center font-gantari bg-sky-500 text-neutral-50">
                                <h3 class="block font-bold" id="hour"></h3>
                                <p>Jam</p>
                            </div>
                            <div class="bg-sky-600 rounded-md py-1 px-4 md:px-5 md:py-1.5 w-20 md:w-24 text-center font-gantari bg-sky-500 text-neutral-50">
                                <h3 class="block font-bold" id="minute"></h3>
                                <p>Menit</p>
                            </div>
                            <div class="bg-sky-600 rounded-md py-1 px-4 md:px-5 md:py-1.5 w-20 md:w-24 text-center font-gantari bg-sky-500 text-neutral-50">
                                <h3 class="block font-bold" id="second"></h3>
                                <p>Detik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#273036" fill-opacity="1" d="M0,0L21.8,48C43.6,96,87,192,131,213.3C174.5,235,218,181,262,144C305.5,107,349,85,393,80C436.4,75,480,85,524,106.7C567.3,128,611,160,655,154.7C698.2,149,742,107,785,106.7C829.1,107,873,149,916,176C960,203,1004,213,1047,192C1090.9,171,1135,117,1178,101.3C1221.8,85,1265,107,1309,117.3C1352.7,128,1396,128,1418,128L1440,128L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
            </svg>
        </section>

        <section id="acara" class="my-20">
            <div class="container mx-auto px-10 md:px-16" data-aos="fade-up" data-aos-duration="1500">
                <div class="flex justify-between mb-10">
                    <div class="p-16 border-t-4 border-l-4 border-gray-800"></div>
                    <div class="p-16 border-r-4 border-t-4 border-gray-800"></div>
                </div>
                <div class="md:flex md:justify-center md:items-center md:gap-x-10 space-y-10 md:space-y-0" id="nick">
                    <div>
                        <img src="../image/yakob.png" class="w-64 rounded-md mx-auto" alt="">
                        <h3 class="text-3xl font-semibold font-playball text-center mt-3">Yakob Zainal Rifai</h3>
                        <p class="text-xl text-center">14/09/1997</p>
                    </div>
                    <div class=" text-2xl md:text-3xl flex justify-center">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <div>
                        <img src="../image/ranti.png" class="w-64 rounded-md mx-auto" alt="">
                        <h3 class="text-3xl font-semibold font-playball text-center mt-3">Arindi Amiranti</h3>
                        <p class="text-xl text-center">07/01/1998</p>
                    </div>
                </div>
                <div class="flex justify-center mt-10">
                    <div class="h-1.5 rounded-full bg-first w-3/6"></div>
                </div>
                <div class="flex justify-center mt-10">
                    <h3 class="text-3xl md:text-4xl font-gantari">Minggu, 24 Juli 2022</h3>
                </div>
                <div class="flex justify-center mt-10">
                    <div class="h-1.5 rounded-full bg-first w-3/6"></div>
                </div>

                <div class="flex justify-between mt-20">
                    <div class="p-16 border-b-4 border-l-4 border-gray-800"></div>
                    <div class="p-16 border-b-4 border-r-4 border-gray-800"></div>
                </div>
            </div>

            <div class="mt-20">
                <div class="container mx-auto px-10">
                    <div class="title" data-aos="fade-up" data-aos-duration="1500">
                        <h3 class="text-3xl font-semibold font-gantari text-center">Sosial Distancing</h3>
                        <div class="flex justify-center my-5">
                            <div class="h-1 rounded-full w-full bg-gray-700"></div>
                        </div>
                    </div>
                    <div class="md:flex md:justify-center mt-16 gap-x-28">
                        <div class="md:w-3/6" data-aos="fade-right" data-aos-duration="1500">
                            <h3 class="md:text-xl text-lg font-gantari">Mencuci tangan atau memakai Hand Sanitizer sebelum masuk kedalam acara pernikahan sekaligus menjaga kebersihan diri.</h3>
                        </div>
                        <div class="md:w-3/6 mt-5 md:mt-0" data-aos="fade-left" data-aos-duration="1500">
                            <img src="../image/cucitangan.png" class="w-auto " alt="">
                        </div>
                    </div>
                    <div class="md:flex md:justify-center mt-16 gap-x-28">
                        <div class="md:w-3/6 mt-5 md:mt-0" data-aos="fade-left" data-aos-duration="1500">
                            <h3 class="md:text-xl text-lg font-gantari">Saat berada dalam acara pernikahan berikan jarak terhadap orang lain minimal 1 meter.</h3>
                        </div>
                        <div class="md:w-3/6" data-aos="fade-right" data-aos-duration="1500">
                            <img src="../image/jagajarak.png" class="w-auto " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e5e7eb" fill-opacity="1" d="M0,96L30,85.3C60,75,120,53,180,48C240,43,300,53,360,96C420,139,480,213,540,213.3C600,213,660,139,720,96C780,53,840,43,900,53.3C960,64,1020,96,1080,138.7C1140,181,1200,235,1260,240C1320,245,1380,203,1410,181.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>

        <section id="galeri">
            <div class="bg-gray-200 w-full py-10">
                <div class="container mx-auto px-10">
                    <div class="mb-10">
                        <h3 class="text-3xl font-semibold font-gantari text-center">Galeri</h3>
                    </div>
                    <div class="" data-aos="fade-up" data-aos-duration="1500">
                        <div class="max-w-xs mx-auto">

                            <div id="default-carousel" class="relative" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="overflow-hidden relative rounded-lg h-96">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                        <img src="../image/landing.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="../image/IMG_5552.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="../image/IMG_5493.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                    </div>
                                </div>
                                <!-- Slider indicators -->
                                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                        <span class="hidden">Previous</span>
                                    </span>
                                </button>
                                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        <span class="hidden">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10" data-aos="fade-up" data-aos-duration="1500">
                        <div class="max-w-xs mx-auto">

                            <div id="default-carousel" class="relative" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="overflow-hidden relative rounded-lg h-96">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                        <img src="../image/IMG_5390.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="../image/IMG_5422.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="../image/IMG_5454.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                    </div>
                                </div>
                                <!-- Slider indicators -->
                                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                        <span class="hidden">Previous</span>
                                    </span>
                                </button>
                                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        <span class="hidden">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="maps mt-10">
                    <h3 class="text-3xl font-semibold font-gantari text-center mb-10">Lokasi Maps</h3>

                    <div class="container mx-auto px-10 md:px-16 lg:px-20">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.227400127145!2d106.70734169679984!3d-6.10004675652865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02d8fdfb55f5%3A0x22a0fa44470beac6!2sPenegak%2C%20RW.1%2C%20Kamal%2C%20Kec.%20Kalideres%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011810!5e0!3m2!1sid!2sid!4v1657276890266!5m2!1sid!2sid" class="w-full" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="container mx-auto px-10">
                        <p class="text-lg font-gantari">NB : Jika membawa kendaraan roda empat, parkir dipergudangan kamal indah.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="reservasi">
            <div class="bg-neutral-300 w-full pb-10">
                <div class="container px-10 mx-auto py-20">
                    <div class="mb-10">
                        <h3 class="text-3xl font-semibold font-gantari text-center">Berikan Pesan</h3>
                    </div>
                    <div class="">
                        <div class="bg-neutral-50 rounded-md shadow-md px-2 py-3 h-32 overflow-auto">
                            <div class="message h-full font-gantari">
                                <?php foreach ($data as $d) : ?>
                                    <div class="mb-2">
                                        <div class="flex gap-x-3 items-center">
                                            <h3 class="font-semibold"><i><?= $d['name'] ?></i></h3>
                                            <div class="
                                                <?php if ($d['ket'] == "Hadir") : ?>
                                                    bg-green-500 rounded-md px-1.5 py-0.5 text-white text-xs
                                                <?php endif ?>
                                                <?php if ($d['ket'] == "Masih Ragu") : ?>
                                                    bg-yellow-500 rounded-md px-1.5 py-0.5 text-white text-xs
                                                <?php endif ?>
                                                <?php if ($d['ket'] == "Tidak Hadir") : ?>
                                                    bg-red-500 rounded-md px-1.5 py-0.5 text-white text-xs
                                                <?php endif ?>
                                            "><?= $d['ket'] ?></div>
                                        </div>
                                        <p class="text-sm">Pesan : <?= $d['content'] ?></p>
                                        <hr>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                    </div>

                    <div class="w-full mt-10">
                        <form action="message.php" method="post">
                            <input name="name" type="text" class="w-full  rounded-md focus:outline-none px-3 py-1.5" placeholder="Nama">
                            <select name="ket" class="mt-5 w-full rounded-md bg-neutral focus:outline-none px-3 py-1.5" id="">
                                <option value="Hadir">Hadir</option>
                                <option value="Masih Ragu">Masih Ragu</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                            <textarea name="content" class="mt-5 w-full rounded-md bg-neutral focus:outline-none px-3 py-1.5" id="" cols="30" rows="5" placeholder="Pesan.."></textarea>
                            <button type="submit" class="mt-5 rounded-md px-3 py-1.5 bg-sky-500 text-white">Kirim</button>
                        </form>
                    </div>

                    <div class="mt-10">
                        <div class="mb-10">
                            <h3 class="text-3xl font-semibold font-gantari text-center">Amplop Digital</h3>
                        </div>
                        <div class="bg-neutral-50 rounded-md px-5 py-3">
                            <img src="../image/bca.png" class="w-32 mx-auto" alt="">
                            <h3 class="text-lg font-gantari text-center my-3"><span id="rek" class="font-semibold">5310721371</span> An Arindi Amiranti</h3>
                            <button onclick="copyToClipboard()" class="w-full bg-blue-500 hover:bg-blue-600 transition-all px-3 py-1.5 rounded-md text-white focus:bg-blue-700"><i class="fa-regular fa-copy"></i> Salin No.Rek</button>
                            <p class="text-xs text-center mt-2" id="salin_berhasil"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="fixed bottom-0 w-full shadow-xl">
            <div class="bg-neutral-50 rounded-t-md w-full shadow-lg h-3/6">
                <div class="py-3 px-5 mx-auto flex justify-center items-center gap-x-3 sm:gap-x-7 md:gap-x-9 lg:gap-x-10">
                    <a href="#home" class="bg-white px-2 py-1 sm:px-3 py-2 lg:px-4 lg:py-3 rounded-full text-center hover:bg-sky-200 transition-all shadow-lg ">
                        <div class="font-semibold font-gananta text-sm md:text-base"><i class="fa-solid fa-house-chimney"></i></div>
                        <h3 class="font-semibold font-gananta text-sm md:text-base">Home</h3>
                    </a>
                    <a href="#acara" class="bg-white px-2 py-1 sm:px-3 py-2 lg:px-4 lg:py-3 rounded-full text-center hover:bg-sky-200 transition-all shadow-lg">
                        <div class="font-semibold font-gananta text-sm md:text-base"><i class="fa-solid fa-calendar-check"></i></div>
                        <h3 class="font-semibold font-gananta text-sm md:text-base">Acara</h3>
                    </a>
                    <a href="#galeri" class="bg-white px-2 py-1 sm:px-3 py-2 lg:px-4 lg:py-3 rounded-full text-center hover:bg-sky-200 transition-all shadow-lg">
                        <div class="font-semibold font-gananta text-sm md:text-base"><i class="fa-solid fa-photo-film"></i></div>
                        <h3 class="font-semibold font-gananta text-sm md:text-base">Galeri</h3>
                    </a>
                    <a href="#reservasi" class="bg-white px-2 py-1 sm:px-3 py-2 lg:px-4 lg:py-3 rounded-full text-center hover:bg-sky-200 transition-all shadow-lg">
                        <div class="font-semibold font-gananta text-sm md:text-base"><i class="fa-solid fa-comment-dots"></i></div>
                        <h3 class="font-semibold font-gananta">Pesan</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <audio autoplay loop>
        <source src="../asset/audio/music.mp3" type="audio/mp3">
    </audio>

    <script>
        function copyToClipboard() {
            const suc = document.getElementById('salin_berhasil')

            navigator.clipboard.writeText('5310721371').then(() => {
                
                suc.textContent = 'Berhasil Salin'
            });
        }
    </script>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../asset/js/all.js"></script>
    <script src="../asset/js/script.js"></script>
</body>

</html>