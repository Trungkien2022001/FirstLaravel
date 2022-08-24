<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmojiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emoji')->insert([
           ['name'=> 'hạnh phúc'],
           ['name'=> 'có phúc'],
           ['name'=> 'được yêu'],
           ['name'=> 'buồn'],
           ['name'=> 'đáng yêu'],
           ['name'=> 'biết ơn'],
           ['name'=> 'hào hứng'],
           ['name'=> 'đang yêu'],
           ['name'=> 'điên'],
           ['name'=> 'cảm kích'],
           ['name'=> 'sung sướng'],
           ['name'=> 'tuyệt vời'],
           ['name'=> 'khờ khạo'],
           ['name'=> 'vui vẻ'],
           ['name'=> 'tuyệt vời'],
           ['name'=> 'thú vị'],
           ['name'=> 'thư giãn'],
           ['name'=> 'tích cực'],
           ['name'=> 'thoải mái'],
           ['name'=> 'đầy hy vọng'],
           ['name'=> 'hân hoan'],
           ['name'=> 'mệt mỏi'],
           ['name'=> 'có động lực'],
           ['name'=> 'tự hào'],
           ['name'=> 'cô đơn'],
           ['name'=> 'chu đáo'],
           ['name'=> 'oke'],
        ]);
    }
}
