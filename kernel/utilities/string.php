<?php
namespace zinux\kernel\utilities;

require_once dirname(__FILE__).'/../../baseZinux.php';

/**
 * Some handy string operation goes here
 * @author dariush
 * @version 1.0
 * @created 04-Sep-2013 15:50:24
 */
class string extends \zinux\baseZinux
{
     /**
        * Check if $haystack starts with $needle
        * @param string $haystack
        * @param string $needle
        * @return boolean
        */
       public static function startsWith($haystack, $needle)
       {
            return substr($haystack, 0, strlen($needle)) == $needle;
       }
       /**
        * Check if $haystack ends with $needle
        * @param string $haystack
        * @param string $needle
        * @return boolean
        */
       public static function endsWith($haystack, $needle, $case_sensitive = 1)
       {
            if(!$case_sensitive)
            {
                $haystack = strtolower($haystack);
                $needle = strtolower($needle);
            }
            return substr($haystack, strlen($haystack) - strlen($needle)) == $needle;
       }
       /**
        * Check if $haystack contains $needle
        * @param string $haystack
        * @param string $needle
        * @return boolean
        */
       public static function Contains($haystack, $needle)
       {
           return (strpos($haystack, $needle) !== false);
       }
        /**
         * inverse the preg_quote()'s effects in a string
         * @param string $str target string
         * @param string $delimiter the delimiter user in string
         * @return string inversed string
         */
        public static function inverse_preg_quote($str, $delimiter = NULL)
        {
            $ar = array(
                '\\.'  => '.',
                '\\\\' => '\\',
                '\\+'  => '+',
                '\\*'  => '*',
                '\\?'  => '?',
                '\\['  => '[',
                '\\^'  => '^',
                '\\]'  => ']',
                '\\$'  => '$',
                '\\('  => '(',
                '\\)'  => ')',
                '\\{'  => '{',
                '\\}'  => '}',
                '\\='  => '=',
                '\\!'  => '!',
                '\\<'  => '<',
                '\\>'  => '>',
                '\\|'  => '|',
                '\\:'  => ':',
                '\\-'  => '-'
            );
            if($delimiter)
                $ar["\\$delimiter"] = $delimiter;
            return strtr($str, $ar);
        }
        /**
        * Normalizes the given name and removes special characters and spaces and replaces them by '_' character. 
        * @param string $string target string to normalize
        * @param string $fix the fix part of name that should exists at end of $string 
        */
       public static function remove_special_chars(&$string, $fix = "")
       {
           $string = preg_replace (array('/[^\p{L}\p{N}]+/ui', "#^[0-9]+#i", '/^_/u', '/_$/u'), array("_", "", "", ""), $string);
           $string = preg_replace (array("#^[0-9]+#i", '/^_/u', '/_$/u'), array("", "", ""), $string);
           if(!strlen($fix)) return;
           $string = preg_replace("#(\w+)$fix$#i", "$1", $string).ucfirst($fix);
       }
}