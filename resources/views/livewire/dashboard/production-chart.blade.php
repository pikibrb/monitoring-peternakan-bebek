<?php
use function Livewire\Volt\{state};
?>

<div class="lg:col-span-7 bg-surface-container-lowest rounded-xl p-space-xl border border-outline-variant shadow-sm flex flex-col justify-between" x-data="{ filter: '7 Hari Terakhir' }">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md pb-space-md border-b border-outline-variant">
        <div>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Tren Produksi & Populasi</h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Korelasi bertelur dengan kapasitas kandang aktif</p>
        </div>
        
        <div class="inline-flex p-1 bg-surface-container rounded-lg border border-outline-variant self-start sm:self-auto">
            <button @click="filter = '7 Hari Terakhir'" :class="filter === '7 Hari Terakhir' ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:text-on-surface'" class="px-space-md py-1 rounded-md text-label-sm font-label-sm font-semibold transition-colors" type="button">7 Hari Terakhir</button>
            <button @click="filter = '30 Hari'" :class="filter === '30 Hari' ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:text-on-surface'" class="px-space-md py-1 rounded-md text-label-sm font-label-sm font-semibold transition-colors" type="button">30 Hari</button>
            <button @click="filter = '3 Bulan'" :class="filter === '3 Bulan' ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:text-on-surface'" class="px-space-md py-1 rounded-md text-label-sm font-label-sm font-semibold transition-colors" type="button">3 Bulan</button>
        </div>
    </div>

    <div class="flex items-center gap-space-lg py-space-sm text-label-sm font-label-sm">
        <div class="flex items-center gap-2">
            <span class="w-3.5 h-3.5 rounded-sm bg-primary-container"></span>
            <span class="text-on-surface font-medium">Produksi Telur (Butir)</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="w-3.5 h-3.5 rounded-sm bg-secondary"></span>
            <span class="text-on-surface font-medium">Populasi Bebek (Ekor)</span>
        </div>
    </div>

    <div class="relative w-full h-64 mt-space-sm">
        <svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 650 240">
            <line stroke="#E2DFD8" stroke-dasharray="4" stroke-width="1" x1="40" x2="630" y1="20" y2="20"></line>
            <line stroke="#E2DFD8" stroke-dasharray="4" stroke-width="1" x1="40" x2="630" y1="75" y2="75"></line>
            <line stroke="#E2DFD8" stroke-dasharray="4" stroke-width="1" x1="40" x2="630" y1="130" y2="130"></line>
            <line stroke="#E2DFD8" stroke-dasharray="4" stroke-width="1" x1="40" x2="630" y1="185" y2="185"></line>
            <line stroke="#717975" stroke-width="1.5" x1="40" x2="630" y1="215" y2="215"></line>
            
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="end" x="32" y="24">2.500</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="end" x="32" y="79">2.200</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="end" x="32" y="134">1.900</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="end" x="32" y="189">1.600</text>
            
            <polyline fill="none" points="60,34 150,34 240,32 330,32 420,30 510,30 600,28" stroke="#416279" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></polyline>
            
            <polyline fill="none" points="60,118 150,105 240,122 330,96 420,88 510,92 600,74" stroke="#154539" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.5"></polyline>
            
            <circle cx="60" cy="34" fill="#FFFFFF" r="4.5" stroke="#416279" stroke-width="2.5"></circle>
            <circle cx="150" cy="34" fill="#FFFFFF" r="4.5" stroke="#416279" stroke-width="2.5"></circle>
            <circle cx="240" cy="32" fill="#FFFFFF" r="4.5" stroke="#416279" stroke-width="2.5"></circle>
            <circle cx="330" cy="32" fill="#FFFFFF" r="4.5" stroke="#416279" stroke-width="2.5"></circle>
            <circle cx="420" cy="30" fill="#FFFFFF" r="4.5" stroke="#416279" stroke-width="2.5"></circle>
            <circle cx="510" cy="30" fill="#FFFFFF" r="4.5" stroke="#416279" stroke-width="2.5"></circle>
            <circle cx="600" cy="28" fill="#FFFFFF" r="4.5" stroke="#416279" stroke-width="2.5"></circle>
            
            <circle cx="60" cy="118" fill="#FFFFFF" r="4.5" stroke="#154539" stroke-width="3"></circle>
            <circle cx="150" cy="105" fill="#FFFFFF" r="4.5" stroke="#154539" stroke-width="3"></circle>
            <circle cx="240" cy="122" fill="#FFFFFF" r="4.5" stroke="#154539" stroke-width="3"></circle>
            <circle cx="330" cy="96" fill="#FFFFFF" r="4.5" stroke="#154539" stroke-width="3"></circle>
            <circle cx="420" cy="88" fill="#FFFFFF" r="4.5" stroke="#154539" stroke-width="3"></circle>
            <circle cx="510" cy="92" fill="#FFFFFF" r="4.5" stroke="#154539" stroke-width="3"></circle>
            <circle cx="600" cy="74" fill="#154539" r="5.5" stroke="#FFFFFF" stroke-width="2"></circle>
            
            <g transform="translate(530, 25)">
                <rect fill="#154539" height="38" rx="6" width="105"></rect>
                <text fill="#FFFFFF" font-size="10" font-weight="500" text-anchor="middle" x="52" y="16">Hari Ini (24 Okt)</text>
                <text fill="#FFFFFF" font-size="12" font-weight="700" text-anchor="middle" x="52" y="30">2.085 Butir</text>
            </g>
            
            <text fill="#717975" font-size="11" font-weight="500" text-anchor="middle" x="60" y="235">18 Okt</text>
            <text fill="#717975" font-size="11" font-weight="500" text-anchor="middle" x="150" y="235">19 Okt</text>
            <text fill="#717975" font-size="11" font-weight="500" text-anchor="middle" x="240" y="235">20 Okt</text>
            <text fill="#717975" font-size="11" font-weight="500" text-anchor="middle" x="330" y="235">21 Okt</text>
            <text fill="#717975" font-size="11" font-weight="500" text-anchor="middle" x="420" y="235">22 Okt</text>
            <text fill="#717975" font-size="11" font-weight="500" text-anchor="middle" x="510" y="235">23 Okt</text>
            <text fill="#154539" font-size="12" font-weight="700" text-anchor="middle" x="600" y="235">Hari Ini</text>
        </svg>
    </div>

    <div class="mt-space-md p-space-sm bg-surface-container-low rounded-lg border border-outline-variant flex items-center justify-between text-label-sm font-label-sm">
        <span class="text-on-surface-variant">Rata-rata 7 hari: <strong class="text-on-surface font-semibold">2.010 butir/hari</strong></span>
        <span class="text-primary font-semibold flex items-center gap-1">
            <span class="material-symbols-outlined text-[16px]">check_circle</span> Efisiensi Pakan Sesuai Target (FCR 1.82)
        </span>
    </div>
</div>