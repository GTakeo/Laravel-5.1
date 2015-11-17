<?php
use App\User;
use App\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::create(['name' => 'Administrador','email' => 'administrador@hotmail.com','password' => bcrypt('202020k123'),'calidad' => 'ADMINISTRADOR']);
        


        Producto::create(['nombre' => 'Cocina','descripcion' => 'Descripcion','precio' => '200','imagen' => 'Cocina-1','categoria' => '1']);
        Producto::create(['nombre' => 'Cocina','descripcion' => 'Descripcion','precio' => '300','imagen' => 'Cocina-2','categoria' => '1']);
        Producto::create(['nombre' => 'Cocina','descripcion' => 'Descripcion','precio' => '400','imagen' => 'Cocina-3','categoria' => '1']);

        Producto::create(['nombre' => 'Habitacion','descripcion' => 'Descripcion','precio' => '200','imagen' => 'habitacion-1','categoria' => '2']);
        Producto::create(['nombre' => 'Habitacion','descripcion' => 'Descripcion','precio' => '300','imagen' => 'habitacion-2','categoria' => '2']);
        Producto::create(['nombre' => 'Habitacion','descripcion' => 'Descripcion','precio' => '400','imagen' => 'habitacion-3','categoria' => '2']);

        Producto::create(['nombre' => 'Stand','descripcion' => 'Descripcion','precio' => '200','imagen' => 'stand-1','categoria' => '3']);
        Producto::create(['nombre' => 'Stand','descripcion' => 'Descripcion','precio' => '300','imagen' => 'stand-2','categoria' => '3']);
        Producto::create(['nombre' => 'Stand','descripcion' => 'Descripcion','precio' => '400','imagen' => 'stand-3','categoria' => '3']);        
// $this->call('UserTableSeeder');

        Model::reguard();
    }
}
