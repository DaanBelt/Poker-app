<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // Allow mass assignment (important in Laravel)
    protected $fillable = ['name', 'standing'];

    public function buyIn($amount)
    {
        $this->standing -= $amount;
        $this->save(); // persist to database
    }

    public function cashOut($amount)
    {
        $this->standing += $amount;
        $this->save(); // persist to database
    }

    public function getStanding()
    {
        return $this->standing;
    }

    public function getSummary()
    {
        return $this->name . " heeft momenteel " . $this->standing;
    }
}
