<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CategoriesService
{
    public function __construct()
    {

    }

    /**
     * get all categories from DB
     *
     * @return Collection
     */
    public function getCategories(): Collection
    {
        return DB::table('category')->get();
    }
}
