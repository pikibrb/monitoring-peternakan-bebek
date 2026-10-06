<x-app-layout>
    <div class="flex flex-col w-full">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pb-space-lg">
            <div class="flex flex-col">
                <div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md mb-space-xs">
                    <span>Manajemen Populasi</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-primary font-semibold">Data Bebek & Kandang</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Inventaris Populasi Bebek</h1>
                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">Pemantauan kelompok layer, fase umur produksi, laju mortalitas harian, dan mutasi kandang.</p>
            </div>
            <div class="flex items-center gap-space-sm self-start md:self-auto bg-surface-container px-space-md py-space-xs rounded-lg">
                <span class="w-2.5 h-2.5 rounded-full bg-[#3C7A57] animate-pulse"></span>
                <span class="font-label-sm text-label-sm text-on-surface">Data diperbarui: 15 menit lalu (Sesi Pagi)</span>
            </div>
        </div>

        <livewire:ducks.kpi-summary />
        <livewire:ducks.data-table />
        <livewire:ducks.operational-guidelines />
        
        <livewire:ducks.add-population-modal />
        <livewire:ducks.reduce-population-modal />
    </div>
</x-app-layout>