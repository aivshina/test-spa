<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Products;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('products')->insert(
            [
                [
                    'id'    => 1,
                    'name' => 'Фитнес-браслет Smarterra FitMaster Color',
                    'price' => '599',
                    'description' => 'Фитнес-браслет Smarterra FitMaster Color совместим с мобильными устройствами, которые работают под управлением операционных систем Android и iOS.',
                    'img_url' => 'Smarterra.jpg'
                ],
                [
                    'id'    => 2,
                    'name' => 'Смартфон Huawei P20 128 ГБ черный',
                    'price' => '19999',
                    'description' => 'Смартфон Huawei P20 – обладатель практически профессиональной двойной камеры на 12+20 Мп, которая позволит вам создавать фотографические шедевры, запечатлевая любой важный миг вашей жизни',
                    'img_url' => 'huawei.jpg'
                ],
                [
                    'id'    => 3,
                    'name' => 'Защитная пленка Red Line для смартфона Honor 7A Pro, Honor 7C, Huawei Y6 2018, Huawei Y6 Prime 2018',
                    'price' => '55',
                    'description' => 'Защитная пленка Red Line мгновенно приклеивается к экрану без образования пузырьков воздуха, а также легко удаляется, не оставляя липких следов',
                    'img_url' => 'tpu.jpg'
                ],
                [
                    'id'    => 4,
                    'name' => 'Наушники TWS Xiaomi Mi True Wireless Earphones Lite белый',
                    'price' => '3399',
                    'description' => 'Наушники TWS Xiaomi Mi True Wireless Earphones Lite синхронизируются со смартфоном посредством беспроводного стандарта Bluetooth и автоматически подключаются, когда вынимаются из зарядного кейса',
                    'img_url' => 'Xiaomi.jpg'
                ],
                [
                    'id'    => 5,
                    'name' => 'Портативный аккумулятор GP B20A черный',
                    'price' => '1599',
                    'description' => 'Оборудование GP B20A обладает выходным напряжением 5 B и силой тока 2.1 A, а также может осуществлять сквозной заряд',
                    'img_url' => 'GP.jpg'
                ],
                [
                    'id'    => 6,
                    'name' => 'Накладка Aceline для смартфона Honor 10X Lite',
                    'price' => '599',
                    'description' => 'Чехол Aceline для смартфона Honor 10X Lite создан для тех, кто ценит легкость и минимализм',
                    'img_url' => 'Aceline.jpg'
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
