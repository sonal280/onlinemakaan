<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('pro_id');
            $table->unsignedBigInteger('guest_user');
            $table->string('prostatus');
            $table->unsignedBigInteger('listingtype');
            // $table->foreignId('listingtype')->references('id')->on('pre_property_listingtypes')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('propertytype');
            $table->float('price');
            $table->unsignedBigInteger('state');
            $table->unsignedBigInteger('city');
            
            $table->string('locality');
            $table->string('street');
            $table->string('pro_col_name');
            $table->string('hide');
            $table->string('plot_area');
            $table->string('superbuiltup_area');
            $table->string('builtup_area');
            $table->string('carpet_area');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('balconies');
            $table->string('furnishing');
            $table->string('items');
            $table->string('total_floor');
            $table->string('parking');
            $table->string('availability');
            $table->string('flooring');
            $table->text('description');
            $table->string('property_on_floor');
            $table->string('floor_allowed_for_construction');
            $table->date('possession_by');
            $table->string('is_boundary_wall_made');
            $table->string('facing');
            $table->string('amenities');
            $table->string('is_verified');
            $table->unsignedBigInteger('status');
            $table->dateTime('date');
            $table->timestamps();
            $table->foreign('guest_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('listingtype')->references('id')->on('pre_property_listingtypes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('propertytype')->references('id')->on('pre_property_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('state')->references('id')->on('admin_states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('city')->references('id')->on('admin_districts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('pre_property_status')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
