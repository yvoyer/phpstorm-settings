#set($parameters = $PARAM_LIST)

#if ($parameters.split(',').size() > 3)
#set($parameters = $PARAM_LIST.replace('$_', '$').replace(',', ",
"))
#end
#set($body = ${BODY})
public function __construct($parameters) {$body.replace('$_', '$')}
