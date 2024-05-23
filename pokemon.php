<?php

$id = isset($_GET['id']) ? $_GET['id'] : 1;
if ($id < 1 ){
    $id = 1;
}



function fetchPokemon($id) {
    $url = "https://pokeapi.co/api/v2/pokemon/$id";
    $data = file_get_contents($url);
    $json = json_decode($data, true);
    return [
        'id' => $json['id'],
        'name' => $json['name'],
        'sprite' => $json['sprites']['other']['official-artwork']['front_default'],
        'types' => $json['types'],
        'height' => $json['height'],
        'weight' => $json['weight'],
        'stats' => $json['stats'],
    ];
}
$pokemon = fetchPokemon($id);

?>