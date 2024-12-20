<div class="flex-grow p-4 sm:ml-64">
    <div class="p-4">
        <div class="flex items-center">
            <svg class="w-8 h-8 text-gray-600 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd" />
            </svg>
            <h1 class="text-gray-600 font-bold text-2xl">
                Página de Inicio
            </h1>
        </div>
        <hr class="w-full my-2">
    </div>

    <div class="rounded-lg dark:border-gray-700">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5">
            <div class="p-6 bg-blue-500 rounded-lg dark:bg-gray-800 hover:bg-blue-700">
                <a href="<?= APP_URL ?>toners/">
                    <div class="flex justify-start items-center">
                        <svg class="w-8 h-8 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd" />
                        </svg>
                        <h1 class="mb-2 text-3xl font-bold tracking-tight text-white dark:text-white">
                            Toners
                        </h1>
                    </div>
                    <p class="font-bold text-gray-200 dark:text-gray-400">Cantidad: </p>
                </a>
            </div>

            <div class="p-6 bg-green-500 rounded-lg hover:bg-green-800">
                <a href="<?= APP_URL ?>printers/">
                    <div class="flex justify-start items-center">
                        <svg class="w-8 h-8 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z" clip-rule="evenodd" />
                        </svg>
                        <h1 class="mb-2 text-3xl font-bold tracking-tight text-white dark:text-white">
                            Impresoras
                        </h1>
                    </div>
                    <p class="font-bold text-gray-200 dark:text-gray-400">Cantidad: </p>
                </a>
            </div>


            <div class="p-6 bg-red-600 rounded-lg hover:bg-red-800">
                <a href="<?= APP_URL ?>rotation/">
                    <div class="flex justify-start items-center">
                        <svg class="w-8 h-8 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 10 3-3m0 0-3-3m3 3H5v3m3 4-3 3m0 0 3 3m-3-3h14v-3" />
                        </svg>
                        <h1 class="mb-2 text-3xl font-bold tracking-tight text-white dark:text-white">
                            Control de Rotación
                        </h1>
                    </div>
                    <p class="font-bold text-gray-200 dark:text-gray-400">Ver rotación de Toners</p>
                </a>
            </div>

            <div class="p-6 bg-gray-700 rounded-lg hover:bg-gray-800">
                <a href="<?= APP_URL ?>reload/">
                    <div class="flex justify-start items-center">
                        <svg class="w-8 h-8 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 25 25">
                            <path d="M7 13v-2h7v2H7Z" />
                            <path fill-rule="evenodd" d="M2 8a2 2 0 0 1 2-2h13a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8Zm4 1a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H6Z" clip-rule="evenodd" />
                            <path d="M22 14v-4a1 1 0 0 0-1-1h-1v6h1a1 1 0 0 0 1-1Z" />
                        </svg>
                        <h1 class="mb-2 text-3xl font-bold tracking-tight text-white dark:text-white">
                            Control de Recargas
                        </h1>
                    </div>
                    <p class="font-bold text-gray-200 dark:text-gray-400">Ver lista de Recargas </p>
                </a>
            </div>

            <div class="p-6 bg-purple-700 rounded-lg hover:bg-purple-800">
                <a href="<?= APP_URL ?>users/">
                    <div class="flex justfy-start items-center">
                        <svg class="w-8 h-8 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                        </svg>
                        <h1 class="mb-2 text-3xl font-bold tracking-tight text-white dark:text-white">
                            Usuarios
                        </h1>
                    </div>
                    <p class="font-bold text-gray-200 dark:text-gray-400">Ver lista de Usuarios </p>
                </a>
            </div>
        </div>
    </div>
</div>