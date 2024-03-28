<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// Importar la excepción para roles no encontrados (si existe en tu proyecto)
use Spatie\Permission\Exceptions\RoleDoesNotExist;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@xturboteam.com',
                'password' => bcrypt('p455w0rd'),
            ]
            )->assignRole('admin');
            
            //$this->assignRoleIfExist($admin, 'admin');
           

        $tecnicobase = User::create(
            [
                'name' => 'Tecnico Base',
                'email' => 'tecnicobase@xturboteam.com',
                'password' => bcrypt('base'),
            ]
            )->assignRole('tecnicobase');
        //$this->assignRoleIfExist($tecnicobase, 'tecnicobase');

        $tecnicocampo = User::create(
            [
                'name' => 'Tecnico Campo',
                'email' => 'tecnicocampo@xturboteam.com',
                'password' => bcrypt('campo'),
            ]
            )->assignRole('tecnicocampo');
           //$this->assignRoleIfExist($tecnicocampo, 'tecnicocampo');
            
        $vendedor = User::create(
            [
                'name' => 'Vendedor',
                'email' => 'vendedor@xturboteam.com',
                'password' => bcrypt('vendedor'),
            ]
            )->assignRole('vendedor');
            //$this->assignRoleIfExist($vendedor, 'vendedor');


            //$admin->assignRole('admin');
            //$tecnicobase->assignRole('tecnicobase');
            //$tecnicocampo->assignRole('tecnicocampo');
            //$vendedor->assignRole('vendedor');

    }

    /*
   
    private function assignRoleIfExist(User $user, string $roleName): void
    {
        try {
            $role = Role::findByName($roleName, 'web');
            if (!$role) {
                throw new RoleDoesNotExist();
            }
            $user->assignRole($role);
        } catch (RoleDoesNotExist $e) {
            report($e);
            echo "Error: El rol '{$roleName}' no existe.\n";
        }
    }*/
}


