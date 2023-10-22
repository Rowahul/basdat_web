<?php

namespace App\Observers;
use Illuminate\Support\Facades\Auth;
use App\Models\Gor;

class GorObserver
{
    public function creating(Gor $gor)
    {
        $gor->user_id = Auth::id();
    }
}
