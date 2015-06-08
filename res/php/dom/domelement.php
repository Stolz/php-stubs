<?php

/** @phpstub */
class DOMElement extends \DOMNode
{
    /** @var string */
    public $tagName;

    /** @var bool */
    public $schemaTypeInfo;

    /**
     * 
       Creates a new DOMElement object
      
     *
     * @param string $name
     * @param string $value
     * @param string $namespaceURI
     */
    public function __construct($name, $value = NULL, $namespaceURI = NULL)
    {
    }

    /**
     * Returns value of attribute
     *
     * @param string $name
     *
     * @return string The value of the attribute, or an empty string if no attribute with the
     *                given  is found.
     */
    public function getAttribute($name)
    {
    }

    /**
     * Returns value of attribute
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return string The value of the attribute, or an empty string if no attribute with the
     *                given  and
     *                is found.
     */
    public function getAttributeNS($namespaceURI, $localName)
    {
    }

    /**
     * Returns attribute node
     *
     * @param string $name
     *
     * @return DOMAttr The attribute node.
     */
    public function getAttributeNode($name)
    {
    }

    /**
     * 
       Returns attribute node
      
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return DOMAttr The attribute node.
     */
    public function getAttributeNodeNS($namespaceURI, $localName)
    {
    }

    /**
     * Gets elements by tagname
     *
     * @param string $name
     *
     * @return DOMNodeList This function returns a new instance of the class
     *                     ``DOMNodeList`` of all matched elements.
     */
    public function getElementsByTagName($name)
    {
    }

    /**
     * Get elements by namespaceURI and localName
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return DOMNodeList This function returns a new instance of the class
     *                     ``DOMNodeList`` of all matched elements in the order in
     *                     which they are encountered in a preorder traversal of this element tree.
     */
    public function getElementsByTagNameNS($namespaceURI, $localName)
    {
    }

    /**
     * Checks to see if attribute exists
     *
     * @param string $name
     *
     * @return bool 
     */
    public function hasAttribute($name)
    {
    }

    /**
     * 
       Checks to see if attribute exists
      
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return bool 
     */
    public function hasAttributeNS($namespaceURI, $localName)
    {
    }

    /**
     * Removes attribute
     *
     * @param string $name
     *
     * @return bool 
     */
    public function removeAttribute($name)
    {
    }

    /**
     * Removes attribute
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return bool 
     */
    public function removeAttributeNS($namespaceURI, $localName)
    {
    }

    /**
     * Removes attribute
     *
     * @param DOMAttr $oldnode
     *
     * @return bool 
     */
    public function removeAttributeNode($oldnode)
    {
    }

    /**
     * Adds new attribute
     *
     * @param string $name
     * @param string $value
     *
     * @return DOMAttr The new ``DOMAttr`` or false if an error occurred.
     */
    public function setAttribute($name, $value)
    {
    }

    /**
     * Adds new attribute
     *
     * @param string $namespaceURI
     * @param string $qualifiedName
     * @param string $value
     *
     * @return void 
     */
    public function setAttributeNS($namespaceURI, $qualifiedName, $value)
    {
    }

    /**
     * Adds new attribute node to element
     *
     * @param DOMAttr $attr
     *
     * @return DOMAttr Returns old node if the attribute has been replaced or null.
     */
    public function setAttributeNode($attr)
    {
    }

    /**
     * Adds new attribute node to element
     *
     * @param DOMAttr $attr
     *
     * @return DOMAttr Returns the old node if the attribute has been replaced.
     */
    public function setAttributeNodeNS($attr)
    {
    }

    /**
     * Declares the attribute specified by name to be of type ID
     *
     * @param string $name
     * @param bool $isId
     *
     * @return void 
     */
    public function setIdAttribute($name, $isId)
    {
    }

    /**
     * Declares the attribute specified by local name and namespace URI to be of type ID
     *
     * @param string $namespaceURI
     * @param string $localName
     * @param bool $isId
     *
     * @return void 
     */
    public function setIdAttributeNS($namespaceURI, $localName, $isId)
    {
    }

    /**
     * Declares the attribute specified by node to be of type ID
     *
     * @param DOMAttr $attr
     * @param bool $isId
     *
     * @return void 
     */
    public function setIdAttributeNode($attr, $isId)
    {
    }
}