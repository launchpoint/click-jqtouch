<?

$assets = array();

if(browser_is('iphone', 'iphone_simulator'))
{
  $assets[] = array('src'=>JQTOUCH_VPATH."/assets/extensions/jqt.scroll.js");
}
