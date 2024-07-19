@vite('resources/css/app.css')

<!-- component -->
<nav
        class="flex items-center justify-between flex-wrap bg-white py-4 lg:px-12 shadow border-solid border-t-2 border-indigo-700">
        <div class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
            <div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
                <span class="font-semibold text-xl tracking-tight">EduPlus+</span>
            </div>
            <div class="block lg:hidden ">
                <button
                    id="nav"
                    class="flex items-center px-3 py-2 border-2 rounded text-blue-700 border-blue-700 hover:text-blue-700 hover:border-blue-700">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
        </div>
    
        <div class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8">
            <!-- This is an example component -->
            <div class="relative mx-auto text-gray-600 lg:block hidden">
            </div>
            <div class="flex ">
                <a href="#"
                   class=" block text-md px-4  ml-2 py-2 rounded text-indigo-700 font-bold hover:text-white mt-4 hover:bg-indigo-700 lg:mt-0">Akun</a>
                   <a class="block text-md px-4  ml-2 py-2 rounded text-indigo-700 font-bold hover:text-white mt-4 hover:bg-indigo-700 lg:mt-0" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>  
            </div>
        </div>
    </nav>

    <!-- component -->
<div class="bg-gradient-to-bl from-blue-50 to-violet-50 flex items-center justify-center lg:h-screen">
    <div class="container mx-auto mx-auto p-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
        <!-- Replace this with your grid items -->
        <div class="bg-white rounded-lg border p-4">
          <img src="/image/SD.jpeg" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
          <div class="px-1 py-4">
            <div class="font-bold text-xl mb-2">SEKOLAH DASAR (SD)</div>
            <p class="text-gray-700 text-base">
              Menyediakan akses video pembelajaran, rangkuman materi dan latihan soal dari kelas 1 - 6 SD
            </p>
          </div>
          <div class="px-1 py-4">
            <a href="/siswa.sd.index" class="text-blue-500 hover:underline">Lihat Kelas</a>
          </div>
        </div>
        <div class="bg-white rounded-lg border p-4">
          <img src="/image/SMP.jpeg" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
          <div class="px-1 py-4">
            <div class="font-bold text-xl mb-2">SEKOLAH MENENGAN PERTAMA (SMP)</div>
            <p class="text-gray-700 text-base">
                Menyediakan akses video pembelajaran, rangkuman materi dan latihan soal dari kelas 7 - 9 SMP
            </p>
          </div>
          <div class="px-1 py-4">
            <a href="#" class="text-blue-500 hover:underline">Lihat Kelas</a>
          </div>
        </div>
        <div class="bg-white rounded-lg border p-4">
          <img src="/image/SMA-SMK.jpeg" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
          <div class="px-1 py-4">
            <div class="font-bold text-xl mb-2">SEKOLAH MENENGAH ATAS (SMA)</div>
            <p class="text-gray-700 text-base">
              TMenyediakan akses video pembelajaran, rangkuman materi dan latihan soal dari kelas 10 - 12 SMA
            </p>
          </div>
          <div class="px-1 py-4">
            <a href="#" class="text-blue-500 hover:underline">Lihat Kelas</a>
          </div>
        </div>
        <div class="bg-white rounded-lg border p-4">
          <img src="/image/SMA-SMK.jpeg" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
          <div class="px-1 py-4">
            <div class="font-bold text-xl mb-2">SEKOLAH MENENGAH KEJURUAN (SMK)</div>
            <p class="text-gray-700 text-base">
                Menyediakan akses video pembelajaran, rangkuman materi dan latihan soal dari kelas 10 - 12 SMK
            </p>
          </div>
          <div class="px-1 py-4">
            <a href="#" class="text-blue-500 hover:underline">Lihat Kelas</a>
          </div>
        </div>
      </div>
    </div>
  </div>