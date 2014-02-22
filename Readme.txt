This plugin is based on peregrine's ExtraPage plugin, thanks to peregrine for all his work.

Privacy Notice is an extra page to Create a custom Privacy Notice Page. Having a Privacy policy is a requirement by law. It will open in a pop up but can be accessed via the link too by opening it in a new window.

After you install make sure you enable the plugin in the dashboard.

The file to edit is called privacynotice.php in the views folder
and for extra css edits pn.css and the pop up popup.css

you can access the page http://yoursite.com/forum/plugin/PrivacyNotice

or 

http://yoursite.com/forum/privacy

This plugin adds the privacy link at the start of the menu, you can change the order in the default.php of the plugin. Be sure to add your other links to this list in the order you want them.

$Sender->Menu->Sort = array('Privacy','Dashboard', 'Discussions', 'Questions', 'Activity', 'Applicants', 'Conversations', 'User');


If you change the sort order of the menu, you must also edit the pn.js file 

to place the script on the right link.

This plugin js is set to work on the first link of the menu

$('.Menu ul li:first > a').popup();

If you move the sort order you must change this to match the location of the link.You can change the child number like below based on where your link ends up.

$('.Menu ul li:last > a').popup();
$('.Menu ul li:nth-child(2) > a').popup();
$('.Menu ul li:nth-child(3) > a').popup();
 
etc etc...

