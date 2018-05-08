<?php

namespace Tests\Unit;

use App\Answer;
use App\Question;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
class NotificationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testDeleteQuestion()
    {
        $question = Question::All();
        $recordCount = $question->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
    }

}
