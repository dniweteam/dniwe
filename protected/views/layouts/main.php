<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/stylesheet.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" onclick="$('#popup').show();" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>

                <?php $this->widget('zii.widgets.CMenu', array(
                'htmlOptions' => array('class' => 'nav',),
                'items' => array(
                    array('itemOptions' => array(
                        'class' => 'divider-vertical',
                    )),
                    array('label' => 'Главная', 'url' => array('/site/index')),
                    array('itemOptions' => array(
                        'class' => 'divider-vertical',
                    )),
                    array('label' => 'О дно, ты мир!', 'url' => array('/site/page', 'view' => 'about')),
                    array('itemOptions' => array(
                        'class' => 'divider-vertical',
                    )),
                    array('label' => 'Обратная связь', 'url' => array('/site/contact')),
                    array('itemOptions' => array(
                        'class' => 'divider-vertical',
                    )),
                    array('label' => 'Добавиться в дно', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    array('itemOptions' => array(
                        'class' => 'divider-vertical',
                    )),
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                ),
            )); ?>

                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'links' => $this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
    <?php endif?>

    <?php echo $content; ?>

    <div class="clear"></div>


    <div id="footer" class="row show-grid oranienbaum">
        <div class="span12">&copy; <?php print_r("2012" . (date('Y') > 2012 ? " &ndash; " . date('Y') : "")); ?> Твоческое объединение &laquo;Дети днища, верные сыны&raquo;<br/></div>
    </div>


        <?php echo "";//Yii::powered(); ?>
    <!-- footer -->

</div>
<!-- page -->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-34574685-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
