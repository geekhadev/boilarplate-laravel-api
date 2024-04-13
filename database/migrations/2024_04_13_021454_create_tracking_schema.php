<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private const SCHEMA_NAME = 'tracking';

    private function validateSchema(): array
    {
        return DB::select("SELECT schema_name FROM information_schema.schemata WHERE schema_name = 'tracking'");
    }

    public function up(): void
    {
        if (empty($this->validateSchema())) {
            DB::statement('CREATE SCHEMA IF NOT EXISTS tracking');
        }
    }

    public function down(): void
    {
        if (empty($this->validateSchema())) {
            DB::statement('DROP SCHEMA IF EXISTS tracking CASCADE');
        }
    }
};
