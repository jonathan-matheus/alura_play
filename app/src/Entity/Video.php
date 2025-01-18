<?php

namespace Alura\Mvc\Entity;

class Video
{
    public readonly string $url;

    public function __construct(
        string $url,
        public readonly string $title
    ) {
        $this->setUrl($url);
    }

    private function setUrl(string $url): void
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException('URL inválida');
        }

        $this->url = $url;
    }
}