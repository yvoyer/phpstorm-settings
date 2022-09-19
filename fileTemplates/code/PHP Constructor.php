#set($parameters = $PARAM_LIST)

#if ($parameters.split(',').size() > 3)
#set($parameters = $PARAM_LIST.replace(',', ",
"))
#end
#set($body = ${BODY})
public function __construct($parameters.replace('$_', '$')) {$body.replace('$_', '$')}
