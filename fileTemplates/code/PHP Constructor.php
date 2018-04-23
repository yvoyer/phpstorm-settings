/**
$PARAM_DOC.replace('$_', '$')
*/

#set($parameters = $PARAM_LIST.replace('$_', '$'))

#if ($parameters.split(',').size() > 3)
#set($parameters = "
" + $parameters.replace(',', ",
") + "
")
#end
public function __construct($parameters) {$BODY.replace('$_', '$')}
