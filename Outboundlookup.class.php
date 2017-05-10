<?php
namespace FreePBX\modules;
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//    License for all code of this FreePBX module can be found in the license file inside the module directory
//    Copyright 2015 Sangoma Technologies.
//
class Outboundlookup implements \BMO {
    public function __construct($freepbx = null) {
        if ($freepbx == null) {
            throw new Exception("Not given a FreePBX Object");
        }
        $this->FreePBX = $freepbx;
        $this->database = $freepbx->Database;
        //Get Future Module information (This is only used for a few things right now)
        $this->outbound_modules = array();
        foreach (glob(__DIR__."/modules/*",GLOB_ONLYDIR) as $filename) {
              $this->outbound_modules[] = basename($filename);
        }
    }

    public function install() {}

    public function uninstall() {}

    public function backup() {}

    public function restore($backup) {}

    public function doConfigPageInit($page) {
        $request = $_REQUEST;
        isset($request['action']) ? ($action = $request['action']) : $action='';
        isset($request['view']) ? ($view = $request['view']) : $view = 'form';
        isset($request['itemid']) ? ($itemid = $request['itemid']) : $itemid='';
        if(isset($request['action'])) {
            switch ($action) {
                case "add":
                    outboundlookup_add($request);
                    needreload();
                    redirect_standard();
                break;
                case "delete":
                    outboundlookup_del();
                    needreload();
                    redirect_standard();
                break;
            }
        }
    }

    public function getActionBar($request){
        switch($request['display']){
            case 'outboundlookup':
                $buttons = array(
                    'submit' => array(
                        'name' => 'submit',
                        'id' => 'submit',
                        'value' => _('Submit')
                    ),
                    'delete' => array(
                        'name' => 'delete',
                        'id' => 'delete',
                        'value' => _('Delete')
                    )
                );
            break;
        }
        return $buttons;
    }

    public function getRightNav($request){
    }
}
