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
                'date' => 'December 2, 2024', 
                'time' => '7:00 PM',
                'event_name' => 'Galadari Hotel',
                'venue' => 'Central Park',
                'address' => 'New York',
                'description' => 'Join usx for an unforgettable evening of live music performances from top artists. Food and drinks will be available.', 
                'price_per_ticket' => 'Rs:10000', 
                'phone' => '077-0011', 
                'email' => 'info@summermusicfest.com',
                'website' => 'www.summermusicfest.com'
            ),
            array(
                'image' => 'event2.jpg',
                'date' => 'December 4, 2024',
                'time' => '6:30 PM',
                'event_name' => 'Cinnamon Lakeside',
                'venue' => 'The Laugh Factory',
                'address' => 'Los Angeles',
                'description' => 'Get ready to laugh out loud as some of the best comedians take the stage. Enjoy a night full of hilarious jokes and good company.',
                'price_per_ticket' => 'Rs:20000',
                'phone' => '077-0012',
                'email' => 'tickets@laughfactory.com',
                'website' => 'www.laughfactory.com'
            ),
            array(
                'image' => 'event3.jpg',
                'date' => 'December 6, 2024',
                'time' => '8:00 PM',
                'event_name' => 'Cinnamon Grand Colombo',
                'venue' => 'Gallery One',
                'address' => 'Chicago',
                'description' => 'Immerse yourself in the world of art at our exhibition featuring stunning works from talented local artists.',
                'price_per_ticket' => 'Rs:30000',
                'phone' => '077-0013',
                'email' => 'info@galleryone.com',
                'website' => 'www.galleryone.com'
            ),
            array(
                'image' => 'event4.jpg',
                'date' => 'December 8, 2024',
                'time' => '9:30 AM',
                'event_name' => 'The Kingsbury Hotel',
                'venue' => 'Golden Gate Park',
                'address' => 'San Francisco',
                'description' => 'Challenge yourself with a high-intensity workout session led by professional trainers. Improve your fitness and have fun!',
                'price_per_ticket' => 'Rs:40000',
                'phone' => '077-0014',
                'email' => 'fitnessbootcamp@gmail.com',
                'website' => 'www.fitnessbootcamp.com'
            ),
            array(
                'image' => 'event5.jpg',
                'date' => 'December 10, 2024',
                'time' => '7:00 PM',
                'event_name' => 'Cinnamon Bentota Beach',
                'venue' => 'Vineyard Estate',
                'address' => 'Napa Valley',
                'description' => 'Indulge in a delightful evening of wine tasting, accompanied by a selection of gourmet snacks and live music.',
                'price_per_ticket' => 'Rs:50000',
                'phone' => '077-0015',
                'email' => 'info@vineyardestate.com',
                'website' => 'www.vineyardestate.com'
            ),
            array(
               'image' => 'event6.jpg',
                'date' => 'December 12, 2024',
                'time' => '6:00 PM',
                'event_name' => 'Cinnamon red Colombo',
                'venue' => 'Convention Center',
                'address' => ' Seattle',
                'description' => 'Explore the latest trends and innovations in the tech industry. Engage with industry leaders and expand your network.',
                'price_per_ticket' => 'Rs:60000',
                'phone' => '077-0016',
                'email' => 'info@techconference.com',
                'website' => 'www.techconference.com'
            ),
            array(
                'image' => 'event7.jpg',
                'date' => 'December 14, 2024',
                'time' => '7:30 PM',
                'event_name' => 'Mandarina Colombo',
                'venue' => 'Symphony Hall',
                'address' => 'Boston',
                'description' => 'Experience the magical performance of the Nutcracker Ballet, a timeless holiday tradition.',
                'price_per_ticket' => 'Rs:70000',
                'phone' => '077-0017',
                'email' => 'tickets@nutcrackerballet.com',
                'website' => 'www.nutcrackerballet.com'
            ),
            array(
                'image' => 'event8.jpg',
                'date' => 'JDecember 16, 2024',
                'time' => '8:00 PM',
                'event_name' => 'Marino Beach Colombo',
                'venue' => 'Fashion Arena',
                'address' => 'Paris',
                'description' => 'Witness the latest trends in fashion as top designers showcase their stunning collections on the runway.',
                'price_per_ticket' => 'Rs:80000',
                'phone' => '077-0018',
                'email' => 'info@fashionshow.com',
                'website' => 'www.fashionshow.com'
            ),
            array(
                'image' => 'event9.jpg',
                'date' => 'December 18, 2024',
                'time' => '7:00 PM',
                'event_name' => 'Sudu Araliya',
                'venue' => 'Cinema Palace',
                'address' => 'Los Angeles',
                'description' => 'Celebrate the art of filmmaking at our annual film festival. Enjoy a diverse selection of movies from around the world.',
                'price_per_ticket' => 'Rs:90000',
                'phone' => '077-0019',
                'email' => 'tickets@filmfestival.com',
                'website' => 'www.filmfestival.com'
            ),
            array(
                'image' => 'event10.jpg',
                'date' => 'December 20, 2024',
                'time' => '6:30 PM',
                'event_name' => 'Centara Bentota',
                'venue' => 'The Kitchen, London',
                'address' => 'Mayfair City, London',
                'description' => 'Join renowned chefs as they demonstrate their culinary expertise and share valuable cooking tips and techniques.',
                'price_per_ticket' => 'Rs:11000',
                'phone' => '077-0020',
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
