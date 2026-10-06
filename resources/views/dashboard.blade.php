<x-app-layout>
    <livewire:dashboard.kpi-cards />

    <section class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg w-full">
        <livewire:dashboard.production-chart />
        <livewire:dashboard.sales-chart />
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg w-full mb-space-lg">
        <livewire:dashboard.quick-actions />
        <livewire:dashboard.receivables />
        <livewire:dashboard.activity-log />
    </section>
</x-app-layout>