<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([["title" => "THe Way of Kings", "author" => "Brandon Sanderson", "isbn" => 123], ["title" => "The Blade Itself", "author" => "Joe Abercrombie", "isbn" => 456]]);
    }
}
