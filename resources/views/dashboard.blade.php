@vite('resources/css/app.css')
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">EduPlus+</span>
            <img class="h-35 w-14" src="/image/logo.png" alt="logo">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="#penawaran" class="text-sm font-semibold leading-6 text-gray-900">Penawaran</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">test</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">test</a>
          <a href="#about" class="text-sm font-semibold leading-6 text-gray-900">About Us</a>
        </div>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a class="text-sm font-semibold leading-6 text-gray-900 px-3 py-2" href="{{ route('login') }}">Login</a>
                <a class="text-sm font-semibold leading-6 text-gray-900 px-3 py-2" href="{{ route('register') }}">Register</a>
        </div>
      </nav>
      <!-- Mobile menu, show/hide based on menu open state. -->
      {{-- <div class="lg:hidden" role="dialog" aria-modal="true"> --}}
        <!-- Background backdrop, show/hide based on slide-over state. -->
        {{-- <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">EduPlus+</span>
                <img class="h-35 w-14" src="/image/logo.png" alt="logo">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
              </div>
              <div class="py-6">
                <a class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('login') }}">Login</a>
                <a class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" href="{{ route('register') }}">Register</a>

              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </header>
    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">EduPlus+:</h1>
          <br>
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Langkah Cerdas Menuju Sukses</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            Platform bimbingan belajar online terdepan yang menyediakan materi pendidikan berkualitas untuk siswa dari berbagai jenjang. Dengan fitur interaktif dan tutor berpengalaman, EduPlus+ membantu siswa meraih prestasi terbaik mereka melalui pembelajaran yang menyenangkan dan efektif. Akses ribuan video pembelajaran, latihan soal, dan kelas live kapan saja dan di mana saja. <br>Bergabunglah dengan EduPlus+ dan wujudkan potensi akademismu!
          </p>
          <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                <h2 id="penawaran" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">SPECIAL OFFER!</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Hai Sobat EduPlus+! Ada apa nih yang menarik dari EduPlus+? Yuk, cek sekarang juga yang ada dibawah ini!</p>
                </div>
                <div class="bg-white dark:bg-gray-800">
                    <div class="container px-6 py-8 mx-auto">
                        <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                            <div class="flex flex-col w-full max-w-sm p-10 space-y-10 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex-shrink-0">
                                    <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                        Paket Tipe 1
                                    </h2>
                                </div>
                                <div class="flex-shrink-0">
                                    <span
                                        class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">Kasual</span>
                                </div>
                                <ul class="flex-1 space-y-4">
                                    <li class="text-gray-500 dark:text-gray-400">
                                        Akses semua mata pelajaran
                                    </li>
                                    <li class="text-gray-500 dark:text-gray-400">
                                        Akses ke latihan soal
                                    </li>
                                    <li class="text-gray-500 dark:text-gray-400">
                                        Mendapat rangkuman materi setelah bab selesai
                                    </li>
                                </ul>
            
                                <button class="inline-flex items-center justify-center px-4 py-2 font-semibold text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">Rp.50.000/bulan</button>
                            </div>
            
                            <div class="flex flex-col w-full max-w-sm p-10 space-y-10 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-800 dark:border-gray-700">
                              <div class="flex-shrink-0">
                                  <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                      Paket Tipe 2
                                  </h2>
                              </div>
                              <div class="flex-shrink-0">
                                  <span
                                      class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">Fokus</span>
                              </div>
                              <ul class="flex-1 space-y-4">
                                  <li class="text-gray-500 dark:text-gray-400">
                                      Semua akses Paket Tipe 1
                                  </li>
                                  <li class="text-gray-500 dark:text-gray-400">
                                      Pemantapan persiapan Ujian Akhir & UTBK
                                  </li>
                                  <li class="text-gray-500 dark:text-gray-400">
                                      Akses ke Try Out berkala
                                  </li>
                              </ul>
          
                              <button class="inline-flex items-center justify-center px-4 py-2 font-semibold text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">Rp.130.000/bulan</button>
                          </div>
            
                          <div class="flex flex-col w-full max-w-sm p-10 space-y-10 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                    Paket Tipe 3
                                </h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span
                                    class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">Super</span>
                            </div>
                            <ul class="flex-1 space-y-4">
                                <li class="text-gray-500 dark:text-gray-400">
                                    Semua Akses Paket Tipe 1 & 2
                                </li>
                                <li class="text-gray-500 dark:text-gray-400">
                                    Konseling bersama tim konselor berpengalaman
                                </li>
                                <li class="text-gray-500 dark:text-gray-400">
                                    Akses bertanya PR
                                </li>
                            </ul>
                            <button class="inline-flex items-center justify-center px-4 py-2 font-semibold text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">Rp.350.000/bulan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div> 
      <!-- component -->
<footer class="relative bg-blueGray-200 pt-8 pb-6">
  <div class="container mx-auto px-6">
    <div class="flex flex-wrap text-left lg:text-left">
      <div class="w-full lg:w-6/12 px-4">
        <h4 id="about" class="text-3xl fonat-semibold text-blueGray-700">EDU PLUS +</h4>
        <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
          Jl. Dr. Saharjo No.161, Manggarai Selatan, Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12860
        </h5>
        <div class="mt-6 lg:mb-0 mb-6">
          <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-dribbble"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
          <div class="w-full lg:w-4/12 px-4 ml-auto">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free Products</a>
              </li>
            </ul>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Syarat & Ketentuan</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">Kebijakan</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Tentang Kami</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Kontak Kami</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Bantuan</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-6 border-blueGray-300">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Copyright © <span id="get-current-year">2021</span><a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">Edu Plus by
          <a href="https://www.creative-tim.com?ref=njs-profile" class="text-blueGray-500 hover:text-blueGray-800">Kelompok 5</a>.
        </div>
      </div>
    </div>
  </div>
</footer>
      
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      
      </div>
    </div>
  </div>
  