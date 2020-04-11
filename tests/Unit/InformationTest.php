<?php

namespace Tests\Unit;

use App\Destination;
use App\Information;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class InformationTest extends TestCase
{
    /**
     * @test
     */
    public function a_information_belongs_to_many_destinations()
    {
        $id = 1;
        $informantion = Information::findOrNew($id);

        $this->assertInstanceOf(Collection::class, $informantion->destinations);
    }
}
