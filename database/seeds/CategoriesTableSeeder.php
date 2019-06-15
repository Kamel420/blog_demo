<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `categories` (`title`) VALUES
        ('Health'),
        ('Food'),
        ('Education'),
        ('Music'),
        ('Technology');
    ");
    }
}
