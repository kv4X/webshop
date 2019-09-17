<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Attribute;

class CreateAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');            
            $table->string('name');
            $table->integer('dropdown');
            $table->integer('checkbox');
            $table->timestamps();
        });

        $attributes = array(
            // MOBILE PHONES - SUBCAT_ID 23
            array('name'=>'Brand', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'OS', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Procesor (MHz)', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'0'),
            array('name'=>'Number of processor cores', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'RAM', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Screen Size (inch)', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Guarantee', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'SIM slot', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Camera', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Front camera', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Flash / Flash', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Color', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Internal memory', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Memory card type', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Provider', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Max card capacity', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Agreement with the service provider', 'subcategory_id'=>'23', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'OS version', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'0'),
            array('name'=>'Dual SIM', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Factory box (packing)', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Damaged', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Poor', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Charger', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Headphones', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'USB Cable', 'subcategory_id'=>'23', 'dropdown'=>'0', 'checkbox'=>'1'),

            // CARS - SUBCAT_ID 1
            array('name'=>'Car manufacturer', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Model car', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Yearly', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Mileage', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Engine capacity', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Fuel', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Number of doors', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Horsepower', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'0'),
            array('name'=>'Kilowatt (KW)', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'0'),
            array('name'=>'Weight / Weight (kg)', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'0'),
            array('name'=>'Type', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Drive', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Emission standard', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Rugs size', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Transmission', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Number of degrees of transmission', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Color', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Music / sound system', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Parking sensors', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Registered to', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Year of first registration', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Number of previous owners', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'It owns tires', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Multi-season climate', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Lights', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Protection / Lock', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Seating places', 'subcategory_id'=>'1', 'dropdown'=>'1', 'checkbox'=>'0'),
            array('name'=>'Turbo', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Start-Stop System', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'DPF / FAP filter', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Park assist', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Side tables', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Registered', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Duty-paid', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'On leasing', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Adapted for the disabled', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Service book', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Power steering', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Steering wheels', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Cruise control', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'ABS', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'ESP', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Airbag', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'El. glass windows', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Electric mirrors', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Climate', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Digital climate', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Navigation', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Touch screen', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Shiber', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Panorama roof', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Leather', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Heating in the seats', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Alloy wheels', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Alarm', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Central lock', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Remote lock', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Oldtimer', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Auto hook', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'ISOFIX', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),
            array('name'=>'Impacted', 'subcategory_id'=>'1', 'dropdown'=>'0', 'checkbox'=>'1'),

        );
        foreach($attributes as $attribute){
            Attribute::create($attribute);
        }        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
