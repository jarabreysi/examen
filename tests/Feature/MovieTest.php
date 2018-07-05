<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\OpenController;

class OpenTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
	 function testConnect():void{
		$openmovie=new OpenController();
		$this->assertEquals(  $movie->connect(),"Shrek");
	}
	 function testActors():void{
		$openmovie=new OpenController();
		$this->assertEquals($movie->actors(),1);
		//$this->assertEquals(  $openmovie->connect(),"The Avengers");Shrek
	}

}
