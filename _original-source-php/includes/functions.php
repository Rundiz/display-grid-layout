<?php


if (!defined('ROOTDIR')) {
    define('ROOTDIR', dirname(__DIR__));
}


/**
 * Render asset URL with version querystring append.
 * 
 * @param string $assetUrl The relative path of asset URL refer from this app's root.
 * @return string Return asset URL and check if file exists then the version querystring will be append, otherwise return the same value as `$assetUrl`.
 */
function assetUrl($assetUrl)
{
    $output = $assetUrl;

    $assetFullPath = realpath(ROOTDIR . '/' . $assetUrl);
    if (is_file($assetFullPath)) {
        $lastCharOfAssetUrl = mb_substr($assetUrl, -1);
        $appendQuerystring = 'v=' . filemtime($assetFullPath);

        if ($lastCharOfAssetUrl == '?' || $lastCharOfAssetUrl == '&' || mb_substr($assetUrl, -5) == '&amp;') {
            $output .= $appendQuerystring;
        } elseif ($assetUrl[0] == '?' && $lastCharOfAssetUrl != '?') {
            $output .= '&amp;' . $appendQuerystring;
        } else {
            $output .= '?' . $appendQuerystring;
        }

        unset($appendQuerystring, $lastCharOfAssetUrl);
    }

    unset($assetFullPath);
    return $output;
}// assetUrl


/**
 * Generate indent by 4 spaces per 1 indent.
 * 
 * @param integer $number Number of total indent.
 * @param boolean $return Set to false will be echo out, true will be return.
 * @return string If set to true then it will be return spaces indent, otherwise will be return null.
 */
function indent($number = 1, $return = true)
{
    $output = str_repeat('    ', $number);

    if ($return === false) {
        echo $output;
        unset($output);
        return ;
    } elseif ($return === true) {
        return $output;
    }

    return ;
}// indent