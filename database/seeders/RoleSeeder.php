<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user'
        ];

        foreach ($roles as $role) {
         Role::create([
            'name' => $role,
         ]);
        };

        $permissions = [
            'materi-list',
            'materi-create',
            'materi-edit',
            'materi-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        };

        $role = Role::whereName('user')->first();
        $role->syncPermissions($permissions);

        //membuat user admin dan passwordnya
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin10@gmail.com',
            'password' => bcrypt('password'),
        ]);

        //memberikan role ke user admin
        $admin->assignRole(['admin']);
    }
}
