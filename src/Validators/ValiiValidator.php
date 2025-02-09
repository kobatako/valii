<?php

namespace Valii\Validators;

use Illuminate\Validation\Validator;

class ValiiValidator extends Validator
{
    /**
     * validation tel number
     *
     * @SuppressWarnings("unused")
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @param  mixed  $parameters
     * @return bool
     */
    public function validateTel(string $attribute, $value, array $parameters): bool
    {
        $regex = '/^[0-9]{2,5}-?[0-9]{1,4}-?[0-9]{1,4}$/';
        return preg_match($regex, $value);
    }

    /**
     * validation hankaku katakana
     *
     * @SuppressWarnings("unused")
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @param  mixed  $parameters
     * @return bool
     */
    public function validateHankakuKatakana(string $attribute, $value, array $parameters): bool
    {
        $regex = '/^(?:\xEF\xBD[\xA6-\xBF]|\xEF\xBE[\x80-\x9F])*$/';
        return preg_match($regex, $value);
    }

    /**
     * validation hiragana
     *
     * @SuppressWarnings("unused")
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @param  mixed  $parameters
     * @return bool
     */
    public function validateHiragana(string $attribute, $value, array $parameters): bool
    {
        $regex = '/^(\xe3(\x81[\x81-\xbf]|\x82[\x80-\x93]|\x83\xbc))*$/';
        return preg_match($regex, $value);
    }

    /**
     * validation katakana
     *
     * @SuppressWarnings("unused")
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @param  mixed  $parameters
     * @return bool
     */
    public function validateKatakana(string $attribute, $value, array $parameters): bool
    {
        $regex = '/^(\xe3(\x82[\xa1-\xbf]|\x83[\x80-\xb6]|\x83\xbc|\x82\x9b|\x82\x9c))*$/';
        return preg_match($regex, $value);
    }

    /**
     * validation zenkaku
     *
     * @SuppressWarnings("unused")
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @param  mixed  $parameters
     * @return bool
     */
    public function validateZenkaku(string $attribute, $value, array $parameters): bool
    {
        $regex = '/(?:\xEF\xBD[\xA1-\xBF]|\xEF\xBE[\x80-\x9F])|[\x20-\x7E]/';
        return !preg_match($regex, $value);
    }

    /**
     * validation zip code
     *
     * @SuppressWarnings("unused")
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @param  mixed  $parameters
     * @return bool
     */
    public function validateZipCode(string $attribute, $value, array $parameters): bool
    {
        $regex = '/^\d{3}\-?\d{4}$/';
        return preg_match($regex, $value);
    }
}
