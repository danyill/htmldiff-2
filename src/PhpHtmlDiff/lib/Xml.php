<?php

/**
 * Module of static functions for generating XML
 */
class Xml
{
    /**
     * Given an array of ('attributename' => 'value'), it generates the code
     * to set the XML attributes : attributename="value".
     * The values are passed to Sanitizer::encodeAttribute.
     * Return null if no attributes given.
     *
     * @param array $attribs of attributes for an XML element
     *
     * @return null|string
     *
     * @throws InvalidArgumentException if input is neither null nor an array
     */
    public static function expandAttributes($attribs)
    {
        $out = '';
        if (is_null($attribs)) {
            return null;
        } elseif (is_array($attribs)) {
            foreach ($attribs as $name => $val) {
                $out .= " {$name}=\"" . Sanitizer::encodeAttribute($val) . '"';
            }

            return $out;
        } else {
            throw new InvalidArgumentException('Expected attribute array, got something else in ' . __METHOD__);
        }
    }

    /**
     * This opens an XML element
     *
     * @param string $element name of the element
     * @param array $attribs array of attributes, see Xml::expandAttributes()
     *
     * @return string
     */
    public static function openElement($element, $attribs = null)
    {
        return '<' . $element . self::expandAttributes($attribs) . '>';
    }

    /**
     * Shortcut to close an XML element
     *
     * @param string $element element name
     *
     * @return string
     */
    public static function closeElement($element)
    {
        return "</$element>";
    }
}