<?php

namespace Liven\InSales\Tests\ApiClient\Update;

use Liven\InSales\API\ApiResponse;
use Liven\InSales\TestCase;

class NotFoundTest extends TestCase
{
    /**
     * @dataProvider getUpdateMethodsArrayProvider
     * @param string $method
     */
    public function testTest(string $method)
    {
        $client = $this->getApiClient(true);
        /** @var ApiResponse $response */
        $response = $client->$method(2, []);
        $allowedCodes = [404, 400, 503];
        $this->assertTrue(in_array($response->getHttpCode(), $allowedCodes));
    }

}