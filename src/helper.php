<?php

if (!function_exists('generateSlug')) {
    /**
     * @param $slug
     * @return string|string[]|null
     */
    function generateSlug($slug)
    {
        $string = $slug;
        $string = strtolower($string);
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/-+/', '-', $string);
        if ($string === '-') {
            return str_replace(' ', '-', $slug);
        }
        return preg_replace('/-+/', '-', $string);
    }

}
if (!function_exists('hashString')) {
    /**
     * @param $hash
     * @return string
     */
    function hashString($hash)
    {
        $string = $hash;
        $string = strtolower($string);

        return bcrypt($string);
    }
}
if (!function_exists('cleanString')) {
    /**
     * @param $cleanStr
     * @return string|string[]|null
     */
    function cleanString($cleanStr)
    {
        $string = $cleanStr;
        $string = strtolower($string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

        return $string;
    }
}
if (!function_exists('addString')) {
    /**
     * @param $string
     * @param $addStr
     * @return string|string[]
     */
    function addString($string,$addStr)
    {

        $string = strtolower($string);
        $string = str_replace(' ', $addStr, $string);

        return $string;
    }
}
if (!function_exists('shortString')) {
    /**\
     * @param $string
     * @param $length
     * @return string
     */
    function shortString($string,$length)
    {
        $string = strtolower($string);
        $string = substr($string,0,$length).'...';

        return $string;
    }
}
if (!function_exists('serialize')) {
    /**
     * @param $string
     * @return string
     */
    function serialize($string)
    {
        $string = serialize($string);
        return $string;
    }

}
if (!function_exists('unserialize')) {
    /**
     * @param $string
     * @return mixed
     */
    function unserialize($string)
    {
        $string = unserialize($string);
        return $string;
    }
}
if (!function_exists('strposition')) {
    /**
     * @param $string
     * @param $word
     * @return false|int
     */
    function strposition($string,$word)
    {
        $string = strpos($string,$word);
        return $string;
    }
}
if (!function_exists('array_merge')) {
    /**
     * @param $string
     * @param $str1
     * @return mixed
     */
    function array_merge($string,$str1)
    {
        $string = array_merge($string,$str1);
        return $string;
    }
}
if (! function_exists('str_replace_last')) {
    /**
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $subject
     * @return string
     */
    function str_replace_last($search, $replace, $subject)
    {
        return Str::replaceLast($search, $replace, $subject);
    }
}
if (! function_exists('array_wrap')) {
    /**
     * @param $string
     * @return mixed
     */
    function array_wrap($string)
    {
        return Arr::wrap($string);
    }
}
