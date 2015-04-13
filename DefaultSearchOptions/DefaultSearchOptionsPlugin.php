<?php
/**
 * DefaultSearchOptions Plugin
 *
 * @copyright   Copyright 2015 R&R Computer Solutions
 * @author      WaltRiceJr
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 or any later version
 * @package     DefaultSearchOptions Plugin
 *
 */

define('DEFAULT_SEARCH_OPTIONS_PLUGIN_DIR', PLUGIN_DIR . '/DefaultSearchOptions');

class DefaultSearchOptionsPlugin extends Omeka_Plugin_AbstractPlugin
{

    protected $_hooks = array(
        'install',
        'uninstall',
        'config',
        'config_form'
    );

    protected $_options = array(

        'defaultsearchoptions_type' => 'keyword',
        'defaultsearchoptions_query' => '',
        'defaultsearchoptions_action' => '',

    );

    protected $_filters = array('search_form_default_query_type', 'search_form_default_query', 'search_form_default_action');

    public function hookInstall()
    {
        $this->_installOptions();
    }

    public function hookUninstall()
    {
        $this->_uninstallOptions();
    }

    public function hookConfigForm()
    {
        include 'config_form.php';
    }

    public function hookConfig($args)
    {
        $post = $args['post'];
        foreach($post as $key=>$value) {
            set_option($key, $value);
        }
    }

    public function filterSearchFormDefaultQueryType($queryType)
    {
        if (get_option('defaultsearchoptions_type') != '')
            return get_option('defaultsearchoptions_type');
        else
            return $queryType;
    }

    public function filterSearchFormDefaultQuery($query)
    {
        if (get_option('defaultsearchoptions_query') != '')
            return get_option('defaultsearchoptions_query');
        else
            return $query;
    }

    public function filterSearchFormDefaultAction($action)
    {
        if (get_option('defaultsearchoptions_action') != '')
            return get_option('defaultsearchoptions_action');
        else
            return $action;
    }
}