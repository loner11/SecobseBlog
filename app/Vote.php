<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'votes';

	protected $fillable = ['userId', 'articleId', 'isVote'];
}
