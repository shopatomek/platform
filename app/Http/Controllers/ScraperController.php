<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class ScraperController extends Controller
{
    private $resoults = array();
    public function scrap()
    {
        $client = new Client();
        // $url = 'https://www.tiktok.com/@theaitoolreport';
        $url = 'https://meteo.pl/';
        $page = $client->request('GET', $url);
        echo $page->filter(selector: '#kon_4c')->text();


        // echo "<pre>";
        // print_r($page);
    }
};
