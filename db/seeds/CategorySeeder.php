<?php


use Phinx\Seed\AbstractSeed;

class CategorySeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Fashion',
                'description' => 'Category for anything related to fashion.',
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Electronics',
                'description' => 'Gadgets, drones and more.',
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Motors',
                'description' => 'Motor sports and more.',
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Movies',
                'description' => 'Movie products.',
                'created' => '2019-05-20 10:22:05',
            ],
            [
                'name' => 'Books',
                'description' => 'Kindle books, audio books and more.',
                'created' => '2018-03-14 08:05:25',
            ],
            [
                'name' => 'Books',
                'description' => 'Drop into new winter gear.',
                'created' => '2016-01-09 02:24:24',
            ]
        ];
        $this->table('categories')->insert($data)->save();
    }
}
