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

namespace GdgCommons\DataMapperTest\Mapper;

/**
 * GdgCommons\DataMapperTest\Mapper\AbstractMapperPrototypeTest
 *
 * @author Gab Amba <gamba@gabbydgab.com>
 * @package GdgCommons\DataMapperTest\Mapper
 */

class AbstractMapperPrototypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Table name must not be null or empty
     */
    public function setIdMustReturnInvalidArgumentExceptionIfTableNameIsNullOrEmpty()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setTableName();
    }
    
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Table name must be string
     */
    public function setIdMustReturnInvalidArgumentExceptionIfTableNameInputIsNotStringType()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setTableName(1);
    }
    
    /**
     * @test
     * @expectedException RuntimeException
     * @expectedExceptionMessage Table name is null
     */
    public function getTableNameMustReturnRuntimeExceptionIfTableNameIsNotSet()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->getTableName();
    }
    
    /**
     * @test
     */
    public function settingTableName()
    {
        $expectation = "table_name";
                
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setTableName($expectation);
        
        $this->assertEquals($stub->getTableName(), $expectation);
    }
    
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Database name must not be null or empty
     */
    public function setIdMustReturnInvalidArgumentExceptionIfDatabaseNameIsNullOrEmpty()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setDatabaseName();
    }
    
    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Database name must be string
     */
    public function setIdMustReturnInvalidArgumentExceptionIfDatabaseNameInputIsNotStringType()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setDatabaseName(1);
    }
    
    /**
     * @test
     * @expectedException RuntimeException
     * @expectedExceptionMessage Database name is null
     */
    public function getTableNameMustReturnRuntimeExceptionIfDatabaseNameIsNotSet()
    {
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->getDatabaseName();
    }
    
    /**
     * @test
     */
    public function settingDatabaseName()
    {
        $expectation = "database_name";
                
        $stub = $this->getMockBuilder("GdgCommons\DataMapper\Mapper\AbstractPrototype")
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        
        $stub->setDatabaseName($expectation);
        
        $this->assertEquals($stub->getDatabaseName(), $expectation);
    }
}
