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
        $url = 'https://www.tiktok.com/@theaitoolreport';
        // $url = 'https://meteo.pl/';
        $page = $client->request('GET', $url);
        // echo $page->filter(selector: '.tiktok-12ijsdd-H3CountInfos')->text();

        // Używamy selektorów CSS do znalezienia odpowiednich danych
        $followingSelector = 'strong[title="Following"]';
        $followersSelector = 'strong[title="Followers"]';
        $likesSelector = 'strong[title="Likes"]';

        // Sprawdzamy, czy elementy istnieją na stronie
        if ($page->filter($followingSelector)->count() > 0) {
            $following = $page->filter($followingSelector)->text();
        } else {
            $following = 'Not found';
        }

        if ($page->filter($followersSelector)->count() > 0) {
            $followers = $page->filter($followersSelector)->text();
        } else {
            $followers = 'Not found';
        }

        if ($page->filter($likesSelector)->count() > 0) {
            $likes = $page->filter($likesSelector)->text();
        } else {
            $likes = 'Not found';
        }

        // Wyświetlanie wyników
        echo "Following: $following\n";
        echo "Followers: $followers\n";
        echo "Likes: $likes\n";
        // echo "<pre>";
        // print_r($page);
    }
};
