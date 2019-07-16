<?php

include('talker.php');

use PHPUnit\Framework\TestCase;

final class TalkerTest extends TestCase {

    public function testCanBeCreatedFromValidText(): void {
        $msg = new Talker("abc");
        $this->assertEquals(
            'abc',
            $msg->message
        );
    }

    public function testCanBeCreatedFromNoText(): void {
        $msg = new Talker();
        $this->assertEquals(
            'Hello World',
            $msg->message
        );
    }
}

