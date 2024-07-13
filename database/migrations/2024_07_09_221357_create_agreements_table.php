<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id('agreement_id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('father_name')->nullable();
            $table->string('street')->nullable();
            $table->string('upazila')->nullable();
            $table->string('district')->nullable();
            $table->string('post_code')->nullable();
            $table->string('job_post')->nullable();
            $table->string('nid_num')->nullable();
            $table->string('passport_num')->nullable();
            $table->string('driving_license_num')->nullable();
            $table->string('birth_certificate_num')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('currency')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('amount')->nullable();
            $table->string('subject')->nullable();
            $table->text('description')->nullable();
            $table->string('start_date')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('project_reference')->nullable();
            $table->string('attachment')->nullable();
            $table->string('agreement_num')->nullable();
            $table->integer('status')->default(0);
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('client_id')->on('');
            $table->string('terms_condition')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agreements');
    }
};
