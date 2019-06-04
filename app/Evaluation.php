<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table = 'evaluation';

    protected $fillable = ['question_id', 'user_id', 'response'];

    public $timestamps = false;


}