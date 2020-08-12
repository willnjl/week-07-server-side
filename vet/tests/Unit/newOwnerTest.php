<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Owner;

class newOwnerTest extends TestCase
{
    use RefreshDatabase;
    
    public function testOwner()
    {
        // $owner = new Owner();
        
        Owner::create([
            "first_name" => 'Will',
            "last_name" => 'Leighton',
            "telephone" => '0117238977',
            "email" => 'mr@homestead.test',
            "address_1" => 'Sunny Lane',
            "address_2" => 'Long Ashton',
            "town" =>  'Bristol',
            "postcode" =>  'GL53 0LA'
        ]);

        
        $ownerFromDB = Owner::all()->first();
        $this->assertSame("Will", $ownerFromDB->first_name);
    }
}


