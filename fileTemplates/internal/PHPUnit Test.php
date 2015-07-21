<?php
#parse("PHP File Header.php")
#if (${NAMESPACE})

namespace ${NAMESPACE};
#end

#set($sutClass = $NAME.replace('Test', ''))
#set($sutAttribute = $sutClass.substring(0,1).toLowerCase().concat($sutClass.substring(1)))
#parse("PHP Class Doc Comment.php")
final class ${NAME} extends#if(${NAMESPACE}) \PHPUnit_Framework_TestCase #else PHPUnit_Framework_TestCase #end

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
        $this->fail('test someting');
    }
}
