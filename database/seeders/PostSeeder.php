<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Writer;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Http;

class PostSeeder extends Seeder
{
    public function run(): void{
        $faker = Faker::create('id_ID');
        $users = Writer::all();
        $category = Category::all();

        $imgArr = [
            'img/ds1.jpg',
            'img/ds2.jpg',
            'img/ds3.jpg',
            'img/ns1.png',
            'img/ns2.png',
            'img/ns3.png'
        ];

        $titleArr = [
            'Unlocking Insights with Deep Learning: The Ultimate Guide to Sentiment Detection',
            'Predicting the Unpredictable: Harnessing Time Series Analysis for Superior Market Forecasting',
            'Protecting Your Enterprise: Advanced Anomaly Detection with Machine Learning for Fraud Prevention ',
            'Creating an Impenetrable Network: Implementing Zero Trust Security for Unmatched Protection',
            'Battling the Invisible Threat: Innovative Tactics to Combat Ransomware Attacks',
            'AI vs Digital Threats: The Transformative Impact of Artificial Intelligence on Cyber Defense'
        ];


        $slugArr = [
            'deep-learing-for-sentiment-analysis',
            'time-series-data-analysis',
            'machine-learning-for-fraud-detection',
            'procteting-data-with-advanced-ransomware-defense',
            'enhancing-network-security-with-zero-trust-architecture',
            'ai-and-cybersecurity-the-role-of-artificial-intelligence-in-security'
        ];

        for ($i = 0; $i < 6; $i++) {

            Post::create([
                'writers_id' => $users->random()->id,
                'category_id' => $category->random()->id,
                'title' => $titleArr[$i],
                'slug' => $slugArr[$i],
                'body' => $faker->paragraphs(3, true),
                'image' => $imgArr[$i],
                'view_count' => rand(0, 100),
            ]);
        }
    }
}
