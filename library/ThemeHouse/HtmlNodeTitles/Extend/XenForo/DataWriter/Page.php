<?php

/**
 *
 * @see XenForo_DataWriter_Page
 */
class ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_Page extends XFCP_ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_Page
{

    /**
     *
     * @see XenForo_DataWriter_Page::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
    
        unset($fields['xf_node']['title']['maxLength']);
    
        return $fields;
    } /* END _getFields */
}