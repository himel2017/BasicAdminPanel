<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(WebsitesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SidebarsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
    }
}
