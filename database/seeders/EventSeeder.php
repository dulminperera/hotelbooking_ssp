<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = array(
            array(
                'image' => 'event1.jpg',
                'date' => 'June 15, 2023', //this should be future date
                'time' => '7:00 PM',
                'event_name' => 'Galadari Hotel', //this
                'venue' => 'Central Park',
                'address' => 'New York',
                'description' => 'Join us for an unforgettable evening of live music performances from top artists. Food and drinks will be available.', //this
                'price_per_ticket' => 'Rs:50000', //this
                'phone' => '555-1234', //this
                'email' => 'info@summermusicfest.com',
                'website' => 'www.summermusicfest.com'
            ),
            array(
                'image' => 'event2.jpg',
                'date' => 'July 5, 2023',
                'time' => '6:30 PM',
                'event_name' => 'Comedy Night',
                'venue' => 'The Laugh Factory',
                'address' => 'Los Angeles',
                'description' => 'Get ready to laugh out loud as some of the best comedians take the stage. Enjoy a night full of hilarious jokes and good company.',
                'price_per_ticket' => '$20',
                'phone' => '555-5678',
                'email' => 'tickets@laughfactory.com',
                'website' => 'www.laughfactory.com'
            ),
            array(
                'image' => 'event3.jpg',
                'date' => 'August 10, 2023',
                'time' => '8:00 PM',
                'event_name' => 'Art Exhibition',
                'venue' => 'Gallery One',
                'address' => 'Chicago',
                'description' => 'Immerse yourself in the world of art at our exhibition featuring stunning works from talented local artists.',
                'price_per_ticket' => 'Free admission',
                'phone' => '555-9876',
                'email' => 'info@galleryone.com',
                'website' => 'www.galleryone.com'
            ),
            array(
                'image' => 'event4.jpg',
                'date' => 'September 1, 2023',
                'time' => '9:30 AM',
                'event_name' => 'Fitness Bootcamp',
                'venue' => 'Golden Gate Park',
                'address' => 'San Francisco',
                'description' => 'Challenge yourself with a high-intensity workout session led by professional trainers. Improve your fitness and have fun!',
                'price_per_ticket' => '$15',
                'phone' => '555-2468',
                'email' => 'fitnessbootcamp@gmail.com',
                'website' => 'www.fitnessbootcamp.com'
            ),
            array(
                'image' => 'event5.jpg',
                'date' => 'October 20, 2023',
                'time' => '7:00 PM',
                'event_name' => 'Wine Tasting Evening',
                'venue' => 'Vineyard Estate',
                'address' => 'Napa Valley',
                'description' => 'Indulge in a delightful evening of wine tasting, accompanied by a selection of gourmet snacks and live music.',
                'price_per_ticket' => '$50',
                'phone' => '555-1357',
                'email' => 'info@vineyardestate.com',
                'website' => 'www.vineyardestate.com'
            ),
            array(
               'image' => 'event6.jpg',
                'date' => 'November 8, 2023',
                'time' => '6:00 PM',
                'event_name' => 'Tech Conference',
                'venue' => 'Convention Center',
                'address' => ' Seattle',
                'description' => 'Explore the latest trends and innovations in the tech industry. Engage with industry leaders and expand your network.',
                'price_per_ticket' => '$100',
                'phone' => '555-3698',
                'email' => 'info@techconference.com',
                'website' => 'www.techconference.com'
            ),
            array(
                'image' => 'event7.jpg',
                'date' => 'December 12, 2023',
                'time' => '7:30 PM',
                'event_name' => 'Nutcracker Ballet',
                'venue' => 'Symphony Hall',
                'address' => 'Boston',
                'description' => 'Experience the magical performance of the Nutcracker Ballet, a timeless holiday tradition.',
                'price_per_ticket' => '$40',
                'phone' => '555-7890',
                'email' => 'tickets@nutcrackerballet.com',
                'website' => 'www.nutcrackerballet.com'
            ),
            array(
                'image' => 'event8.jpg',
                'date' => 'January 25, 2024',
                'time' => '8:00 PM',
                'event_name' => 'Fashion Show',
                'venue' => 'Fashion Arena',
                'address' => 'Paris',
                'description' => 'Witness the latest trends in fashion as top designers showcase their stunning collections on the runway.',
                'price_per_ticket' => '$80',
                'phone' => '555-2468',
                'email' => 'info@fashionshow.com',
                'website' => 'www.fashionshow.com'
            ),
            array(
                'image' => 'event9.jpg',
                'date' => 'February 10, 2024',
                'time' => '7:00 PM',
                'event_name' => 'Film Festival',
                'venue' => 'Cinema Palace',
                'address' => 'Los Angeles',
                'description' => 'Celebrate the art of filmmaking at our annual film festival. Enjoy a diverse selection of movies from around the world.',
                'price_per_ticket' => '$25',
                'phone' => '555-9876',
                'email' => 'tickets@filmfestival.com',
                'website' => 'www.filmfestival.com'
            ),
            array(
                'image' => 'event10.jpg',
                'date' => 'March 18, 2024',
                'time' => '6:30 PM',
                'event_name' => 'Culinary Workshop',
                'venue' => 'The Kitchen, London',
                'address' => 'Mayfair City, London',
                'description' => 'Join renowned chefs as they demonstrate their culinary expertise and share valuable cooking tips and techniques.',
                'price_per_ticket' => '$50',
                'phone' => '555-3698',
                'email' => 'info@culinaryworkshop.com',
                'website' => 'www.culinaryworkshop.com'
            ),
        );

        foreach ($events as $event){

            $event['category_id']=rand(1, 10);
            \App\Models\Event::create($event);
        }
    }
}
