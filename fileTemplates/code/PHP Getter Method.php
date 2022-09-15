#set($propertyName = $NAME.substring(0,1).toLowerCase().concat($NAME.substring(1)))

public ${STATIC} function $propertyName(): ${TYPE_HINT}
{
#if (${STATIC} == "static")
return self::$${FIELD_NAME};
#else
return $this->${FIELD_NAME};
#end
}
