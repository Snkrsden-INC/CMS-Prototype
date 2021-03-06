<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateProductsTable extends Migration
    {
        /**
         * //number_format($number, 2, '.', ',')
         * 2 = decimal places | '.' = decimal seperator | ',' = thousand seperator -> if you need...that here
         * Run the migrations.
         *
         * @return void
         */

        public function up()
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('content')->nullable();
                $table->longText('desc');
                $table->string('style')->nullable();
                $table->string('colorway');
                $table->string('condition');
                $table->string('ticker');
                $table->enum('authenticity', array('Authentic', 'Counterfeit'))->nullable();
                $table->decimal('price');
                $table->date('release_date')->nullable();
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
            Schema::dropIfExists('products');
        }
    }
