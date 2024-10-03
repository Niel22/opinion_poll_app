<?php

namespace App\Livewire\Polls;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\Notification;
use App\Models\Poll;
use App\Models\Poll_Option;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $pageTitle = "Create Poll";

    public $user_id, $title, $description, $expiry_date, $audience, $faculty_id, $department_id;

    public $departments;

    public $options = [''];

    protected $rules = [
        'title' => 'required|string|max:255',
        'options.*' => 'required|string|max:255',
        'expiry_date' => ['required', 'date'],
        'description' => ['required', 'min:25', 'max:255'],
        'audience' => ['required', 'string'],
        'faculty_id' => ['required'],
        'department_id' => ['required_if:faculty_id,!all faculty'],

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

        $newPoll = $this->validate();

        $poll = Poll::create([
            'title' => $newPoll['title'],
            'expiry_date' => $newPoll['expiry_date'],
            'description' => $newPoll['description'],
            'audience' => $newPoll['audience'],
            'faculty_id' => $newPoll['faculty_id'],
            'department_id' => $newPoll['department_id'],
            'user_id' => Auth::id()
        ]);

        $colors = DB::table('colors')->pluck('name')->shuffle();

        foreach ($newPoll['options'] as $index => $option) {
            Poll_Option::create([
                'poll_id' => $poll->id,
                'option' => $option,
                'color' => $colors[$index % count($colors)]  // Assign a unique color
            ]);
        }

        Notification::create([
            'notification' => "A new poll was just created on the topic " . $poll->title ."."
        ]);

        toastr()->success('Poll Created Successfully');

        $this->redirectRoute('home');


    }



    public function render()
    {
        if($this->faculty_id != '' && $this->faculty_id != 'all faculty') {
            $this->departments = Department::where('faculty_id', $this->faculty_id)->get();
        }

        return view('livewire.polls.create', [
            'faculties'=> Faculty::all(),
        ]);
    }
}
