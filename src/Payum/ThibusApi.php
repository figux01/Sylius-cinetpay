<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Payum;



class ThibusApi
{
    /** @var string */
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}
