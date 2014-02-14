<?php
namespace jblotus\PhpLocSvn;

use jblotus\PhpLocSvn\Cli\Application;
use PHPUnit_Framework_TestCase;


class ApplicationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    private $testObj;

    public function setUp()
    {
        $this->testObj = new Application();
    }

    public function testRunDoesIt()
    {
        $this->expectOutputString('foo');
        $this->testObj->run();
    }
}
