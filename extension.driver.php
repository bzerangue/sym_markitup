<?php

// Used multiselect to checkboxes extention as template

class extention_sym_markitup extends Extension {
    public function about(){
        return array(
            'name' => 'Sym MarkItUp',
            'version' => '0.8',
            'release-date' => '2011-08-15',
            'author' => array(
                'name' => 'Jonathan Hughes',
                'website' => 'http://www.onlinenotime.com',
                'email' => 'jonathanbhughes@gmail.com'
            ),
            'description' => 'Adds markItUp editor to all applicable textareas.'
        );
    }
    
    public function getSubscribedDelegates(){
        return array(
            array(
                'page' => '/administration/',
                'delegate' => 'AdminPagePreGenerate',
                'callback' => '__appendAssets'
            )
        );
    }
    
    public function __appendAssets($context){
        		if(isset(Administration::instance()->Page->_context['section_handle']) && in_array(Administration::instance()->Page->_context['page'], array('new', 'edit'))){	
    				Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/sym_markitup/assets/markitup/skins/markitup/style.css', 'screen', 221);
                    Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/sym_markitup/assets/markitup/sets/markdown/style.css', 'screen', 222);
    				Administration::instance()->Page->addScriptToHead(URL . '/extensions/sym_markitup/assets/markitup/sets/markdown/set.js', 223);	
                    Administration::instance()->Page->addScriptToHead(URL . '/extensions/sym_markitup/assets/init.js', 224);
    			}
    		}
    	}
    	
?>