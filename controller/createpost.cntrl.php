<?php

declare(strict_types=1);
function isEmpty($body) 
{
    return empty($body);
}

function create_post(object $pdo, string $body, string $id) {
    return add_post($pdo, $body, $id);
}