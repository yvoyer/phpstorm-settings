<?php declare(strict_types = 1);
#parse("PHP File Header.php")
#if (${NAMESPACE})

namespace ${NAMESPACE};

use PHPUnit\Framework\TestCase;

#end
#set($sutClass = $NAME.replace('Test', ''))
#set($sutAttribute = $sutClass.substring(0,1).toLowerCase().concat($sutClass.substring(1)))
#parse("PHP Class Doc Comment.php")
final class ${NAME} extends TestCase
{
	/**
	 * @var ${sutClass}
	 */
	private $${sutAttribute};

	public function setUp()
{
	$this->${sutAttribute} = new ${sutClass}();
}

	public function test_it_should_do_something()
{
	$this->fail('test something');
}
}
