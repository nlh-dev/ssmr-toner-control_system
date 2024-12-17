<div class="p-4 sm:ml-64">
    <div class="p-4">
        <h1 class="text-gray-600 font-bold text-2xl">
            <i class="fa-solid fa-users"></i>
            Lista de Usuarios
        </h1>
        <hr class="w-full my-2">
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-base text-white uppercase bg-purple-700">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre de Usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contraseña
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rol de Usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4 text-center">
                        <button type="button" class="text-white bg-gray-700 hover:bg-grey-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-base p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <button type="button" class="text-white bg-yellow-300 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-full text-base p-2.5 text-center inline-flex items-center me-2">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-base p-2.5 text-center inline-flex items-center me-2">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</div>