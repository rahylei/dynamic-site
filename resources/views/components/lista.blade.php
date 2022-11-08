<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name submodule
                </th>
                
                <th scope="col" class="py-3 px-6">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($submodules as $submodule)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$submodule->name}}
                    </th>
                    
                    <td class="flex flex-row py-2 px-2"> , 
                        <form action="" {{--wire:submit.prevent="delete({{$module}})" --}}method="delete">
                            @csrf
                            @method('delete')
                            <button type="submit" class="w-24 ml-2 my-2 border border-black rounded-md px-2 py-2 bg-red-500 hover:bg-red-400 text-white font-semibold">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
    
            @endforelse

        </tbody>
</table>