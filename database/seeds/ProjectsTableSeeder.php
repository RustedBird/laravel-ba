<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('projects')->insert([
            [
                'name' => 'project1',
                'code' => '1',
                'description' => str_random(15),
                'image' => 'pic1.jpg',
                'active' => true,
                'view_count' => 0
            ],
            [
                'name' => 'project2',
                'code' => '27',
                'description' => str_random(15),
                'image' => 'pic2.jpg',
                'active' => true,
                'view_count' => 0
            ],
            [
                'name' => 'project3',
                'code' => '2',
                'description' => str_random(15),
                'image' => 'pic3.jpg',
                'active' => false,
                'view_count' => 0
            ]
        ]);*/

        Project::create(
            [
                'name' => 'project1',
                'code' => '1',
                'description' => str_random(15),
                'image' => 'pic1.jpg',
                'active' => true,
                'view_count' => 0
            ],
            [
                'name' => 'project2',
                'code' => '27',
                'description' => str_random(15),
                'image' => 'pic2.jpg',
                'active' => true,
                'view_count' => 0
            ],
            [
                'name' => 'project3',
                'code' => '2',
                'description' => str_random(15),
                'image' => 'pic3.jpg',
                'active' => false,
                'view_count' => 0
            ]
        );
    }
}
