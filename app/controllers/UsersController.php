<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

use app\models\Users;

class UsersController extends \app\extensions\action\Controller {

	public function poster() {
		$user = Users::create();
		
		if ($this->request->data) {
			if ($user->save($this->request->data)) {
				return $this->redirect('/poster/thanks?name=' . $user->fname);
			}
		}
		
		$count = Users::count();
		return compact('user', 'count');
	}
	
	public function posterThanks() {
		$name = (isset($this->request->query['name'])) ? $this->request->query['name'] : 'our friend';
		return compact('name');
	}
	
	public function posterHowMany() {
		$count = Users::count();
		return compact('count');
	}
	
}

?>