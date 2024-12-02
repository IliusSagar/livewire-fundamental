<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;

class BirdForm extends Component
{
    public int $birdCount;
    public string $notes;

    public function submit()
    {
        Entry::create([
            'bird_count' => $this->birdCount,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

   

    public function render()
    {
        return view('livewire.bird-form',[
            // 'message' => 'Hello World',
            'entries' => Entry::all(),
        ]);

    }
}
