<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => '1.jpg',
                'name' => 'Michael Holz',
                'date' => date("Y/m/d"),
                'status' => 'Active'
            ],
            [
                'image' => '2.jpg',
                'name' => 'Paula Wilson',
                'date' => date("Y/m/d"),
                'status' => 'Active'
            ],
            [
                'image' => '3.jpg',
                'name' => 'Antonio Moreno',
                'date' => date("Y/m/d"),
                'status' => 'Suspended'
            ],
            [
                'image' => '4.jpg',
                'name' => 'Mary Saveley',
                'date' => date("Y/m/d"),
                'status' => 'Active'
            ],
            [
                'image' => '5.jpg',
                'name' => 'Martin Sommer',
                'date' => date("Y/m/d"),
                'status' => 'Inactive'
            ]
        ];

        foreach ($data as $user)
        {
            User::create($user);
        }
    }
}
