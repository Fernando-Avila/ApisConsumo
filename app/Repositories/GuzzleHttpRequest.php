<?php
namespace App\Repositories;
use GuzzleHttp\Client;


class GuzzleHttpRequest
{
    protected $client;
    public function __construct(Client $client){
        $this->client = $client;
    }
        protected function get($url)
        {
            $options = [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . env('API_TOKEN'),
                ],
            ];
            $response = $this->client->request('GET', $url, $options);
            if ($response->getStatusCode()===200) {
                $data = json_decode($response->getBody()->getContents());
                return $data;
            } else {
                return false;
            }


        }
    }
