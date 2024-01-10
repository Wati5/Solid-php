<?php

/**
 * Some events are actionnable and others aren't.
 */
interface ActionInterface
{
    /**
     * If the event is actionnable, returns the list of available actions
     *
     * @return array
     */
    public function action() : array;
}