<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use App\Enums\ProjectStatus;

class EnumCast implements CastsAttributes
{
    protected $enumClass;

    public function __construct($enumClass)
    {
        $this->enumClass = $enumClass;
    }

    public function get($model, $key, $value, $attributes)
    {
        // Certifique-se de que estamos retornando uma instância correta da enum
        return new $this->enumClass($value);
    }

    public function set($model, $key, $value, $attributes)
    {
        // Certifique-se de que o valor correto está sendo armazenado no banco
        return $value instanceof $this->enumClass ? $value->value() : $value;
    }
}
