<?php
$request->validate([
    'name' => 'required|string',
    'price' => 'required|numeric|min:1000',
]);
