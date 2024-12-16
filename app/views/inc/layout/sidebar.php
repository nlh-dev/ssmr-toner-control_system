<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 m-8 overflow-y-auto bg-gray-50">
      <a href="<?= APP_URL?>dashboard/" class="flex items-center ps-2.5 mb-5">
         <img src="<?= APP_URL?>app/views/img/ssmr-1.png" class="h-6 me-3 sm:h-7" alt="ssmr-1" />
         <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">TONERS</span>
      </a>
      <ul class="space-y-2 font-medium text-lg">
         <li>
            <a href="<?= APP_URL?>dashboard/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fa-solid fa-house w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="ms-3">Inicio</span>
            </a>
         </li>
         <li>
            <a href="<?= APP_URL?>toners/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fa-solid fa-fill-drip w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="ms-3">Lista de Toners</span>
            </a>
         </li>
         <li>
            <a href="" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fa-solid fa-print w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="ms-3">Lista de Impresoras</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fa-solid fa-shoe-prints w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="ms-3">Control de Rotacion</span>
            </a>
         </li>
         <hr class="">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fa-solid fa-users w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="ms-3">Lista de Usuarios</span>
            </a>
         </li>
         <hr class="">
         <li>
            <button type="button" class="px-6 p-3 mt-3 text-lg font-medium text-white items-center w-full bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               <i class="fa-solid fa-right-from-bracket text-white me-2"></i>
               Cerrar Sesión
            </button>
         </li>
      </ul>
   </div>
</aside>