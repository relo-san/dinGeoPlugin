<?php

/*
 * This file is part of the dinGeoPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinGeoNeighbourhoodBindStreet model table
 * 
 * @package     dinGeoPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinGeoNeighbourhoodBindStreetTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinGeoNeighbourhoodBindStreetTable
     * 
     * @return  PluginDinGeoNeighbourhoodBindStreetTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinGeoNeighbourhoodBindStreet' );

    } // PluginDinGeoNeighbourhoodBindStreetTable::getInstance()

} // PluginDinGeoNeighbourhoodBindStreetTable

//EOF