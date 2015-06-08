<?php

/** @phpstub */
class SolrDisMaxQuery extends \SolrQuery implements \Serializable
{
    const FACET_SORT_COUNT = NULL;
    const FACET_SORT_INDEX = NULL;
    const ORDER_ASC = NULL;
    const ORDER_DESC = NULL;
    const TERMS_SORT_COUNT = NULL;
    const TERMS_SORT_INDEX = NULL;

    /**
     * Class Constructor
     *
     * @param string $q
     */
    public function __construct($q = NULL)
    {
    }

    /**
     * Adds a Phrase Bigram Field (pf2 parameter)
     *
     * @param string $field
     * @param string $boost
     * @param string $slop
     *
     * @return SolrDisMaxQuery 
     */
    public function addBigramPhraseField($field, $boost, $slop = NULL)
    {
    }

    /**
     * Adds a boost query field with value and optional boost (bq parameter)
     *
     * @param string $field
     * @param string $value
     * @param string $boost
     *
     * @return SolrDisMaxQuery 
     */
    public function addBoostQuery($field, $value, $boost = NULL)
    {
    }

    /**
     * Adds a Phrase Field (pf parameter)
     *
     * @param string $field
     * @param string $boost
     * @param string $slop
     *
     * @return SolrDisMaxQuery 
     */
    public function addPhraseField($field, $boost, $slop = NULL)
    {
    }

    /**
     * Add a query field with optional boost (qf parameter)
     *
     * @param string $field
     * @param string $boost
     *
     * @return SolrDisMaxQuery 
     */
    public function addQueryField($field, $boost = NULL)
    {
    }

    /**
     * Adds a Trigram Phrase Field (pf3 parameter)
     *
     * @param string $field
     * @param string $boost
     * @param string $slop
     *
     * @return SolrDisMaxQuery 
     */
    public function addTrigramPhraseField($field, $boost, $slop = NULL)
    {
    }

    /**
     * Adds a field to User Fields Parameter (uf)
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery 
     */
    public function addUserField($field)
    {
    }

    /**
     * Removes phrase bigram field (pf2 parameter)
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery 
     */
    public function removeBigramPhraseField($field)
    {
    }

    /**
     * Removes a boost query partial by field name (bq)
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery 
     */
    public function removeBoostQuery($field)
    {
    }

    /**
     * Removes a Phrase Field (pf parameter)
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery 
     */
    public function removePhraseField($field)
    {
    }

    /**
     * Removes a Query Field (qf parameter)
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery 
     */
    public function removeQueryField($field)
    {
    }

    /**
     * Removes a Trigram Phrase Field (pf3 parameter)
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery 
     */
    public function removeTrigramPhraseField($field)
    {
    }

    /**
     * Removes a field from The User Fields Parameter (uf)
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery 
     */
    public function removeUserField($field)
    {
    }

    /**
     * Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery 
     */
    public function setBigramPhraseFields($fields)
    {
    }

    /**
     * Sets Bigram Phrase Slop (ps2 parameter)
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery 
     */
    public function setBigramPhraseSlop($slop)
    {
    }

    /**
     * Sets a Boost Function (bf parameter).
     *
     * @param string $function
     *
     * @return SolrDisMaxQuery 
     */
    public function setBoostFunction($function)
    {
    }

    /**
     * Directly Sets Boost Query Parameter (bq)
     *
     * @param string $q
     *
     * @return SolrDisMaxQuery 
     */
    public function setBoostQuery($q)
    {
    }

    /**
     * Set Minimum "Should" Match (mm)
     *
     * @param string $value
     *
     * @return SolrDisMaxQuery 
     */
    public function setMinimumMatch($value)
    {
    }

    /**
     * Sets  Phrase Fields and their boosts (and slops) using pf2 parameter
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery 
     */
    public function setPhraseFields($fields)
    {
    }

    /**
     * Sets the default slop on phrase queries (ps parameter)
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery 
     */
    public function setPhraseSlop($slop)
    {
    }

    /**
     * Set Query Alternate (q.alt parameter)
     *
     * @param string $q
     *
     * @return SolrDisMaxQuery 
     */
    public function setQueryAlt($q)
    {
    }

    /**
     * specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter)
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery 
     */
    public function setQueryPhraseSlop($slop)
    {
    }

    /**
     * Sets Tie Breaker parameter (tie parameter)
     *
     * @param string $tieBreaker
     *
     * @return SolrDisMaxQuery 
     */
    public function setTieBreaker($tieBreaker)
    {
    }

    /**
     * Directly Sets Trigram Phrase Fields (pf3 parameter)
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery 
     */
    public function setTrigramPhraseFields($fields)
    {
    }

    /**
     * Sets Trigram Phrase Slop (ps3 parameter)
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery 
     */
    public function setTrigramPhraseSlop($slop)
    {
    }

    /**
     * Sets User Fields parameter (uf)
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery 
     */
    public function setUserFields($fields)
    {
    }

    /**
     * Switch QueryParser to be DisMax Query Parser
     *
     * @return SolrDisMaxQuery 
     */
    public function useDisMaxQueryParser()
    {
    }

    /**
     * Switch QueryParser to be EDisMax
     *
     * @return SolrDisMaxQuery 
     */
    public function useEDisMaxQueryParser()
    {
    }
}