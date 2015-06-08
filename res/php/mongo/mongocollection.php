<?php

/** @phpstub */
class MongoCollection
{
    const ASCENDING = 1;
    const DESCENDING = -1;

    /** @var integer */
    public $wtimeout;

    /** @var integer */
    public $w;

    /** @var MongoDB */
    public $db;

    /**
     * Creates a new collection
     *
     * @param MongoDB $db
     * @param string $name
     */
    public function __construct($db, $name)
    {
    }

    /**
     * Gets a collection
     *
     * @param string $name
     *
     * @return MongoCollection Returns the collection.
     */
    public function __get($name)
    {
    }

    /**
     * String representation of this collection
     *
     * @return string Returns the full name of this collection.
     */
    public function __toString()
    {
    }

    /**
     * Perform an aggregation using the aggregation framework
     *
     * @phpstub-variable-parameters
     *
     * @param array $pipeline
     * @param array $options
     * @param array $op
     * @param array $op
     * @param array $_
     *
     * @return array The result of the aggregation as an array. The  will
     *               be set to  on success,  on failure.
     */
    public function aggregate($pipeline, $options = array(), $op, $op = array(), $_ = array())
    {
    }

    /**
     * Execute an aggregation pipeline command and retrieve results through a cursor
     *
     * @param array $command
     * @param array $options
     *
     * @return MongoCommandCursor Returns a ``MongoCommandCursor`` object. Because this
     *                            implements the ``Iterator`` interface you can
     *                            iterate over each of the results as returned by the command query. The
     *                            ``MongoCommandCursor`` also implements the
     *                            ``MongoCursorInterface`` interface which adds the
     *                            ,
     *                            ,
     *                            methods.
     */
    public function aggregateCursor($command, $options = array())
    {
    }

    /**
     * Inserts multiple documents into this collection
     *
     * @param array $a
     * @param array $options
     *
     * @return mixed If the  parameter is set to acknowledge the write,
     *               returns an associative array with the status of the inserts ("ok") and any
     *               error that may have occurred ("err").  Otherwise, returns true if the
     *               batch insert was successfully sent, false otherwise.
     */
    public function batchInsert($a, $options = array())
    {
    }

    /**
     * Counts the number of documents in this collection
     *
     * @param array $query
     * @param array $options
     *
     * @return int Returns the number of documents matching the query.
     */
    public function count($query = array(), $options = array())
    {
    }

    /**
     * Creates a database reference
     *
     * @param mixed $document_or_id
     *
     * @return array Returns a database reference array.
     */
    public function createDBRef($document_or_id)
    {
    }

    /**
     * 
       Creates an index on the specified field(s) if it does not already exist.
      
     *
     * @param array $keys
     * @param array $options
     *
     * @return bool Returns an array containing the status of the index creation. The array
     *              contains whether the operation succeeded (), the
     *              number of indexes before and after the operation
     *              ( and
     *              ), and whether the collection that the
     *              index belongs to has been created
     *              (). If the index already
     *              existed and did not need to be created, a  field may
     *              be present in lieu of .
     */
    public function createIndex($keys, $options = array())
    {
    }

    /**
     * Deletes an index from this collection
     *
     * @param string|array $keys
     *
     * @return array Returns the database response.
     */
    public function deleteIndex($keys)
    {
    }

    /**
     * Delete all indices for this collection
     *
     * @return array Returns the database response.
     */
    public function deleteIndexes()
    {
    }

    /**
     * Retrieve a list of distinct values for the given key across a collection.
     *
     * @param string $key
     * @param array $query
     *
     * @return array Returns an array of distinct values,
     */
    public function distinct($key, $query = array())
    {
    }

    /**
     * Drops this collection
     *
     * @return array Returns the database response.
     */
    public function drop()
    {
    }

    /**
     * 
       Creates an index on the specified field(s) if it does not already exist.
      
     *
     * @param string|array $key|keys
     * @param array $options
     *
     * @return bool Returns an array containing the status of the index creation. The array
     *              contains whether the operation succeeded (), the
     *              number of indexes before and after the operation
     *              ( and
     *              ), and whether the collection that the
     *              index belongs to has been created
     *              (). If the index already
     *              existed and did not need to be created, a  field may
     *              be present in lieu of .
     */
    public function ensureIndex($key|keys, $options = array())
    {
    }

    /**
     * Queries this collection, returning a ``MongoCursor``
      for the result set
     *
     * @param array $query
     * @param array $fields
     *
     * @return MongoCursor Returns a cursor for the search results.
     */
    public function find($query = array(), $fields = array())
    {
    }

    /**
     * Update a document and return it
     *
     * @param array $query
     * @param array $update
     * @param array $fields
     * @param array $options
     *
     * @return array Returns the original document, or the modified document when
     *               is set.
     */
    public function findAndModify($query, $update = array(), $fields = array(), $options = array())
    {
    }

    /**
     * Queries this collection, returning a single element
     *
     * @param array $query
     * @param array $fields
     * @param array $options
     *
     * @return array Returns record matching the search or null.
     */
    public function findOne($query = array(), $fields = array(), $options = array())
    {
    }

    /**
     * Fetches the document pointed to by a database reference
     *
     * @param array $ref
     *
     * @return array Returns the database document pointed to by the reference.
     */
    public function getDBRef($ref)
    {
    }

    /**
     * Returns information about indexes on this collection
     *
     * @return array This function returns an array in which each element describes an index.
     *               Elements will contain the values  for the name of
     *               the index,  for the namespace (a combination of the
     *               database and collection name), and  for a list of all
     *               fields in the index and their ordering. Additional values may be present for
     *               special indexes, such as  or
     *               .
     */
    public function getIndexInfo()
    {
    }

    /**
     * Returns this collectionaposs name
     *
     * @return string Returns the name of this collection.
     */
    public function getName()
    {
    }

    /**
     * Get the read preference for this collection
     *
     * @return array
     */
    public function getReadPreference()
    {
    }

    /**
     * Get slaveOkay setting for this collection
     *
     * @return bool Returns the value of slaveOkay for this instance.
     */
    public function getSlaveOkay()
    {
    }

    /**
     * Get the write concern for this collection
     *
     * @return array
     */
    public function getWriteConcern()
    {
    }

    /**
     * Performs an operation similar to SQL's GROUP BY command
     *
     * @param mixed $keys
     * @param array $initial
     * @param MongoCode $reduce
     * @param array $options
     *
     * @return array Returns an array containing the result.
     */
    public function group($keys, $initial, $reduce, $options = array())
    {
    }

    /**
     * Inserts a document into the collection
     *
     * @param array|object $document
     * @param array $options
     *
     * @return bool|array Returns an array containing the status of the insertion if the
     *                    option is set. Otherwise, returns true if the
     *                    inserted array is not empty (a ``MongoException`` will be
     *                    thrown if the inserted array is empty).
     */
    public function insert($document, $options = array())
    {
    }

    /**
     * Returns an array of cursors to iterator over a full collection in parallel
     *
     * @param int $num_cursors
     *
     * @return array[MongoCommandCursor] Returns an array of ``MongoCommandCursor`` objects.
     */
    public function parallelCollectionScan($num_cursors)
    {
    }

    /**
     * Remove records from this collection
     *
     * @param array $criteria
     * @param array $options
     *
     * @return bool|array Returns an array containing the status of the removal if the
     *                    option is set. Otherwise, returns true.
     */
    public function remove($criteria = array(), $options = array())
    {
    }

    /**
     * Saves a document to this collection
     *
     * @param array|object $document
     * @param array $options
     *
     * @return mixed If  was set, returns an array containing the status of the save.
     *               Otherwise, returns a boolean representing if the array was not empty (an empty array will not
     *               be inserted).
     */
    public function save($document, $options = array())
    {
    }

    /**
     * Set the read preference for this collection
     *
     * @param string $read_preference
     * @param array $tags
     *
     * @return bool
     */
    public function setReadPreference($read_preference, $tags = array())
    {
    }

    /**
     * Change slaveOkay setting for this collection
     *
     * @param bool $ok
     *
     * @return bool Returns the former value of slaveOkay for this instance.
     */
    public function setSlaveOkay($ok = true)
    {
    }

    /**
     * Set the write concern for this database
     *
     * @param mixed $w
     * @param int $wtimeout
     *
     * @return bool
     */
    public function setWriteConcern($w, $wtimeout = NULL)
    {
    }

    /**
     * Converts keys specifying an index to its identifying string
     *
     * @param mixed $keys
     *
     * @return string Returns a string that describes the index.
     */
    public function toIndexString($keys)
    {
    }

    /**
     * Update records based on a given criteria
     *
     * @param array $criteria
     * @param array $new_object
     * @param array $options
     *
     * @return bool|array Returns an array containing the status of the update if the
     *                    option is set. Otherwise, returns true.
     */
    public function update($criteria, $new_object, $options = array())
    {
    }

    /**
     * Validates this collection
     *
     * @param bool $scan_data
     *
     * @return array Returns the databaseaposs evaluation of this object.
     */
    public function validate($scan_data = false)
    {
    }
}