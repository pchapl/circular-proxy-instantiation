<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Bar
{
    public function __construct(
        #[Id]
        #[Column]
        public readonly string $id,
    ) {
    }
}
