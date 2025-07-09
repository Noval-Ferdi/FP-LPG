<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        ELPIJI GAS
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins';
        }

        .dropdown-arrow {
            border-top: 4px solid black;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            width: 0;
            height: 0;
            display: inline-block;
            margin-left: 4px;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-white text-black">
    <!-- Header -->
    <header class="flex justify-between items-center px-4 py-3 max-w-screen-xl mx-auto">
        <div class="flex items-center space-x-6">
            <a href="dashboard.php"><img alt="Elpiji Gas logo, flame shape with purple and yellow colors"
                    class="w-17 h-22" height="50" src="images/ELPIJI_1.png" width="50" /></a>
            <nav class="flex space-x-5 text-l font-bold">
                <a class="hover:underline" href="agen.php">
                    AGEN
                </a>
                <div class="relative cursor-pointer" id="produk-menu">
                    <button id="produk-toggle" class="flex items-center hover:underline focus:outline-none">
                        PRODUK
                        <span class="dropdown-arrow ml-1"></span>
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="produk-dropdown"
                        class="absolute left-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg opacity-0 invisible transition duration-200 z-50">
                        <a href="produk3.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Elpiji
                            Gas 3Kg</a>
                        <a href="produk12.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Elpiji
                            12Kg</a>
                    </div>
                </div>
                <a class="hover:underline" href="cek_stok.php">
                    CEK STOK SEKARANG
                </a>
            </nav>
        </div>
        <div class="text-l font-extrabold text-right leading-tight">
            <a class="block hover:underline" href="login.php">
                MASUK / DAFTAR AGEN
            </a>
        </div>
    </header>

    <!-- Script -->
    <script>
        const toggleBtn = document.getElementById('produk-toggle');
        const dropdown = document.getElementById('produk-dropdown');

        toggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdown.classList.toggle('invisible');
            dropdown.classList.toggle('opacity-0');
            dropdown.classList.toggle('opacity-100');
            dropdown.classList.toggle('visible');
        });

        // Optional: hide dropdown if click outside
        document.addEventListener('click', (e) => {
            if (!document.getElementById('produk-menu').contains(e.target)) {
                dropdown.classList.add('invisible', 'opacity-0');
                dropdown.classList.remove('visible', 'opacity-100');
            }
        });
    </script>
    <!-- Hero Banner -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="relative rounded-md overflow-hidden">
            <img src="images/PNG.png" alt="">
        </div>
    </section>
    <!-- Features Section -->
    <section
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20 flex flex-col lg:flex-row items-center lg:items-start gap-10">
        <div class="flex-1 text-center lg:text-right mt-24">
            <h2 class="font-bold text-3xl sm:text-4xl leading-tight">
                ELPIJI GAS
            </h2>
            <p class="text-xl sm:text-2xl leading-tight">
                CERIAKAN KEHANGATAN
            </p>
            <p class="text-xl sm:text-2xl leading-tight">
                KELUARGA
            </p>
        </div>
        <div class="flex-1 space-y-6 w-full max-w-xl">
            <!-- Feature 1 -->
            <div class="flex items-center rounded-3xl p-4 text-white space-x-4"
                style="background-color: FF0000; padding-left: 30px;">
                <div class="flex-shrink-0 bg-blue-600 rounded-full p-3 flex items-center justify-center"
                    style="width: 48px; height: 48px;">
                    <i class="fas fa-shield-alt text-white text-xl">
                    </i>
                </div>
                <div class="text-xs leading-tight">
                    <p class="font-extrabold uppercase mb-1">
                        LEBIH AMAN
                    </p>
                    <p>
                        2x Lebih aman dengan teknologi DSVS (Double Spindle Valve System)
                        untuk mencegah terjadinya kebocoran gas serta dilengkapi dengan Seal
                        Cap Hologram pada bagian valve tabung untuk menjamin kualitas dan
                        kuantitas isi LPG.
                    </p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="flex items-center rounded-3xl p-4 text-white space-x-4"
                style="background-color: FF0000; padding: 30px;">
                <div class="flex-shrink-0 bg-blue-600 rounded-full p-3 flex items-center justify-center"
                    style="width: 48px; height: 48px;">
                    <i class="fas fa-phone-alt text-white text-xl">
                    </i>
                </div>
                <div class="text-xs leading-tight">
                    <p class="font-extrabold uppercase mb-1">
                        LEBIH PRAKTIS
                    </p>
                    <p>
                        Nikmati layanan pengecekan stok Pertamina Gas LPG ataupun pembelian
                        langsung ke Agen/Outlet LPG Pertamina, atau SPBU.
                    </p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="flex items-center rounded-3xl p-4 text-white space-x-4"
                style="background-color: FF0000; padding: 30px;">
                <div class="flex-shrink-0 bg-blue-600 rounded-full p-3 flex items-center justify-center"
                    style="width: 48px; height: 48px;">
                    <i class="fas fa-hand-holding-usd text-white text-xl">
                    </i>
                </div>
                <div class="text-xs leading-tight">
                    <p class="font-extrabold uppercase mb-1">
                        LEBIH HEMAT
                    </p>
                    <p>
                        Harga lebih terjangkau untuk kemasan 3 KG.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section -->
    <section class="bg-[#d7e9fb] mt-20 py-8 flex justify-center items-center">
        <a href="#"><i class="fab fa-instagram text-white text-6xl">
        </i></a>
    </section>
    <!-- Contact Section -->
    <section class="bg-[#fcd9db] py-16 max-w-8xl mx-auto px-5 sm:px-7 lg:px-7 flex flex-col lg:flex-row gap-5">
        <div class="flex-1 max-w-l" style="margin-top: 70px; font-size: 25px;">
            <h1 class="font-extrabold text-right mb-3">
                KONTAK KAMI
            </h1>
            <p class="text-xs leading-tight mb-3 text-right" style="font-size: 14px;">
                Silahkan tinggalkan pesan atau pertanyaan mengenai Website.</p>
            <p class="text-xs leading-tight mb-3 text-right" style="font-size: 14px;">
                 Kami akan menjawab segala pertanyaan anda secepatnya.</p>
            
        </div>
        <form action="#" class="flex-1 max-w-lg space-y-3" method="POST" style="margin-right: 200px;">
            <div class="flex space-x-3">
                <input
                    class="flex-1 rounded-md border border-gray-300 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-red-600"
                    name="firstName" placeholder="Nama Depan" required="" type="text" />
                <input
                    class="flex-1 rounded-md border border-gray-300 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-red-600"
                    name="lastName" placeholder="Nama Belakang" required="" type="text" />
            </div>
            <input
                class="w-full rounded-md border border-gray-300 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-red-600"
                name="email" placeholder="Email" required="" type="email" />
            <input
                class="w-full rounded-md border border-gray-300 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-red-600"
                name="phone" placeholder="No Handphone" required="" type="tel" />
            <textarea
                class="w-full rounded-md border border-gray-300 px-3 py-2 text-xs resize-none focus:outline-none focus:ring-1 focus:ring-red-600"
                name="message" placeholder="Tulis Pesan..." required="" rows="4"></textarea>
            <button class="bg-red-600 text-white text-s px-4 py-1 rounded-md float-right" type="submit">
                Kirim
            </button>
        </form>
    </section>
    <!-- Footer -->
    <footer class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center text-xs text-gray-600">
            <!-- Logo Bagian Kiri -->
            <div class="flex items-center space-x-4 mb-4 md:mb-0">
                <img alt="Pertamina logo" class="h-7 w-auto" height="40" src="images/PERTAMINA1.png" width="40" />
                <img alt="MyPertamina logo" class="h-7 w-auto" height="40" src="images/PertaminaAPK_1.png" width="40" />
                <img alt="135 logo" class="h-7 w-auto" height="40" src="images/CC-removebg-preview 1.png" width="40" />
            </div>

            <!-- Sosial Media Tengah -->
            <div class="absolute left-1/2 transform -translate-x-1/2 text-center font-extrabold">
                IKUTI MEDIA SOSIAL KAMI
                <div class="flex justify-center items-center space-x-4 mt-3">
                    <a aria-label="Facebook" class="text-gray-600 hover:text-black text-lg" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a aria-label="Instagram" class="text-gray-600 hover:text-black text-lg"
                        href="https://www.instagram.com/ahanifraka_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a aria-label="Twitter" class="text-gray-600 hover:text-black text-lg" href="#">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a aria-label="YouTube" class="text-gray-600 hover:text-black text-lg" href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- FAQ & KONTAK Kanan -->
            <div class="text-gray-400 text-xs text-right space-y-1 hidden md:block">
                <div><a href="">FAQ</a></div>
                <div><a href="">KONTAK</a></div>
            </div>
        </div>
    </footer>
    <!-- Bottom Red Bar -->
    <div class="bg-red-600 text-white text-center text-xs py-3 px-4">
        <p>
            Best view in Mozilla Firefox and Google Chrome.
        </p>
        <p>
            Copyright © ELPIJI GAS | 2024 | All Right Reserved
        </p>
    </div>
</body>

</html>