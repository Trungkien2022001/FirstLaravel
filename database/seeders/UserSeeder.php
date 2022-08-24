<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'name' =>'Nguyễn Trung Kiên',
                'username' => 'admin',
                'password' => '123456',
                'phone' => '0989983025',
                'email' => 'trungkien07yd@gmail.com',
                'address' => 'Yên Đồng, Yên Mô, Ninh Bình',
                'isAdmin' => 1,
            ],
            [
                'name' =>'Đỗ Thị Nhung',
                'username' => 'nhungdo',
                'password' => '123456',
                'phone' => '0967775328',
                'email' => 'nhungdo10102001@gmail.com',
                'address' => 'Yên Phong, Yên Mô, Ninh Bình',
                'isAdmin' => 0,
            ],
            [
                'name' =>'Nguyễn Văn Định',
                'username' => 'dinhnguyen',
                'password' => '123456',
                'phone' => '0977469305',
                'email' => 'dinhnguyen19022005@gmail.com',
                'address' => 'Yên Đồng, Yên Mô, Ninh Bình',
                'isAdmin' => 0,
            ],
            [
                'name' =>'Đặng Xuân Thắng',
                'username' => 'thangdang',
                'password' => '123456',
                'phone' => '0123456789',
                'email' => 'thangxt20092001@gmail.com',
                'address' => 'Yên Từ, Yên Mô, Ninh Bình',
                'isAdmin' => 0,
            ],
        ]);
    }
}
