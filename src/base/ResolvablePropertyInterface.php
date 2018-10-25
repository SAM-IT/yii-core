<?php


namespace yii\base;

/**
 * ResolvablePropertyInterface is the interface for providing resolvable properties.
 * A resolvable property, when returned from a magic getter, will be resolved and cached by `BaseObject`.
 * @since 3.0.0
 */
interface ResolvablePropertyInterface
{
    /**
     * @param string $name The name of the property
     * @param BaseObject $owner The object owning the property
     * @return mixed The resolved value, this will be cached
     */
    public function resolveProperty(string $name, BaseObject $owner);
}