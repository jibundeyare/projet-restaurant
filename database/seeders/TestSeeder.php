<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = file_get_contents(__DIR__.'/actus.sql');
        DB::unprepared($sql);

        $sql = file_get_contents(__DIR__.'/contacts.sql');
        DB::unprepared($sql);
    }
}
