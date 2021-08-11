<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {

            

            $menus = [
                ['display_name' => 'Home', 'parent_id' => 0, 'order' => 0, 'slug' => '/', 'icono'=> 'fa-home'],
                ['display_name' => 'Pagos', 'parent_id' => 0, 'order' => 1, 'slug' => '/pagos', 'icono'=> 'fa-home'],
                ['display_name' => 'Proyectos', 'parent_id' => 0, 'order' => 2, 'slug' => '/proyectos', 'icono'=> 'fa-home'],
                ['display_name' => 'About', 'parent_id' => 0, 'order' => 3, 'slug' => '/about', 'icono'=> 'fa-home'],
                ['display_name' => 'About Team', 'parent_id' => 4, 'order' => 3, 'slug' => '/about-team', 'icono'=> 'fa-home'],
                ['display_name' => 'About Clients', 'parent_id' => 4, 'order' => 3, 'slug' => '/about-clients', 'icono'=> 'fa-home'],
                ['display_name' => 'Contact Team', 'parent_id' => 1, 'order' => 3, 'slug' => '/contact-team', 'icono'=> 'fa-home'],
                ['display_name' => 'Contact Clients', 'parent_id' => 2, 'order' => 3, 'slug' => '/contact-clients', 'icono'=> 'fa-home'],
                ['display_name' => 'Contact', 'parent_id' => 2, 'order' => 4, 'slug' => '/contact', 'icono'=> 'fa-home'],
                ['display_name' => 'Portfolio', 'parent_id' => 2, 'order' => 4, 'slug' => '/portfolio', 'icono'=> 'fa-home'],
                ['display_name' => 'Gallery', 'parent_id' => 2, 'order' => 4, 'slug' => '/gallery', 'icono'=> 'fa-home']
            ];
            foreach ($menus as $menu) {
                \App\Models\Menu::Create($menu);
            }
        }
    }
}
