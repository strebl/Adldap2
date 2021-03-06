<?php

namespace Adldap\Search;

use Adldap\Connections\Configuration;
use Adldap\Connections\ConnectionInterface;
use Adldap\Query\Builder;
use Adldap\Query\Grammar;
use Adldap\Schemas\ActiveDirectory;

class Factory
{
    /**
     * @var ConnectionInterface
     */
    protected $connection;

    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * Stores the current query builder instance.
     *
     * @var Builder
     */
    protected $query;

    /**
     * Constructor.
     *
     * @param ConnectionInterface $connection
     * @param string              $baseDn
     */
    public function __construct(ConnectionInterface $connection, $baseDn = '')
    {
        $this->connection = $connection;

        $this->setQueryBuilder($this->newQueryBuilder($baseDn));
    }

    /**
     * Returns a new query builder instance.
     *
     * @param string $baseDn
     *
     * @return Builder
     */
    public function newQueryBuilder($baseDn = '')
    {
        // Create a new Builder.
        $builder = new Builder($this->connection, $this->newGrammar());

        // Set the Base DN on the Builder.
        $builder->setDn($baseDn);

        // Return the new Builder instance.
        return $builder;
    }

    /**
     * Returns the current query Builder instance.
     *
     * @return Builder
     */
    public function getQueryBuilder()
    {
        return $this->query;
    }

    /**
     * Returns a new query grammar instance.
     *
     * @return Grammar
     */
    public function newGrammar()
    {
        return new Grammar();
    }

    /**
     * Performs a global 'all' search query on the
     * current connection.
     *
     * @return array|bool
     */
    public function all()
    {
        return $this->query->whereHas(ActiveDirectory::COMMON_NAME)->get();
    }

    /**
     * Handle dynamic method calls on the search object.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return call_user_func_array([$this->query, $method], $parameters);
    }

    /**
     * Sets the query property.
     *
     * @param Builder $query
     */
    private function setQueryBuilder(Builder $query)
    {
        $this->query = $query;
    }
}
