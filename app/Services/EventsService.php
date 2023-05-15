<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class EventsService
{
    public function __construct()
    {

    }

    /**
     * get all events from DB
     *
     * @return Collection
     */
    public function getAllEvents(): Collection
    {
        return DB::table('events')->get();
    }
}
