<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class konsumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konsumen')->insert([
            "namalengkap" => "david",
            "kode" => 1,
            "jk" => "L",
            "umur" => "16",
            "created_at" => date ("Y-m-d H:i:s"),
        ]);
    }
}
