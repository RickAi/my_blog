<?php
use App\Services\Registrar;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: CIR
 * Date: 7/27/15
 * Time: 11:31
 */
class UserSeeder extends Seeder
{
    public function run(){
        $data = [
            'name' => 'cir',
            'email' => 'cir@gmail.com',
            'password' => 'cirrus',
            'desc' => 'admin'
        ];

        $register = new Registrar();
        $register->create($data);
    }

}