@extends('layout.home')

@section('title', 'Landing Page')

@section('content')
<nav class="w-full fixed z-10 bg-white">
    <div class="max-w-screen-xl w-full mx-auto flex justify-between items-center p-4 bg-slate-">
      <div class="w-12">
        <img src="./public/logo/gorut_logo.png" alt="" class="w-12">
      </div>
      <ul class="flex items-center gap-12 font-bold">
        <li><a href="">Beranda</a></li>
        <li><a href="">Tentang</a></li>
        <li><a href="">Layanan</a></li>
      </ul>
    </div>
  </nav>
  <main class="w-full">
    <section class="bg-white">
      <div
        class="grid max-w-screen-xl min-h-screen px-8 py-8 pt-24 lg:pt-24 mx-auto lg:gap-8 xl:gap-0 items-center justify-center lg:grid-cols-12 h-full">
        <div class="mr-auto place-self-center lg:col-span-5">
          <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
            GIS Pemetaan Lahan Pertanian Kab.Gorut</h1>
          <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Sistem
            Informasi Geografis Pemetaan Lahan Pertanian Kabupaten Gorontalo Utara</p>
          <div class="flex">
            <a href="#"
              class="inline-flex  items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-full bg-color-success-500 hover:bg-color-success-600">
              Data Spasial
              <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
            <a href="#"
              class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-full hover:bg-color-danger-600 bg-color-danger-500">
              Data Tabular
            </a>
          </div>

        </div>
        <div class=" lg:mt-0 lg:col-span-7 lg:flex relative">
          <img src="{{ asset('hero/phone_hero.png') }}" alt="mockup" class="w-full">
          <div class="absolute flex items-end gap-4 right-8 bottom-1/2">
            <img src="{{ asset('icon/location_pin.png') }}" alt="" class="flex-grow-0 w-1/5">
            <div class="flex flex-col gap-2 bg-white p-4 rounded-2xl border border-slate-100 shadow-sm"
              data-aos="zoom-in">
              <p class="font-bold text-xs">Gorontalo Utara</p>
              <ul class="flex">
                <li><img src="{{ asset('icon/fire.png') }}" alt="" class="w-2/3"></li>
                <li><img src="{{ asset('icon/mountain.png') }}" alt="" class="w-2/3"></li>
                <li><img src="{{ asset('icon/sea.png') }}" alt="" class="w-2/3"></li>
              </ul>
            </div>
          </div>
          <div class="absolute hidden lg:flex flex-row-reverse items-end gap-4 left-12 top-0">
            <img src="{{ asset('icon/location_pin.png') }}" alt="" class="flex-grow-0">
            <div class="flex flex-col gap-2 bg-white p-6 rounded-2xl border border-slate-100 shadow-sm"
              data-aos="zoom-in">
              <p class="font-bold text-lg">Gorontalo Utara</p>
              <div class="text-sm text-slate-500 flex flex-col gap-px">
                <p>Lat : 0.769830</p>
                <p>Long : 122.852303</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="w-full mt-10">
      <div class="max-w-screen-xl w-full mx-auto flex flex-col px-8 py-8 lg:py-16 items-center gap-y-20">
        <div class="flex flex-col items-center w-full gap-2">
          <h2 class="text-2xl lg:text-4xl font-bold">Layanan Kami</h2>
          <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, dolores?</p>
        </div>
        <div class="grid grid-cols-4 gap-x-24 gap-y-12">
          <div class="col-span-4 md:col-span-2 flex flex-col items-center justify-center gap-4" data-aos="zoom-in">
            <div class="bg-color-danger-100 text-color-danger-500 px-6 py-6 rounded-lg w-fit">
              <i class="fa fa-table " style="font-size:48px;"></i>
            </div>
            <h3 class="text-lg lg:text-2xl font-bold text-center">Data Tabular Lokasi Lahan Pertanian</h3>
            <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laborum
              quaerat
              suscipit voluptas
              consectetur necessitatibus culpa?</p>
            <a href="#"
              class="inline-flex  items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-full bg-color-danger-500 hover:bg-color-danger-600">
              Lihat Detail
            </a>
          </div>
          <div class="col-span-4 md:col-span-2 flex flex-col items-center justify-center gap-4" data-aos="zoom-in">
            <div class="bg-color-success-100 text-color-success-500 px-7 py-6 rounded-lg w-fit">
              <i class="fas fa-map-marker-alt " style="font-size:48px;"></i>
            </div>
            <h3 class="text-lg lg:text-2xl font-bold text-center">Data Spasial Lokasi Lahan Pertanian</h3>
            <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laborum
              quaerat
              suscipit voluptas
              consectetur necessitatibus culpa?</p>
            <a href="#"
              class="inline-flex items-center justify-center px-5 py-3  text-base font-medium text-center text-white rounded-full bg-color-success-500 hover:bg-color-success-600">
              Lihat Detail
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="w-full mt-10">
      <div class="max-w-screen-xl w-full mx-auto flex flex-col lg:flex-row gap-y-12 px-8 py-8 lg:py-24 ">
        <div class="flex flex-col w-full gap-6">
          <h2 class="text-2xl lg:text-4xl font-bold">Tim Kami</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit odio magnam commodi minus consectetur quae a
            consequatur. Natus, rerum corporis? Ipsum, iste quaerat at quis dolor doloremque exercitationem quos cum
            porro labore.</p>
        </div>
        <div class="grid grid-cols-1 divide-y-2">
          <div class="flex flex-col lg:flex-row gap-y-6 gap-x-6 p-6">
            <img class="w-32 h-32 rounded-full"  src="{{ asset('/user/user.png') }}" alt="Rounded avatar">
            <div class="flex flex-col gap-y-4">
              <div>
                <h3 class="text-xl font-bold">Mohamad Rafiq Daud</h3>
                <span class="text-slate-500">UI/UX & Front End Dev</span>
              </div>
              <p class="text-slate-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus earum similique enim quaerat
                temporibus corrupti esse?
              </p>
              <ul class="text-slate-500 flex gap-4">
                <li><a href=""><i class="fab fa-github" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-instagram" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin" style="font-size:24px;"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-y-6 gap-x-6 p-6">
            <img class="w-32 h-32 rounded-full"  src="{{ asset('/user/user.png') }}" alt="Rounded avatar">
            <div class="flex flex-col gap-y-4">
              <div>
                <h3 class="text-xl font-bold">Abdul Malik Matoha</h3>
                <span class="text-slate-500">Front End Dev</span>
              </div>
              <p class="text-slate-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus earum similique enim quaerat
                temporibus corrupti esse?
              </p>
              <ul class="text-slate-500 flex gap-4">
                <li><a href=""><i class="fab fa-github" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-instagram" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin" style="font-size:24px;"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-y-6 gap-x-6 p-6">
            <img class="w-32 h-32 rounded-full"  src="{{ asset('/user/user.png') }}" alt="Rounded avatar">
            <div class="flex flex-col gap-y-4">
              <div>
                <h3 class="text-xl font-bold">Mohamad Agung Saputra</h3>
                <span class="text-slate-500">Full Stack</span>
              </div>
              <p class="text-slate-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus earum similique enim quaerat
                temporibus corrupti esse?
              </p>
              <ul class="text-slate-500 flex gap-4">
                <li><a href=""><i class="fab fa-github" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-instagram" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin" style="font-size:24px;"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-y-6 gap-x-6 p-6">
            <img class="w-32 h-32 rounded-full"  src="{{ asset('/user/user.png') }}" alt="Rounded avatar">
            <div class="flex flex-col gap-y-4">
              <div>
                <h3 class="text-xl font-bold">Chakra Yudha Pratama</h3>
                <span class="text-slate-500">UI/UX & Front End Dev</span>
              </div>
              <p class="text-slate-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus earum similique enim quaerat
                temporibus corrupti esse?
              </p>
              <ul class="text-slate-500 flex gap-4">
                <li><a href=""><i class="fab fa-github" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-instagram" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin" style="font-size:24px;"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-y-6 gap-x-6 p-6">
            <img class="w-32 h-32 rounded-full" src="{{ asset('/user/user.png') }}" alt="Rounded avatar">
            <div class="flex flex-col gap-y-4">
              <div>
                <h3 class="text-xl font-bold">Syifa nur'afni hidayat</h3>
                <span class="text-slate-500">UI/UX & Front End Dev</span>
              </div>
              <p class="text-slate-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus earum similique enim quaerat
                temporibus corrupti esse?
              </p>
              <ul class="text-slate-500 flex gap-4">
                <li><a href=""><i class="fab fa-github" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-instagram" style="font-size:24px;"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin" style="font-size:24px;"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="p-4 bg-slate-900">
    <div class="mx-auto max-w-screen-xl p-4">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">

        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
            <ul class="text-gray-600 dark:text-gray-400">
              <li class="mb-4">
                <a href="https://flowbite.com" class="hover:underline">Flowbite</a>
              </li>
              <li>
                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
            <ul class="text-gray-600 dark:text-gray-400">
              <li class="mb-4">
                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
              </li>
              <li>
                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-600 dark:text-gray-400">
              <li class="mb-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com"
            class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@endsection