<?php

namespace Matthias\Tests;

use Matthias\Habits;

class HabitsTest extends \PHPUnit_Framework_TestCase
{
    public function testGoodHabit()
    {
        $habits = new Habits();

        $this->assertSame('I write tests', $habits->whatIsYourBestHabit());
    }
}
