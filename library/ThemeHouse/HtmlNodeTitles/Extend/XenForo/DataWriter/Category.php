<?php

/**
 *
 * @see XenForo_DataWriter_Category
 */
class ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_Category extends XFCP_ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_Category
{

    /**
     *
     * @see XenForo_DataWriter_Category::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        
        unset($fields['xf_node']['title']['maxLength']);
        
        return $fields;
    } /* END _getFields */
}