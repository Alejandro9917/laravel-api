<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'author_id' => 1,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 1,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 1,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 2,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 2,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 2,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 3,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 3,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'author_id' => 3,
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'publisher' => Str::random(10),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
