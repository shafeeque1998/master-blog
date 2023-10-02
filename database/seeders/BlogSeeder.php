<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Ramsey\Uuid\Uuid;
use App\Http\Requests\BlogPostRequest;
// use Illuminate\Support\Facades\Validator;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create an instance of the form request class for validation
        
        // Generate and insert 100 dummy records
        for ($i = 1; $i <= 100; $i++) {
            // Dummy data
            $data = [
                'heading' => 'Dummy Heading ',
                'content' => 'Dummy Content ',
            ];

            // Create the record
            Blog::create($data);
        }
    }
}
