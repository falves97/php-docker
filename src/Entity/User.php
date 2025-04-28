<?php

namespace Fbalves\Fixer\Entity;

class User
{
    public string $name  {
        set => $name = strtoupper($value);
    }


}
