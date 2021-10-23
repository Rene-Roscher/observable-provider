<?php

namespace Xepare\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ObservableProviderCommand extends Command
{
    public $signature = 'observable:generate';

    public $description = 'Generate an ObservableServiceProvider';

    public function handle()
    {
        Artisan::call('make:provider', [
            'name' => 'ObservableServiceProvider',
        ]);
    }
}
