<?php

// Used multiselect to checkboxes extention as template

class extension_sym_markitup extends Extension {
    public function about(){
        return array(
            'name' => 'Sym MarkItUp',
            'version' => '1.01',
            'release-date' => '2011-08-19',
            'author' => array(
                'name' => 'Jonathan Hughes',
                'website' => 'http://www.onlinenotime.com',
                'email' => 'jonathanbhughes@gmail.com'
            ),
            'description' => 'Adds MarkItUp editor to all applicable textareas.'
        );
    }
    
    public function getSubscribedDelegates(){
        return array(
            array(
                'page' => '/backend/',
                'delegate' => 'AdminPagePreGenerate',
                'callback' => '__appendAssets'
            )
        );
    }
    
    public function __appendAssets($context){
        		if(isset(Administration::instance()->Page->_context['section_handle']) && in_array(Administration::instance()->Page->_context['page'], array('new', 'edit'))){	
    				Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/sym_markitup/assets/style.css', 'screen', 222);
    				Administration::instance()->Page->addScriptToHead(URL . '/extensions/sym_markitup/assets/jquery.markitup.js', 223);
					Administration::instance()->Page->addScriptToHead(URL . '/extensions/sym_markitup/assets/init.js', 224);
    			}
    		}
    	}
    	
?>