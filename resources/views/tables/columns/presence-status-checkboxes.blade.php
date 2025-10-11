<div class="flex items-center">
    @foreach($statuses as $statusKey => $statusLabel)
        <label
            class="flex items-center gap-1.5 cursor-pointer hover:opacity-80 transition"
            style="margin-right: 10px; cursor: pointer;"
            wire:click.stop="updatePresenceStatus({{ $getRecord()->id }}, '{{ $statusKey }}')"
        >
            <input
                type="checkbox"
                {{ $getState() === $statusKey ? 'checked' : '' }}
                disabled
                class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-primary-600 disabled:checked:text-white dark:bg-white/5 dark:checked:bg-primary-500 disabled:dark:bg-transparent disabled:dark:checked:bg-primary-500 ring-gray-950/10 focus:ring-primary-600 checked:bg-primary-600 dark:ring-white/20 dark:focus:ring-primary-500 dark:checked:ring-primary-600 text-primary-600 dark:text-primary-500 h-4 w-4"
            >
            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">
                {{ $statusLabel }}
            </span>
        </label>
    @endforeach
</div>
