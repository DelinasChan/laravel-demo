<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class RequestFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'request:file {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $imageUlr = $this->argument('url');
        $response = Http::get($imageUlr);
        $imageFile = $response->getBody()->getContents();
        Storage::disk('public')->put('test.jpeg', $imageFile);
        return 0;
    }
}
