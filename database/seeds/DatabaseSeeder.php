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
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();
		foreach(range(1,50) as $index)
		{
			DB::table('users')->insert([
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => $faker->password,
				'phone'=> $faker->phoneNumber
			]);
		}
	}
}
class PostsTableSeeder extends Seeder
{
	public  function run(){
		foreach(range(1,50) as $index)
		{
			DB::table('posts')->insert([
				'title' => 'Đảo Tuần Châu',
				'thumbnail' => 'thumbnail/tuanchau.jpg',
				'caption' => 'Tuần Châu là một phường đảo thuộc thành phố Hạ Long, Quảng Ninh, Việt Nam. Đây là một hòn đảo có dân cư sinh sống lâu đời nằm trên vịnh Hạ Long nhưng chỉ cách đất liền 2 km.',
				'description' => 'Khu du lịch đảo Tuần Châu cách trung tâm thành Phố Hạ Long khoảng 2km. Khu du lịch đảo Tuần Châu có diện tích 220ha, được kiến tạo bởi những ngọn đồi thoai thoải. Một con đường trải bê tông dài khoảng 2km nối đảo với đất liền. Tại Tuần Châu có rất nhiều hạng mục công trình đã và đang được xây dựng. Từ ngoài cổng đi vào lần lượt du khách sẽ đi qua một khu đồi với khu biệt thự có hạ tầng cơ sở đạt tiêu chưần quốc tế. Đi tiếp vào trong khu phố ẩm thực với năm nhà hàng và nhà tròn được thiết kế theo kiến trúc cung đình rất đẹp cùng một lúc có thể phục vụ trên 1.000 thực khách với những món ăn Âu, Á và dân tộc do các đầu bếp nổi tiếng trong nước và ngoài nước thực hiện. ',
				'author' => 'admin'
			]);
		}
	}
}

