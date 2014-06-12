<?php

/* * 
 * Copyright (c) 2014, Gab Amba <gamba@gabbydgab.com>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice,
 *   this list of conditions and the following disclaimer.
 *   
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 *   
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace GdgCommons\DataMapper\Mapper;

use GdgCommons\Exception\InvalidArgumentException AS GdgCommonsInvalidArgumentException;
use GdgCommons\Exception\RuntimeException AS GdgCommonsRuntimeException;

/**
 * GdgCommons\DataMapper\Mapper\AbstractPrototype
 *
 * @author Gab Amba <gamba@gabbydgab.com>
 * @package GdgCommons\DataMapper\Mapper
 */
abstract class AbstractPrototype implements AwareInterface
{
    /**
     * @var string
     */
    protected $_tableName;
    
    /**
     * @var string
     */
    protected $_databaseName;
    
    /**
     * {@inheritDoc}
     * 
     * @param string $tableName
     * @throws GdgCommonsInvalidArgumentException
     */
    public function setTableName($tableName = "")
    {
        if (empty($tableName)) {
            throw new GdgCommonsInvalidArgumentException("Table name must not be null or empty");
        }
        
        if (!is_string($tableName)) {
            throw new GdgCommonsInvalidArgumentException("Table name must be string");
        }
        
        $this->_tableName = $tableName;
    }
    
    /**
     * {@inheritDoc}
     * 
     * @return string
     * @throws GdgCommonsRuntimeException
     */
    public function getTableName()
    {
        if (empty($this->_tableName)) {
            throw new GdgCommonsRuntimeException("Table name is null");
        }
        
        return $this->_tableName;
    }
    
    /**
     * {@inheritDoc}
     * 
     * @param string $databaseName
     * @throws GdgCommonsInvalidArgumentException
     */
    public function setDatabaseName($databaseName = "")
    {
        if (empty($databaseName)) {
            throw new GdgCommonsInvalidArgumentException("Database name must not be null or empty");
        }
        
        if (!is_string($databaseName)) {
            throw new GdgCommonsInvalidArgumentException("Database name must be string");
        }
        
        $this->_databaseName = $databaseName;
    }
    
    /**
     * {@inheritDoc}
     * 
     * @return string
     * @throws GdgCommonsRuntimeException
     */
    public function getDatabaseName()
    {
        if (empty($this->_databaseName)) {
            throw new GdgCommonsRuntimeException("Database name is null");
        }
        
        return $this->_databaseName;
    }
}
