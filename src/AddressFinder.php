<?php


namespace Hiraya;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class AddressFinder extends Client
{
    /** @var string */
    const BASE_URI = 'https://api.addressfinder.io/api/nz';

    /** @var string */
    protected $key;

    /** @var string */
    protected $secret;

    /** @var string */
    protected $format;

    /**
     * Auth constructor.
     *
     * @param string $key
     * @param string $secret
     * @param string $format
     */
    public function __construct($key, $secret, $format = 'json')
    {
        parent::__construct();

        $this->key = $key;
        $this->secret = $secret;
        $this->format = $format;
    }

    /**
     * Call an endpoint.
     *
     * @link https://addressfinder.nz/api/nz/specs
     * @param $uri
     * @param array $params
     * @return string
     * @throws GuzzleException
     */
    public function endpoint($uri, $params)
    {
        return $this->get(self::BASE_URI.$uri, [
            'query' => array_merge($params, [
                'key' => $this->key,
                'secret' => $this->secret,
                'format' => $this->format,
            ]),
        ])->getBody()->getContents();
    }
}
