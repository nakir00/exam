<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sondage numero 1
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 w-full justify-center items-center">
                    <form method="post" action="{{ route('sondage.first.store') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('post')
                        <div>

                            <h3 class=" text-lg font-medium text-gray-900 mb-8">Confirmez-vous votre intérêt pour ce stage ?</h3>
                            <div>
                                <input type="radio" id="oui" name="answer" value="oui" checked />
                                <label for="oui">oui</label>
                              </div>

                              <div>
                                <input type="radio" id="non" name="answer" value="non" />
                                <label for="non">non</label>
                              </div>

                        </div>

                        <div class="flex w-full items-center gap-4">
                            <x-primary-button>valider</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
