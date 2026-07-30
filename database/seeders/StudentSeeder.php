<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect([
            [
                "name" => "Student 1",
                "cities" => "Lahore",
                "user_id" => 1,
            ],
            [
                "name" => "Student 2",
                "cities" => "Islamabad",
                "user_id" => 1
            ],
            [
                "name" => "Student 3",
                "cities" => "Peshawar",
                "user_id" => 1
            ],
        ]);
        $students->each(function ($student) {
                student::insert($student);
        });
        // student::create([
        //     'name'=> 'seeder',
        //     'cities'=> 'seeder city',
        //     'user_id'=> 1
        // ]);
    }
}
