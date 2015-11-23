<?php

class ThemeHouse_HtmlNodeTitles_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/DataWriter/Category.php' => '1cb56a421e626a3126c3871b00d50b45',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/DataWriter/Forum.php' => 'd566c572a2aa5f0106b74f5ce38b4818',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/DataWriter/LinkForum.php' => '6b262e5ae88a5f011a43ec558048cf25',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/DataWriter/Page.php' => '36cb1a36f81cd4e303f21abc1b5c384e',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Model/Node.php' => '4ada4c63e40c40f033831185add3f6c8',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/Prefix/Categories.php' => '3cd2b9cd4eb2e95c8326754e2743acf2',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/Prefix/Forums.php' => 'fecb2bc7795a52e3216c804ae0a5f350',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/Prefix/LinkForums.php' => '1ab29d2fe17c1e7d87d37e037250a485',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/Prefix/Pages.php' => 'ecdcaffefc8fcbefc7f54286f6f153b2',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/PrefixAdmin/Categories.php' => 'a869d45a3387d76de2a43529a7b44e82',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/PrefixAdmin/Forums.php' => '0d2765d93145549b061fb883ccb417bd',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/PrefixAdmin/LinkForums.php' => '1162710d38062b7ce0b8fb2a9227ce31',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/PrefixAdmin/NodePermissions.php' => '936aa12fce78d588fb07773b6381fc8d',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/PrefixAdmin/Nodes.php' => '35c2347223205e1a579afd33c4c9ba71',
                'library/ThemeHouse/HtmlNodeTitles/Extend/XenForo/Route/PrefixAdmin/Pages.php' => 'a359af73488e51e5d0eb2f21ba6a7397',
                'library/ThemeHouse/HtmlNodeTitles/Install/Controller.php' => 'f1af4a6fba9e756fa1d8b7f98c7351db',
                'library/ThemeHouse/HtmlNodeTitles/Listener/LoadClass.php' => 'ef1e384b864b1cd2a4c9293c94bb7c6e',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}