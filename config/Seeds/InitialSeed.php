<?php
use Migrations\AbstractSeed;
use Phinx\Seed\AbstractSeed;

/**
 * Initial seed.
 */
class InitialSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'title'      => $faker->word,
                'type'      => $faker->word,
                'description'      => $faker->text($maxNbChars = 200),
                'filename'      => $faker->imageUrl($width = 640, $height = 480),
                'height'    => $faker->randomDigit,
                'width'     => $faker->randomDigit,
                'price'       => $faker->randomDigit,
                'rating'       => $faker->randomDigit,
            ];
        }

        $this->insert('products', $data);
    }
}
