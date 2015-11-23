<?php

/**
 *
 * @see XenForo_DataWriter_Forum
 */
class ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_Forum extends XFCP_ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_Forum
{

    /**
     *
     * @see XenForo_DataWriter_Forum::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
    
        unset($fields['xf_node']['title']['maxLength']);
    
        return $fields;
    } /* END _getFields */
}