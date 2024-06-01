<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    
    public function run(): void
    {
         $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'solicitante-list',
            'solicitante-create',
            'solicitante-edit',
            'solicitante-delete',
            'administrador-list',
            'administrador-create',
            'administrador-edit',
            'administrador-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete'
          ];
      
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
