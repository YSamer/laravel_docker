<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative flex flex-col gap-4 items-center justify-center aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                @if (auth()->user()->subscribed())
                <p>You are subscribed.</p>
                @endif
                @if (auth()->user()->subscribedToProduct('prod_SCVr5QZUwS1Cyj'))
                <p>You are subscribed to our Basic product.</p>
                @elseif (auth()->user()->subscribedToProduct('prod_SCVr5QZUwS1Cyj'))
                <p>You are subscribed to our Standard product.</p>
                @elseif (auth()->user()->subscribedToProduct('prod_SCVr5QZUwS1Cyj'))
                <p>You are subscribed to our Premium product.</p>
                @endif
                @if (auth()->user()->subscribedToPrice('price_1RI6qDEC99epwF4Gc1Rmivw2'))
                <p>You are subscribed to our monthly Basic plan.</p>
                @elseif (auth()->user()->subscribedToPrice('price_1RI6s4EC99epwF4GQzh9zgDB'))
                <p>You are subscribed to our monthly Standard plan.</p>
                @elseif (auth()->user()->subscribedToPrice('price_1RI6sHEC99epwF4GLKBsv568'))
                <p>You are subscribed to our monthly Premium plan.</p>
                @endif
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>