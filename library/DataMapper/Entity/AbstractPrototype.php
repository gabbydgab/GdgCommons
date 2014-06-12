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

namespace GdgCommons\DataMapper\Entity;

use GdgCommons\Exception\InvalidArgumentException AS GdgCommonsInvalidArgumentException;
use GdgCommons\Exception\RuntimeException AS GdgCommonsRuntimeException;

/**
 * GdgCommons\DataMapper\Entity\AbstractPrototype
 *
 * @author Gab Amba <gamba@gabbydgab.com>
 * @package GdgCommons\DataMapper\Entity
 */
abstract class AbstractPrototype implements AwareInterface
{
    /**
     * @var integer
     */
    protected $_keyId;
    
    /**
     * @var string
     */
    protected $_keyName;
    
    /**
     * {@inheritDoc}
     * 
     * @param type $keyId
     * @throws GdgCommonsInvalidArgumentException
     */
    public function setId($keyId = 0)
    {
        if (empty($keyId) || $keyId == 0) {
            throw new GdgCommonsInvalidArgumentException("Key id must not be null or empty");
        }
        
        if (!is_int($keyId)) {
            throw new GdgCommonsInvalidArgumentException("Key id must be integer");
        }
        
        $this->_keyId = $keyId;
    }

    /**
     * {@inheritDoc}
     * 
     * @return type
     * @throws GdgCommonsRuntimeException
     */
    public function getId()
    {
        if (empty($this->_keyId)) {
            throw new GdgCommonsRuntimeException("Key id is null");
        }
        
        return $this->_keyId;
    }
    
    /**
     * {@inheritDoc}
     * 
     * @param type $name
     * @throws GdgCommonsInvalidArgumentException
     */
    public function setKeyName($name = "")
    {
        if (empty($name)) {
            throw new GdgCommonsInvalidArgumentException("Key name must not be null or empty");
        }
        
        if (!is_string($name)) {
            throw new GdgCommonsInvalidArgumentException("Key name must be string");
        }
        
        $this->_keyName = $name;
    }

    /**
     * {@inheritDoc}
     * 
     * @return type
     * @throws GdgCommonsRuntimeException
     */
    public function getKeyName()
    {
        if (empty($this->_keyName)) {
            throw new GdgCommonsRuntimeException("Key name is null");
        }
        
        return $this->_keyName;
    }
    
    /**
     * Return data collection in array form
     * 
     * @return Array data collection
     */
    abstract public function getCollection();
}
