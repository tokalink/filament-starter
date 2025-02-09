<x-filament-widgets::widget>
    <x-filament::section>
        {{-- tampilkan jumlah user --}}
        
        <div class="flex-1">
            <h2 class="grid flex-1 text-base font-semibold leading-6 text-gray-950 dark:text-white">Data User</h2>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $users }} Users</span>                
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
