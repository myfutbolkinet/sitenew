<?php

namespace App\Containers\Settings\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;

/**
 * Class SettingsDefaultSettingsSeeder
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AdminMenusSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('admin_menus')->insert([



            /*1*/
            [
                'parent_id' => 0,
                'name' => 'Импорт',
                'icon'=> 'fal fa-info-circle',
                'link'=> '/import',
                'system_name'=>'import',
                'type'=>'not_linked',
                'permission'=>'view_import'
            ],
            /*2*/ //Role=>God  1)Impresonate by users
            [
                'parent_id' => 1,
                'name' => 'Импорт Оптовиков',
                'icon'=> 'fal fa-info-circle',
                'link'=> '/wholesalers/import',
                'system_name'=>'import_wholesalers',
                'type'=>'linked',
                'permission'=>'view_import_wholesalers'
            ],




        ]);
    }
}
