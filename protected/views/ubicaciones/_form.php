<?php
/* @var $this UbicacionesController */
/* @var $model Ubicaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ubicaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LUGAR'); ?>
		<?php echo $form->dropDownList($model,'ID_LUGAR',CHtml::listData(Lugares::model()->findAll(),'ID_LUGAR','NOMBRE')); ?>
		<?php echo $form->error($model,'ID_LUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LONGITUD'); ?>
		<?php echo $form->textField($model,'LONGITUD',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'LONGITUD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LATITUD'); ?>
		<?php echo $form->textField($model,'LATITUD',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'LATITUD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->