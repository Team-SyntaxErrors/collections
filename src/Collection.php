<?php

namespace SyntaxError\Collections;

class Collection implements CollectionContract
{

    protected $collection;

    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    public function toJson()
    {
        return json_encode($this->collection);
    }

    public function each()
    {
    }

    public function map()
    {
    }

    public function filter()
    {
    }

    public function reduce()
    {
    }

    public function pluck()
    {
    }

    public function sortBy()
    {
    }

    public function sortByDesc()
    {
    }

    public function toArray()
    {
    }

    public function values()
    {
    }

    public function all()
    {
    }

    public function only()
    {
    }

    public function first()
    {
    }

    public function except()
    {
    }
}
