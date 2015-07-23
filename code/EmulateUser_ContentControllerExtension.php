<?php
class EmulateUser_ContentControllerExtension extends Extension {

	private static $allowed_actions = array(
		'emulateuser'
	);
	
	public function emulateuser($request){
		
		// if we're not an admin, GET OUT
		if( !Permission::check('ADMIN') ){
			echo 'You cannot do that';
			die();
		}
		
		// get URL parameters
		$params = $this->owner->getRequest()->params();
		
		// URL attribute?
		if( !isset($params['ID']) ){
			Requirements::css( EMULATEUSER_DIR ."/css/emulate-user.css");
			return $this->owner->customise( array('Users' => Member::get()) )->renderWith('EmulateUserPage');
		}
	
		$member = Member::get()->byID( $params['ID'] );
		
		if( !isset($member->ID) ){
			echo 'Could not find user by #'. $params['ID'];
			die();
		}
		
		$member->logIn();
		
		return $this->owner->redirect($this->owner->Link());
	}
}