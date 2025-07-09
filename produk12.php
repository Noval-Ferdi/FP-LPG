<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        ELPIJI Gas 12Kg
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
                    <button id="produk-toggle" class="flex items-center hover:underline focus:outline">
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
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <div class="relative rounded-md overflow-hidden">
            <img src="images/gas12.png" alt="">
        </div>
    </section>

    <!-- Description Text -->
    <section class="max-w-4xl mx-auto mt-12 px-6 text-gray-900 text-base md:text-lg leading-relaxed space-y-6">
        <p>
            ELPIJI Gas 12 kg hadir untuk memenuhi kebutuhan anda memasak masakan
            untuk keluarga besar tercinta dirumah (lebih dari 4 orang anggota
            keluarga).
        </p>
        <p>
            ELPIJI Gas 12 kg merupakan produk LPG (Liquified Petroleum Gas) Non
            Subsidi dari PT. PERTAMINA (Persero) yang dikemas dalam tabung (berat
            tabung 15,1 kg).
        </p>
    </section>
    <!-- Green Cylinder Image -->
    <section class="max-w-7xl mx-auto mt-32 flex justify-center px-6">
        <a href="produk3.php"><img alt="Green Elpiji Gas cylinder with reflection on bright green background" class="w-40 md:w-48"
            height="160" src="images/gas3.png" width="160" /></a>
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