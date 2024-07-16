<?php

namespace App\Providers;

use Faker\Provider\Base;

class CustomProvider extends Base
{
    public function nim()
    {
        // Menghasilkan NIM yang valid (contoh format: 1234567890)
        return $this->generator->unique()->regexify('[0-9]{10}');
    }

    public function role()
    {
        // Contoh data role
        $roles = ['administrator', 'user'];
        return $this->generator->randomElement($roles);
    }

    public function divisi()
    {
        $divisi = ['U/UX', 'Web Development', 'Android Development', 'Game Development','Start Up'];
        return $this->generator->randomElement($divisi);
    }

    public function fakultas()
    {
        $fakultas = ['Fakultas Teknik Elektro', 'Fakultas Rekayasa Industri', 'Fakultas Informatika', 'Fakultas Ekonomi dan Bisnis', 'Fakultas Ilmu Terapan', 'Fakultas Industri Kreatif'];
        return $this->generator->randomElement($fakultas);
    }

    public function prodi()
    {
        $prodi = ['Informatika', 'Manajemen', 'Ilmu Hukum'];
        return $this->generator->randomElement($prodi);
    }

    public function foto()
    {
        // Menghasilkan URL foto profil acak
        return $this->generator->imageUrl(640, 480, 'people');
    }

    public function ruangan()
    {
        $ruanganOptions = ['Ruangan A', 'Ruangan B', 'Ruangan C'];
        return $this->generator->randomElement($ruanganOptions);
    }

}
