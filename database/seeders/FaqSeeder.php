<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = array(
            array('id' => '1','question' => 'What exactly is community solar?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:45:48','updated_at' => '2024-07-11 11:45:48'),
            array('id' => '2','question' => 'Do I need any prior experience or skills to participate?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:46:03','updated_at' => '2024-07-11 11:46:03'),
            array('id' => '3','question' => 'Do I need any prior experience or skills to participate?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:46:18','updated_at' => '2024-07-11 11:46:18'),
            array('id' => '4','question' => 'What kind of support will I receive from Solar Squad?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:46:37','updated_at' => '2024-07-11 11:46:37'),
            array('id' => '5','question' => 'is there a cost to sign up, and how quickly can I start earning?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:46:52','updated_at' => '2024-07-11 11:46:52'),
            array('id' => '6','question' => 'Can renters participate in the program, or is it only for homeowners?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:47:22','updated_at' => '2024-07-11 11:47:22'),
            array('id' => '7','question' => 'Are there any commitments or contracts involved?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:47:41','updated_at' => '2024-07-11 11:47:41'),
            array('id' => '8','question' => 'What kind of earnings can I expect from signing up customers?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:48:13','updated_at' => '2024-07-11 11:48:13'),
            array('id' => '9','question' => 'Is this legal?','answer' => 'Community solar allows you to support green energy without installing panels on your property. You agree to have your electricity sourced from solar farms funded by the government, receiving a refund on your electricity bill in return.','created_at' => '2024-07-11 11:48:29','updated_at' => '2024-07-11 11:48:29')
          );

          Faq::insert($faqs);
    }
}
