<?php

namespace Database\Seeders;

use App\Models\Testmonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestmonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testmonials = array(
            array('id' => '1','review' => '5','description' => '<p>Joining Solar Squad has been one of the best decisions I&#39;ve ever made. I started with no sales experience, and within a few weeks, I was earning a steady income. The support and training provided are top-notch, and the opportunity to help friends and family save on their electricity bills is incredibly rewarding.</p>','name' => 'John S.','thumbnail' => 'testmonial/thumbnail/N63eeUWaxKQ9jbFVKmhSN4H8kEhvvqvKhhiLkGYp.png','address' => 'New York','created_at' => '2024-07-11 10:35:52','updated_at' => '2024-07-11 10:35:52'),
            array('id' => '2','review' => '5','description' => 'As a stay-at-home mom, I was looking for a flexible way to contribute to our household income. Solar Squad offered exactly what I needed. The process is simple, and I can work around my schedule. Plus, knowing that I’m promoting green energy makes me feel proud of the work I do.','name' => 'Lisa M.','thumbnail' => 'testmonial/thumbnail/VHscdWqhxyYoaFurYXZyvcmBGx7oLoydfAZkiYC7.png','address' => 'Virginia','created_at' => '2024-07-11 10:50:43','updated_at' => '2024-07-11 10:50:43'),
            array('id' => '3','review' => '5','description' => 'As a stay-at-home mom, I was looking for a flexible way to contribute to our household income. Solar Squad offered exactly what I needed. The process is simple, and I can work around my schedule. Plus, knowing that I’m promoting green energy makes me feel proud of the work I do.','name' => 'Lisa M.','thumbnail' => 'testmonial/thumbnail/VHscdWqhxyYoaFurYXZyvcmBGx7oLoydfAZkiYC7.png','address' => 'Virginia','created_at' => '2024-07-11 10:50:43','updated_at' => '2024-07-11 10:50:43'),
            array('id' => '4','review' => '5','description' => 'As a stay-at-home mom, I was looking for a flexible way to contribute to our household income. Solar Squad offered exactly what I needed. The process is simple, and I can work around my schedule. Plus, knowing that I’m promoting green energy makes me feel proud of the work I do.','name' => 'Lisa M.','thumbnail' => 'testmonial/thumbnail/VHscdWqhxyYoaFurYXZyvcmBGx7oLoydfAZkiYC7.png','address' => 'Virginia','created_at' => '2024-07-11 10:50:43','updated_at' => '2024-07-11 10:50:43')
          );

          Testmonial::insert($testmonials);
    }
}
