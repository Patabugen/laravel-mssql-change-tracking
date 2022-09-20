<?php

namespace Patabugen\MssqlChanges\Commands;

use Illuminate\Console\Command;

class MssqlChangesCommand extends Command
{
    public $signature = 'mssql-changes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
