<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="'nom'" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="prenom" :value="'prenom'" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prename" :value="old('prename')" required autofocus autocomplete="prename" />
            <x-input-error :messages="$errors->get('prename')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="adresse" :value="'adresse'" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="classe" :value="'classe'" />
            <x-text-input id="classe" class="block mt-1 w-full" type="text" name="classe" :value="old('classe')" required autofocus autocomplete="classe" />
            <x-input-error :messages="$errors->get('classe')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="numero" :value="'numero'" />
            <x-text-input id="numero" class="block mt-1 w-full" type="number" name="numero" :value="old('numero')" required autofocus autocomplete="numero" />
            <x-input-error :messages="$errors->get('numero')" class="mt-2" />
        </div>

        <div class="mt-4">
            <label for="ecole" class="block mb-2 text-sm font-medium text-gray-900"> ecole</label>
            <select id="ecole" name="ecole" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option selected> choisir ecole</option>
                <option value="esp">ESP</option>
                <option value="rose-dieng-lab">Rose Dieng Lab</option>
                <option value="defar-sci">DEFAR Sci</option>
                <option value="bakeli">Bakeli</option>
                <option value="xarala">Xarala</option>
            </select>
        </div>

        <div class="mt-4">
            <label for="Domaine" class="block mb-2 text-sm font-medium text-gray-900"> Domaine</label>
            <select id="Domaine" name="domaine" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option selected> choisir domaine</option>
                <option value="informatique">Informatique</option>
                <option value="reseau-telecom">Réseau Télécom</option>
                <option value="mecanique">Mécanique</option>
                <option value="electronique">Electronique</option>
            </select>
        </div>

        <div class="mt-4">
            <label for="niveau" class="block mb-2 text-sm font-medium text-gray-900"> niveau</label>
            <select id="niveau" name="niveau" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option selected>choisir niveau</option>
                <option value="1">Bac+1</option>
                <option value="2">Bac+2</option>
                <option value="3">Bac+3</option>
                <option value="4">Bac+4</option>
                <option value="5">Bac+5</option>
            </select>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
