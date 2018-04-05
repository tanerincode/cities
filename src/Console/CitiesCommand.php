<?php namespace TanerInCode\Cities\Console;

use Illuminate\Console\Command;
use TanerInCode\Cities\Database\Seeders\CitiesSeeder;

class CitiesCommand extends Command
{
    protected $signature = 'cities:make';
    protected $description = 'Türkiye il, ilçe ve mahalle bilgilerini PTT\'den alınan bilgiler ile dolduruan komut.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        (new CitiesSeeder())->run();
        $this->line('Seeder completed.');
    }
}