<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB; // 
use Illuminate\Support\Str;// thư viện Str

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(insertUser::class);
    }
   
}

class insertUser extends Seeder{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            //lưu ý ở những phiên bản từ laravel 6 trở lên thì str_random(3) -> str::random(3)
            ['name'=>Str::random(3),'email'=>Str::random(3).'@wru.com','password'=>bcrypt('matkhau')],
            ['name'=>Str::random(3),'email'=>Str::random(3).'@gmail.com','password'=>bcrypt('matkhau')]
        ]);
    }

}
