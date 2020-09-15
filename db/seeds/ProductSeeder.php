<?php


use Phinx\Seed\AbstractSeed;

class ProductSeeder extends AbstractSeed
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
                'name' => 'LG P880 4X HD',
                'description' => 'My first awesome phone!',
                'price' => '336',
                'category_id' => 3,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Google Nexus 4',
                'description' => 'The most awesome phone of 2013!',
                'price' => '299',
                'category_id' => 2,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Samsung Galaxy S4',
                'description' => 'How about no?',
                'price' => '600',
                'category_id' => 3,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Bench Shirt',
                'description' => 'The best shirt!',
                'price' => '29',
                'category_id' => 1,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Lenovo Laptop',
                'description' => 'My business partner.',
                'price' => '399',
                'category_id' => 2,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Samsung Galaxy Tab 10.1',
                'description' => 'Good tablet.',
                'price' => '259',
                'category_id' => 2,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Spalding Watch',
                'description' => 'My sports watch.',
                'price' => '199',
                'category_id' => 1,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Sony Smart Watch',
                'description' => 'The coolest smart watch!',
                'price' => '300',
                'category_id' => 2,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Huawei Y300',
                'description' => 'For testing purposes.',
                'price' => '100',
                'category_id' => 2,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Abercrombie Lake Arnold Shirt',
                'description' => 'Perfect as gift!',
                'price' => '60',
                'category_id' => 1,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Abercrombie Allen Brook Shirt',
                'description' => 'Cool red shirt!',
                'price' => '70',
                'category_id' => 1,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Another product',
                'description' => 'Awesome product!',
                'price' => '555',
                'category_id' => 2,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Wallet',
                'description' => 'You can absolutely use this one!',
                'price' => '799',
                'category_id' => 6,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Amanda Waller Shirt',
                'description' => 'New awesome shirt!',
                'price' => '333',
                'category_id' => 1,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Nike Shoes for Men',
                'description' => 'Nike Shoes',
                'price' => '12999',
                'category_id' => 3,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Bristol Shoes',
                'description' => 'Awesome shoes.',
                'price' => '999',
                'category_id' => 5,
                'created' => '2014-06-01 00:35:07',
            ],
            [
                'name' => 'Rolex Watch',
                'description' => 'Category for anything related to fashion.',
                'price' => '25000',
                'category_id' => 1,
                'created' => '2014-06-01 00:35:07',
            ]
         ];
        $this->table('categories')->insert($data)->save();
    }
}
