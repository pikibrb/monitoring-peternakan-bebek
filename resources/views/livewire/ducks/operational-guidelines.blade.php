<?php
use function Livewire\Volt\{state};
?>

<div class="mt-space-xl grid grid-cols-1 md:grid-cols-3 gap-space-lg">
    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-start gap-space-md">
        <div class="p-2.5 rounded-lg bg-surface-container text-primary">
            <span class="material-symbols-outlined text-[24px]">timer</span>
        </div>
        <div>
            <h4 class="font-label-lg text-label-lg text-on-surface">Pencatatan Cepat < 60 Detik</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Gunakan tombol Quick-Adjust (+) dan (-) saat di depan pintu kandang untuk mempercepat input batch.</p>
        </div>
    </div>
    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-start gap-space-md">
        <div class="p-2.5 rounded-lg bg-surface-container text-secondary">
            <span class="material-symbols-outlined text-[24px]">verified_user</span>
        </div>
        <div>
            <h4 class="font-label-lg text-label-lg text-on-surface">Protokol Pemisahan Karantina</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Bebek dengan penurunan nafsu makan drastis langsung dipindahkan ke ID: ISO-99 sebelum jam pakan siang.</p>
        </div>
    </div>
    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex items-start gap-space-md">
        <div class="p-2.5 rounded-lg bg-surface-container text-[#B8862B]">
            <span class="material-symbols-outlined text-[24px]">egg</span>
        </div>
        <div>
            <h4 class="font-label-lg text-label-lg text-on-surface">Ambang Rasio Produksi</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Jika rasio telur harian kelompok A atau B turun di bawah 75%, periksa nutrisi pakan konsentrat & air minum.</p>
        </div>
    </div>
</div>