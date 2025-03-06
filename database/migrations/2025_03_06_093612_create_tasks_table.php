<?php

use App\TaskStatus;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("project_id");

            $table->string("title", 255);
            $table->text("description")->nullable();
            $table->date("due_date");

            $table->enum(
                "status",
                [
                    TaskStatus::Pending->value,
                    TaskStatus::In_Progress->value,
                    TaskStatus::Completed->value
                ]
            )->default(TaskStatus::Pending->value);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign("project_id")
                ->references("id")
                ->on("projects")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
