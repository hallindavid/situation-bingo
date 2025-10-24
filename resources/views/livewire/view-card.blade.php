<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <div class="grid grid-cols-5 gap-2 p-4">
        @foreach ($grid as $index => $cell)
            @php $position = $index + 1; @endphp
            @if ($position === 13)
                <div class="h-24 border border-gray-300 flex items-center justify-center bg-green-200">
                    {{ $cell['label'] }}
                </div>
            @else
                <flux:modal.trigger name="situation-modal">
                    <button type="button"
                            class="h-24 border border-gray-300 flex items-center justify-center cursor-pointer {{ $cell['marked'] ? 'bg-green-200' : '' }}"
                            wire:click="openModal({{ $position }})"
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal','situation-modal')">
                        {{ $cell['label'] }}
                    </button>
                </flux:modal.trigger>
            @endif
        @endforeach
    </div>

    <flux:modal name="situation-modal" focusable class="max-w-md">
        <div class="p-4">
            <flux:heading size="lg">{{ $selectedSituationName }}</flux:heading>
            @if (! empty($selectedOccurrences))
                <div class="mt-4 space-y-2">
                    <flux:subheading size="sm">Occurrences</flux:subheading>
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($selectedOccurrences as $occ)
                            <li>{{ $occ['reported_at'] }} by {{ $occ['reporter_name'] }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mt-4 flex justify-end space-x-2 rtl:space-x-reverse">
                <flux:modal.close>
                    <flux:button variant="outline">Close</flux:button>
                </flux:modal.close>
                <flux:button variant="filled" wire:click="reportOccurrence">Report Occurrence</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
