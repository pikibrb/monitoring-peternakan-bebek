<?php
use function Livewire\Volt\{state};
?>

<div class="lg:col-span-5 bg-surface-container-lowest rounded-xl p-space-xl border border-outline-variant shadow-sm flex flex-col justify-between" x-data="{ filter: 'Mingguan' }">
    <div class="flex items-center justify-between pb-space-md border-b border-outline-variant">
        <div>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Penjualan Mingguan</h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Omset riil hasil telur (juta rupiah)</p>
        </div>
        
        <div class="inline-flex p-1 bg-surface-container rounded-lg border border-outline-variant">
            <button @click="filter = 'Mingguan'" :class="filter === 'Mingguan' ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:text-on-surface'" class="px-space-md py-1 rounded-md text-label-sm font-label-sm font-semibold transition-colors" type="button">Mingguan</button>
            <button @click="filter = 'Bulanan'" :class="filter === 'Bulanan' ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:text-on-surface'" class="px-space-md py-1 rounded-md text-label-sm font-label-sm font-semibold transition-colors" type="button">Bulanan</button>
        </div>
    </div>

    <div class="relative w-full h-64 mt-space-sm flex items-end">
        <svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 400 240">
            <line stroke="#E2DFD8" stroke-dasharray="3" stroke-width="1" x1="30" x2="380" y1="40" y2="40"></line>
            <line stroke="#E2DFD8" stroke-dasharray="3" stroke-width="1" x1="30" x2="380" y1="100" y2="100"></line>
            <line stroke="#E2DFD8" stroke-dasharray="3" stroke-width="1" x1="30" x2="380" y1="160" y2="160"></line>
            <line stroke="#717975" stroke-width="1.5" x1="30" x2="380" y1="210" y2="210"></line>
            
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="end" x="25" y="44">15M</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="end" x="25" y="104">10M</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="end" x="25" y="164">5M</text>
            
            <rect fill="#416279" height="125" rx="4" width="46" x="60" y="85"></rect>
            <text fill="#141e1a" font-size="11" font-weight="700" text-anchor="middle" x="83" y="78">10.4M</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="middle" x="83" y="230">Mg 1</text>
            
            <rect fill="#416279" height="142" rx="4" width="46" x="145" y="68"></rect>
            <text fill="#141e1a" font-size="11" font-weight="700" text-anchor="middle" x="168" y="60">11.8M</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="middle" x="168" y="230">Mg 2</text>
            
            <rect fill="#416279" height="118" rx="4" width="46" x="230" y="92"></rect>
            <text fill="#141e1a" font-size="11" font-weight="700" text-anchor="middle" x="253" y="84">9.6M</text>
            <text fill="#717975" font-size="11" font-weight="600" text-anchor="middle" x="253" y="230">Mg 3</text>
            
            <rect fill="#154539" height="166" rx="4" width="46" x="315" y="44"></rect>
            <text fill="#154539" font-size="12" font-weight="700" text-anchor="middle" x="338" y="36">15.0M</text>
            <text fill="#154539" font-size="11" font-weight="700" text-anchor="middle" x="338" y="230">Mg 4</text>
        </svg>
    </div>

    <div class="mt-space-md p-space-sm bg-surface-container-low rounded-lg border border-outline-variant flex items-center justify-between text-label-sm font-label-sm">
        <span class="text-on-surface-variant">Pencapaian target bulan ini:</span>
        <span class="text-on-surface font-semibold bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 rounded">93.7% dari 50 Juta</span>
    </div>
</div>