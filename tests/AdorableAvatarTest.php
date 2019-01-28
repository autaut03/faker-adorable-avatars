<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Adorable;
use PHPUnit\Framework\TestCase;

class AdorableAvatarTest extends TestCase
{
    /**
     * Part of regexp used to check if generated avatar ID is correct.
     */
    const AVATAR_ID_REGEX = '[A-Za-z0-9]+';

    /**
     * Faker instance for our tests.
     *
     * @var Generator
     */
    protected $faker;

    /**
     * Instantiates faker instance.
     */
    public function setUp()
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->faker->addProvider(new Adorable($this->faker));
    }

    /**
     * @test
     */
    public function faker_has_avatar_method_and_it_returns_a_string()
    {
        $this->assertIsString($this->faker->adorableAvatar());
        $this->assertIsString($this->faker->adorableAvatar);
    }

    /**
     * @test
     */
    public function faker_has_avatar_id_method_and_it_returns_a_string()
    {
        $this->assertIsString($this->faker->adorableAvatarId());
        $this->assertIsString($this->faker->adorableAvatarId);
    }

    /**
     * @test
     */
    public function avatar_id_method_generates_valid_random_string()
    {
        $id = $this->faker->adorableAvatarId($length = 20);

        $this->assertEquals($length, strlen($id));
        $this->assertRegExp('/^'.static::AVATAR_ID_REGEX.'$/', $id);
    }

    /**
     * @test
     */
    public function avatar_method_generates_valid_avatar_link()
    {
        $link = $this->faker->adorableAvatar($id = $this->faker->adorableAvatarId(), $size = 100, false);

        $this->assertEquals("https://api.adorable.io/avatars/$size/$id", $link);
    }

    /**
     * @test
     */
    public function avatar_method_generates_id_if_not_provided_with_one()
    {
        $link = $this->faker->adorableAvatar(null, $size = 100, false);

        $this->assertRegExp('/^https:\/\/api\.adorable\.io\/avatars\/'.$size.'\/'.static::AVATAR_ID_REGEX.'$/', $link);
    }
}