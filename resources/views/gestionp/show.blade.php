<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $gestionp->nomprenom }}
        </h2>
        {{-- <a href="{{route('articles.create')}}">Ajouter un personnel</a> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>

                        <div class="mt-6 border-t border-gray-100">
                            <dl class="divide-y divide-gray-100">
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Région</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->region}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">EFP</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->efp}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Annexe</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->annexe}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Corps</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->corps}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Nom et Prénom</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->nomprenom}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">CIN</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->cin}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Genre</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->genre}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">DateNaissance</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->datenaissance}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Age</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->age}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Téléphone</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->tel}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Email</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->email}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Situation familiale</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->situationfamiliale}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Fonction</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->fonction}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Statut</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->statut}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">PPR</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->ppr}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Mode</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->mode}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Niveau</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->niveau}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Filière</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->filiere}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Nombres Heures / semaine</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->nbheuresparsemaine}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Date Recrutement</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->daterecrutement}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Grade Entrée</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->gradeentree}}
                                    </dd>
                                </div>  
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Grade Actuel</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->gradeactuel}}
                                    </dd>
                                </div> 
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Dernier diplome</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->dernierdiplome}}
                                    </dd>
                                </div> 
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Spécialité</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->specialite}}
                                    </dd>
                                </div> 
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-3xl font-medium leading-6 text-gray-900">Observations</dt>
                                    <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{$gestionp->observations}}
                                    </dd>
                                </div>

                                <br>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <a href="{{ route('gestionp.index') }}"
                                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                                        Retour
                                    </a>
                                </div>

                            </dl>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>