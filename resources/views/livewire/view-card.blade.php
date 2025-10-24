<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    @if ($card->bingo_at)
        <div class="mb-4 bg-green-500 text-white text-center py-2 rounded">
            BINGO!
        </div>
    @endif
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
            @else
            @can('update', $card)

                <div class="mt-4">
                    <flux:subheading size="sm">Change Situation</flux:subheading>
                    <select wire:model="selectedSituationUuid" class="mt-2 block w-full border-gray-300 rounded">
                        @foreach ($allSituations as $uuid => $name)
                            <option value="{{ $uuid }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    <div class="mt-2 flex justify-end">
                        <flux:button variant="primary" wire:click="changeSituation">Update</flux:button>
                    </div>
                </div>
            @endcan
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
