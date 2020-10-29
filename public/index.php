<?php
require_once __DIR__ . '/../vendor/autoload.php';
// include "../src/views/index.html.twig";

$products = [
    'product1' => [
        'nom' => 'produit 1',
         'prix' => '10'
    ],
    'product2' => [
        'nom' => 'produit 2',
         'prix' => '15'
    ],
    'product3' => [
        'nom' => 'produit 3',
         'prix' => '25'
    ],
    'product4' => [
        'nom' => 'produit 4',
         'prix' => '12'
    ],
    'product5' => [
        'nom' => 'produit 5',
         'prix' => '7'
    ]
];

$loader = new Twig\Loader\FilesystemLoader('../src/views/');
$twig = new Twig\Environment($loader,["debug"=> TRUE]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
echo $twig->render('index.html.twig', ['products' => $products]);