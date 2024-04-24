<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use DateInterval;
use DateTime;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        $password = bcrypt('123456789');

        DB::table('companies')->insert([
            [
                'name_th' => 'บริษัท ด็อกเตอร์ เจล จํากัด',
                'name_en' => 'Doctor Jel Co., Ltd.',
                'email' => 'contact@drjel.com',
                'address_th' => '87/5 หมู่ 2 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000 (สำนักงานใหญ่)
                    78/9 หมู่ 3 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000 (สำนักงานสาขา)',
                'address_en' => 'english address',
                'website' => 'www.drjel.co.th',
                'contact_number' => '094-519-2222',
                'logo' => 'logo_drjel.jpg',
                'order_prefix' => 'DR_JEL',
                'short_name' => 'DR.JEL',
                'record_status' => 1,
            ],
            [
                'name_th' => 'บริษัท ออกานิกคอสเม่ จํากัด',
                'name_en' => 'ORGANICS COSME Co., Ltd.',
                'email' => 'contact@organicscosme.com',
                'address_th' => '87/5 หมู่ 2 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000 (สำนักงานใหญ่)
                    78/9 หมู่ 3 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000 (สำนักงานสาขา)',
                'address_en' => 'english address',
                'website' => 'www.organicscosme.com',
                'contact_number' => '0660977900',
                'logo' => '',
                'order_prefix' => 'OGN_COSME',
                'short_name' => 'ORGANICSCOSME',
                'record_status' => 1,
            ],
            [
                'name_th' => 'บริษัท ออกานิกส์ อินโนเวชั่นส์ จํากัด',
                'name_en' => 'ORGANICS INNOVATION Co., Ltd.',
                'email' => 'contact@organicscosme.com',
                'address_th' => '78/9 หมู่ 3 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000',
                'address_en' => 'english address',
                'website' => 'www.organicscosme.com',
                'contact_number' => '0660977900',
                'logo' => '',
                'order_prefix' => 'OGN_INNO',
                'short_name' => 'ORGANICS INNOVATION',
                'record_status' => 1,
            ],
            [
                'name_th' => 'บริษัท ออกานิกส์ กรีนส์ฟาร์ม จํากัด',
                'name_en' => 'ORGANICS GREENS FARM Co., Ltd.',
                'email' => 'contact@organicscosme.com',
                'address_th' => '78/9 หมู่ 3 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000',
                'address_en' => 'english address',
                'website' => 'www.organicscosme.com',
                'contact_number' => '0660977900',
                'logo' => '',
                'order_prefix' => 'OGN_GREEN',
                'short_name' => 'ORGANICS GREENS FARM',
                'record_status' => 1,
            ],
            [
                'name_th' => 'บริษัท กิจโชคคอสเมติก 2001 จํากัด',
                'name_en' => 'Co., Ltd.',
                'email' => '',
                'address_th' => '87/5 หมู่ 2 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000 (สำนักงานใหญ่)
                78/9 หมู่ 3 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000 (สำนักงานสาขา)',
                'address_en' => 'english address',
                'website' => '',
                'contact_number' => '0660977900',
                'logo' => '',
                'order_prefix' => '',
                'short_name' => '',
                'record_status' => 1,
            ]
        ]);

        DB::table('departments')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name_th' => 'บัญชี',
                'name_en' => 'Account',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            1 =>
            array(
                'id' => 2,
                'name_th' => 'ประสานงาน',
                'name_en' => 'coordinate',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            2 =>
            array(
                'id' => 3,
                'name_th' => 'เอกสารบุคคล',
                'name_en' => 'HR',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            3 =>
            array(
                'id' => 4,
                'name_th' => 'โปรดักชัน',
                'name_en' => 'Production',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            4 =>
            array(
                'id' => 5,
                'name_th' => 'กราฟิกดีไซน์',
                'name_en' => 'Graphic Design',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            5 =>
            array(
                'id' => 6,
                'name_th' => 'ไอที',
                'name_en' => 'IT',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            6 =>
            array(
                'id' => 7,
                'name_th' => 'แม่บ้าน',
                'name_en' => 'Maid',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            7 =>
            array(
                'id' => 8,
                'name_th' => 'ช่างซ่อมบำรุง',
                'name_en' => 'Maintenance Technician',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            8 =>
            array(
                'id' => 9,
                'name_th' => 'ผลิต',
                'name_en' => 'Manufacture',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            9 =>
            array(
                'id' => 10,
                'name_th' => 'ผู้จัดการ',
                'name_en' => 'Manager',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            10 =>
            array(
                'id' => 11,
                'name_th' => 'ประกันคุณภาพ',
                'name_en' => 'QA',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            11 =>
            array(
                'id' => 12,
                'name_th' => 'ควบคุมคุุณภาพ',
                'name_en' => 'QC',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            12 =>
            array(
                'id' => 13,
                'name_th' => 'วิจัยและพัฒนา',
                'name_en' => 'RD',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            13 =>
            array(
                'id' => 14,
                'name_th' => 'ฝ่ายขาย',
                'name_en' => 'Sales',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            14 =>
            array(
                'id' => 15,
                'name_th' => 'เลขานุการ',
                'name_en' => 'Secretary',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            15 =>
            array(
                'id' => 16,
                'name_th' => 'คลังสินค้า',
                'name_en' => 'Warehouse',
                'company_id' => '2',
                'image_departments' => '-'
            ),
            16 =>
            array(
                'id' => 17,
                'name_th' => 'บัญชี',
                'name_en' => 'Account',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            17 =>
            array(
                'id' => 18,
                'name_th' => 'ประสานงาน',
                'name_en' => 'coordinate',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            18 =>
            array(
                'id' => 19,
                'name_th' => 'เอกสารบุคคล',
                'name_en' => 'HR',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            19 =>
            array(
                'id' => 20,
                'name_th' => 'คนขับรถ',
                'name_en' => 'Driver',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            20 =>
            array(
                'id' => 21,
                'name_th' => 'กราฟิกดีไซน์',
                'name_en' => 'Graphic Design',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            21 =>
            array(
                'id' => 22,
                'name_th' => 'โปรดักชัน',
                'name_en' => 'Production',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            22 =>
            array(
                'id' => 23,
                'name_th' => 'ไอที',
                'name_en' => 'IT',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            23 =>
            array(
                'id' => 24,
                'name_th' => 'แม่บ้าน',
                'name_en' => 'Maid',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            24 =>
            array(
                'id' => 25,
                'name_th' => 'ช่างซ่อมบำรุง',
                'name_en' => 'Maintenance Technician',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            25 =>
            array(
                'id' => 26,
                'name_th' => 'ผลิต',
                'name_en' => 'Manufacture',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            26 =>
            array(
                'id' => 27,
                'name_th' => 'ผู้จัดการ',
                'name_en' => 'Manager',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            27 =>
            array(
                'id' => 28,
                'name_th' => 'ฝ่ายจัดซื้อ',
                'name_en' => 'Procurement',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            28 =>
            array(
                'id' => 29,
                'name_th' => 'ควบคุมคุุณภาพ',
                'name_en' => 'QC',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            29 =>
            array(
                'id' => 30,
                'name_th' => 'วิจัยและพัฒนา',
                'name_en' => 'RD',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            30 =>
            array(
                'id' => 31,
                'name_th' => 'ฝ่ายขาย',
                'name_en' => 'Sales',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            31 =>
            array(
                'id' => 32,
                'name_th' => 'เลขานุการ',
                'name_en' => 'Secretary',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            32 =>
            array(
                'id' => 33,
                'name_th' => 'คลังสินค้า',
                'name_en' => 'Warehouse',
                'company_id' => '3',
                'image_departments' => '-'
            ),
            33 =>
            array(
                'id' => 34,
                'name_th' => 'คลังสินค้า',
                'name_en' => 'Warehouse',
                'company_id' => '4',
                'image_departments' => '-'
            ),
            34 =>
            array(
                'id' => 35,
                'name_th' => 'ผลิต',
                'name_en' => 'Manufacture',
                'company_id' => '1',
                'image_departments' => '-'
            ),
            35 =>
            array(
                'id' => 36,
                'name_th' => 'ประสานงาน',
                'name_en' => 'coordinate',
                'company_id' => '1',
                'image_departments' => '-'
            ),
            36 =>
            array(
                'id' => 37,
                'name_th' => 'การตลาด',
                'name_en' => 'Marketing',
                'company_id' => '1',
                'image_departments' => '-'
            ),
            37 =>
            array(
                'id' => 38,
                'name_th' => 'เทเลเซล',
                'name_en' => 'Telesale',
                'company_id' => '1',
                'image_departments' => '-'
            ),

        ));

        DB::table('users')->insert([
            'name' => "todsaporn.saelow",
            'email' => "jackpopula2534@gmail.com",
            'password' => $password,
            'roles_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => "todsaporn.saelow 2",
            'email' => "jackpopula2534@gmail.com2",
            'password' => $password,
            'roles_id' => 3,
            'companies_id' => 3,
        ]);
        foreach (range(1, 100) as $index) {
            $roles = rand(1, 4);
            $company_id = rand(1, 5);
            DB::table('users')->insert([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => $password,
                'roles_id' => $roles,
                'companies_id' => $company_id,
            ]);
        }

    }
}
