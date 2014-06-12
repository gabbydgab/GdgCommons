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

namespace GdgCommons\DataMapperTest\Entity;

/**
 * GdgCommons\DataMapperTest\Entity\AbstractEntityPrototypeTest
 *
 * @author Gab Amba <gamba@gabbydgab.com>
 * @package GdgCommons\DataMapperTest\Entity
 */
class AbstractEntityPrototypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getCollectionWillReturnArray()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->expects($this->any())
                ->method("getCollection")
                ->will($this->returnValue(['sample'=>'sample array']));
        
        $this->assertTrue(is_array($stub->getCollection()));
    }
    
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Key id must not be null or empty
     */
    public function setIdMustReturnInvalidArgumentExceptionIfKeyIdIsNullOrEmpty()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setId();
    }
       
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Key id must be integer
     */
    public function setIdMustReturnInvalidArgumentExceptionIfKeyIdInputIsNotIntegerType()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setId("1");
    }
    
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Key name must not be null or empty
     */
    public function setIdMustReturnInvalidArgumentExceptionIfKeyNameIsNullOrEmpty()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setKeyName();
    }
       
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Key name must be string
     */
    public function setIdMustReturnInvalidArgumentExceptionIfKeyNameInputIsNotStringType()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setKeyName(1);
    }
    
    /**
     * @test
     */
    public function settingKeyId()
    {
        $expectation = 1;
                
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setId($expectation);
        
        $this->assertEquals($stub->getId(), $expectation);
    }
    
    /**
     * @test
     */
    public function settingKeyName()
    {
        $expectation = "product_id";
                
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setKeyName($expectation);
        
        $this->assertEquals($stub->getKeyName(), $expectation);
    }
    
    
    /**
     * @test
     * @expectedException RuntimeException
     * @expectedExceptionMessage Key id is null
     */
    public function getIdMustReturnRuntimeExceptionIfKeyIdIsNotSet()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->getId();
    }
    
    /**
     * @test
     * @expectedException RuntimeException
     * @expectedExceptionMessage Key name is null
     */
    public function getKeyNameMustReturnRuntimeExceptionIfKeyNameIsNotSet()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Entity\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->getKeyName();
    }
}
