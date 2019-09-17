<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\SubCategory;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        $subcategories = array(
            array('category_id'=> 1, 'name'=>'Cars', 'description'=>'Cars'),
            array('category_id'=> 1, 'name'=>'Bicycles', 'description'=>'Bicycles'),
            array('category_id'=> 1, 'name'=>'Trucks', 'description'=>'Trucks'),
            array('category_id'=> 1, 'name'=>'Motorcycles', 'description'=>'Motorcycles'),
            array('category_id'=> 1, 'name'=>'Trailers', 'description'=>'Trailers'),
            array('category_id'=> 1, 'name'=>'Buses and Minibuses', 'description'=>'Buses and Minibuses'),
            array('category_id'=> 1, 'name'=>'Snowmobiles', 'description'=>'Snowmobiles'),
            array('category_id'=> 1, 'name'=>'Camper', 'description'=>'Camper'),
            array('category_id'=> 1, 'name'=>'Parts and Equipment', 'description'=>'Parts and Equipment'),
            array('category_id'=> 2, 'name'=>'Household appliances', 'description'=>'Household appliances'),
            array('category_id'=> 2, 'name'=>'TV', 'description'=>'TV'),
            array('category_id'=> 2, 'name'=>'Cameras', 'description'=>'Cameras'),
            array('category_id'=> 2, 'name'=>'Multimedia', 'description'=>'Multimedia'),
            array('category_id'=> 2, 'name'=>'Radio and Walkman', 'description'=>'Radio and Walkman'),
            array('category_id'=> 2, 'name'=>'Virtual reality (VR)', 'description'=>'VR'),
            array('category_id'=> 2, 'name'=>'Hoverboard', 'description'=>'Hoverboard'),
            array('category_id'=> 2, 'name'=>'Thermometers', 'description'=>'Thermometers'),
            array('category_id'=> 2, 'name'=>'Medical equipment', 'description'=>'Medical equipment'),
            array('category_id'=> 2, 'name'=>'Satellite equipment', 'description'=>'Satellite equipment'),
            array('category_id'=> 2, 'name'=>'Bluetooth speakers', 'description'=>'Bluetooth speakers'),
            array('category_id'=> 2, 'name'=>'TV boxes', 'description'=>'TV boxes'),
            array('category_id'=> 2, 'name'=>'Other', 'description'=>'Other'),
            array('category_id'=> 3, 'name'=>'Mobile phones', 'description'=>'Mobile phones'),
            array('category_id'=> 3, 'name'=>'Tablet PCs', 'description'=>'Tablet PCs'),
            array('category_id'=> 3, 'name'=>'Smartwatch', 'description'=>'Smartwatch'),
            array('category_id'=> 3, 'name'=>'Bluetooth devices', 'description'=>'Bluetooth devices'),
            array('category_id'=> 3, 'name'=>'Parts and Equipment', 'description'=>'Parts and Equipment'),
            array('category_id'=> 3, 'name'=>'Other', 'description'=>'Other'),
            array('category_id'=> 4, 'name'=>'Aparments', 'description'=>'Aparments'),
            array('category_id'=> 4, 'name'=>'Houses', 'description'=>'Houses'),
            array('category_id'=> 4, 'name'=>'Cottages', 'description'=>'Cottages'),
            array('category_id'=> 4, 'name'=>'Rooms', 'description'=>'Rooms'),
            array('category_id'=> 4, 'name'=>'Business premises', 'description'=>'Business premises'),
            array('category_id'=> 4, 'name'=>'Land', 'description'=>'Land'),
            array('category_id'=> 4, 'name'=>'Garages', 'description'=>'Garages'),
            array('category_id'=> 5, 'name'=>'Laptops', 'description'=>'Laptops'),
            array('category_id'=> 5, 'name'=>'Desktop computers', 'description'=>'Desktop computers'),
            array('category_id'=> 5, 'name'=>'Servers', 'description'=>'Servers'),
            array('category_id'=> 5, 'name'=>'Computer equipment', 'description'=>'Computer equipment'),
            array('category_id'=> 5, 'name'=>'Mining rigs', 'description'=>'Mining rigs'),            
            array('category_id'=> 5, 'name'=>'Crypto', 'description'=>'Crypto'),
            array('category_id'=> 5, 'name'=>'Other', 'description'=>'Other')
        );

        foreach($subcategories as $subcategory){
            SubCategory::create($subcategory);
        }        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
