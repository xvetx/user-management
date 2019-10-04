<?php

namespace wheelet\modules\UserManagement\controllers;

use Yii;
use wheelet\modules\UserManagement\models\UserVisitLog;
use wheelet\modules\UserManagement\models\search\UserVisitLogSearch;
use wheelet\components\AdminDefaultController;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class UserVisitLogController extends AdminDefaultController
{
	/**
	 * @var UserVisitLog
	 */
	public $modelClass = 'xvetx\modules\UserManagement\models\UserVisitLog';

	/**
	 * @var UserVisitLogSearch
	 */
	public $modelSearchClass = 'xvetx\modules\UserManagement\models\search\UserVisitLogSearch';

	public $enableOnlyActions = ['index', 'view', 'grid-page-size'];
}
