<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portofolio;

class PortofolioSeeder extends Seeder
{
    public function run()
    {
        Portofolio::create([
            'title' => 'Project in Pakistan',
            'location' => 'Kenya',
            'date' => '2024-02-08',
            'image' => 'bersih.jpg',
            'description' => 'Detailed description of the project in Kenya...',
        ]);

        // Add more sample data here
    }
}
