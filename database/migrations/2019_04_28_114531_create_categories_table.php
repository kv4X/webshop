<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Category;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        $categories = array(
            array('name'=>'Vehicles', 'description'=>'Cars, trucks, motorbikes...'),
            array('name'=>'Electronics', 'description'=>'TVs, cameras, white goods...'),
            array('name'=>'Mobile Devices', 'description'=>'Mobile phones, tablets, smartwatchs...'),
            array('name'=>'Real Estates', 'description'=>'Apartments, flats, houses, garages...'),
            array('name'=>'Computers', 'description'=>'Computers, laptops, softwers, mining rigs...'),
            array('name'=>'Arts', 'description'=>'Pictures, tattoos, posters...'),
            array('name'=>'Animals', 'description'=>'Pets, domestic animals, equipments...'),
            array('name'=>'Video games', 'description'=>'Games, consoles, parts...'),
            array('name'=>'Clothes and Footwear', 'description'=>'Women, men, kids...'),
            array('name'=>'Games and toys', 'description'=>'Social games, toys, action figures, construction toys...'),
            array('name'=>'My Home', 'description'=>'Furnitures, lamps, kitchens, garden plants'),
            array('name'=>'Sports equipment', 'description'=>'Outdoor, fitness, extreme...'),
            array('name'=>'Music equipment', 'description'=>'Instruments, music equipment and parts...'),
            array('name'=>'Business and Industry', 'description'=>'Machines and tools, agriculture, construction, materials...'),
            array('name'=>'Beauty and Health', 'description'=>'Perfumes, glasses, health, make up...'),
            array('name'=>'Jewerly and Watches', 'description'=>'Hand watches, chains, bracelets, necklaces, rings...'),
            array('name'=>'Antiques', 'description'=>'Books and documents, furnitures, jewerly, watches...'),
            array('name'=>'Tickets', 'description'=>'Concerts, theaters, cinemas...'),
            array('name'=>'Collectibles', 'description'=>'Numismatics, militaria, badges, flags, figures...'),
            array('name'=>'Literatures', 'description'=>'Books, comics, magazines...')
        );

        foreach($categories as $category){
            Category::create($category);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
