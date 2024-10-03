<?php

namespace App\Livewire\Admin;

use App\Models\Poll;
use App\Models\Poll_Option;
use App\Models\PollVote;
use Livewire\Component;

class Polls extends Component
{
    public $pageTitle = "All Poll";

    public function delete($id){
        $poll = Poll::find($id);

        $poll_option = Poll_Option::where('poll_id', $poll->id)->get();

        $poll_votes = PollVote::where('poll_id', $poll->id)->get();

        foreach($poll_option as $option){
            $option->delete();
        }

        foreach($poll_votes as $vote){
            $vote->delete();
        }

        $poll->delete();

        toastr()->success('Poll deleted');
    }

    public function render()
    {
        return view('livewire.admin.polls', [
            'polls' => Poll::orderBy('created_at','desc')->get(),
        ]);
    }
}
