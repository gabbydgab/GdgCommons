<?php

/**
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

use GdgCommons\DatabaseAdapter\AbstractDatabaseAdapter;

/**
 * GdgCommons\DataMapper\Mapper\AwareInterface
 *
 * @author Gab Amba <gamba@gabbydgab.com>
 * @package GdgCommons\DataMapper\Mapper
 */
interface AwareInterface
{
    /**
     * Setting table name
     *
     * @param string $tableName
     */
    public function setTableName($tableName = "");

    /**
     * @return string $_tableName
     */
    public function getTableName();

    /**
     * Setting database name
     *
     * @param string $databaseName
     */
    public function setDatabaseName($databaseName = "");

    /**
     * @return string $_databaseName
     */
    public function getDatabaseName();
    
    /**
     * Setting database adapter object 
     * 
     * @param \GdgCommons\DatabaseAdapter\AbstractDatabaseAdapter $adapter
     */
    public function setDatabaseAdapter(AbstractDatabaseAdapter $adapter);
    
    /**
     * Returns database adapter object
     * 
     * @return \GdgCommons\DatabaseAdapter\AbstractDatabaseAdapter $adapter
     */
    public function getDatabaseAdapter();
    
    /**
     * Will return the database record as Array
     * 
     * @param string $query
     * @return Array data collection from database
     */
    public function fetchResult($query = "");
}
