<?php

use Joomla\CMS\Captcha\Google\HttpBridgePostRequestMethod;
use Joomla\CMS\Http\Response;
use Joomla\Utilities\IpHelper;

class ModDwquoteHelper
{
  public static function getAjax(){
		
		// get module params
		jimport('joomla.application.module.helper');
		$input  = JFactory::getApplication()->input;
		$posts = $input->get('data', array(), 'ARRAY');
		$file  = $input->files->get('form[File]'); 
		
		$filter = JFilterInput::getInstance();
		$inputs = array();
    $inputs['Created'] = date("d-m-Y H:i:s");
		
    foreach($posts as $post) {
			$name =  $filter->clean($post['name'], 'string');
			$inputs[$name] = $filter->clean($post['value'], 'string');
    }
    
    //get module instance
		if(isset($inputs["module_id"])){
			$module = self::getModuleById($inputs["module_id"]);
		} else {
			$module = JModuleHelper::getModule('dwquote');
    }

    // get module params
		$params = new JRegistry();
    $params->loadString($module->params);
    
		// check recapcha
		$response["success"] = false;
		$gcaptcha = $inputs['g-recaptcha-response'];
		if(!self::checkCaptcha($gcaptcha)){
			echo new JResponseJson(false, JText::_('Email sent failed. Wrong recaptcha'), true);
      jexit();
		}
    
    // Jmailer config
		$mailer = JFactory::getMailer();
		$config = JFactory::getConfig();

		if($params->get('from')){
			$sender = array(
				$config->get( $params->get('from') ),
				$config->get( 'config.fromname' ) );
		} else {
			$sender = array(
				$config->get( 'config.mailfrom' ),
				$config->get( 'config.fromname' ) );
		}

		$mailer->setSender($sender);
    
		if($params->get('to')){
			$recipient = array( $params->get('to') );
		} else {
			$recipient = $config->get( 'config.mailfrom' );
		}

		$mailer->addRecipient($recipient);

		if($params->get('replayto', 1)){
			$mailer->addReplyTo($inputs['Email']);
		}

		if($params->get('subject', 1)){
			$subject = $params->get('subject');
		} else {
			$subject = 'Information from website';
		}
		$mailer->setSubject($subject);

		$body = 'Information from website <br />';
		$body .= '<table border="1" style="border-collapse: collapse;">';

		foreach($inputs as $key => $value){
			if($key != 'g-recaptcha-response'){
				$body .= '<tr>';
				$body .= '<td>'.$key.'</td>';
				$body .= '<td>'.$value.'</td>';
				$body .= '</tr>';
			}
		}

		$body .= '</table>';

		$mailer->isHTML(true);
		$mailer->Encoding = 'base64';
		$mailer->setBody($body);
		$send = $mailer->Send();

		if ($send) {
        echo new JResponseJson(true, JText::_('<h3>Thank you for your enquiry. We will be in touch</h3>'), false);
        jexit();
		} else {
        echo new JResponseJson(false, JText::_('Email sent failed.'), true);
        jexit();
    }
    return true;
  }

  public static function getModuleById($id){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from($db->quoteName('#__modules'));
		$query->where($db->quoteName('id') . ' = '. $db->quote((int)$id));
		$query->order('ordering ASC');

		$db->setQuery($query);
		$results = $db->loadObjectList();
		$module = JModuleHelper::getModule('dwquote', $results[0]->title);
		return $module;
	}

	public static function checkCaptcha($gcapcha){

		// get recapcha settings
		$captcha = JPluginHelper::getPlugin('captcha', 'recaptcha');
		$captchaParams = new JRegistry($captcha->params);

		$privatekey = $captchaParams->get('private_key');
		$version    = $captchaParams->get('version');
		$challenge = null;
		$remoteip   = IpHelper::getIp();
		$response = $gcapcha;
		
		$reCaptcha = new \ReCaptcha\ReCaptcha($privatekey, new HttpBridgePostRequestMethod);
		$response = $reCaptcha->verify($response, $remoteip);
		if (!$response->isSuccess()){
			foreach ($response->getErrorCodes() as $error){
				throw new \RuntimeException($error);
			}
			return false;
		}
		return true;
	}
}
