<?php

namespace App\Enums;

enum ProductCategory :string
{
    case Electronics = "Electronics";
    case Clothes = "Clothes";
    case Accessories = "Accessories";

public static function values(): array
    {
        return array_column(self::cases(),'value');

    }
}
