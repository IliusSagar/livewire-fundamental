<div>
    <form wire:submit='submit'>
        <div>
            <label for="birdCount">Bird Count</label>
            <input type="number" wire:model='birdCount'/>
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea wire:model='notes'></textarea>
        </div>
        <button>Add a New Bird Count Entry</button>
        {{-- {{ $message}} --}}
    </form>

    <div>
        @foreach ($entries as $entry)
            <div>
                {{ $entry->bird_count}}
            </div>
            <div>
                {{ $entry->notes}}
            </div>
        @endforeach
    </div>

</div>
