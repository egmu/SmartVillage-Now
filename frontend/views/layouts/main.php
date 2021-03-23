<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <title><?= Yii::$app->name. " | " .Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        body {
            background-image: url('atlas-bg-1.jpg');  background-size: cover;
        }
    </style>
</head >
<body>

<?php $this->beginBody() ?>

<div class="wrap">
    <?php

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [
         
        ['label' => 'Fiture', 'url' => ['/site/fitur']],
        ['label' => 'Testimoni', 'url' => ['/site/testimoni']],

     
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
           
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="text-center" style="width: 100%; margin-top: -42px;" data-aos="fade-up">
                    <hr style="border-color: white;">
                    | <span>&copy 2021 <a href="https://github.com/egmu" style="color: var(--rose)">Yusuf Rizal</a><a href=""> | </a><a href="/smartvillage-1/frontend/web/site/tentang" style="color: var(--rose)">Tentang</a></span>

                            <div>
                                <img src="../web/images/icon/iconmonstr-facebook-3-48.png" alt="" style="height: 24px; width: 24px;" data-aos="fade-up">
                           
                                 <img src="../web/images/icon/iconmonstr-instagram-13-48.png" alt="" style="height: 24px; width: 24px;" data-aos="fade-up">
                                 
                                  <img src="../web/images/icon/iconmonstr-twitter-3-48.png" alt="" style="height: 24px; width: 24px;" data-aos="fade-up">
                        </div>
                           
                       
                        </div>
                </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
