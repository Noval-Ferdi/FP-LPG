<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Cek Stok
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
        <div class="text-xs font-extrabold text-right leading-tight">
            <a class="block hover:underline" href="#">
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
    <main class="max-w-5xl mx-auto px-4 sm:px-6 md:px-8 space-y-10 pb-20">
        <!-- Repeated blocks 3 times -->
        <section class="space-y-4">
            <div
                class="relative bg-red-600 rounded-xl overflow-hidden text-white flex justify-between items-center px-6 py-5">
                <div aria-hidden="true" class="absolute top-0 left-0 w-16 h-16 bg-blue-600 rounded-br-3xl -z-10">
                </div>
                <div aria-hidden="true" class="absolute bottom-0 right-0 w-24 h-24 bg-blue-600 rounded-tl-3xl -z-10">
                </div>
                <div class="space-y-2 max-w-[70%]">
                    <div class="flex items-center space-x-2 font-bold text-sm">
                        <i class="fas fa-store">
                        </i>
                        <span>
                            PT. BEST
                        </span>
                    </div>
                    <div class="flex items-center space-x-2 text-xs leading-tight">
                        <i class="fas fa-map-marker-alt">
                        </i>
                        <p class="max-w-[90%]">
                            JALAN KEBONSARI JT III / 462 RT 029 RW 007, KELURAHAN GOWONGAN,
                            KECAMATAN JETIS, KOTA YOGYAKARTA
                        </p>
                    </div>
                    <div class="flex items-center space-x-2 text-xs leading-tight">
                        <i class="fas fa-phone-alt">
                        </i>
                        <span>
                            08123456789
                        </span>
                    </div>
                </div>
                <img alt="Blue and green flame logo on red background" class="w-14 h-14 object-contain" height="60"
                    src="images/LPG 13.png" width="60" />
            </div>
            <h2 class="font-extrabold text-xs uppercase">
                STOK &amp; HARGA
            </h2>
            <div class="flex space-x-10">
                <div class="text-center">
                    <img alt="Green 3KG gas cylinder with leaf logo" class="mx-auto mt-16" height="80"
                        src="images/19.png" width="60" />
                    <p class="font-extrabold text-xs uppercase mt-3">
                        ELPIJI 3KG
                    </p>
                    <p class="text-xs mt-1">
                        Rp. 22.000
                    </p>
                    <p class="font-extrabold text-xs uppercase mt-1">
                        STOK
                    </p>
                    <p class="text-xs">
                        10
                    </p>
                </div>
                <div class="text-center">
                    <img alt="Blue 12KG gas cylinder with leaf logo" class="mx-auto" height="120" src="images/20.png"
                        width="60" />
                    <p class="font-extrabold text-xs uppercase mt-2">
                        ELPIJI 12KG
                    </p>
                    <p class="text-xs mt-1">
                        Rp. 210.000
                    </p>
                    <p class="font-extrabold text-xs uppercase mt-1">
                        STOK
                    </p>
                    <p class="text-xs">
                        6
                    </p>
                </div>
            </div>
            <hr class="border-gray-300 mt-6" />
        </section>
        <section class="space-y-4">
            <div
                class="relative bg-red-600 rounded-xl overflow-hidden text-white flex justify-between items-center px-6 py-5">
                <div aria-hidden="true" class="absolute top-0 left-0 w-16 h-16 bg-blue-600 rounded-br-3xl -z-10">
                </div>
                <div aria-hidden="true" class="absolute bottom-0 right-0 w-24 h-24 bg-blue-600 rounded-tl-3xl -z-10">
                </div>
                <div class="space-y-2 max-w-[70%]">
                    <div class="flex items-center space-x-2 font-bold text-sm">
                        <i class="fas fa-store">
                        </i>
                        <span>
                            PT. BEST
                        </span>
                    </div>
                    <div class="flex items-center space-x-2 text-xs leading-tight">
                        <i class="fas fa-map-marker-alt">
                        </i>
                        <p class="max-w-[90%]">
                            JALAN KEBONSARI JT III / 462 RT 029 RW 007, KELURAHAN GOWONGAN,
                            KECAMATAN JETIS, KOTA YOGYAKARTA
                        </p>
                    </div>
                    <div class="flex items-center space-x-2 text-xs leading-tight">
                        <i class="fas fa-phone-alt">
                        </i>
                        <span>
                            08123456789
                        </span>
                    </div>
                </div>
                <img alt="Blue and green flame logo on red background" class="w-14 h-14 object-contain" height="60"
                    src="images/LPG 13.png" width="60" />
            </div>
            <h2 class="font-extrabold text-xs uppercase">
                STOK &amp; HARGA
            </h2>
            <div class="flex space-x-10">
                <div class="text-center">
                    <img alt="Green 3KG gas cylinder with leaf logo" class="mx-auto mt-16" height="80"
                        src="images/19.png" width="60" />
                    <p class="font-extrabold text-xs uppercase mt-3">
                        ELPIJI 3KG
                    </p>
                    <p class="text-xs mt-1">
                        Rp. 22.000
                    </p>
                    <p class="font-extrabold text-xs uppercase mt-1">
                        STOK
                    </p>
                    <p class="text-xs">
                        10
                    </p>
                </div>
                <div class="text-center">
                    <img alt="Blue 12KG gas cylinder with leaf logo" class="mx-auto" height="120" src="images/20.png"
                        width="60" />
                    <p class="font-extrabold text-xs uppercase mt-2">
                        ELPIJI 12KG
                    </p>
                    <p class="text-xs mt-1">
                        Rp. 210.000
                    </p>
                    <p class="font-extrabold text-xs uppercase mt-1">
                        STOK
                    </p>
                    <p class="text-xs">
                        6
                    </p>
                </div>
            </div>
            <hr class="border-gray-300 mt-6" />
        </section>
        <section class="space-y-4">
            <div
                class="relative bg-red-600 rounded-xl overflow-hidden text-white flex justify-between items-center px-6 py-5">
                <div aria-hidden="true" class="absolute top-0 left-0 w-16 h-16 bg-blue-600 rounded-br-3xl -z-10">
                </div>
                <div aria-hidden="true" class="absolute bottom-0 right-0 w-24 h-24 bg-blue-600 rounded-tl-3xl -z-10">
                </div>
                <div class="space-y-2 max-w-[70%]">
                    <div class="flex items-center space-x-2 font-bold text-sm">
                        <i class="fas fa-store">
                        </i>
                        <span>
                            PT. BEST
                        </span>
                    </div>
                    <div class="flex items-center space-x-2 text-xs leading-tight">
                        <i class="fas fa-map-marker-alt">
                        </i>
                        <p class="max-w-[90%]">
                            JALAN KEBONSARI JT III / 462 RT 029 RW 007, KELURAHAN GOWONGAN,
                            KECAMATAN JETIS, KOTA YOGYAKARTA
                        </p>
                    </div>
                    <div class="flex items-center space-x-2 text-xs leading-tight">
                        <i class="fas fa-phone-alt">
                        </i>
                        <span>
                            08123456789
                        </span>
                    </div>
                </div>
                <img alt="Blue and green flame logo on red background" class="w-14 h-14 object-contain" height="60"
                    src="images/LPG 13.png" width="60" />
            </div>
            <h2 class="font-extrabold text-xs uppercase">
                STOK &amp; HARGA
            </h2>
            <div class="flex space-x-10">
                <div class="text-center">
                    <img alt="Green 3KG gas cylinder with leaf logo" class="mx-auto mt-16" height="80"
                        src="images/19.png" width="60" />
                    <p class="font-extrabold text-xs uppercase mt-3">
                        ELPIJI 3KG
                    </p>
                    <p class="text-xs mt-1">
                        Rp. 22.000
                    </p>
                    <p class="font-extrabold text-xs uppercase mt-1">
                        STOK
                    </p>
                    <p class="text-xs">
                        10
                    </p>
                </div>
                <div class="text-center">
                    <img alt="Blue 12KG gas cylinder with leaf logo" class="mx-auto" height="120" src="images/20.png"
                        width="60" />
                    <p class="font-extrabold text-xs uppercase mt-2">
                        ELPIJI 12KG
                    </p>
                    <p class="text-xs mt-1">
                        Rp. 210.000
                    </p>
                    <p class="font-extrabold text-xs uppercase mt-1">
                        STOK
                    </p>
                    <p class="text-xs">
                        6
                    </p>
                </div>
            </div>
            <hr class="border-gray-300 mt-6" />
        </section>
    </main>
    <footer class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center text-xs text-gray-600">
            <!-- Logo Bagian Kiri -->
            <div class="flex items-center space-x-4 mb-4 md:mb-0">
                <img alt="Pertamina logo" class="h-5 w-auto" height="20" src="images/PERTAMINA1.png" width="40" />
                <img alt="MyPertamina logo" class="h-5 w-auto" height="20" src="images/PertaminaAPK_1.png" width="40" />
                <img alt="135 logo" class="h-5 w-auto" height="20" src="images/CC-removebg-preview 1.png" width="40" />
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
    <div class="bg-red-600 text-white text-center text-xs py-3 px-4">
        <p>
            Best view in Mozilla Firefox and Google Chrome.
        </p>
        <p>
            Copyright © ELPIJI GAS | 2024 | All Right Reserved
        </p>
    </div>
</body>

</php>