@forelse ($modules as $module)
    <x-jet-nav-link href="{{ route($module->route, $module) }}" :active="request()->routeIs($module->route)">
        {{ __($module->name) }}
    </x-jet-nav-link>    
@empty
    
@endforelse

