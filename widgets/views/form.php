<?php

use humhub\modules\content\widgets\richtext\RichTextField;
use humhub\modules\polls\assets\PollsAsset;
use humhub\modules\polls\widgets\AddAnswerInput;
use yii\bootstrap\Html;

/** @var $model \yii\base\Model **/

PollsAsset::register($this);

?>

<div class="contentForm_options" data-content-component="polls.Poll" style="margin-bottom:10px;margin-top:0">
    <?= Html::activeTextInput($model,'question', [
        'placeholder' => Yii::t('PollsModule.widgets_views_pollForm', 'Short question...'),
        'class' => 'form-control',
    ]) ?>
</div>

<?= RichTextField::widget([
        'name' => 'Poll[description]',
        'placeholder' => Yii::t('PollsModule.widgets_views_pollForm', 'Ask something...')
]); ?>

<div class="contentForm_options" data-content-component="polls.Poll">

    <?= AddAnswerInput::widget(['name' => 'newAnswers[]', 'showTitle' => false]); ?>

    <div class="checkbox regular-checkbox-container">
        <?= Html::activeCheckbox($model, 'allow_multiple'); ?>
    </div>
    <div class="checkbox regular-checkbox-container">
        <?= Html::activeCheckbox($model, 'is_random'); ?>
    </div>
    <div class="checkbox regular-checkbox-container">
        <?= Html::activeCheckbox($model, 'anonymous'); ?>
    </div>
    <div class="checkbox regular-checkbox-container">
        <?= Html::activeCheckbox($model, 'show_result_after_close'); ?>
    </div>
</div>
