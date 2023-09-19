<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('station_inventory') -> insert(['stn_id' => 1,  'stn_name' => 'Versova',        'description' =>'Versova station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'VER', 'stn_national_lang' => 'वर्सोवा',    'stn_regional_lang' => 'वर्सोवा',           'cord_x' => 0, 'cord_y' => 0,      'start_date' => '2022-06-28 06:49:51' ,'stn_data' =>'{"stn_inv_id":1,"stn_id":1,"stn_name":"VERSOVA","stn_national_lang":"\u0935\u0930\u094d\u0938\u094b\u0935\u093e","stn_regional_lang":"\u0935\u0930\u094d\u0938\u094b\u0935\u093e","stn_short_name":"VER","description":"VERSOVA Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-09 16:07:51","updated_date":"2022-07-09 11:03:37","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 2,  'stn_name' => 'DN Nagar',       'description' =>'Dn nagar station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'DNG', 'stn_national_lang' => 'डीएन नगर', 'stn_regional_lang' => 'डीएन नगर',       'cord_x' => 0, 'cord_y' => 0,     'start_date' => '2022-06-28 06:49:51'     ,'stn_data'=>'{"stn_inv_id":2,"stn_id":2,"stn_name":"DN NAGAR","stn_national_lang":"\u0921\u0940\u090f\u0928 \u0928\u0917\u0930","stn_regional_lang":"\u0921\u0940\u090f\u0928 \u0928\u0917\u0930","stn_short_name":"DNG","description":"DN NAGAR Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-09 16:07:51","updated_date":"2022-07-09 11:03:46","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 3,  'stn_name' => 'Azad Nagar',     'description' =>'Azad nagar station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'AZN', 'stn_national_lang' => 'आजाद नगरी', 'stn_regional_lang' => 'आजाद नगरी',     'cord_x' => 0, 'cord_y' => 0,  'start_date' => '2022-06-28 06:49:51'  ,'stn_data'=>'{"stn_inv_id":3,"stn_id":3,"stn_name":"AZAD NAGAR","stn_national_lang":"\u0906\u091c\u093e\u0926 \u0928\u0917\u0930\u0940","stn_regional_lang":"\u0906\u091c\u093e\u0926 \u0928\u0917\u0930\u0940","stn_short_name":"AZD","description":"AZAD NAGAR Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-09 16:07:51","updated_date":"2022-07-09 11:03:50","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 4,  'stn_name' => 'Andheri',        'description' =>'Andheri station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'AND', 'stn_national_lang' => 'अंधेरी', 'stn_regional_lang' => 'अंधेरी',               'cord_x' => 0, 'cord_y' => 0,     'start_date' => '2022-06-28 06:49:51'  ,'stn_data'=>'{"stn_inv_id":4,"stn_id":4,"stn_name":"ANDHERI","stn_national_lang":"\u0905\u0902\u0927\u0947\u0930\u0940","stn_regional_lang":"\u0905\u0902\u0927\u0947\u0930\u0940","stn_short_name":"AND","description":"ANDHERI Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-09 16:07:51","updated_date":"2022-07-09 11:03:55","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 5,  'stn_name' => 'WEH',            'description' =>'WEH station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'WEH', 'stn_national_lang' => 'वेह', 'stn_regional_lang' => 'वेह', 'cord_x' => 0, 'cord_y' => 0,                           'start_date' => '2022-06-28 06:49:51'    ,'stn_data'=>'{"stn_inv_id":5,"stn_id":5,"stn_name":"WEH","stn_national_lang":"\u0935\u0947\u0939","stn_regional_lang":"\u0935\u0947\u0939","stn_short_name":"WEH","description":"WEH Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-09 16:07:51","updated_date":"2022-07-09 11:03:59","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 6,  'stn_name' => 'Chakala',        'description' =>'Chakala station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'CHK', 'stn_national_lang' => 'चकाला', 'stn_regional_lang' => 'चकाला', 'cord_x' => 0, 'cord_y' => 0,                   'start_date' => '2022-06-28 06:49:51'    ,'stn_data'=>'{"stn_inv_id":6,"stn_id":6,"stn_name":"CHAKALA","stn_national_lang":"\u091a\u0915\u093e\u0932\u093e","stn_regional_lang":"\u091a\u0915\u093e\u0932\u093e","stn_short_name":"CHK","description":"CHAKALA Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-09 16:07:51","updated_date":"2022-07-09 11:04:03","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 7,  'stn_name' => 'Airport Road',   'description' =>'Airport road station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'APR', 'stn_national_lang' => 'एयरपोर्ट रोड', 'stn_regional_lang' => 'एयरपोर्ट रोड', 'cord_x' => 0, 'cord_y' => 0,        'start_date' => '2022-06-28 06:49:51'    ,'stn_data'=>'{"stn_inv_id":7,"stn_id":7,"stn_name":"AIRPORT ROAD","stn_national_lang":"\u090f\u092f\u0930\u092a\u094b\u0930\u094d\u091f \u0930\u094b\u0921","stn_regional_lang":"\u090f\u092f\u0930\u092a\u094b\u0930\u094d\u091f \u0930\u094b\u0921","stn_short_name":"ARP","description":"AIRPORT ROAD Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-13 20:04:42","updated_date":"2022-07-13 15:07:07","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 8,  'stn_name' => 'Marol Naka',     'description' =>'Marol naka station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'MAN', 'stn_national_lang' => 'मरोल', 'stn_regional_lang' => 'मरोल', 'cord_x' => 0, 'cord_y' => 0,                  'start_date' => '2022-06-28 06:49:51'    ,'stn_data'=>'{"stn_inv_id":8,"stn_id":8,"stn_name":"MAROL NAKA","stn_national_lang":"\u092e\u0930\u094b\u0932","stn_regional_lang":"\u092e\u0930\u094b\u0932","stn_short_name":"MAR","description":"MAROL NAKA Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-13 20:04:42","updated_date":"2022-07-13 15:07:14","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 9,  'stn_name' => 'Sakinaka',       'description' =>'Sakinaka station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'SAN', 'stn_national_lang' => 'साकीनाका', 'stn_regional_lang' => 'साकीनाका', 'cord_x' => 0, 'cord_y' => 0,            'start_date' => '2022-06-28 06:49:51'    ,'stn_data'=>'{"stn_inv_id":9,"stn_id":9,"stn_name":"SAKINAKA","stn_national_lang":"\u0938\u093e\u0915\u0940\u0928\u093e\u0915\u093e","stn_regional_lang":"\u0938\u093e\u0915\u0940\u0928\u093e\u0915\u093e","stn_short_name":"SAK","description":"SAKINAKA Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-13 20:04:42","updated_date":"2022-07-13 15:07:19","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 10, 'stn_name' => 'Asalpha',        'description' =>'Asalpha station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'ASA', 'stn_national_lang' => 'असलफा', 'stn_regional_lang' => 'असलफा', 'cord_x' => 0, 'cord_y' => 0,               'start_date' => '2022-06-28 06:49:51'    ,'stn_data'=>'{"stn_inv_id":10,"stn_id":10,"stn_name":"ASALPHA","stn_national_lang":"\u0905\u0938\u0932\u092b\u093e","stn_regional_lang":"\u0905\u0938\u0932\u092b\u093e","stn_short_name":"ASL","description":"ASALPHA Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-13 20:04:42","updated_date":"2022-07-13 15:07:23","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 11, 'stn_name' => 'Jagruti Nagar',  'description' =>'Jagruti naga station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'JNG', 'stn_national_lang' => 'जागृति नगरी', 'stn_regional_lang' => 'जागृति नगरी', 'cord_x' => 0, 'cord_y' => 0,      'start_date' => '2022-06-28 06:49:51'    ,'stn_data'=>'{"stn_inv_id":11,"stn_id":11,"stn_name":"JAGRUTI NAGAR","stn_national_lang":"\u091c\u093e\u0917\u0943\u0924\u093f \u0928\u0917\u0930\u0940","stn_regional_lang":"\u091c\u093e\u0917\u0943\u0924\u093f \u0928\u0917\u0930\u0940","stn_short_name":"JNG","description":"JAGRUTI NAGA Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-13 20:04:42","updated_date":"2022-07-13 15:07:28","updated_by":1}']);
        DB::table('station_inventory') -> insert(['stn_id' => 12, 'stn_name' => 'Ghatkopar',      'description' =>'Ghatkopar station', 'company_id' => 1, 'status' => 1, 'line_id'=>1, 'stn_short_name' => 'GHA', 'stn_national_lang' => 'घाटकोपर', 'stn_regional_lang' => 'घाटकोपर', 'cord_x' => 0, 'cord_y' => 0,                  'start_date' => '2022-06-28 06:49:51'   ,'stn_data'=>'{"stn_inv_id":12,"stn_id":12,"stn_name":"GHATKOPAR","stn_national_lang":"\u0918\u093e\u091f\u0915\u094b\u092a\u0930","stn_regional_lang":"\u0918\u093e\u091f\u0915\u094b\u092a\u0930","stn_short_name":"GHT","description":"GHATKOPAR Station","company_id":1,"line_id":1,"status":true,"cord_x":"0","cord_y":"0","start_date":"2022-06-28 06:49:51","end_date":null,"created_date":"2022-07-13 20:04:42","updated_date":"2022-07-13 15:07:34","updated_by":1}']);
    }
}