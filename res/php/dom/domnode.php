<?php

/** @phpstub */
class DOMNode
{
    /** @var string */
    public $textContent;

    /** @var DOMNode */
    public $previousSibling;

    /** @var string */
    public $prefix;

    /** @var DOMNode */
    public $parentNode;

    /** @var DOMDocument */
    public $ownerDocument;

    /** @var string */
    public $nodeValue;

    /** @var int */
    public $nodeType;

    /** @var string */
    public $nodeName;

    /** @var DOMNode */
    public $nextSibling;

    /** @var string */
    public $namespaceURI;

    /** @var string */
    public $localName;

    /** @var DOMNode */
    public $lastChild;

    /** @var DOMNode */
    public $firstChild;

    /** @var DOMNodeList */
    public $childNodes;

    /** @var string */
    public $baseURI;

    /** @var DOMNamedNodeMap */
    public $attributes;

    /**
     * Canonicalize nodes to a string
     *
     * @param bool $exclusive
     * @param bool $with_comments
     * @param array $xpath
     * @param array $ns_prefixes
     *
     * @return string Returns canonicalized nodes as a string
     */
    public function C14N($exclusive = NULL, $with_comments = NULL, $xpath = array(), $ns_prefixes = array())
    {
    }

    /**
     * Canonicalize nodes to a file
     *
     * @param string $uri
     * @param bool $exclusive
     * @param bool $with_comments
     * @param array $xpath
     * @param array $ns_prefixes
     *
     * @return int Number of bytes written
     */
    public function C14NFile($uri, $exclusive = NULL, $with_comments = NULL, $xpath = array(), $ns_prefixes = array())
    {
    }

    /**
     * 
       Adds new child at the end of the children
      
     *
     * @param DOMNode $newnode
     *
     * @return DOMNode The node added.
     */
    public function appendChild($newnode)
    {
    }

    /**
     * 
       Clones a node
      
     *
     * @param bool $deep
     *
     * @return DOMNode The cloned node.
     */
    public function cloneNode($deep = NULL)
    {
    }

    /**
     * Get line number for a node
     *
     * @return int Always returns the line number where the node was defined in.
     */
    public function getLineNo()
    {
    }

    /**
     * Get an XPath for a node
     *
     * @return string Returns a ``string`` containing the XPath, or null in case of an error.
     */
    public function getNodePath()
    {
    }

    /**
     * 
       Checks if node has attributes
      
     *
     * @return bool 
     */
    public function hasAttributes()
    {
    }

    /**
     * 
       Checks if node has children
      
     *
     * @return bool 
     */
    public function hasChildNodes()
    {
    }

    /**
     * 
       Adds a new child before a reference node
      
     *
     * @param DOMNode $newnode
     * @param DOMNode $refnode
     *
     * @return DOMNode The inserted node.
     */
    public function insertBefore($newnode, $refnode = NULL)
    {
    }

    /**
     * Checks if the specified namespaceURI is the default namespace or not
     *
     * @param string $namespaceURI
     *
     * @return bool Return true if  is the default
     *              namespace, false otherwise.
     */
    public function isDefaultNamespace($namespaceURI)
    {
    }

    /**
     * 
       Indicates if two nodes are the same node
      
     *
     * @param DOMNode $node
     *
     * @return bool 
     */
    public function isSameNode($node)
    {
    }

    /**
     * 
       Checks if feature is supported for specified version
      
     *
     * @param string $feature
     * @param string $version
     *
     * @return bool 
     */
    public function isSupported($feature, $version)
    {
    }

    /**
     * 
       Gets the namespace URI of the node based on the prefix
      
     *
     * @param string $prefix
     *
     * @return string The namespace URI of the node.
     */
    public function lookupNamespaceURI($prefix)
    {
    }

    /**
     * 
       Gets the namespace prefix of the node based on the namespace URI
      
     *
     * @param string $namespaceURI
     *
     * @return string The prefix of the namespace.
     */
    public function lookupPrefix($namespaceURI)
    {
    }

    /**
     * 
       Normalizes the node
      
     *
     * @return void 
     */
    public function normalize()
    {
    }

    /**
     * 
       Removes child from list of children
      
     *
     * @param DOMNode $oldnode
     *
     * @return DOMNode If the child could be removed the function returns the old child.
     */
    public function removeChild($oldnode)
    {
    }

    /**
     * 
       Replaces a child
      
     *
     * @param DOMNode $newnode
     * @param DOMNode $oldnode
     *
     * @return DOMNode The old node or false if an error occur.
     */
    public function replaceChild($newnode, $oldnode)
    {
    }
}