<?php

namespace KrisRe\LaravelBladeAtomic\Commands;

use Illuminate\Console\Command;

class LaravelBladeAtomicCommand extends Command
{
    public $signature = 'laravel-blade-atomic';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
