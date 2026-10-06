<?php
use function Livewire\Volt\{state, on};

state(['show' => false, 'jumlahKurang' => 1, 'selectedGroup' => '']);

on(['open-drawer-kurang' => function ($data = []) {
    if (isset($data['group'])) {
        $this->selectedGroup = $data['group'];
    }
    $this->show = true;
}]);

$closeDrawer = function () {
    $this->show = false;
};

$adjustCount = function ($delta) {
    $this->jumlahKurang += $delta;
    if ($this->jumlahKurang < 1) {
        $this->jumlahKurang = 1;
    }
};
?>

<div class="fixed inset-0 z-50 bg-[#26302C]/40 backdrop-blur-[2px] justify-end {{ $show ? 'flex' : 'hidden' }}">
    <div class="w-full max-w-lg bg-surface-container-lowest h-full shadow-2xl flex flex-col justify-between overflow-y-auto">
        <div>
            <div class="p-space-lg bg-error-container/40 flex items-center justify-between">
                <div class="flex items-center gap-space-sm">
                    <span class="p-2 rounded-lg bg-[#A5453B] text-white">
                        <span class="material-symbols-outlined text-[20px]">remove_circle</span>
                    </span>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Catat Pengurangan / Kematian</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Update harian untuk menjaga akurasi rasio pakan & telur</p>
                    </div>
                </div>
                <button wire:click="closeDrawer" class="w-9 h-9 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors" type="button">
                    <span class="material-symbols-outlined text-[22px]">close</span>
                </button>
            </div>
            
            <form class="p-space-lg space-y-space-md" id="formKurangPopulasi">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1">Pilih Kelompok Bebek *</label>
                    <select wire:model="selectedGroup" class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" required>
                        <option value="">Pilih Kelompok</option>
                        <option value="Kelompok A - Mojosari Super">Kelompok A - Mojosari Super (Kandang Timur)</option>
                        <option value="Kelompok B - Bebek Alabio Unggul">Kelompok B - Bebek Alabio Unggul (Kandang Barat)</option>
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-space-md">
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1">Tanggal Kejadian *</label>
                        <input class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" required type="date" value="{{ now()->format('Y-m-d') }}"/>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1">Waktu Sesi</label>
                        <select class="w-full h-11 px-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest">
                            <option>Pagi (06:00 - 08:00)</option>
                            <option>Siang (12:00 - 13:00)</option>
                            <option>Sore (16:30 - 17:30)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-2">Alasan Pengurangan *</label>
                    <div class="grid grid-cols-2 gap-space-sm">
                        <label class="flex items-center gap-space-sm p-space-sm bg-surface-container-low rounded-lg cursor-pointer hover:bg-surface-container">
                            <input checked class="w-5 h-5 accent-[#A5453B]" name="alasanPengurangan" type="radio" value="Mati"/>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface">Mati Harian</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Penyakit / Alami</span>
                            </div>
                        </label>
                        <label class="flex items-center gap-space-sm p-space-sm bg-surface-container-low rounded-lg cursor-pointer hover:bg-surface-container">
                            <input class="w-5 h-5 accent-primary-container" name="alasanPengurangan" type="radio" value="Dijual"/>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface">Dijual Hidup</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Afkir / Penjualan</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1">Jumlah Ekor Berkurang *</label>
                    <div class="flex items-center gap-space-sm">
                        <button wire:click="adjustCount(-1)" class="w-11 h-11 rounded-lg bg-surface-container text-on-surface flex items-center justify-center font-bold text-lg active:scale-95 transition-transform" type="button">-1</button>
                        <input wire:model="jumlahKurang" class="flex-1 h-11 text-center font-headline-sm text-headline-sm text-on-surface bg-surface-container-low rounded-lg focus:outline-none focus:bg-surface-container-lowest" min="1" required type="number"/>
                        <button wire:click="adjustCount(1)" class="w-11 h-11 rounded-lg bg-surface-container text-on-surface flex items-center justify-center font-bold text-lg active:scale-95 transition-transform" type="button">+1</button>
                        <button wire:click="adjustCount(5)" class="w-11 h-11 rounded-lg bg-surface-container text-on-surface flex items-center justify-center font-bold text-lg active:scale-95 transition-transform" type="button">+5</button>
                    </div>
                </div>

                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1">Gejala Klinis / Catatan Lapangan</label>
                    <textarea class="w-full p-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest" placeholder="Contoh: Sayap terkulai, kotoran putih cair, bangkai telah dikubur..." rows="2"></textarea>
                </div>
            </form>
        </div>
        
        <div class="p-space-lg bg-surface-container-low flex items-center justify-end gap-space-md">
            <button wire:click="closeDrawer" class="h-11 px-space-lg rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors" type="button">Batal</button>
            <button class="h-11 px-space-xl rounded-lg bg-[#A5453B] text-white font-label-lg text-label-lg hover:brightness-95 transition-colors shadow-sm" form="formKurangPopulasi" type="submit">Catat & Kurangi</button>
        </div>
    </div>
</div>