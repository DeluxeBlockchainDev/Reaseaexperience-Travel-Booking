<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FrontEndSetting;

class FrontEndSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Data
         *
         */
        $Items = [
            [
                'key'        => 'copyright',
                'value'        => '&copy; Copyright Nguyen 2021. All Right Reserved By <span class="la la-heart"></span> by <a href="https://redseaexperience.com">Red Sea Experience</a>',
            ],
            [
                'key'        => 'phone',
                'value'        => '(123)2800 256 508',
            ],
            [
                'key'        => 'address',
                'value'        => 'Melbourne, Australia, 105 South Park Avenue',
            ],
            [
                'key'        => 'email',
                'value'        => 'nguyenbiz@gmail.com',
            ],
        ];

        /*
         * Add Items
         *
         */
        foreach ($Items as $Item) {
            $newItem = FrontEndSetting::where('key', '=', $Item['key'])->first();
            if ($newItem === null) {
                $newItem = FrontEndSetting::create([
                    'key'          => $Item['key'],
                    'value'          => $Item['value'],
                ]);
            }
        }
    }
}
