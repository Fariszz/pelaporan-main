<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            [
                'id' => 1,
                'name' => 'Dashboard',
                'link' => '/dashboard',
                'icon' => 'fa-solid fa-gauge',
            ],
            [
                'id' => 2,
                'name' => 'Rencana Kegiatan',
                'link' => '/posts',
                'icon' => 'fa-solid fa-list-check',
            ],
            [
                'id' => 4,
                'name' => 'Approving Penugasan',
                'link' => '/reviewKetua',
                'icon' => 'fa-solid fa-list-check',
            ],
            [
                'id' => 5,
                'name' => 'Laporan Akhir',
                'link' => '/laporanAkhir',
                'icon' => 'fa-solid fa-list-check',
            ],
            [
                'id' => 6,
                'name' => 'Peta Risiko',
                'link' => '/petas',
                'icon' => 'fa-regular fa-newspaper',
            ],
            [
                'id' => 7,
                'name' => 'Dokumen Reviu',
                'link' => '/dokumens',
                'icon' => 'fa-solid fa-file',
            ],
            [
                'id' => 8,
                'name' => 'Dokumen Tindak Lanjut',
                'link' => '/dokumen-tindak-lanjut',
                'icon' => 'fa-regular fa-file',
            ],
            [
                'id' => 9,
                'name' => 'Setting Menu',
                'link' => '/admin/panel',
                'icon' => 'fa-solid fa-gear',
            ],
            [
                'id' => 10,
                'name' => 'Manajemen User',
                'link' => '/users',
                'icon' => 'fa-solid fa-user',
            ],
            [
                'id' => 17,
                'name' => 'Unit Kerja',
                'link' => '/unit-kerja',
                'icon' => 'fa-regular fa-bookmark',
            ],
        ];

        foreach ($menu as $key => $value) {
            Menu::create($value);
        }
    }
}
