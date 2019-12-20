<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\db\Command;
use app\models\User;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Fishmart</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    $items = [];
    if(!empty(Yii::$app->user->identity)&&Yii::$app->user->identity->role==1){
        $items=[
            'label' => 'Admin Panel',
            'items' => [
                ['label' => 'User', 'url' => ['/user/index']],
                ['label' => 'Produk', 'url' => ['/produk/index']],
            ],
        ];
    }else if(!empty(Yii::$app->user->identity)&&Yii::$app->user->identity->role==0){
        $items=[
            'label' => 'Produk', 'url' => ['/produk/index']
        ];
    }else{
        $items=[];
    }
    // $users = Yii::$app->db->createCommand('SELECT "role" FROM user where `username`="'.Yii::$app->user->identity->username.'"')->queryOne();
    NavBar::begin([
        'brandLabel' => 'Fishmart',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            [
                'label' => 'Kategori',
                'items' => [
                    ['label' => 'Ikan Tawar', 'url' => ['/site/index']],
                    ['label' => 'Ikan Laut', 'url' => ['/site/index']],
                ],
            ],
            ['label' => 'Panduan', 'url' => ['/site/panduan']],
            ['label' => 'Cari', 'url' => ['/site/panel']],
            empty($items) ? (
                '<li>'
            ):(
                $items
            ),
            
            Yii::$app->user->isGuest ? (
                [
                    'label' => 'Login/Register',
                    'items' => [
                        ['label' => 'Login', 'url' => ['/site/login']],
                        ['label' => 'Register', 'url' => ['/site/signup']],
                    ],
                ]
            ) : 
            (
                
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Fishmart RPL <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
