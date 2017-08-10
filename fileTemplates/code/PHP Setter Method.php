/**
* @param ${TYPE_HINT} $${PARAM_NAME}
*/
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
self::$${FIELD_NAME} = $${PARAM_NAME};
#else
$this->_${FIELD_NAME} = $${PARAM_NAME};
#end
}
