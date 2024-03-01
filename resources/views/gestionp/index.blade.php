<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('filter-button').addEventListener('click', function() {
        var filterValue = document.getElementById('supplier-filter').value.trim().toLowerCase();
        var rows = document.querySelectorAll('tbody tr');

        rows.forEach(function(row) {
            var name = row.querySelector('td:nth-child(2)').textContent.trim().toLowerCase();
            if (name.includes(filterValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    document.getElementById('reset-button').addEventListener('click', function() {
        var rows = document.querySelectorAll('tbody tr');
        rows.forEach(function(row) {
            row.style.display = '';
        });
        document.getElementById('supplier-filter').value = '';
    });
});
</script>
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Gestionnaire') }}
            </h2>
            <a href="{{ route('gestionp.create') }}"
                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Ajouter
                un personnel</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                <div class="flex items-center mb-4">
                        <input type="text" id="supplier-filter" class="form-input w-full rounded-md shadow-sm" placeholder="Entrer Nom">
                        <button id="filter-button" class="ml-2 inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Filtrer</button>
                        <button id="reset-button" class="ml-2 inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">Réinitialiser</button>
                    </div>
                    <div class="border flex flex-col">
                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                            <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">
                                                    Id</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Nom et Prénom</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Cin</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Genre</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Age</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Téléphone</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Email</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            @foreach ($gestionps as $gestionp)
                                                <tr>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 text-xl">{{ $gestionp->id }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 text-xl">{{ $gestionp->nomprenom }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 text-xl">{{ $gestionp->cin }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 text-xl">{{ $gestionp->genre }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 text-xl">{{ $gestionp->age }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 text-xl">{{ $gestionp->tel }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 text-xl ">{{ $gestionp->email }}</td>
                                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                        <a href="{{ route('gestionp.edit', ['gestionp' => $gestionp->id]) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">
                                                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                                Editer
                                                            </button>
                                                        </a>
                                                        <a href="{{ route('gestionp.show', ['gestionp' => $gestionp->id]) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">
                                                            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                                                                Plus d'info
                                                            </button>
                                                        </a>


                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
