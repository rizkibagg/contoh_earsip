<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('penduduk')->insert([
                'nik' => $faker->unique()->numerify('3401############'),
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date,
                'agama' => $faker->randomElement(['Islam', 'Kristen Protestan', 'Kristen Katolik', 'Hindu', 'Buddha', 'Konghucu']),
                'status_perkawinan' => $faker->randomElement(['Belum Menikah', 'Menikah', 'Duda', 'Janda']),
                'alamat' => $faker->address,
                'kewarganegaraan' => $faker->randomElement(['WNI', 'WNA']),
                'pekerjaan' => $faker->jobTitle,
                'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
                'nomor_telepon' => $faker->phoneNumber,
                'penghasilan' => $faker->numberBetween(1000000, 5000000),
                'foto_penduduk' => null, // Foto dapat diisi dengan path ke file foto
                'nomor_kk' => $faker->unique()->numerify('################'),
                'nomor_ktp' => $faker->unique()->numerify('################'),
                'status_nyawa' => $faker->randomElement(['Hidup', 'Meninggal']),
                'keterangan_kematian' => $faker->sentence,
                'kontak_darurat' => $faker->phoneNumber,
                'status_migrasi' => $faker->randomElement(['Migrasi Masuk', 'Migrasi Keluar', 'Tidak Migrasi']),
                'status_pajak' => $faker->randomElement(['Terdaftar', 'Belum Terdaftar']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
