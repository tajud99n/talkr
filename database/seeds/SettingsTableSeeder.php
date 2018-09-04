<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'         => 'Talks',
            'address'           => 'Lagos, Nigeria',
            'contact_number'    => '+234 000 000 000',
            'contact_email'     => 'info@talks.com'
        ]);
    }
}
