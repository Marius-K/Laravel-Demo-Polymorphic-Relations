<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PostOrVideoRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !($value !== null && request()->input('video_id') !== null);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The post and video fields cannot be both filled';
    }
}
