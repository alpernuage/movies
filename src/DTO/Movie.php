<?php

namespace App\DTO;

final readonly class Movie
{
    public function __construct(
        public string $overview,
        public string $title,
        public ?string $posterPath,
    )
    {
    }
}
