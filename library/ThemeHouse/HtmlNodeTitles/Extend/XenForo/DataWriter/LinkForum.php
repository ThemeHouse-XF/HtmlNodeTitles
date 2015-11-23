<?php

/**
 *
 * @see XenForo_DataWriter_LinkForum
 */
class ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_LinkForum extends XFCP_ThemeHouse_HtmlNodeTitles_Extend_XenForo_DataWriter_LinkForum
{

    /**
     *
     * @see XenForo_DataWriter_LinkForum::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
    
        unset($fields['xf_node']['title']['maxLength']);
    
        return $fields;
    } /* END _getFields */
}