<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class CreateDatabase extends Command
{
    protected $signature = 'db:create {dbname?}';
    protected $description = 'Membuat database SQL Server berdasarkan konfigurasi di .env atau argumen';

    public function handle()
    {
        // Ambil nama database dari argumen atau file .env
        $database = $this->argument('dbname') ?? Config::get('database.connections.sqlsrv.database');

        // Perintah SQL untuk membuat database jika belum ada
        $query = "IF NOT EXISTS (SELECT * FROM sys.databases WHERE name = '$database') 
                  CREATE DATABASE [$database];";

        // Buat koneksi tanpa database
        Config::set('database.connections.sqlsrv.database', null);
        DB::connection()->statement($query);

        $this->info("Database '$database' telah dibuat!");

        // Set kembali database di konfigurasi
        Config::set('database.connections.sqlsrv.database', $database);
    }
}
/*
1. php artisan make:command CreateDatabase
2. edit isi file menjadi
    <?php

        namespace App\Console\Commands;

        use Illuminate\Console\Command;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Config;

        class CreateDatabase extends Command
        {
            protected $signature = 'db:create {dbname?}';
            protected $description = 'Membuat database SQL Server berdasarkan konfigurasi di .env atau argumen';

            public function handle()
            {
                // Ambil nama database dari argumen atau file .env
                $database = $this->argument('dbname') ?? Config::get('database.connections.sqlsrv.database');

                // Perintah SQL untuk membuat database jika belum ada
                $query = "IF NOT EXISTS (SELECT * FROM sys.databases WHERE name = '$database') 
                        CREATE DATABASE [$database];";

                // Buat koneksi tanpa database
                Config::set('database.connections.sqlsrv.database', null);
                DB::connection()->statement($query);

                $this->info("Database '$database' telah dibuat!");

                // Set kembali database di konfigurasi
                Config::set('database.connections.sqlsrv.database', $database);
            }
        }
3. php artisan db:create
4. php artisan migrate --seed

*/