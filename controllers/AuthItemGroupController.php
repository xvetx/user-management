<?php

namespace wheelet\modules\UserManagement\controllers;

use xvetx\modules\UserManagement\models\rbacDB\AuthItemGroup;
use xvetx\modules\UserManagement\models\rbacDB\search\AuthItemGroupSearch;
use Yii;
use xvetx\components\AdminDefaultController;

/**
 * AuthItemGroupController implements the CRUD actions for AuthItemGroup model.
 */
class AuthItemGroupController extends AdminDefaultController
{
	/**
	 * @var AuthItemGroup
	 */
	public $modelClass = 'xvetx\modules\UserManagement\models\rbacDB\AuthItemGroup';

	/**
	 * @var AuthItemGroupSearch
	 */
	public $modelSearchClass = 'xvetx\modules\UserManagement\models\rbacDB\search\AuthItemGroupSearch';

	/**
	 * Define redirect page after update, create, delete, etc
	 *
	 * @param string       $action
	 * @param AuthItemGroup $model
	 *
	 * @return string|array
	 */
	protected function getRedirectPage($action, $model = null)
	{
		switch ($action)
		{
			case 'delete':
				return ['index'];
				break;
			case 'update':
				return ['view', 'id'=>$model->code];
				break;
			case 'create':
				return ['view', 'id'=>$model->code];
				break;
			default:
				return ['index'];
		}
	}
}
