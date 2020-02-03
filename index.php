<?php
require_once 'vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;
use Snoopy;

$snoopy =new  Snoopy();
$snoopy->fetch('https://korrespondent.net/city/kiev/');

$html =$snoopy->results;

$crawler = new Crawler($html);

$crawler = $crawler->filter('div.article__title a')->links();


foreach ($crawler as $domElement) {
    print_r($domElement->getUri());
    echo '<p>';
}