<?php

/** @phpstub */
class ImagickPixel
{
    /**
     * The ImagickPixel constructor
     *
     * @param string $color
     */
    public function __construct($color = NULL)
    {
    }

    /**
     * Clears resources associated with this object
     *
     * @return bool 
     */
    public function clear()
    {
    }

    /**
     * Deallocates resources associated with this object
     *
     * @return bool 
     */
    public function destroy()
    {
    }

    /**
     * Returns the color
     *
     * @param bool $normalized
     *
     * @return array An array of channel values, each normalized if true is given as param. Throws
     *               ImagickPixelException on error.
     */
    public function getColor($normalized = false)
    {
    }

    /**
     * Returns the color as a string
     *
     * @return string Returns the color of the ImagickPixel object as a string.
     */
    public function getColorAsString()
    {
    }

    /**
     * Returns the color count associated with this color
     *
     * @return int Returns the color count as an integer on success, throws
     *             ImagickPixelException on failure.
     */
    public function getColorCount()
    {
    }

    /**
     * Description
     *
     * @return mixed The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.
     */
    public function getColorQuantum()
    {
    }

    /**
     * Gets the normalized value of the provided color channel
     *
     * @param int $color
     *
     * @return float The value of the channel, as a normalized floating-point number, throwing
     *               ImagickPixelException on error.
     */
    public function getColorValue($color)
    {
    }

    /**
     * Description
     *
     * @return mixed The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.
     */
    public function getColorValueQuantum()
    {
    }

    /**
     * Returns the normalized HSL color of the ImagickPixel object
     *
     * @return array Returns the HSL value in an array with the keys "hue",
     *               "saturation", and "luminosity". Throws ImagickPixelException on failure.
     */
    public function getHSL()
    {
    }

    /**
     * Description
     *
     * @return int 
     */
    public function getIndex()
    {
    }

    /**
     * Check the distance between this color and another
     *
     * @param ImagickPixel $color
     * @param float $fuzz
     *
     * @return bool 
     */
    public function isPixelSimilar($color, $fuzz)
    {
    }

    /**
     * Description
     *
     * @param string $color
     * @param string $fuzz
     *
     * @return bool 
     */
    public function isPixelSimilarQuantum($color, $fuzz = NULL)
    {
    }

    /**
     * Check the distance between this color and another
     *
     * @param ImagickPixel $color
     * @param float $fuzz
     *
     * @return bool 
     */
    public function isSimilar($color, $fuzz)
    {
    }

    /**
     * Sets the color
     *
     * @param string $color
     *
     * @return bool Returns true if the specified color was set, false otherwise.
     */
    public function setColor($color)
    {
    }

    /**
     * Description
     *
     * @param string $colorCount
     *
     * @return void 
     */
    public function setColorCount($colorCount)
    {
    }

    /**
     * Sets the normalized value of one of the channels
     *
     * @param int $color
     * @param float $value
     *
     * @return bool 
     */
    public function setColorValue($color, $value)
    {
    }

    /**
     * Description
     *
     * @param int $color
     * @param mixed $value
     *
     * @return void 
     */
    public function setColorValueQuantum($color, $value)
    {
    }

    /**
     * Sets the normalized HSL color
     *
     * @param float $hue
     * @param float $saturation
     * @param float $luminosity
     *
     * @return bool 
     */
    public function setHSL($hue, $saturation, $luminosity)
    {
    }

    /**
     * Description
     *
     * @param int $index
     *
     * @return void 
     */
    public function setIndex($index)
    {
    }
}