<?php

namespace Tests\Unit;

use App\Destination;
use App\Information;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class InformationTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function a_information_belongs_to_many_destinations()
    {
        $informantion = factory(Information::class)->create();
        $destination = factory(Destination::class)->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Colleciton', $informantion->destinations);
    }
}
