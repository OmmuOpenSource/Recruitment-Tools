<?php
/**
 * Ommu Zone Countries (ommu-zone-country)
 * @var $this ZonecountryController
 * @var $model OmmuZoneCountry
 * @var $form CActiveForm
 * version: 1.2.0
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2015 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/Core
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Ommu Zone Countries'=>array('manage'),
		$model->country_id=>array('view','id'=>$model->country_id),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('/zone_country/_form', array('model'=>$model)); ?>
</div>
