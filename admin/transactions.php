<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        ElpijiDash Transactions
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow rounded-b-2xl px-6 py-4 flex items-center gap-10">
        <img alt="Elpiji flame logo with text Elpiji" class="w-10 h-10 object-contain" height="40"
            src="../images/ELPIJI_1.png" width="40" />
        <span class="font-semibold text-black text-lg select-none">
            ElpijiDash.
        </span>
        <nav class="font-semibold text-black text-lg select-none">
            Transactions
        </nav>
        <a href="../dashboard.php" class="ml-auto">
            <button class="bg-[#c9e8ff] text-black rounded-md px-6 py-2 text-sm font-semibold" type="button">
                Kembali Ke Beranda
            </button>
        </a>
    </header>
    <div class="flex flex-1 overflow-hidden">
        <!-- Sidebar -->
        <aside class="bg-white w-64 flex flex-col justify-between py-10 px-6 rounded-r-3xl select-none">
            <nav class="flex flex-col gap-6 text-gray-400 text-base font-normal">
                <a class="flex items-center gap-3 hover:text-indigo-700 transition-colors duration-200"
                    href="dashboard_admin.php">
                    <i class="fas fa-home text-gray-400 text-lg">
                    </i>
                    Dashboard
                </a>
                <a aria-current="page" class="flex items-center gap-3 text-indigo-700 font-semibold"
                    href="transactions.php">
                    <i class="fas fa-mobile-alt text-indigo-700">
                    </i>
                    Transaksi
                </a>
                <a class="flex items-center gap-3 hover:text-gray-600 transition-colors duration-200"
                    href="account.php">
                    <i class="fas fa-user text-gray-400">
                    </i>
                    Akun
                </a>
                <a class="flex items-center gap-3 hover:text-gray-600 transition-colors duration-200"
                    href="service.php">
                    <i class="fas fa-sliders-h text-gray-400">
                    </i>
                    Service
                </a>
                <a class="flex items-center gap-3 hover:text-gray-600 transition-colors duration-200"
                    href="setting.php">
                    <i class="fas fa-cog text-gray-400">
                    </i>
                    Setting
                </a>
            </nav>
            <div class="flex flex-col items-center gap-4 mt-10">
                <img alt="Pertamina logo with red, blue, and yellow colors" class="w-10 h-10 object-contain" height="40"
                    src="../images/PERTAMINA1.png" width="40" />
                <img alt="My Pertamina logo in blue and white" class="w-10 h-10 object-contain" height="40"
                    src="../images/PertaminaAPK_1.png" width="40" />
                <img alt="Pertamina call center 135 logo in red and white" class="w-10 h-10 object-contain" height="40"
                    src="../images/CC-removebg-preview 1.png" width="40" />
            </div>
            <div class="flex gap-4 justify-center mt-10 text-black text-lg">
                <a aria-label="Facebook" class="hover:text-indigo-700 transition-colors duration-200" href="#">
                    <i class="fab fa-facebook-f">
                    </i>
                </a>
                <a aria-label="Instagram" class="hover:text-indigo-700 transition-colors duration-200" href="#">
                    <i class="fab fa-instagram">
                    </i>
                </a>
                <a aria-label="X" class="hover:text-indigo-700 transition-colors duration-200" href="#">
                    <i class="fab fa-x-twitter">
                    </i>
                </a>
                <a aria-label="YouTube" class="hover:text-indigo-700 transition-colors duration-200" href="#">
                    <i class="fab fa-youtube">
                    </i>
                </a>
            </div>
        </aside>
        <!-- Main content -->
        <main class="flex-1 p-8 overflow-auto">
            <h1 class="text-black font-semibold text-xl mb-6 select-none">
                Transactions
            </h1>
            <section class="bg-white rounded-xl p-6 shadow-sm max-w-full overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-300">
                            <th class="py-3 px-4 font-semibold text-gray-700">
                                Transaction ID
                            </th>
                            <th class="py-3 px-4 font-semibold text-gray-700">
                                Date
                            </th>
                            <th class="py-3 px-4 font-semibold text-gray-700">
                                Customer
                            </th>
                            <th class="py-3 px-4 font-semibold text-gray-700">
                                Product
                            </th>
                            <th class="py-3 px-4 font-semibold text-gray-700">
                                Quantity
                            </th>
                            <th class="py-3 px-4 font-semibold text-gray-700">
                                Total Price
                            </th>
                            <th class="py-3 px-4 font-semibold text-gray-700">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">
                                TXN001
                            </td>
                            <td class="py-3 px-4">
                                2024-11-01
                            </td>
                            <td class="py-3 px-4">
                                PT. BEST
                            </td>
                            <td class="py-3 px-4">
                                LPG 12kg
                            </td>
                            <td class="py-3 px-4">
                                10
                            </td>
                            <td class="py-3 px-4">
                                Rp 1,200,000
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-green-600 font-semibold">
                                    Completed
                                </span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">
                                TXN002
                            </td>
                            <td class="py-3 px-4">
                                2024-11-02
                            </td>
                            <td class="py-3 px-4">
                                PT. BEST
                            </td>
                            <td class="py-3 px-4">
                                LPG 3kg
                            </td>
                            <td class="py-3 px-4">
                                20
                            </td>
                            <td class="py-3 px-4">
                                Rp 800,000
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-yellow-600 font-semibold">
                                    Pending
                                </span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">
                                TXN003
                            </td>
                            <td class="py-3 px-4">
                                2024-11-03
                            </td>
                            <td class="py-3 px-4">
                                PT. BEST
                            </td>
                            <td class="py-3 px-4">
                                LPG 12kg
                            </td>
                            <td class="py-3 px-4">
                                5
                            </td>
                            <td class="py-3 px-4">
                                Rp 600,000
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-red-600 font-semibold">
                                    Cancelled
                                </span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">
                                TXN004
                            </td>
                            <td class="py-3 px-4">
                                2024-11-04
                            </td>
                            <td class="py-3 px-4">
                                PT. BEST
                            </td>
                            <td class="py-3 px-4">
                                LPG 3kg
                            </td>
                            <td class="py-3 px-4">
                                15
                            </td>
                            <td class="py-3 px-4">
                                Rp 600,000
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-green-600 font-semibold">
                                    Completed
                                </span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">
                                TXN005
                            </td>
                            <td class="py-3 px-4">
                                2024-11-05
                            </td>
                            <td class="py-3 px-4">
                                PT. BEST
                            </td>
                            <td class="py-3 px-4">
                                LPG 12kg
                            </td>
                            <td class="py-3 px-4">
                                8
                            </td>
                            <td class="py-3 px-4">
                                Rp 960,000
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-yellow-600 font-semibold">
                                    Pending
                                </span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">
                                TXN006
                            </td>
                            <td class="py-3 px-4">
                                2024-11-06
                            </td>
                            <td class="py-3 px-4">
                                PT. BEST
                            </td>
                            <td class="py-3 px-4">
                                LPG 3kg
                            </td>
                            <td class="py-3 px-4">
                                12
                            </td>
                            <td class="py-3 px-4">
                                Rp 480,000
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-green-600 font-semibold">
                                    Completed
                                </span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">
                                TXN007
                            </td>
                            <td class="py-3 px-4">
                                2024-11-07
                            </td>
                            <td class="py-3 px-4">
                                PT. BEST
                            </td>
                            <td class="py-3 px-4">
                                LPG 12kg
                            </td>
                            <td class="py-3 px-4">
                                7
                            </td>
                            <td class="py-3 px-4">
                                Rp 840,000
                            </td>
                            <td class="py-3 px-4">
                                <span class="text-green-600 font-semibold">
                                    Completed
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>

</html>