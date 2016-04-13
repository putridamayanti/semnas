<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Basic roles data
        App\Role::insert([
            ['name' => 'admin'],
            ['name' => 'peserta'],
        ]);

        // Basic permissions data
        App\Permission::insert([
            ['name' => 'access.admin'],
            ['name' => 'access.peserta'],
        ]);

        // Add a permission to a role
        $role = App\Role::where('name', 'admin')->first();
        $role->addPermission('access.admin');

        $role = App\Role::where('name', 'peserta')->first();
        $role->addPermission('access.peserta');
        // ... Add other role permission if necessary

        // Create a user, and give roles
        $user = App\User::create([
            'email' => 'putridamayanti13@yahoo.com',
            'password' => bcrypt('200895'),
        ]);

        $user->assignRole('admin');

        // ... Add other user and assign them to roles
    }
}
