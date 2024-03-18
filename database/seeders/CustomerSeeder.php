<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer; //impostamos el model customer

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Customer::factory()
            ->count(25)
            ->hasInmvoices(10)
            ->create();
        Customer::factory()
            ->count(100)
            ->hasInmvoices(3)
            ->create();  
        Customer::factory()
            ->count(100)
            ->hasInmvoices(1)
            ->create();
        Customer::factory()
            ->count(5)
            ->create();              

    }
}
