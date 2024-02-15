<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un personnel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section>
                        <form method="POST" action="{{ route('gestionp.store') }}" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <x-input-label for="region" :value="__('Region')" />
                                <x-text-input id="region" name="region" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('region')" />
                            </div>

                            <div>
                                <x-input-label for="efp" :value="__('EFP')" />
                                <x-text-input id="efp" name="efp" type="text" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('efp')" />
                            </div>

                            <div>
                                <x-input-label for="annexe" :value="__('Annexe')" />
                                <x-text-input id="annexe" name="annexe" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('annexe')" />
                            </div>

                            <div>
                                <x-input-label for="corps" :value="__('Corps')" />
                                <x-text-input id="corps" name="corps" type="text" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('corps')" />
                            </div>

                            <div>
                                <x-input-label for="nomprenom" :value="__('Nom et Prénom')" />
                                <x-text-input id="nomprenom" name="nomprenom" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('nomprenom')" />
                            </div>

                            <div>
                                <x-input-label for="cin" :value="__('CIN')" />
                                <x-text-input id="cin" name="cin" type="text" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('cin')" />
                            </div>

                            <div>
                                <x-input-label for="genre" :value="__('Genre')" />
                                <select id="genre" name="genre">
                                <option value="masculin">masculin</option>
                                <option value="feminin">feminin</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('genre')" />
                            </div>

                            <div>
                                <x-input-label for="datenaissance" :value="__('Date de Naissance')" />
                                <x-text-input id="datenaissance" name="datenaissance" type="date"
                                    class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('datenaissance')" />
                            </div>

                            <div>
                                <x-input-label for="age" :value="__('Age')" />
                                <x-text-input id="age" name="age" type="number" class="mt-1 block w-full" disabled />
                                <x-input-error class="mt-2" :messages="$errors->get('age')" />
                            </div>

                            <div>
                                <x-input-label for="tel" :value="__('Téléphone')" />
                                <x-text-input id="tel" name="tel" type="tel" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('tel')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="situationfamiliale" :value="__('Situation Familiale')" />
                                <x-text-input id="situationfamiliale" name="situationfamiliale" type="text"
                                    class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('situationfamiliale')" />
                            </div>

                            <div>
                                <x-input-label for="fonction" :value="__('Fonction')" />
                                <x-text-input id="fonction" name="fonction" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('fonction')" />
                            </div>

                            <div>
                                <x-input-label for="statut" :value="__('Statut')" />
                                <x-text-input id="statut" name="statut" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('statut')" />
                            </div>

                            <div>
                                <x-input-label for="ppr" :value="__('PPR')" />
                                <x-text-input id="ppr" name="ppr" type="text" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('ppr')" />
                            </div>

                            <div>
                                <x-input-label for="mode" :value="__('Mode')" />
                                <x-text-input id="mode" name="mode" type="text" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('mode')" />
                            </div>

                            <div>
                                <x-input-label for="niveau" :value="__('Niveau')" />
                                <x-text-input id="niveau" name="niveau" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('niveau')" />
                            </div>
                            <div>
                                <x-input-label for="filiere" :value="__('Filiere')" />
                                <x-text-input id="filiere" name="filiere" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('filiere')" />
                            </div>
                            <div>
                                <x-input-label for="modules" :value="__('Modules')" />
                                <x-text-input id="modules" name="modules" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('modules')" />
                            </div>
                            <div>
                                <x-input-label for="nbheuresparsemaine" :value="__('Nombre heures / semaine')" />
                                <x-text-input id="nbheuresparsemaine" name="nbheuresparsemaine" type="number"
                                    class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('nbheuresparsemaine')" />
                            </div>
                            <div>
                                <x-input-label for="daterecrutement" :value="__('Date recrutement')" />
                                <x-text-input id="daterecrutement" name="daterecrutement" type="date"
                                    class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('daterecrutement')" />
                            </div>
                            <div>
                                <x-input-label for="gradeentree" :value="__('Grade entree')" />
                                <x-text-input id="gradeentree" name="gradeentree" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('gradeentree')" />
                            </div>
                            <div>
                                <x-input-label for="gradeactuel" :value="__('Grade actuel')" />
                                <x-text-input id="gradeactuel" name="gradeactuel" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('gradeactuel')" />
                            </div>
                            <div>
                                <x-input-label for="dernierdiplome" :value="__('Dernier Diplome')" />
                                <x-text-input id="dernierdiplome" name="dernierdiplome" type="text"
                                    class="mt-1 block w-full"  />
                                <x-input-error class="mt-2" :messages="$errors->get('dernierdiplome')" />
                            </div>
                            <div>
                                <x-input-label for="specialite" :value="__('Spécialité')" />
                                <x-text-input id="specialite" name="specialite" type="text" class="mt-1 block w-full"
                                    required />
                                <x-input-error class="mt-2" :messages="$errors->get('specialite')" />
                            </div>
                            <div>
                                <x-input-label for="observations" :value="__('Observations')" />
                                <textarea id="observations" name="observations" class="mt-1 block w-full"
                                    rows="4"></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('observations')" />
                            </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'gestionp-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>