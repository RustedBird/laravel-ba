<?php

use Illuminate\Database\Seeder;

class ProjectMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_metadata')->insert([
            [
                'project_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem illum possimus sapiente tempore. Accusantium explicabo fuga maiores quae sapiente?'
            ],
            [
                'project_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem illum possimus sapiente tempore. Accusantium explicabo fuga maiores quae sapiente?'
            ],
            [
                'project_id' => 3,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem illum possimus sapiente tempore. Accusantium explicabo fuga maiores quae sapiente?'
            ],
            [
                'project_id' => 4,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem illum possimus sapiente tempore. Accusantium explicabo fuga maiores quae sapiente?'
            ],
            [
                'project_id' => 5,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem illum possimus sapiente tempore. Accusantium explicabo fuga maiores quae sapiente?'
            ]
        ]);
    }
}
