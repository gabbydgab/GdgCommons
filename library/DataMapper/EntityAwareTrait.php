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

namespace GdgCommons\DataMapper;

use GdgCommons\DataMapper\Entity\AbstractPrototype AS AbstractEntityPrototype;
use GdgCommons\Exception\RuntimeException AS GdgCommonsRuntimeException;

/**
 * GdgCommons\DataMapper\EntityAwareTrait
 *
 * @author Gab Amba <gamba@gabbydgab.com>
 * @package GdgCommons\DataMapper
 */
trait EntityAwareTrait
{
    /**
     * Type of \GdgCommons\DataMapper\Entity object
     * 
     * @var \GdgCommons\DataMapper\Entity\AbstractPrototype
     */
    protected $_entity;
    
    /**
     * Setting the \GdgCommons\DataMapper\Entity object
     * 
     * @param \GdgCommons\DataMapper\Entity\AbstractPrototype $entity
     */
    public function setEntityPrototype(AbstractEntityPrototype $entity)
    {
        $this->_entity = $entity;
    }
    
    /**
     * @return \GdgCommons\DataMapper\Entity\AbstractPrototype
     */
    public function getEntityPrototype()
    {
        if (!$this->_entity instanceof AbstractEntityPrototype) {
            throw new GdgCommonsRuntimeException(
                "Entity object must be instance of GdgCommons\DataMapper\Entity\AbstractPrototype"
            );
        }
        
        return $this->_entity;
    }
    
    /**
     * Returns the entity ID (\GdgCommons\DataMapper\Entity\AbstractPrototype::$_keyId)
     * 
     * @return integer
     */
    public function getEntityId()
    {
        return $this->getEntityPrototype()->getId();
    }
    
    /**
     * Returns entity key name
     * 
     * @return string $keyName
     */
    public function getEntityKeyName()
    {
        return $this->getEntityPrototype()->getKeyName();
    }    
}
