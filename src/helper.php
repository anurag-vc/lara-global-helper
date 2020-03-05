<?php

// Generate slug
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
    function shortString($string,$length)
    {
        $string = strtolower($string);
        $string = substr($string,0,$length).'...';

        return $string;
    }
}
