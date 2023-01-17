<?php
namespace App\Repositories;
use GuzzleHttp\Client;


class ClientApi extends GuzzleHttpRequest
{
    protected $client;
    public function __construct(Client $client){
        $this->client = $client;
    }
    public function index()
    {
        return $this->get('usuarios/');
    }
    public function user($id)
    {
        return $this->get('usuarios/'.$id);
    }

    }
