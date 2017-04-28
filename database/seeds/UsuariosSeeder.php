<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Usuario::create([
          'loginName'  => 'admin',
          'nombre'     => 'Administrador',
          'clave' => Hash::make('1234') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
      ]);
    }
}
