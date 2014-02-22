<?php if(!defined('APPLICATION')) die();

$PluginInfo[ 'PrivacyNotice' ] = array(
   'Name' => 'PrivacyNotice',
   'Description' => "Adds a Privacy Notice popup and Page. Puts a Privacy Link on the menu which opens in a popup and can also be accessed via opening a new window. Based on peregrine's ExtraPage ",
   'Version' => '1.2',
   'HasLocale' => TRUE,
   'Author' => "VrijVlinder"
);

class PrivacyNoticePlugin extends Gdn_Plugin {

    public function Base_Render_Before($Sender) {
 $Sender->AddJSFile('pn.js','plugins/PrivacyNotice');
 $Sender->AddCssFile('popup.css', 'plugins/PrivacyNotice');        
 $Session = Gdn::Session();
       if ($Sender->Menu) {
           $Sender->Menu->AddLink('Privacy',T('Privacy'),'plugin/PrivacyNotice');


    

           if (is_object($Sender->Menu))
         $Sender->Menu->Sort = array('Privacy','Home','Dashboard', 'Discussions', 'Questions', 'Activity', 'Applicants', 'Conversations', 'User');


         }
    }
     





  
    public function PluginController_PrivacyNotice_Create($Sender) {
   
        $Session = Gdn::Session();

        if ($Sender->Menu)  {
            $Sender->ClearCssFiles();
            $Sender->AddCssFile('style.css');
            $Sender->AddJSFile('pn.js','plugins/PrivacyNotice');
            $Sender->AddCssFile('pn.css', 'plugins/PrivacyNotice');
            $Sender->MasterView = 'default';
            
            $Sender->Render('PrivacyNotice', '', 'plugins/PrivacyNotice');
        }
    
   
    }

    public function Setup() {
  
             $matchroute = '^privacy(/.*)?$';
             $target = 'plugin/PrivacyNotice$1';
        
             if(!Gdn::Router()->MatchRoute($matchroute))
                  Gdn::Router()->SetRoute($matchroute,$target,'Internal'); 
          
    }

}