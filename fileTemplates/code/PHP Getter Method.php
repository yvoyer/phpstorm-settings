#set($propertyName = $NAME.substring(0,1).toLowerCase().concat($NAME.substring(1)))

/**
* @return ${TYPE_HINT}
*/
public ${STATIC} function $propertyName(): ${RETURN_TYPE}
{
#if (${STATIC} == "static")
return self::$${FIELD_NAME};
#else
return $this->${FIELD_NAME};
#end
}
