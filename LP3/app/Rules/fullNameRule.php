<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class fullNameRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //This is the way i made up
        // $value = explode(" ", $value);
        // return count($value) == 4 && !empty($value[0] && $value[1] && $value[2] && $value[3]);

        //The regex way
        return preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)(?:\s[a-zA-Z]+)(?:\s[a-zA-Z]+)$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Name must consist of four parts';
    }
}
