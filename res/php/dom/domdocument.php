<?php

/** @phpstub */
class DOMDocument extends \DOMNode
{
    /** @var string */
    public $xmlVersion;

    /** @var bool */
    public $xmlStandalone;

    /** @var string */
    public $xmlEncoding;

    /** @var string */
    public $version;

    /** @var bool */
    public $validateOnParse;

    /** @var bool */
    public $substituteEntities;

    /** @var bool */
    public $strictErrorChecking;

    /** @var bool */
    public $standalone;

    /** @var bool */
    public $resolveExternals;

    /** @var bool */
    public $recover;

    /** @var bool */
    public $preserveWhiteSpace;

    /** @var DOMImplementation */
    public $implementation;

    /** @var bool */
    public $formatOutput;

    /** @var string */
    public $encoding;

    /** @var string */
    public $documentURI;

    /** @var DOMElement */
    public $documentElement;

    /** @var DOMDocumentType */
    public $doctype;

    /** @var DOMConfiguration */
    public $config;

    /** @var string */
    public $actualEncoding;

    /**
     * 
       Creates a new DOMDocument object
      
     *
     * @param string $version
     * @param string $encoding
     */
    public function __construct($version = NULL, $encoding = NULL)
    {
    }

    /**
     * Create new attribute
     *
     * @param string $name
     *
     * @return DOMAttr The new ``DOMAttr`` or false if an error occurred.
     */
    public function createAttribute($name)
    {
    }

    /**
     * 
       Create new attribute node with an associated namespace
      
     *
     * @param string $namespaceURI
     * @param string $qualifiedName
     *
     * @return DOMAttr The new ``DOMAttr`` or false if an error occurred.
     */
    public function createAttributeNS($namespaceURI, $qualifiedName)
    {
    }

    /**
     * Create new cdata node
     *
     * @param string $data
     *
     * @return DOMCDATASection The new ``DOMCDATASection`` or false if an error occurred.
     */
    public function createCDATASection($data)
    {
    }

    /**
     * Create new comment node
     *
     * @param string $data
     *
     * @return DOMComment The new ``DOMComment`` or false if an error occurred.
     */
    public function createComment($data)
    {
    }

    /**
     * Create new document fragment
     *
     * @return DOMDocumentFragment The new ``DOMDocumentFragment`` or false if an error occurred.
     */
    public function createDocumentFragment()
    {
    }

    /**
     * Create new element node
     *
     * @param string $name
     * @param string $value
     *
     * @return DOMElement Returns a new instance of class ``DOMElement`` or false
     *                    if an error occurred.
     */
    public function createElement($name, $value = NULL)
    {
    }

    /**
     * 
       Create new element node with an associated namespace
      
     *
     * @param string $namespaceURI
     * @param string $qualifiedName
     * @param string $value
     *
     * @return DOMElement The new ``DOMElement`` or false if an error occurred.
     */
    public function createElementNS($namespaceURI, $qualifiedName, $value = NULL)
    {
    }

    /**
     * Create new entity reference node
     *
     * @param string $name
     *
     * @return DOMEntityReference The new ``DOMEntityReference`` or false if an error
     *                            occurred.
     */
    public function createEntityReference($name)
    {
    }

    /**
     * Creates new PI node
     *
     * @param string $target
     * @param string $data
     *
     * @return DOMProcessingInstruction The new ``DOMProcessingInstruction`` or false if an error occurred.
     */
    public function createProcessingInstruction($target, $data = NULL)
    {
    }

    /**
     * Create new text node
     *
     * @param string $content
     *
     * @return DOMText The new ``DOMText`` or false if an error occurred.
     */
    public function createTextNode($content)
    {
    }

    /**
     * Searches for an element with a certain id
     *
     * @param string $elementId
     *
     * @return DOMElement Returns the ``DOMElement`` or null if the element is
     *                    not found.
     */
    public function getElementById($elementId)
    {
    }

    /**
     * Searches for all elements with given local tag name
     *
     * @param string $name
     *
     * @return DOMNodeList A new ``DOMNodeList`` object containing all the matched
     *                     elements.
     */
    public function getElementsByTagName($name)
    {
    }

    /**
     * 
       Searches for all elements with given tag name in specified namespace
      
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return DOMNodeList A new ``DOMNodeList`` object containing all the matched
     *                     elements.
     */
    public function getElementsByTagNameNS($namespaceURI, $localName)
    {
    }

    /**
     * Import node into current document
     *
     * @param DOMNode $importedNode
     * @param bool $deep
     *
     * @return DOMNode The copied node or false, if it cannot be copied.
     */
    public function importNode($importedNode, $deep = NULL)
    {
    }

    /**
     * 
       Load XML from a file
      
     *
     * @param string $filename
     * @param int $options
     *
     * @return mixed If called statically, returns a
     *               ``DOMDocument``.
     */
    public function load($filename, $options = false)
    {
    }

    /**
     * 
       Load HTML from a string
      
     *
     * @param string $source
     * @param int $options
     *
     * @return bool If called statically, returns a
     *              ``DOMDocument``.
     */
    public function loadHTML($source, $options = false)
    {
    }

    /**
     * 
       Load HTML from a file
      
     *
     * @param string $filename
     * @param int $options
     *
     * @return bool If called statically, returns a
     *              ``DOMDocument``.
     */
    public function loadHTMLFile($filename, $options = false)
    {
    }

    /**
     * 
       Load XML from a string
      
     *
     * @param string $source
     * @param int $options
     *
     * @return mixed If called statically, returns a
     *               ``DOMDocument``.
     */
    public function loadXML($source, $options = false)
    {
    }

    /**
     * Normalizes the document
     *
     * @return void 
     */
    public function normalizeDocument()
    {
    }

    /**
     * Register extended class used to create base node type
     *
     * @param string $baseclass
     * @param string $extendedclass
     *
     * @return bool 
     */
    public function registerNodeClass($baseclass, $extendedclass)
    {
    }

    /**
     * 
       Performs relaxNG validation on the document
      
     *
     * @param string $filename
     *
     * @return bool 
     */
    public function relaxNGValidate($filename)
    {
    }

    /**
     * 
       Performs relaxNG validation on the document
      
     *
     * @param string $source
     *
     * @return bool 
     */
    public function relaxNGValidateSource($source)
    {
    }

    /**
     * 
        Dumps the internal XML tree back into a file
      
     *
     * @param string $filename
     * @param int $options
     *
     * @return int Returns the number of bytes written or false if an error occurred.
     */
    public function save($filename, $options = NULL)
    {
    }

    /**
     * 
       Dumps the internal document into a string using HTML formatting
      
     *
     * @param DOMNode $node
     *
     * @return string Returns the HTML, or false if an error occurred.
     */
    public function saveHTML($node = NULL)
    {
    }

    /**
     * 
       Dumps the internal document into a file using HTML formatting
      
     *
     * @param string $filename
     *
     * @return int Returns the number of bytes written or false if an error occurred.
     */
    public function saveHTMLFile($filename)
    {
    }

    /**
     * 
       Dumps the internal XML tree back into a string
      
     *
     * @param DOMNode $node
     * @param int $options
     *
     * @return string Returns the XML, or false if an error occurred.
     */
    public function saveXML($node = NULL, $options = NULL)
    {
    }

    /**
     * 
       Validates a document based on a schema
      
     *
     * @param string $filename
     * @param int $flags
     *
     * @return bool 
     */
    public function schemaValidate($filename, $flags = NULL)
    {
    }

    /**
     * 
       Validates a document based on a schema
      
     *
     * @param string $source
     * @param int $flags
     *
     * @return bool 
     */
    public function schemaValidateSource($source, $flags = NULL)
    {
    }

    /**
     * 
       Validates the document based on its DTD
      
     *
     * @return bool If the document have no DTD attached, this method will return false.
     */
    public function validate()
    {
    }

    /**
     * 
       Substitutes XIncludes in a DOMDocument Object
      
     *
     * @param int $options
     *
     * @return int Returns the number of XIncludes in the document, -1 if some processing failed,
     *             or false if there were no substitutions.
     */
    public function xinclude($options = NULL)
    {
    }
}