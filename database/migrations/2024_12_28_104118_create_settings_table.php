<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up(): void
	{
		Schema::create('settings', function (Blueprint $table) {
			$table->id();
			$table->string('groom_name');
			$table->string('bride_name');
			$table->json('events');
			$table->dateTime('date');
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('main_color')->nullable();
			$table->string('secondary_color')->nullable();
			$table->timestamps();
		});
	}

	public function down(): void
	{
		Schema::dropIfExists('settings');
	}
};
