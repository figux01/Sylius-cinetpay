<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Payum;

use Payum\Core\Bridge\Spl\ArrayObject;


use Payum\Core\GatewayFactory;

class ThibusPaymentGatewayFactory extends GatewayFactory
{
    protected function populateConfig(ArrayObject $config): void
    {
        $config->defaults([
            'payum.factory_name' => 'thibus_payment',
            'payum.factory_title' => 'Thibus Payment',
        ]);
        $config['payum.api'] = function (ArrayObject $config) {
            return new SyliusApi($config['api_key']);
        };
    }
}
