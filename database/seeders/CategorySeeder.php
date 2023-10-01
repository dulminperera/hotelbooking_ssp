<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            array(
                'name' => 'Luxury',
                'description' => 'Offering top tier amentities.'
            ),
            array(
                'name' => 'Boutique',
                'description' => 'Smaller Unique Properties.'
            ),
            array(
                'name' => 'Budget',
                'description' => 'Affordable Accomodations.'
            ),
            array(
                'name' => 'Resort',
                'description' => 'Located in vacation destinations.'
            ),
            array(
                'name' => 'Business',
                'description' => 'Catering to business travelers.'
            ),
            array(
                'name' => 'Bed and Breakfast',
                'description' => 'Cozy Accommodations.'
            ),
            array(
                'name' => 'EcoFriendly',
                'description' => 'Environment friendly resorts.'
            ),
            array(
                'name' => 'Extended Stay',
                'description' => 'Designed for longer stays.'
            ),
            array(
                'name' => 'All Exclusive Resort',
                'description' => 'Ideal for those seeking a hassle free vacation.'
            ),
            array(
                'name' => 'Spa',
                'description' => 'Focused on wellnessand relaxation.'
            ),
        );

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
