<?php

namespace Database\Seeders;

use App\Models\Produkty;
use Illuminate\Database\Seeder;
use SplFileObject;

class ProduktyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = new SplFileObject('/var/www/storage/app/public/minima_csv.csv');

        // Przeskakuje pierwszą linię nagłówka
        $file->fgets();

        while (!$file->eof()) {
            $line = $file->fgets();
            $produkty_data = str_getcsv($line);

            if (count($produkty_data) < 13) {
                // [opcjonalnie] Walidacja błędnych linii
                // Możesz zalogować błędne linie, jeśli chcesz je zbadać
                // Log::error("Błędna linia: {$line}");
                continue;
            }

            Produkty::factory()->create([
                'nazwa_produktu' => (string)$produkty_data[0],
                'producent' => (string)$produkty_data[1],
                'actual' => intval($produkty_data[2]),
                'jednostka_ceny' => (string)$produkty_data[3],
                'waga' => floatval($produkty_data[4]),
                'srednica' =>floatval($produkty_data[5]),
                'dlugosc' =>intval($produkty_data[6]),
                'szerokosc' => intval($produkty_data[7]),
                'wysokosc' =>intval($produkty_data[8]),
                'grubosc' => floatval($produkty_data[9]),
                'typ_pakowania' => (string)$produkty_data[10],
                'jednostki_zakupu' => intval($produkty_data[11]),
                'jednostki_magazynowe' => (string)$produkty_data[12],
            ]);
        }

    }
}
