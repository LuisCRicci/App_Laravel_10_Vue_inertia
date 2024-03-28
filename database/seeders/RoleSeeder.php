<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creacion de roles
        $role_admin = Role::create(['name'=>'admin', 'guard_name' => 'web']);
        $role_tecnicobase = Role::create(['name' => 'tecnicobase' , 'guard_name' => 'web']);
        $role_tecnicocampo = Role::create(['name'=>'tecnicocampo' , 'guard_name' => 'web']);
        $role_vendedor = Role::create(['name'=>'vendedor', 'guard_name' => 'web' ]);

        //permisos de los roles
        $permission_create_role = Permission::create(['name'=>'create roles'])->syncRoles($role_admin);
        $permission_read_role = Permission::create(['name'=>'read roles'])->syncRoles($role_admin);
        $permission_update_role = Permission::create(['name'=>'update roles'])->syncRoles($role_admin);
        $permission_delete_role = Permission::create(['name'=>'delete roles'])->syncRoles($role_admin);

        //permisos para tabla personas
        $permission_create_Persona = Permission::create(['name'=>'create personas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );

        $permission_read_Persona = Permission::create(['name'=>'read personas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );

        $permission_update_Persona = Permission::create(['name'=>'update personas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );

        $permission_delete_Persona = Permission::create(['name'=>'delete personas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );

        //permisos para tabla coleccion_fotos
        $permission_create_Coleccion_foto = Permission::create(['name'=>'create coleccion_fotos'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_read_Coleccion_foto = Permission::create(['name'=>'read coleccion_fotos'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Coleccion_foto = Permission::create(['name'=>'update coleccion_fotos'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_delete_Coleccion_foto = Permission::create(['name'=>'delete coleccion_fotos'])
        ->syncRoles($role_admin,$role_tecnicobase, );

        //permisos para la tabla zonas
        $permission_create_Zona = Permission::create(['name'=>'create zonas'])
        ->syncRoles($role_admin,$role_tecnicobase);
        $permission_read_Zona = Permission::create(['name'=>'read zonas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Zona = Permission::create(['name'=>'update zonas'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_delete_Zona = Permission::create(['name'=>'delete zonas'])
        ->syncRoles($role_admin );
        
        //permisos para la tabla naps
        $permission_create_Nap = Permission::create(['name'=>'create naps'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo );
        $permission_read_Nap = Permission::create(['name'=>'read nasps'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Nap = Permission::create(['name'=>'update naps'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo);
        $permission_delete_Nap = Permission::create(['name'=>'delete naps'])
        ->syncRoles($role_admin );

        //permisos para la tabla activos
        $permission_create_Activo = Permission::create(['name'=>'create activos'])
        ->syncRoles($role_admin,$role_tecnicobase);
        $permission_read_Activo = Permission::create(['name'=>'read activos'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Activo = Permission::create(['name'=>'update activos'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo );
        $permission_delete_Activo = Permission::create(['name'=>'delete activos'])
        ->syncRoles($role_admin,$role_tecnicobase );

        //permisos para la tabla medio_ventas
        $permission_create_Medio_venta = Permission::create(['name'=>'create medio_ventas'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_read_Medio_venta = Permission::create(['name'=>'read medio_ventas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Medio_venta = Permission::create(['name'=>'update medio_ventas'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_delete_Medio_venta = Permission::create(['name'=>'delete medio_ventas'])
        ->syncRoles($role_admin,$role_tecnicobase );

        //permisoa para la tabla nodos
        $permission_create_Nodo = Permission::create(['name'=>'create nodos'])
        ->syncRoles($role_admin,$role_tecnicobase);
        $permission_read_Nodo = Permission::create(['name'=>'read nodos'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Nodo = Permission::create(['name'=>'update nodos'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_delete_Nodo = Permission::create(['name'=>'delete nodos'])
        ->syncRoles($role_admin );

        //permisos para la tabla plans
        $permission_create_Plan = Permission::create(['name'=>'create plans'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_read_Plan = Permission::create(['name'=>'read plans'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor);
        $permission_update_Plan = Permission::create(['name'=>'update plans'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_delete_Plan = Permission::create(['name'=>'delete plans'])
        ->syncRoles($role_admin,$role_tecnicobase );

        //permisos para la tabla interesados
        $permission_create_Interesado = Permission::create(['name'=>'create interesados'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_read_Interesado = Permission::create(['name'=>'read interesados'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Interesado = Permission::create(['name'=>'update interesados'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_delete_Interesado = Permission::create(['name'=>'delete interesados'])
        ->syncRoles($role_admin);

        //permisos para la tabla instalacions
        $permission_create_Instalacion = Permission::create(['name'=>'create_instalacions'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_read_Instalacion = Permission::create(['name'=>'read_instalacions'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor);
        $permission_update_Instalacion = Permission::create(['name'=>'update_instalacions'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo);
        $permission_delete_Instalacion = Permission::create(['name'=>'delete_instalacions'])
        ->syncRoles($role_admin);

        // permisos para la tabla tareas
        $permission_create_Tarea = Permission::create(['name'=>'create tareas'])
        ->syncRoles($role_admin,$role_tecnicobase);
        $permission_read_Tarea = Permission::create(['name'=>'read tareas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo , $role_vendedor );
        $permission_update_Tarea = Permission::create(['name'=>'update tareas'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo );
        $permission_delete_Tarea = Permission::create(['name'=>'delete tareas'])
        ->syncRoles($role_admin,$role_tecnicobase );

        // permisos para la tabla materiales
        $permission_create_Material = Permission::create(['name'=>'create materials'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_read_Material = Permission::create(['name'=>'read materials'])
        ->syncRoles($role_admin,$role_tecnicobase,$role_tecnicocampo  );
        $permission_update_Material = Permission::create(['name'=>'update materials'])
        ->syncRoles($role_admin,$role_tecnicobase );
        $permission_delete_Material = Permission::create(['name'=>'delete materials'])
        ->syncRoles($role_admin,$role_tecnicobase );

        
    }
}


