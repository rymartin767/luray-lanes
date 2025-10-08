<?php

namespace Database\Seeders;

use App\Models\Flyer;
use Illuminate\Database\Seeder;

class FlyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flyer::create([
            'id' => 2,
            'title' => 'Bucket of Beers',
            'image_url' => 'images/flyers/01J6JM14NSXM09Q1QY74CPXXK4.jpeg',
            'pages' => ['food', 'home'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 3,
            'title' => 'Birthday Bash',
            'image_url' => 'images/flyers/01J6JM2XCN4HVW4VMTZQVR08GT.jpeg',
            'pages' => ['home', 'birthdays'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 4,
            'title' => 'Gender Reveal Party',
            'image_url' => 'images/flyers/01J6JM41B230NWWFZ8S3PY706F.jpeg',
            'pages' => ['home'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 5,
            'title' => 'Youth League Registration',
            'image_url' => 'images/flyers/01J6JS05BCWA2833D899AJ0STN.jpeg',
            'pages' => ['home'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 6,
            'title' => 'Fountain Pop',
            'image_url' => 'images/flyers/01J6JS11BZZESM1T48NAJYGJ7T.png',
            'pages' => ['home', 'food', 'birthdays'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 7,
            'title' => 'Family Fun Day',
            'image_url' => 'images/flyers/01J6JXNFYYFQES6WXR3XTJRSW2.jpeg',
            'pages' => ['home', 'specials'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 8,
            'title' => 'All You Can Bowl',
            'image_url' => 'images/flyers/01J6JXP8CGRM68S595Q2EGRAVK.png',
            'pages' => ['home'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 9,
            'title' => 'Cosmic Bowling',
            'image_url' => 'images/flyers/01J6JXQD0JVQC7142HJ9P694RZ.jpeg',
            'pages' => ['home', 'specials'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 10,
            'title' => 'Food & Bar Menu',
            'image_url' => 'images/flyers/01J6JXVTH4EKMMH4458GAXR12C.png',
            'pages' => ['food'],
            'description' => null,
        ]);

        Flyer::create([
            'id' => 11,
            'title' => 'Bowling Pin Sippers',
            'image_url' => 'images/flyers/01J6JXXBQ8T0KH00MHJF592C4W.jpeg',
            'pages' => ['food', 'birthdays', 'home'],
            'description' => null,
        ]);

    }
}
