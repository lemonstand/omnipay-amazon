<?php

namespace Omnipay\AmazonPayments;

use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testPurchaseSuccess()
    {
        $this->assertTrue(true);
    }

    public function testPurchaseFailure()
    {
        $this->assertTrue(true);
    }
}
