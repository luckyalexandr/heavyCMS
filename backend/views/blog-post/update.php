<?php

$this->title = Yii::t('backend', 'Update Blog Post') . ' ' . $blogPost->title;
$this->params['breadcrumbs'][] = ['label' => 'Blog Post', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', compact('blogPost')); ?>