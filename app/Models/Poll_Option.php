<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll_Option extends Model
{
    use HasFactory;

    protected $table = 'poll_options';

    protected $fillable = [
        'poll_id',
        'option',
        'color',
        'votes'
    ];

    public function poll(){
        return $this->belongsTo(Poll::class);
    }

    public function vote(){
        return $this->hasMany(PollVote::class);
    }
}
