<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   ElpijiDash Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: "Poppins", sans-serif;
    }
  </style>
 </head>
 <body class="bg-gray-100 min-h-screen flex flex-col">
  <!-- Header -->
  <header class="bg-white shadow rounded-b-xl">
   <div class="max-w-9xl mx-auto flex items-center gap-8 px-6 py-4">
    <img alt="Elpiji logo with flame and text ELPJI" class="w-10 h-10 object-contain" height="40" src="https://storage.googleapis.com/a1aa/image/19a00324-d1ad-4025-70f6-2c56a8f50215.jpg" width="40"/>
    <span class="font-semibold text-black text-lg select-none">
     ElpijiDash.
    </span>
    <nav class="ml-12 font-semibold text-black text-lg select-none">
     Overview
    </nav>
   </div>
  </header>
  <div class="flex flex-1 max-w-9xl mx-auto w-full">
   <!-- Sidebar -->
   <aside class="bg-white w-64 flex flex-col justify-between py-8 px-6 rounded-r-xl" style="min-height: calc(100vh - 72px)">
    <nav class="flex flex-col gap-6">
     <a class="flex items-center gap-3 text-indigo-700 font-semibold text-base" href="#">
      <i class="fas fa-home text-indigo-700 text-lg">
      </i>
      Dashboard
     </a>
     <a class="flex items-center gap-3 text-gray-400 font-normal text-base" href="#">
      <i class="fas fa-mobile-alt">
      </i>
      Transactions
     </a>
     <a class="flex items-center gap-3 text-gray-400 font-normal text-base" href="#">
      <i class="fas fa-user">
      </i>
      Account
     </a>
     <a class="flex items-center gap-3 text-gray-400 font-normal text-base" href="#">
      <i class="fas fa-sliders-h">
      </i>
      Service
     </a>
     <a class="flex items-center gap-3 text-gray-400 font-normal text-base" href="#">
      <i class="fas fa-cog">
      </i>
      Setting
     </a>
    </nav>
    <div class="flex flex-col gap-3">
     <div class="flex gap-3 justify-center">
      <img alt="Pertamina logo, red blue and yellow stripes with text Pertamina" class="w-8 h-8 object-contain" height="30" src="https://storage.googleapis.com/a1aa/image/463f5a5d-c1fc-4661-1fc6-7f389ae58ca8.jpg" width="30"/>
      <img alt="My Pertamina logo, blue and white with text My Pertamina" class="w-8 h-8 object-contain" height="30" src="https://storage.googleapis.com/a1aa/image/d7c0bb01-e3f4-4276-087f-fffecc2b3ac3.jpg" width="30"/>
      <img alt="Pertamina 135 logo, red and white with text 135" class="w-8 h-8 object-contain" height="30" src="https://storage.googleapis.com/a1aa/image/190865fd-03c7-436d-0494-51bcf2e288a9.jpg" width="30"/>
     </div>
     <div class="flex gap-4 justify-center text-black text-lg">
      <a aria-label="Facebook" href="#">
       <i class="fab fa-facebook-f">
       </i>
      </a>
      <a aria-label="Instagram" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a aria-label="X" href="#">
       <i class="fab fa-x-twitter">
       </i>
      </a>
      <a aria-label="YouTube" href="#">
       <i class="fab fa-youtube">
       </i>
      </a>
     </div>
    </div>
   </aside>
   <!-- Main content -->
   <main class="flex-1 p-6 space-y-6 bg-gray-200 rounded-l-xl">
    <h2 class="text-black font-semibold text-xl mb-4 select-none">
     My LPG Dashboard
    </h2>
    <!-- Welcome Banner -->
    <section class="relative rounded-xl overflow-hidden flex items-center justify-between px-8 py-6" style="background-color: #ff0000">
     <div class="flex items-center gap-3 text-white font-semibold text-sm select-none">
      <i class="fas fa-store text-lg">
      </i>
      Selamat Datang PT. BEST
     </div>
     <div class="flex gap-4 items-center">
      <img alt="Small green LPG gas cylinder with red leaf logo" class="w-12 h-16 object-contain" height="80" src="https://storage.googleapis.com/a1aa/image/226c3068-6b4d-4678-7bdb-eb6042f13197.jpg" width="60"/>
      <img alt="Large blue LPG gas cylinder with red leaf logo" class="w-12 h-28 object-contain" height="120" src="https://storage.googleapis.com/a1aa/image/100a81a0-828b-48aa-ac78-4c82f2a38758.jpg" width="60"/>
     </div>
     <div class="absolute top-0 left-0 w-20 h-20 bg-blue-600 rounded-tr-3xl" style="clip-path: ellipse(100% 100% at 0% 100%)">
     </div>
     <div class="absolute bottom-0 right-0 w-20 h-20 bg-blue-600 rounded-bl-3xl" style="clip-path: ellipse(100% 100% at 100% 0%)">
     </div>
    </section>
    <!-- Content grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
     <!-- Left large panel -->
     <section aria-label="Ringkasan Pendapatan chart" class="bg-white rounded-xl p-6 shadow-md col-span-1 lg:col-span-2">
      <h3 class="font-semibold text-black text-sm mb-2 select-none">
       Ringkasan Pendapatan
      </h3>
      <div class="flex gap-2 mb-4 text-xs select-none">
       <div class="flex items-center gap-1 text-blue-600">
        <span class="w-2 h-2 rounded-full bg-blue-600 inline-block">
        </span>
        Online Sales
       </div>
       <div class="flex items-center gap-1 text-blue-200">
        <span class="w-2 h-2 rounded-full bg-blue-200 inline-block">
        </span>
        Offline Sales
       </div>
      </div>
      <!-- Chart bars container -->
      <div class="flex justify-between items-end h-48 gap-6">
       <!-- Senin -->
       <div class="flex flex-col items-center gap-1">
        <div aria-label="Online Sales Senin 15500" class="bg-blue-600 rounded-t-md" style="height: 155px; width: 24px">
        </div>
        <div aria-label="Offline Sales Senin 14500" class="bg-blue-200 rounded-t-md" style="height: 145px; width: 24px">
        </div>
        <span class="text-xs text-black select-none">
         Senin
        </span>
       </div>
       <!-- Selasa -->
       <div class="flex flex-col items-center gap-1">
        <div aria-label="Online Sales Selasa 19200" class="bg-blue-600 rounded-t-md" style="height: 192px; width: 24px">
        </div>
        <div aria-label="Offline Sales Selasa 13400" class="bg-blue-200 rounded-t-md" style="height: 134px; width: 24px">
        </div>
        <span class="text-xs text-black select-none">
         Selasa
        </span>
       </div>
       <!-- Rabu -->
       <div class="flex flex-col items-center gap-1">
        <div aria-label="Online Sales Rabu 6300" class="bg-blue-600 rounded-t-md" style="height: 63px; width: 24px">
        </div>
        <div aria-label="Offline Sales Rabu 25800" class="bg-blue-200 rounded-t-md" style="height: 258px; width: 24px">
        </div>
        <span class="text-xs text-black select-none">
         Rabu
        </span>
       </div>
       <!-- Kamis -->
       <div class="flex flex-col items-center gap-1">
        <div aria-label="Online Sales Kamis 17800" class="bg-blue-600 rounded-t-md" style="height: 178px; width: 24px">
        </div>
        <div aria-label="Offline Sales Kamis 7000" class="bg-blue-200 rounded-t-md" style="height: 70px; width: 24px">
        </div>
        <span class="text-xs text-black select-none">
         Kamis
        </span>
       </div>
       <!-- Jumat -->
       <div class="flex flex-col items-center gap-1">
        <div aria-label="Online Sales Jumat 13500" class="bg-blue-600 rounded-t-md" style="height: 135px; width: 24px">
        </div>
        <div aria-label="Offline Sales Jumat 12500" class="bg-blue-200 rounded-t-md" style="height: 125px; width: 24px">
        </div>
        <span class="text-xs text-black select-none">
         Jumat
        </span>
       </div>
       <!-- Sabtu -->
       <div class="flex flex-col items-center gap-1">
        <div aria-label="Online Sales Sabtu 19000" class="bg-blue-600 rounded-t-md" style="height: 190px; width: 24px">
        </div>
        <div aria-label="Offline Sales Sabtu 15000" class="bg-blue-200 rounded-t-md" style="height: 150px; width: 24px">
        </div>
        <span class="text-xs text-black select-none">
         Sabtu
        </span>
       </div>
       <!-- Minggu -->
       <div class="flex flex-col items-center gap-1">
        <div aria-label="Online Sales Minggu 24000" class="bg-blue-600 rounded-t-md" style="height: 240px; width: 24px">
        </div>
        <div aria-label="Offline Sales Minggu 12000" class="bg-blue-200 rounded-t-md" style="height: 120px; width: 24px">
        </div>
        <span class="text-xs text-black select-none">
         Minggu
        </span>
       </div>
      </div>
     </section>
     <!-- Right side panels -->
     <section class="flex flex-col gap-6">
      <div aria-label="Total Penjualan chart" class="bg-white rounded-xl p-4 shadow-md w-full max-w-xs">
       <h3 class="font-semibold text-black text-sm mb-1 select-none">
        Total Penjualan
       </h3>
       <p class="text-xs text-black mb-2 select-none">
        November 2024 - 2025
       </p>
       <img alt="Blue sales curve chart showing total penjualan from November 2024 to 2025" class="rounded-xl w-full" height="140" src="https://storage.googleapis.com/a1aa/image/2e154dd9-32ab-4e32-d9e6-8621522fd05e.jpg" width="280"/>
      </div>
      <div aria-label="Penjualan Berdasarkan Angka" class="bg-white rounded-xl p-4 shadow-md w-full max-w-xs min-h-[140px]">
       <h3 class="font-semibold text-black text-sm mb-1 select-none">
        Penjualan Berdasarkan Angka
       </h3>
      </div>
     </section>
    </div>
   </main>
  </div>
 </body>
</html>
