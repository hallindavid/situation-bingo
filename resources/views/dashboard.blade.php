<x-layouts.app :title="__('My Card')">
    @can('update', $card)
        <div class="flex justify-end mb-4">
            <a href="{{ route('cards.edit', $card) }}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Edit Card
            </a>
        </div>
    @endcan
    <div>
        <livewire:view-card :card-uuid="$card->uuid"/>
    </div>
</x-layouts.app>
