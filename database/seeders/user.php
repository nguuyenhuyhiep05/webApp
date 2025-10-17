<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

DB::table('users')->insert(
    [
        [
            'fullName' => 'HMCinema',
            'password' => bcrypt('1'),
            'email' => 'admin@gmail.com',
            'phone' => '123456789',
            'code'=>rand(10000000000, 9999999999999999),
            'point'=>'10000',
            'theater_id'=>1,
            'status' => true,
            'email_verified'=>true,
            'remember_token'=>Str::random(20),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
         [
            'fullName' => 'huyhiep',
            'password' => bcrypt('1'),
            'email' => 'hiep@gmail.com',
            'phone' => '1212121212',
            'code'=>rand(10000000000, 9999999999999999),
            'point'=>'10000',
            'theater_id'=> null,
            'status' => true,
            'email_verified'=>true,
            'remember_token'=>Str::random(20),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
    ]);

