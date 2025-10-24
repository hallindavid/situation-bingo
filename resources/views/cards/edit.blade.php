<x-layouts.app :title="'Edit Card ' . $card->uuid">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <livewire:card-situations-table :card-uuid="$card->uuid" />
    </div>
</x-layouts.app>