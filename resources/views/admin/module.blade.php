<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">            
            {{ __('Modulo') }}            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-4 mx-8">
                    
                    <button onclick='Livewire.emit("openModal", "modal-form", {{ json_encode(["seccion" => "module", "type" => "create", "submodule" => $module->id]) }})' class="font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar sub-modulo</button> 
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-4 mx-8">
                    <x-lista :module="$module->id"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>