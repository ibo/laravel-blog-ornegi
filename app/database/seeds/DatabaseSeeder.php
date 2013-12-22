<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersSeeder');
		$this->call('BlogTableSeeder');
	}

}

class UsersSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

        $data = array(
            array(
            'fullname' => 'İbrahim Hızlıoğlu',
            'email' => 'ibrahim.hizlioglu@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => date('Y-m-d H:i:s')
            ),
            array(
            'fullname' => 'Osman Yüksel',
            'email' => 'yuxel@sonsuzdongu.com',
            'password' => Hash::make('123456'),
            'created_at' => date('Y-m-d H:i:s')
            ),
            array(
            'fullname' => 'Emir Karşıyakalı',
            'email' => 'emirkarsiyakali@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => date('Y-m-d H:i:s')
            ),
            array(
            'fullname' => 'Arda Kılıçdağı',
            'email' => 'ardakilicdagi@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => date('Y-m-d H:i:s')
            )
        );
        
        DB::table('users')->insert($data);
        
        $this->command->info('+ UsersSeeder calistirildi');
	}

}

Class BlogTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('blog')->delete();

        $data = array();
        
        for ($i = 1; $i < 24; $i++) {
            
            $row =array(
            'user_id' => rand(1,3),
            'title' => 'LOREM IPSUM DOLOR SIT AMET ' . $i ,
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys '
                . 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type '
                . 'specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially '
                . 'unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more '
                . 'recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => date('Y-m-d H:i:s')
            );
            
            array_push($data, $row);
            
        }
        
        DB::table('blog')->insert($data);
        
        $this->command->info('+ BlogTableSeeder calistirildi');

    }
    
}