<?php

namespace Spatie\Enum\Laravel\Rules;

class EnumValue extends Enum
{
    protected $rule = 'enum_value';

    public function passes($attribute, $value): bool
    {
        $this->attribute = $attribute;
        $this->value = $value;

        return is_string($value) && $this->enum::isValidValue($value);
    }
}
