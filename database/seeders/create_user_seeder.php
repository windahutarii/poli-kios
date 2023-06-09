<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class create_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
            [
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('admin123'),
                    'nama_lengkap' => 'Admin',
                    'profil' => 'Admin',
                    'alamat' => 'Admin',
                    'perusahaan' => 'Admin',
                    'no_telp' => 'Admin',
                    'no_wa' => 'Admin',
                    'website' => 'Admin',
                    'foto' => 'Admin',
                    'role_id' => 2,
                ],
                [
                    'name' => 'User',
                    'email' => 'user@user.com',
                    'password' => bcrypt('user123'),
                    'nama_lengkap' => 'User',
                    'profil' => 'User',
                    'alamat' => 'User',
                    'perusahaan' => 'User',
                    'no_telp' => 'User',
                    'no_wa' => 'User',
                    'website' => 'User',
                    'foto' => 'User',
                    'role_id' => 1,
                ],
            ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
