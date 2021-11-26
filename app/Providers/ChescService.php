<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Profile;
use App\Models\Level;
use App\Models\Group;
use App\Models\Comment;
use App\Models\Catigory;
use App\Models\Post;
use App\Models\Video;

use App\Providers\StopService;

class ChescService extends StopService
{
    protected $model;
    public function __construct(User $data)
    {
        $this->model = $data;  
    }
}
