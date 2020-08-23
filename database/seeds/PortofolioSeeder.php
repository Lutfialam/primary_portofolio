<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portofolios')->insert([
            'name' => 'Lutfi Alamsyah',
            'age' => 18,
            'phonsel_number' => '083879926883',
            'email' => 'Lutfialamsyah1003@gmail.com',
            'title' => 'lorem....',
            'job_desk' => 'web developer',

        ]);
    }
}
