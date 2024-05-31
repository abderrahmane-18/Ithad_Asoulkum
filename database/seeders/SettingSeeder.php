<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelextends;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            "setting_key" => "website_name_ar",
            "setting_value" => "إتحاد أصولكم ",
            "title_ar" => "اسم الموقع",
            "title_en" => "Website name",
            "type_id" => "1",
            "category" => "1",
            "order_by" => "1",
        ]);

        Setting::create([
            "setting_key" => "website_name_en",
            "setting_value" => "Ithad Asoulkum",
            "title_ar" => "اسم الموقع",
            "title_en" => "Website name ",
            "type_id" => "1",
            "category" => "1",
            "order_by" => "1",
        ]);


        Setting::create([
            "setting_key" => "description_ar",
            "setting_value" => "11",
            "title_ar" => " وصف الموقع ",
            "title_en" => "Web Site Description",
            "type_id" => "3",
            "category" => "1",
            "order_by" => "1",
        ]);

        Setting::create([
            "setting_key" => "description_en",
            "setting_value" => "11",
            "title_ar" => " وصف الموقع ",
            "title_en" => "web site description",
            "type_id" => "3",
            "category" => "1",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "keywords",
            "setting_value" => "11",
            "title_ar" => "الكلمات الدلالية",
            "title_en" => "Keywords",
            "type_id" => "3",
            "category" => "1",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "footer_description_ar",
            "setting_value" => "جميع الحقوق محفوظة .. ",
            "title_ar" => "وصف الفوتر ",
            "title_en" => "Footer Description",
            "type_id" => "3",
            "category" => "1",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "footer_description_en",
            "setting_value" => "All Rights Reserved ..",
            "title_ar" => "وصف الفوتر ",
            "title_en" => "Footer Description",
            "type_id" => "3",
            "category" => "1",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "favicon",
            "setting_value" => "assets/images/logo1.jpeg",
            "title_ar" => "الأيقونة المفظلة",
            "title_en" => "FavaIcon",
            "type_id" => "2",
            "category" => "1",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "logo",
            "setting_value" => "assets/images/logo3.jpeg",
            "title_ar" => "شعار الموقع",
            "title_en" => "logo",
            "type_id" => "2",
            "category" => "1",
            "order_by" => "1",
        ]);
    }
}
