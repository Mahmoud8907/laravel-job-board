<?php

namespace App\Models;



class Job
{
    public static function all()
    {
        return [
            ['title' => 'softWere Engineer', 'salary' => 2000],
            ['title' => 'Engineer', 'salary' => 1000],
        ];
    }
}
