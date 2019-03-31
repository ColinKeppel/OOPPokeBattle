<?php
require('Pokemon.php');
require('Attack.php');

$pokemons = [
    new pikachu('Pikachu'),
    new charmeleon('Charmeleon')
];
$fight = $pokemons[0]->__get("attacks")[0]->execute($pokemons[1], $pokemons[0]);
$counter = $pokemons[1]->__get("attacks")[1]->execute($pokemons[0], $pokemons[1]);

echo $pokemons[1]->__get("name") . ' ' . $pokemons[0]->__get("maxHealth") . ' ' . 'HP';
echo '<br>';
echo 'Pikachu attacked Charmeleon using' . ' ' . $pokemons[0]->__get("attacks")[0]->name . ' ' . $fight . ' ' . 'HP Left';
echo '<br>';
echo '<br>';
echo $pokemons[0]->__get("name") . ' ' . $pokemons[1]->__get("maxHealth") . ' ' . 'HP';
echo '<br>';
echo 'Charmeleon attacked Pikachu using' . ' ' . $pokemons[1]->__get("attacks")[1]->name . ' ' . $counter . ' ' . 'HP Left';


function PrintNice($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}