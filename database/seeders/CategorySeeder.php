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
                'name' => 'Music',
                'description' => 'Events related to music concerts, festivals, and performances.'
            ),
            array(
                'name' => 'Sports',
                'description' => 'Events related to sports competitions, matches, and tournaments.'
            ),
            array(
                'name' => 'Art',
                'description' => 'Events related to art exhibitions, galleries, and workshops.'
            ),
            array(
                'name' => 'Food',
                'description' => 'Events related to food festivals, culinary events, and cooking classes.'
            ),
            array(
                'name' => 'Technology',
                'description' => 'Events related to technology conferences, hackathons, and workshops.'
            ),
            array(
                'name' => 'Business',
                'description' => 'Events related to business conferences, networking events, and seminars.'
            ),
            array(
                'name' => 'Fashion',
                'description' => 'Events related to fashion shows, runway events, and designer exhibitions.'
            ),
            array(
                'name' => 'Health',
                'description' => 'Events related to health and wellness expos, fitness workshops, and medical conferences.'
            ),
            array(
                'name' => 'Film',
                'description' => 'Events related to film screenings, movie premieres, and film festivals.'
            ),
            array(
                'name' => 'Education',
                'description' => 'Events related to educational seminars, workshops, and academic conferences.'
            ),
        );

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
