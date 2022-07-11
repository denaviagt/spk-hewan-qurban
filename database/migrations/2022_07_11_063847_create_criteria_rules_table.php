<?php

use App\Models\Criteria;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriaRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Criteria::class)->constrained();
            $table->enum("type", ["Benefit","Cost"]);
            $table->string("rule");
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
        Schema::dropIfExists('criteria_rules');
    }
}
