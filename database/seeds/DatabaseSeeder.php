<?php
use Illuminate\Database\Seeder;

namespace database\seeds;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'admin', 'Full_name' => 'tranvanmy', 'Auth_key' => 12345,
            'email' => 'admin@gmail.com', 'password' => Hash::make(12345),
            'Phone' => 12345, 'Address' => 'namdinh', 'Level' => 1,
            'Status' => 1, 'Striper_id' => 1, 'Card_brand' => 1,
            'Card_last_four' => 1,
            ],
        ]);
    }
}
