<?php
use function Livewire\Volt\{state, on};

state(['show' => false, 'jumlahMasuk' => 250]);

on(['open-drawer-tambah' => function () {
    $this->show = true;
}]);

$closeDrawer = function () {
    $this->show = false;
};

$adjustCount = function ($delta) {
    $this->jumlahMasuk += $delta;
    if ($this->jumlahMasuk < 1) {
        $this->jumlahMasuk = 1;
    }
};
?>

<div class="fixed inset-0 z-50 bg-[#26302C]/40 backdrop-blur-[2px] justify-end {{ $show ? 'flex' : 'hidden' }}">
    <div class="w-full max-w-lg bg-surface-container-lowest h-full shadow-2xl flex flex-col justify-between overflow-y-auto">
        <div>
            <div class="p-space-lg bg-surface-container-low flex items-center justify-between">
                <div class="flex items-center gap-space-sm">
                    <span class="p-2 rounded-lg bg-primary-container text-on-primary">
                        <span class="material-symbols-outlined text-[20px]">add_circle</span>
                    </span>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Tambah Populasi Masuk</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Pencatatan penerimaan bibit (DOD / Dara / Afkir)</p>
                    </div>
                </div>
                <button wire:click="closeDrawer" class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors" type="button">
                    <span class="material-symbols-outlined text-[22px]">close</span>
                </button>
            </div>
            
            <form class="p-space-lg space-y-space-md" id="formTambahPopulasi">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1">Nama Kelompok / Batch *</label>
                    <input class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" placeholder="Contoh: Kelompok D - Dara Mojosari" required type="text"/>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1">Jenis Bebek *</label>
                        <select class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" required>
                            <option value="Mojosari">Bebek Mojosari</option>
                            <option value="Alabio">Bebek Alabio</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1">Lokasi Kandang *</label>
                        <select class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" required>
                            <option value="Timur">Kandang Timur (KND-01)</option>
                            <option value="Barat">Kandang Barat (KND-02)</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1">Tanggal Tiba di Kandang *</label>
                        <input class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" required type="date" value="{{ now()->format('Y-m-d') }}"/>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1">Umur Saat Masuk (Minggu)</label>
                        <input class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" max="100" min="1" type="number" value="16"/>
                    </div>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1">Jumlah Ekor Masuk *</label>
                    <div class="flex items-center gap-space-sm">
                        <button wire:click="adjustCount(-50)" class="w-11 h-11 rounded-lg bg-surface-container text-on-surface flex items-center justify-center font-bold text-lg active:scale-95 transition-transform" type="button">-50</button>
                        <button wire:click="adjustCount(-10)" class="w-11 h-11 rounded-lg bg-surface-container text-on-surface flex items-center justify-center font-bold text-lg active:scale-95 transition-transform" type="button">-10</button>
                        <input wire:model="jumlahMasuk" class="flex-1 h-11 text-center font-headline-sm text-headline-sm text-on-surface bg-surface-container-low rounded-lg focus:outline-none focus:bg-surface-container-lowest" min="1" required type="number"/>
                        <button wire:click="adjustCount(10)" class="w-11 h-11 rounded-lg bg-surface-container text-on-surface flex items-center justify-center font-bold text-lg active:scale-95 transition-transform" type="button">+10</button>
                        <button wire:click="adjustCount(50)" class="w-11 h-11 rounded-lg bg-surface-container text-on-surface flex items-center justify-center font-bold text-lg active:scale-95 transition-transform" type="button">+50</button>
                    </div>
                    <span class="block font-body-sm text-body-sm text-on-surface-variant mt-1">Tombol cepat membantu operator saat menghitung dari keranjang angkut.</span>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1">Asal Peternak / Pemasok</label>
                    <input class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" placeholder="Misal: UD. Sumber Ternak Blitar" type="text"/>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1">Catatan Kesehatan / Vaksin Awal</label>
                    <textarea class="w-full p-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" placeholder="Sudah vaksin ND pertama, kondisi fisik aktif seragam..." rows="2"></textarea>
                </div>
            </form>
        </div>
        
        <div class="p-space-lg bg-surface-container-low flex items-center justify-end gap-space-md">
            <button wire:click="closeDrawer" class="h-11 px-space-lg rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors" type="button">Batal</button>
            <button class="h-11 px-space-xl rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary transition-colors shadow-sm" form="formTambahPopulasi" type="submit">Simpan Populasi</button>
        </div>
    </div>
</div>