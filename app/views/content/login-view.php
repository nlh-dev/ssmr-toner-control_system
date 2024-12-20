<div class="w-full my-12 flex justify-center items-center">
    <div class="w-96 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-5 AjaxForm" method="POST" autocomplete="off">
            <div class="flex items-center">
                <img src="<?= APP_URL ?>app/views/img/ssmr-1.png" class="h-10" alt="">
                <h5 class="text-2xl font-medium text-gray-900 px-2">
                    INICIO DE SESIÓN
                </h5>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Usuario
                </label>
                <input type="text" name="userName" id="userName" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Inserte nombre de Usuario..." />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Contraseña
                </label>
                <input type="password" name="password" id="password" placeholder="Inserte contraseña..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
            </div>

            <?php require_once './app/views/inc/components/ToggleSwitchPassword.php';?>

            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ingresar</button>
        </form>
    </div>
</div>