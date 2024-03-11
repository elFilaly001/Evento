<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $AdminRole = Role::findByName("Admin");
        $OrganizerRole = Role::findByName("Orgnizer");


        $AdminRole->givePermissionTo("Manage User");
        $AdminRole->givePermissionTo("Manage Category");
        $OrganizerRole->givePermissionTo("Manage Event");
    }
}
