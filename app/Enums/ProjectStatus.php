<?php

namespace App\Enums;

class ProjectStatus
{
    const Open = 'open';
    const Closed = 'closed';

    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

    public static function getValues()
    {
        return [
            self::Open,
            self::Closed,
        ];
    }

    public function label()
    {
        // Use o método 'value()' para acessar o valor da propriedade privada
        if ($this->value() === self::Open) {
            return 'Aceitando propostas';
        }

        if ($this->value() === self::Closed) {
            return 'Encerrado';
        }

        return 'Desconhecido';
    }
}
