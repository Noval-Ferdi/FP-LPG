<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Agen
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
    <!-- Blue info bar -->
    <div class="text-blue-100 text-l flex items-center justify-center px-4 py-3 mx-auto"
        style="background-color: 009DFF;">
        <i class="fas fa-map-marker-alt mr-2">
        </i>
        Mau cek dimana? isi terlebih dahulu, untuk alamat dan lokasimu
    </div>

    <!-- Map container -->
    <style>
        .map-container {
            margin: 20px auto;
            width: 1280px;
            height: 550px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        iframe {
            width: 1280px;
            height: 550px;
            border: 0;
        }

        .search-bar {
            max-width: 720px;
            margin: 20px auto 0 auto;
            display: flex;
            justify-content: center;
        }

        .search-bar input {
            width: 100%;
            max-width: 680px;
            padding: 10px;
            font-size: 14px;
            border: 2px solid #ccc;
            border-radius: 6px;
        }
    </style>

    <!-- Map Display -->
    <div class="map-container">
        <iframe id="map-frame" src="https://www.google.com/maps?q=agen+gas+yogyakarta&output=embed" allowfullscreen
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <!-- Search Form (Enter to search) -->
    <div class="search-bar">
        <input class="text-center" id="search-input"
            placeholder="Tekan Enter untuk mencari lokasi (misal: Agen Gas Sleman)">
    </div>

    <!-- Script -->
    <script>
        const input = document.getElementById('search-input');
        const mapFrame = document.getElementById('map-frame');

        input.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                const query = input.value.trim();
                if (query !== "") {
                    const url = "https://www.google.com/maps?q=" + encodeURIComponent(query) + "&output=embed";
                    mapFrame.src = url;
                }
            }
        });
    </script>

    <!-- Agent list -->
    <main class="max-w-screen-xl mx-auto px-4 mt-12 space-y-8">
        <!-- Agent 1 -->
        <section>
            <h3 class="font-bold text-xs mb-2">
                PT. BEST
            </h3>
            <p class="text-xs flex items-start space-x-2 mb-1">
                <i class="fas fa-map-marker-alt mt-[3px]">
                </i>
                <span>
                    JALAN KEBONSARI JT III / 462 RT 029 RW 007, KELURAHAN GOWONGAN, KECAMATAN JETIS, KOTA YOGYAKARTA
                </span>
            </p>
            <p class="text-xs flex items-center space-x-2">
                <i class="fas fa-phone-alt">
                </i>
                <span>
                    08123456789
                </span>
            </p>
            <hr class="border-gray-300 mt-4" />
        </section>
        <!-- Agent 2 -->
        <section>
            <h3 class="font-bold text-xs mb-2">
                PT. BEST
            </h3>
            <p class="text-xs flex items-start space-x-2 mb-1">
                <i class="fas fa-map-marker-alt mt-[3px]">
                </i>
                <span>
                    JALAN NGANGKRUK KM 0 / RT 082 RW 021, KELURAHAN GEDAREN, KECAMATAN JATINOM, KOTA KLATEN
                </span>
            </p>
            <p class="text-xs flex items-center space-x-2">
                <i class="fas fa-phone-alt">
                </i>
                <span>
                    08123456789
                </span>
            </p>
            <hr class="border-gray-300 mt-4" />
        </section>
        <!-- Agent 3 -->
        <section>
            <h3 class="font-bold text-xs mb-2">
                PT. BEST
            </h3>
            <p class="text-xs flex items-start space-x-2 mb-1">
                <i class="fas fa-map-marker-alt mt-[3px]">
                </i>
                <span>
                    JALAN CEPER JT II / RT 09 RW 05, KELURAHAN JETIS, KECAMATAN CEPER, KOTA KLATEN
                </span>
            </p>
            <p class="text-xs flex items-center space-x-2">
                <i class="fas fa-phone-alt">
                </i>
                <span>
                    08123456789
                </span>
            </p>
            <hr class="border-gray-300 mt-4" />
        </section>
        <!-- Agent 4 -->
        <section>
            <h3 class="font-bold text-xs mb-2">
                PT. BEST
            </h3>
            <p class="text-xs flex items-start space-x-2 mb-1">
                <i class="fas fa-map-marker-alt mt-[3px]">
                </i>
                <span>
                    JALAN NGEMPLAK JT III / RT 076 RW 004, KELURAHAN CANDIREJO, KECAMATAN GROBOGAN, KOTA YOGYAKARTA
                </span>
            </p>
            <p class="text-xs flex items-center space-x-2">
                <i class="fas fa-phone-alt">
                </i>
                <span>
                    08123456789
                </span>
            </p>
            <hr class="border-gray-300 mt-4" />
        </section>
        <!-- Agent 5 -->
        <section>
            <h3 class="font-bold text-xs mb-2">
                PT. BEST
            </h3>
            <p class="text-xs flex items-start space-x-2 mb-1">
                <i class="fas fa-map-marker-alt mt-[3px]">
                </i>
                <span>
                    JALAN TIBAYAN JT 9 / RT 078 RW 098, KELURAHAN CAWAN, KECAMATAN JATINOM, KOTA KLATEN
                </span>
            </p>
            <p class="text-xs flex items-center space-x-2">
                <i class="fas fa-phone-alt">
                </i>
                <span>
                    08123456789
                </span>
            </p>
            <hr class="border-gray-300 mt-4" />
        </section>
        <!-- Agent 6 -->
        <section>
            <h3 class="font-bold text-xs mb-2">
                PT. BEST
            </h3>
            <p class="text-xs flex items-start space-x-2 mb-1">
                <i class="fas fa-map-marker-alt mt-[3px]">
                </i>
                <span>
                    JALAN KALIKOTES JT 1 / RT 067 RW 016, KELURAHAN KALIKOTES, KECAMATAN PRAMBANAN, KOTA KLATEN
                </span>
            </p>
            <p class="text-xs flex items-center space-x-2">
                <i class="fas fa-phone-alt">
                </i>
                <span>
                    08123456789
                </span>
            </p>
            <hr class="border-gray-300 mt-4" />
        </section>
    </main>
    <!-- Footer -->
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

</html>