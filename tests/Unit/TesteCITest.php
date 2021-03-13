<?php

namespace Tests\Unit;

use App\Models\TesteCIPrincipal;
use PHPUnit\Framework\TestCase;

class TesteCITest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_trocarNome()
    {
        $lTesteCI = new TesteCIPrincipal("Carlos");
        $lTesteCI->TrocarNome("Eduardo");
        $this->assertEquals('Eduardo', $lTesteCI->getNome());
    }

    public function test_trocarNomeErrado()
    {
        $lTesteCI = new TesteCIPrincipal("Carlos");
        $lTesteCI->TrocarNome("Eduardo");
        $this->assertEquals('Eduardo', $lTesteCI->getNome());
    }

    public function test_colocarIdade()
    {
        $lTesteCI = new TesteCIPrincipal("Carlos");
        $this->assertTrue($lTesteCI->ColocarIdade(20));
    }
}
