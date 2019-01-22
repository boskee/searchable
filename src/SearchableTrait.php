<?php

namespace MasterRO\Searchable;

trait SearchableTrait
{
    /**
     * @return array
     */
    abstract public static function searchable(): array;
}