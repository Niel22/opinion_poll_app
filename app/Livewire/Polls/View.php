<?php

namespace App\Livewire\Polls;

use App\Models\Poll;
use App\Models\Poll_Option;
use App\Models\PollVote;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class View extends Component
{
    public $pageTitle = 'View Poll Result', $poll = [];

    public function mount($id)
    {
        try{
            $id = Crypt::decryptString($id);


            $this->poll = Poll::with('options')->findOrFail($id);
        }catch(\Exception $e){
            abort(404, 'Invalid poll id');
        }
    }

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

        $this->redirectRoute('home');
    }

    public function render()
    {
        if ($this->poll != []) {
            
            return view('livewire.polls.view', [
                'poll' => $this->poll
            ]);
        } else {
            abort(404);
        }
    }
}
