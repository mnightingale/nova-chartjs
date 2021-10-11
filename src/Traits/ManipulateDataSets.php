<?php

namespace Coroowicaksono\ChartJsIntegration\Traits;

use Closure;

trait ManipulateDataSets
{
    /**
     * The callback that should be used to modify the query result.
     *
     * @var \Closure
     */
    public static $manipulateDataSetUsing;

    public static function manipulateDataSet(Closure $callback)
    {
        static::$manipulateDataSetUsing = $callback;

        return new static;
    }
}