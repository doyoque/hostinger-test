<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$list_promo = array(
    		[
    			'promo_name' => 'Bayi',
    			'list_feature' => json_encode([
    				'0.5X RESOURCE POWER', 
    				'500MB Disk Space',
    				'Unlimited Bandwidth',
    				'Unlimited Database',
    				'1 Domain'
    			]),
    			'user_registered' => 1000,
    			'price' => 19900
    		],
    		[
    			'promo_name' => 'Pelajar',
    			'list_feature' => json_encode([
    				'1X RESOURCE POWER',
    				'Unlimited Disk Space',
    				'Unlimited Bandwidth',
    				'Unlimited POP3 Email',
    				'Unlimited Database',
    				'10 Addon Domain'
    			]),
    			'user_registered' => 4100,
    			'price' => 46900
    		],
    		[
    			'promo_name' => 'Personal',
    			'list_feature' => json_encode([
    				'2X RESOURCE POWER',
    				'Unlimited Disk Space',
    				'Unlimited Bandwidth',
    				'Unlimited POP3 Email',
    				'Unlimited Database',
    				'Unlimited Addon Domain',
    				'Instant Backup'
    			]),
    			'user_registered' => 10017,
    			'price' => 58900
    		],
    		[
    			'promo_name' => 'Bisnis',
    			'list_feature' => json_encode([
    				'3X RESOURCE POWER',
    				'Unlimited Disk Space',
    				'Unlimited Bandwidth',
    				'Unlimited POP3 Email',
    				'Unlimited Database',
    				'Unlimited Addon Domain',
    				'Magic Auto Backup & Restore',
    				'Prioritas Layanan Support'
    			]),
    			'user_registered' => 3552,
    			'price' => 109900
    		]
    	);

    	foreach ($list_promo as $key => $promo) {
    		$insertDB = DB::table('data_promotions')->insert([
    			'promo_name' => $promo['promo_name'],
    			'list_feature' => $promo['list_feature'],
    			'user_registered' => $promo['user_registered'],
    			'price' => $promo['price'],
    			'created_at' => Carbon::now()->toDateTimeString(),
    			'updated_at' => Carbon::now()->toDateTimeString()
    		]);

    		if ($insertDB) {
    			echo "Inserting promo ".$promo['promo_name']."\n";
    		}
    	}
    }
}
