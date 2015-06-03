<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Authentication
 */

namespace ZendTest\Authentication\Adapter;

use Zend\Authentication\Adapter;
use Zend\Http\Response;

class HttpTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Wrapper
     */
    protected $_wrapper;

    public function setUp()
    {
        $config = [
            'accept_schemes' => 'basic',
            'realm'          => 'testing',
        ];

        $this->_wrapper = new Adapter\Http($config);
    }

    public function tearDown()
    {
        unset($this->_wrapper);
    }

    public function testChallengeClient()
    {
        $this->_wrapper->setResponse(new Response());
        $this->_wrapper->challengeClient();
    }
}
