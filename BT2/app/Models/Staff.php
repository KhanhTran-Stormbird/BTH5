<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    public function up(): void
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable(); // Chức danh
            $table->string('academic_rank')->nullable(); // Học hàm
            $table->string('degree')->nullable(); // Học vị
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('department_id'); // Khóa ngoại liên kết với bảng departments
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }
    
}
