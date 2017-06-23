<?php

namespace zeus\database\specification;

use zeus\database\DmlType;

/**
 * Created by IntelliJ IDEA.
 * User: nathena
 * Date: 2017/6/6
 * Time: 21:58
 */
class QueryRowSpecification extends QuerySpecification
{
    public function __construct($table)
    {
        parent::__construct();
        
        $this->from($table);
        $this->dml = DmlType::DML_SELECT_ONE;
    }
}