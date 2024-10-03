<?php

namespace App\Livewire;

use App\Models\Poll;
use App\Models\Poll_Option;
use App\Models\PollVote;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomePage extends Component
{
    public $pageTitle = "Available Polls For You";

    public function vote($id, $pollId){

        $option = Poll_Option::where('id', $id)->first();
        $poll = Poll::where('id', $pollId)->first();

        PollVote::create([
            'user_id' => Auth::id(),
            'poll_id' => $option->poll->id,
            'poll_option_id' => $option->id
        ]);

        $option->votes += 1;
        $option->save();

        $poll->votes += 1;
        $poll->save();

        toastr()->success('Voted Successful');
    }

    public function render()
    {
        return view('livewire.home-page', [
            'polls' => Poll::all()
        ]);
    }
}
