<?php

/**
 * Copyright (c) 2013, Gab Amba <gamba@gabbydgab.com>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
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

namespace GdgCommons\DatabaseAdapterTest;

/**
 * GdgCommons\DatabaseAdapterTest\AbstractDatabaseAdapterTest
 *
 * @author Gab Amba <gamba@gabbydgab.com>
 * @package GdgCommons\DatabaseAdapterTest
 */
class AbstractDatabaseAdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function executeFunctionShouldReturnArray()
    {
        $sql = "SELECT * FROM test.table_name";
        
        $expectation = [
            'pk' => 1234,
            'attrib1' => "column1"
        ];
        
        $adapter = $this->getMockBuilder("GdgCommons\DatabaseAdapter\AbstractDatabaseAdapter")
                ->getMockForAbstractClass();
        
        $adapter->expects($this->any())
                ->method("performQuery")
                ->with($this->stringContains($sql))
                ->will($this->returnValue($expectation));
        
        $this->assertEquals($adapter->execute($sql), $expectation);
    }
    
    /**
     * @test
     */
    public function updateFunctionShouldReturnBoolean()
    {
        $sql = "UPDATE table_name SET column1 = value WHERE id = 123";
        
        $expectation = TRUE;
        
        $adapter = $this->getMockBuilder("GdgCommons\DatabaseAdapter\AbstractDatabaseAdapter")
                ->getMockForAbstractClass();
        
        $adapter->expects($this->any())
                ->method("updateQuery")
                ->with($this->stringContains($sql))
                ->will($this->returnValue($expectation));
        
        $this->assertEquals($adapter->update($sql), $expectation);
        $this->assertTrue(is_bool($adapter->update($sql)));
    }
}
