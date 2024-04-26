<x-admin-layout>
    <div>
        <div class="mx-auto">
            <div class="overflow-hidden">

                @if ($type == 1)
                    <livewire:rawmaterial.globalcompo />
                @else
                    <livewire:rawmaterial.internalcompo />
                @endif

            </div>
        </div>
    </div>
</x-admin-layout>
