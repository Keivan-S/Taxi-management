<?php

use Illuminate\Database\Seeder;
use app\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('ادمین'),
            ])->save();
        }


        $role = Role::firstOrNew(['name' => 'inspector']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('بارزس'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'taxi_owner']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('مالک تاکسی'),
            ])->save();
        }


        $role = Role::firstOrNew(['name' => 'taxi_driver']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('راننده تاکسی'),
            ])->save();
        }


        $role = Role::firstOrNew(['name' => 'agancy_office']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('دفتر آژانس'),
            ])->save();
        }


        $role = Role::firstOrNew(['name' => 'agancy_driver']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('راننده آژانس'),
            ])->save();
        }


        $role = Role::firstOrNew(['name' => 'agancy_driver']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('راننده آژانس'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'minibus_driver']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('راننده مینی بوس'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'pickup_driver']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('راننده وانت'),
            ])->save();
        }
    }
}
