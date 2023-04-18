<?php 
    
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use App\Models\User;
    use App\Models\Role;

    class UserTableSeeder extends Seeder
    {
    
        public function run()
        {
            $user = new User;
            $user->name = 'Samuel Jackson';
            $user->email = 'samueljackson@jackson.com';
            $user->password = bcrypt('samuel1234');
            $user->save();
            $user->roles()->attach(Role::where('name', 'user')->first());
    
            $admin = new User;
            $admin->name = 'Thomas Happé';
            $admin->email = 'thomashappe2005@gmail.com';
            $admin->password = bcrypt('password');
            $admin->save(); 
            $admin->roles()->attach(Role::where('name', 'admin')->first());
        }
    }
