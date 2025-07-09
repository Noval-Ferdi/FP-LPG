<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Elpiji Gas
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
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

    <header class="flex justify-between items-center px-4 py-3 max-w-screen-xl mx-auto">
        <div class="flex items-center space-x-6">
            <a href="dashboard.php"><img alt="Elpiji Gas logo, flame shape with purple and yellow colors"
                    class="w-17 h-22" height="50" src="images/ELPIJI_1.png" width="50" /></a>
            <nav class="flex space-x-6 text-xs font-bold">
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
    <main class="max-w-5xl mx-auto px-6 sm:px-10">
        <section class="relative rounded-xl overflow-hidden mt-6 sm:mt-10 max-w-4xl mx-auto" style="min-height: 140px;">
            <img alt="Blue curved shape top left corner" class="absolute top-0 left-0 rounded-tl-xl" height="60"
                src="https://storage.googleapis.com/a1aa/image/37e6f597-9274-4598-1ef1-4dd647129ef5.jpg" width="60" />
            <img alt="Blue curved shape bottom right corner" class="absolute bottom-0 right-0 rounded-br-xl" height="60"
                src="https://storage.googleapis.com/a1aa/image/de53f680-75c7-4d59-7390-a3d0bb1633c6.jpg" width="60" />
            <div
                class="bg-red-600 text-white rounded-xl px-8 py-6 relative z-10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 sm:gap-0">
                <div class="space-y-3 max-w-[70%] sm:max-w-[60%]">
                    <div class="flex items-center gap-2 font-semibold text-[15px] leading-[20px]">
                        <i class="fas fa-store">
                        </i>
                        <span>
                            PT. BEST
                        </span>
                    </div>
                    <div class="flex items-start gap-2 text-[14px] leading-[20px]">
                        <i class="fas fa-map-marker-alt mt-[3px]">
                        </i>
                        <p class="max-w-[90%]">
                            JALAN KEBONSARI JT III / 462 RT 029 RW 007, KELURAHAN GOWONGAN,
                            KECAMATAN JETIS, KOTA YOGYAKARTA
                        </p>
                    </div>
                    <div class="flex items-center gap-2 text-[14px] leading-[20px]">
                        <i class="fas fa-phone-alt">
                        </i>
                        <span>
                            08123456789
                        </span>
                    </div>
                </div>
                <img alt="Flame logo with blue, red and green colors on right side"
                    class="w-[60px] h-[60px] object-contain" height="60"
                    src="https://storage.googleapis.com/a1aa/image/bdc3fac7-f7d9-4449-e0af-b65493a5ebec.jpg"
                    width="60" />
            </div>
        </section>
        <section class="mt-8 max-w-4xl mx-auto">
            <h2 class="font-semibold text-[15px] leading-[20px] mb-4">
                STOK &amp; HARGA
            </h2>
            <div class="flex gap-12">
                <div class="flex flex-col items-center text-center max-w-[100px]">
                    <img alt="Green 3KG gas cylinder with white leaf icon" class="w-[80px] h-[120px] object-contain"
                        height="120"
                        src="https://storage.googleapis.com/a1aa/image/5386730a-277c-436a-fcad-10fd97e502b7.jpg"
                        width="80" />
                    <div class="font-semibold text-[14px] leading-[20px] mt-2">
                        ELPIJI 3KG
                    </div>
                    <div class="text-[14px] leading-[20px]">
                        Rp. 22.000
                    </div>
                    <div class="font-semibold text-[14px] leading-[20px] mt-1">
                        STOK
                    </div>
                    <div class="text-[14px] leading-[20px]">
                        10
                    </div>
                </div>
                <div class="flex flex-col items-center text-center max-w-[100px]">
                    <img alt="Blue 12KG gas cylinder with white leaf icon" class="w-[80px] h-[140px] object-contain"
                        height="140"
                        src="https://storage.googleapis.com/a1aa/image/454be86c-9b77-432a-e8aa-8b12fc9d6b0f.jpg"
                        width="80" />
                    <div class="font-semibold text-[14px] leading-[20px] mt-2">
                        ELPIJI 12KG
                    </div>
                    <div class="text-[14px] leading-[20px]">
                        Rp. 210.000
                    </div>
                    <div class="font-semibold text-[14px] leading-[20px] mt-1">
                        STOK
                    </div>
                    <div class="text-[14px] leading-[20px]">
                        6
                    </div>
                </div>
            </div>
            <hr class="border-t border-gray-300 mt-6" />
        </section>
    </main>
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
    <div class="bg-red-600 text-white text-[12px] leading-[16px] px-6 py-4 text-center font-normal">
        <p>
            Best view in Mozilla Firefox and Google Chrome.
        </p>
        <p>
            Copyright © ELPIJI GAS | 2024 | All Right Reserved
        </p>
    </div>
</body>

</html>