<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
            'name'        =>'Navegar usuarios',
            'slug'        =>'users.index',
            'description' =>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de usuario',
            'slug'=>'users.show',
            'description'=>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'=>'edicion de  usuarios',
            'slug'=>'users.edit',
            'description'=>'Editar cualquier dato de un usuario en el sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar usuarios',
            'slug'=>'users.destroy',
            'description'=>'eliminar cualquier  usuario en el sistema',
        ]);

        //roles
        Permission::create([
            'name'=>'Navegar roles',
            'slug'=>'roles.index',
            'description'=>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de usuario usuarios',
            'slug'=>'roles.show',
            'description'=>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'=>'Creacion de roles',
            'slug'=>'roles.create',
            'description'=>'crear un rol en el sistema',
        ]);
        Permission::create([
            'name'=>'edicion de roles',
            'slug'=>'roles.edit',
            'description'=>'Editar cualquier dato de un usuario en el sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar rol',
            'slug'=>'roles.destroy',
            'description'=>'eliminar cualquier  rol en el sistema',
        ]);
        //products
        Permission::create([
            'name'=>'Navegar productos',
            'slug'=>'products.index',
            'description'=>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de producto',
            'slug'=>'products.show',
            'description'=>'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name'=>'Creacion de productos',
            'slug'=>'products.create',
            'description'=>'crea un producto en el sistema',
        ]);
        Permission::create([
            'name'=>'edicion de productos',
            'slug'=>'products.edit',
            'description'=>'Editar cualquier dato de un producto en el sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar producto',
            'slug'=>'products.destroy',
            'description'=>'eliminar cualquier producto en el sistema',
        ]);
        //residences
        Permission::create([
            'name'=>'Navegar residencias',
            'slug'=>'residences.index',
            'description'=>'Lista y navega todas las residencias',
        ]);
        Permission::create([
            'name'=>'Ver detalle de las residencias',
            'slug'=>'residences.show',
            'description'=>'Ver en detalle cada residencia del sistema',
        ]);
        Permission::create([
            'name'=>'Creacion de residencias',
            'slug'=>'residences.create',
            'description'=>'crea una residencia en el sistema',
        ]);
        Permission::create([
            'name'=>'edicion de residecias',
            'slug'=>'residences.edit',
            'description'=>'Editar una residencia en el sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar residencia',
            'slug'=>'residences.destroy',
            'description'=>'eliminar cualquier residencia en el sistema',
        ]);
    }
}
