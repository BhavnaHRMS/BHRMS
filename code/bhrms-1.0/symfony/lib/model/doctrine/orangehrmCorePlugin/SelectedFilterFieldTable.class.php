<?php

/**
 * SelectedFilterFieldTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SelectedFilterFieldTable extends PluginSelectedFilterFieldTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object SelectedFilterFieldTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SelectedFilterField');
    }
}