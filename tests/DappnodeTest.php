<?php
/**
 * Tests for DappNode
 */

use PHPUnit\Framework\TestCase;
use Dappnode\Dappnode;

class DappnodeTest extends TestCase {
    private Dappnode $instance;

    protected function setUp(): void {
        $this->instance = new Dappnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dappnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
