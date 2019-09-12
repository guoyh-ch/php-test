<?php


$arr = [
	['uri' => 1111, "id" => 1],
	['uri' => 22222, "id" => 2],
	['uri' => 33333, "id" => 3],
];


$b = array_column($arr, null, "uri");

var_dump($b);