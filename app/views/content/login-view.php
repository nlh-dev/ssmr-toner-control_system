<div class="w-full my-12 flex justify-center items-center">
    <div class="w-96 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-5" action="#" method="GET">
            <div class="flex items-center">
                <img src="<?= APP_URL?>app/views/img/ssmr-1.png" class="h-10" alt="">
                <h5 class="text-2xl font-medium text-gray-900 px-2">
                    INICIO DE SESIÓN
                </h5>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                <i class="fa-solid fa-user"></i>
                    Usuario
                </label>
                <input type="text" name="userName" id="userName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Inserte nombre de Usuario..." required />
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                <i class="fa-solid fa-key"></i>
                    Contraseña
                </label>
                <input type="password" name="password" id="password" placeholder="Inserte contraseña..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
            <div class="flex items-start">
                <?php
                    require_once "./app/views/inc/components/ToggleSwitchPassword.php";
                ?>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ingresar</button>
        </form>
    </div>
</div>