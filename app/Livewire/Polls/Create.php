<?php

namespace App\Livewire\Polls;

use Livewire\Component;

class Create extends Component
{
    public $pageTitle = "Create Poll";

    public $pollQuestion;
    public $options = [''];
    public $expiry;

    protected $rules = [
        'pollQuestion' => 'required|string|max:255',
        'options.*' => 'required|string|max:255',
        'expiry' => ['required', 'date']
    ];

    public function mount()
    {
        // Initialize with two default options
        $this->options = ['', ''];
    }


    public function addOption()
    {
        if (count($this->options) < 10) { // Limit to 10 options
            $this->options[] = ''; // Add an empty field for a new option
        }
    }

    public function removeOption($index)
    {
        if (count($this->options) > 2) { // Ensure at least 2 options remain
            unset($this->options[$index]);
            $this->options = array_values($this->options); // Re-index array
        }
    }

    public function create()
    {
        // Save poll logic here

        dd($this->validate());
        // session()->flash('message', 'Poll created successfully!');
        $this->reset(); // Reset form after submission
    }



    public function render()
    {
        return view('livewire.polls.create');
    }
}
