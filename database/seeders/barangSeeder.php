<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            "namabarang" => "susu indomilk",
            "kodebarang" => 1,
            "harga" => "4000",
            "code" => "8965",
            "qty" => "2",
            "created_at" => date ("Y-m-d H:i:s"),
        ]);
    }
}
