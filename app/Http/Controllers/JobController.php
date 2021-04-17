<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestJob;
class JobController extends Controller
{
    //
    public function start()
    {
        $job = new TestJob(['message' => 'Job is called']);
        $this->dispatch($job);
        return [
            'status' => true,
        ];
    }
}
