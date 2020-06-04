<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\ModulePHP;

class ModulePhpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $php_modules = ['IcePHP', 'apc', 'apcu', 'apm', 'ares', 'bcmath', 'bcompiler', 'big_int', 'bitset', 'bloomy', 'bz2_filter', 'clamav', 'coin_acceptor', 'crack', 'dba', 'http', 'huffman', 'idn', 'igbinary', 'imagick', 'imap', 'inclued', 'inotify', 'interbase', 'intl', 'ioncube_loader', 'ioncube_loader_4', 'jsmin', 'json', 'ldap', 'nd_pdo_mysql', 'oauth', 'oci8', 'odbc', 'opcache', 'pdf', 'pdo', 'pdo_dlib', 'pdo_firebird', 'pdo_mysql', 'pdo_odbc', 'pdo_pgsql', 'pdo_sqlite', 'pgsql', 'phalcon', 'stats', 'stem', 'stomp', 'suhosin', 'sybase_ct', 'sysvmsg', 'sysvsem', 'sysvshm', 'tidy', 'timezonedb', 'trader', 'translit', 'uploadprogress', 'uri_template', 'uuid'];

        foreach ($php_modules as $key => $value) {
            $insertDB = DB::table('php_modules')->insert([
                'module_name' => $value,
    			'created_at' => Carbon::now()->toDateTimeString(),
    			'updated_at' => Carbon::now()->toDateTimeString()
            ]);

            if ($insertDB) {
                echo "Inserting module ".$value."\n";
            }
        }
    }
}
