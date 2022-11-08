<div>
    @switch($seccion)
        @case("layout")

            @switch($type)
                @case("create")
                    <x-forms.module/>    
                    @break
                @case("edit")

                    @break
                $@default
                    
            @endswitch

            @break
        @case("module")
            
            @switch($type)
                @case("create")
                    <x-forms.sub-module :module="$submodule"/>
                    @break
                @case("edit")

                    @break
                $@default
                    
            @endswitch

            @break
        $@default            
    @endswitch
</div>
