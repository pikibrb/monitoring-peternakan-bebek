<?php
use function Livewire\Volt\{state};

state(['search' => '']);
?>

<div>
    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm mb-space-lg flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
        <div class="relative flex-1 min-w-[280px]">
            <span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
            <input wire:model.live="search" class="w-full h-11 pl-11 pr-space-md bg-surface-container-low text-on-surface font-body-md text-body-md rounded-lg focus:outline-none focus:bg-surface-container-lowest transition-colors" placeholder="Cari kelompok, jenis bebek, atau ID kandang..." type="text"/>
        </div>

        <div class="flex flex-wrap items-center gap-space-sm">
            <div class="relative">
                <select class="h-11 px-space-md pr-8 bg-surface-container-low text-on-surface font-label-md text-label-md rounded-lg appearance-none cursor-pointer focus:outline-none focus:bg-surface-container-lowest">
                    <option>Jenis Bebek: Semua</option>
                    <option>Bebek Mojosari</option>
                    <option>Bebek Alabio</option>
                </select>
                <span class="material-symbols-outlined absolute right-space-sm top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
            </div>

            <div class="relative">
                <select class="h-11 px-space-md pr-8 bg-surface-container-low text-on-surface font-label-md text-label-md rounded-lg appearance-none cursor-pointer focus:outline-none focus:bg-surface-container-lowest">
                    <option>Kelompok: Semua</option>
                    <option>Kelompok A</option>
                    <option>Kelompok B</option>
                </select>
                <span class="material-symbols-outlined absolute right-space-sm top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
            </div>

            <div class="hidden sm:block h-6 w-px bg-surface-container-highest mx-space-xs"></div>

            <div class="flex items-center gap-space-sm w-full sm:w-auto">
                <button wire:click="$dispatch('open-drawer-kurang')" class="flex-1 sm:flex-initial h-11 px-space-md bg-surface-container-lowest text-[#A5453B] hover:bg-error-container/40 rounded-lg font-label-lg text-label-lg flex items-center justify-center gap-space-xs transition-colors" type="button">
                    <span class="material-symbols-outlined text-[18px]">remove_circle_outline</span>
                    <span>Catat Pengurangan</span>
                </button>
                <button wire:click="$dispatch('open-drawer-tambah')" class="flex-1 sm:flex-initial h-11 px-space-md bg-primary-container text-on-primary hover:bg-primary rounded-lg font-label-lg text-label-lg flex items-center justify-center gap-space-xs transition-colors shadow-sm" type="button">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    <span>+ Tambah Populasi</span>
                </button>
            </div>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
        <div class="overflow-x-auto w-full">
            <table class="w-full text-left border-collapse min-w-[960px]">
                <thead>
                    <tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                        <th class="py-space-md px-space-lg font-semibold">Kelompok & Jenis</th>
                        <th class="py-space-md px-space-md font-semibold">Tanggal Masuk</th>
                        <th class="py-space-md px-space-md font-semibold">Umur / Siklus</th>
                        <th class="py-space-md px-space-md font-semibold text-right">Awal</th>
                        <th class="py-space-md px-space-md font-semibold text-right">Sekarang</th>
                        <th class="py-space-md px-space-md font-semibold text-center">Status Kesehatan</th>
                        <th class="py-space-md px-space-md font-semibold text-right">Rasio Telur</th>
                        <th class="py-space-md px-space-lg font-semibold text-center">Aksi Operasional</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container-high text-body-md font-body-md text-on-surface">
                    <tr class="hover:bg-surface-container-low/60 transition-colors">
                        <td class="py-space-md px-space-lg">
                            <div class="flex items-center gap-space-md">
                                <div class="w-10 h-10 rounded-lg bg-primary-container/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-[20px]">warehouse</span>
                                </div>
                                <div class="flex flex-col min-w-0">
                                    <span class="font-label-lg text-label-lg text-on-surface truncate">Kelompok A - Mojosari Super</span>
                                    <div class="flex items-center gap-1.5 mt-0.5">
                                        <span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Kandang Timur</span>
                                        <span class="text-on-surface-variant text-label-sm">• ID: KND-01</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="py-space-md px-space-md text-on-surface-variant whitespace-nowrap">15 Jan 2024</td>
                        <td class="py-space-md px-space-md whitespace-nowrap">
                            <span class="font-semibold text-on-surface">40 Minggu</span>
                            <span class="block font-body-sm text-body-sm text-[#3C7A57]">Puncak Produksi</span>
                        </td>
                        <td class="py-space-md px-space-md text-right font-medium text-on-surface-variant whitespace-nowrap">1.210 Ekor</td>
                        <td class="py-space-md px-space-md text-right whitespace-nowrap">
                            <span class="font-semibold text-on-surface">1.200 Ekor</span>
                            <span class="block font-body-sm text-body-sm text-[#A5453B]">-10 ekor (0.8%)</span>
                        </td>
                        <td class="py-space-md px-space-md text-center whitespace-nowrap">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-[#3C7A57] text-on-error font-label-sm text-label-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                                Sehat
                            </span>
                        </td>
                        <td class="py-space-md px-space-md text-right whitespace-nowrap">
                            <span class="font-semibold text-on-surface">86.5%</span>
                            <span class="block font-body-sm text-body-sm text-on-surface-variant">1.038 btr/hr</span>
                        </td>
                        <td class="py-space-md px-space-lg text-center whitespace-nowrap">
                            <div class="inline-flex items-center gap-space-xs">
                                <button class="h-9 px-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors" type="button">Detail</button>
                                <button class="h-9 px-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors" type="button">Ubah</button>
                                <button wire:click="$dispatch('open-drawer-kurang', { group: 'Kelompok A - Mojosari Super' })" class="h-9 px-space-sm rounded-lg bg-error-container/50 hover:bg-error-container text-[#A5453B] font-label-sm text-label-sm transition-colors" type="button">- Kurang</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="px-space-lg py-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm">
            <div class="font-body-sm text-body-sm text-on-surface-variant">
                Menampilkan <span class="font-semibold text-on-surface">1</span> dari <span class="font-semibold text-on-surface">1</span> kelompok kandang aktif
            </div>
            <div class="flex items-center gap-space-xs">
                <button class="h-9 px-space-md rounded-lg bg-surface-container text-on-surface-variant/50 font-label-md text-label-md cursor-not-allowed" disabled type="button">Sebelumnya</button>
                <span class="h-9 w-9 rounded-lg bg-primary-container text-on-primary flex items-center justify-center font-label-md text-label-md">1</span>
                <button class="h-9 px-space-md rounded-lg bg-surface-container text-on-surface-variant/50 font-label-md text-label-md cursor-not-allowed" disabled type="button">Berikutnya</button>
            </div>
        </div>
    </div>
</div>