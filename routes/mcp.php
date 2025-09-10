<?php

use PhpMcp\Laravel\Facades\Mcp;

Mcp::tool(function(float $x, float $y): float {
    return $x * $y;
})
    ->name('multiply')
    ->description('Multiply two numbers')
    ->inputSchema([
        'type' => 'object',
        'properties' => [
            'x' => ['type' => 'number', 'description' => 'First number'],
            'y' => ['type' => 'number', 'description' => 'Second number'],
        ],
        'required' => ['x', 'y'],
    ]);
    