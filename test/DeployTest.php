<?php

namespace Google\Cloud\Samples\AppEngine\HelloWorld;

use Google\Cloud\TestUtils\AppEngineDeploymentTrait;
use PHPUnit\Framework\TestCase;

class DeployTest extends TestCase
{
    use AppEngineDeploymentTrait;

    public function testIndex()
    {
        $resp = $this->client->get('/');

        $this->assertEquals(
            '200',
            $resp->getStatusCode(),
            'Top page status code should be 200'
        );
        $this->assertContains('hello world!', (string) $resp->getBody());
    }
}
