<?php
/**
 * Created by PhpStorm.
 * User: fenghengjun
 * Date: 2019/1/16
 * Time: 17:27
 */

namespace demo;


class Test
{
    public function say()
    {
        try{
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
            echo $response->getStatusCode(); # 200
        }catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}