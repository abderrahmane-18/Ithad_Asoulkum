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



        Setting::create([
            "setting_key" => "address",
            "setting_value" => "11",
            "title_ar" => "العنوان",
            "title_en" => "Address",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);


        Setting::create([
            "setting_key" => "telephone",
            "setting_value" => "11",
            "title_ar" => "رقم الهاتف",
            "title_en" => "Telephone",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "email",
            "setting_value" => "11",
            "title_ar" => "البريد الإلكتروني",
            "title_en" => "Email",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);



        Setting::create([
            "setting_key" => "youtube",
            "setting_value" => "11",
            "title_ar" => "حساب اليوتيوب",
            "title_en" => "Youtube Account",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "twitter",
            "setting_value" => "11",
            "title_ar" => "حساب التويتر",
            "title_en" => "Twitter Account",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "snapchat",
            "setting_value" => "11",
            "title_ar" => "حساب السناب شات",
            "title_en" => "Snap Chat Account",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "tiktok",
            "setting_value" => "11",
            "title_ar" => "حساب التيك توك",
            "title_en" => "Tik Tok Account",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "instagram",
            "setting_value" => "11",
            "title_ar" => "حساب الإنستغرام",
            "title_en" => "Instagram Account",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);
        Setting::create([
            "setting_key" => "email",
            "setting_value" => "11",
            "title_ar" => "البريد الإلكتروني",
            "title_en" => "Email",
            "type_id" => "1",
            "category" => "2",
            "order_by" => "1",
        ]);
    }
}
