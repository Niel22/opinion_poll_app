<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'expiry_date',
        'audience',
        'faculty_id',
        'department_id',
        'votes'
    ];

    public function options()
    {
        return $this->hasMany(Poll_Option::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->hasMany(PollVote::class);
    }

    public function hasUserVoted($userId)
    {
        return $this->votes()->where('user_id', $userId)->exists();
    }

    public function totalVotes()
    {
        return $this->options->sum('votes');
    }
}
