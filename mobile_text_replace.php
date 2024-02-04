<?php
/**
 * 
 * @version             See field version manifest file
 * @package             See field name manifest file
 * @author				Gregorio Nuti
 * @copyright			See field copyright manifest file
 * @license             GNU General Public License version 2 or later
 * 
 */

// No direct access
defined('_JEXEC') or die;

// Define DS variable
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// Namespaces
use Joomla\CMS\Factory;

// Import library dependencies
jimport('joomla.plugin.plugin');

class plgContentMobile_Text_Replace extends JPlugin 
{
	public function onContentPrepare($context, &$article, &$params, $limitstart = 0)
	{
		
		// General variables
		$doc = Factory::getDocument();		
		$app = Factory::getApplication();
		
		// Get plugin params
		$plugin = JPluginHelper::getPlugin('content', 'mobile_text_replace');
		$string_to_be_replaced = $this->params->get('to_be_replaced', '');
		$string_to_replace = $this->params->get('to_be_printed', '');
        
        // Check if the app is admin or site
        if ($app->isClient('site'))
        {
        
            // Import Mobile Detect library
			require_once dirname(__FILE__).DS.'src'.DS.'Mobile_Detect.php';
			
			// Detect if the device is mobile
			$mobile_detect = new Mobile_Detect();
			
			if($mobile_detect->isMobile() || $mobile_detect->isiPhone() || $mobile_detect->isTablet()) {
				$is_mobile = 1;
			} else {
				$is_mobile = 0;
			}
			
			// Edit the output if the device is mobile
			if ($is_mobile == 1)
			{
				$article->text = str_replace($string_to_be_replaced, $string_to_replace, $article->text);
				
			}
               
		}
		
	}			
	
}
?>