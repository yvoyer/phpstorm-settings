/**
${PARAM_DOC}
*/

#set($parameters = $PARAM_LIST)
#if ($parameters.split(',').size() > 3)
#set($parameters = $PARAM_LIST.replace(',', ",
"))
#end
public function __construct($parameters) {${BODY}}
