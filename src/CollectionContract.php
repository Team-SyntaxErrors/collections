<?php

namespace SyntaxError\Collections;

interface CollectionContract
{
    public function toJson();

    public function each();

    public function map();

    public function filter();

    public function reduce();

    public function pluck();

    public function sortBy();

    public function sortByDesc();

    public function toArray();

    public function values();

    public function all();

    public function only();

    public function first();

    public function except();
}
