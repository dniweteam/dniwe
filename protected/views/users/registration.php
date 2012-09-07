<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'registration-form',
    'enableClientValidation'=>true,
    'focus'=>array($model,'email'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,

    ),
    'htmlOptions'=>array(
        'class' => 'form-horizontal',
    ),
)); ?>
    <div class="control-group<?php echo $model->hasErrors('email')? ' error': '';?>">
        <?php echo $form->labelEx($model, 'email', array(
            'class' => 'control-label',
        )); ?>
        <fieldset class="controls">
            <?php echo $form->textField($model, 'email', array(
                'placeholder' => 'Пиши мыло сюда...',
            )); ?>
            <?php echo $form->error($model, 'email', array(
                'class' => 'help-inline',
            )); ?>
        </fieldset>
    </div>

    <div class="control-group<?php echo $model->hasErrors('password')? ' error': '';?>">
        <?php echo $form->labelEx($model, 'password', array(
            'class' => 'control-label',
        )); ?>
        <fieldset class="controls">
            <?php echo $form->passwordField($model, 'password', array(
                'class' => 'password',
                'placeholder' => 'А сюда пароль...',
            )); ?>
            <?php echo $form->error($model, 'password', array(
                'class' => 'help-inline',
            )); ?>
        </fieldset>
    </div>

    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <input type="checkbox" class="show-password"> Показать пароль
            </label>
            <button type="submit" class="btn">Добавиться в Дно</button>
        </div>
    </div>

<?php $this->endWidget(); ?>