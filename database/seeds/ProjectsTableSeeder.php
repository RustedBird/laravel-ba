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

        $projects = [
            [
                'name' => 'project1',
                'code' => '1',
                'image' => 'pic1.jpg',
                'active' => true,
                'view_count' => 0
            ],
            [
                'name' => 'project2',
                'code' => '27',
                'image' => 'pic2.jpg',
                'active' => true,
                'view_count' => 0
            ],
            [
                'name' => 'project3',
                'code' => '2',
                'image' => 'pic3.jpg',
                'active' => false,
                'view_count' => 0
            ],
            [
                'name' => 'project3',
                'code' => '2',
                'image' => 'pic3.jpg',
                'active' => false,
                'view_count' => 0
            ],
            [
                'name' => 'project3',
                'code' => '2',
                'image' => 'pic3.jpg',
                'active' => false,
                'view_count' => 0
            ]
        ];


        foreach ($projects as $project)
        {
            Project::create($project);
        }
    }
}
