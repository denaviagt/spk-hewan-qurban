<?php

use App\Models\Animal;
use App\Models\Criteria;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriaAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_animals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Animal::class);
            $table->foreignIdFor(Criteria::class);
            $table->string("value");
            $table->float("score");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criteria_animals');
    }
}
