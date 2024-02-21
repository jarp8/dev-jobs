<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if(session()->has('mensaje'))
        <div class="uppercase border border-green-600 text-green-600 font-bold p-2 my-5">
            {{ session('mensaje') }}
        </div>

    @else
        <form wire:submit.prevent="postularme" class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida (PDF)')" />
                <x-text-input 
                    id="cv"
                    wire:model="cv"
                    type="file"
                    accept=".pdf"
                    class="block mt-1 w-full"
                />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>

            <x-primary-button class="mt-8">
                Postularme
            </x-primary-button>
        </form>
    @endif
</div>
