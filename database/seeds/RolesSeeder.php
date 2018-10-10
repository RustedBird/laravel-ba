<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
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
                'role' => 'Admin'
            ],
            [
                'role' => 'Reviewer'
            ],
            [
                'role' => 'copywriter'
            ],
        ];

        foreach($data as $role)
        {
            Role::create($role);
        }
    }
}
