<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todolist;

class TodoListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todolist::create([
            'name' => 'San Juan Vacation',
            'description' => 'Things to do before we leave for Puerto Rico!'
        ]);

        Todolist::create([
            'name' => 'Home Winterization',
            'description' => 'Winter is coming.'
        ]);

        Todolist::create([
            'name' => 'Rental Maintenance',
            'description' => 'Cleanup and improvements for new tenants'
        ]);
    }
}