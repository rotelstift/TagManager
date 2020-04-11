<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Destination;
use App\Information;
use Illuminate\Database\Eloquent\Collection;

class DestinationTest extends TestCase
{
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function a_destination_belongs_to_many_information()
    {
        $id = 1;
        $destination = Destination::findOrNew($id);

        $this->assertInstanceOf(Collection::class, $destination->information);
    }
}
