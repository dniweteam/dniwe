<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<script type="text/javascript">
    $(function(){
        $('.contentblog').hide();
        $('#blog_'+$('.nav-tabs').find('.active').attr("id")).show();
    });
    function activate_tab(tab) {
        tab.closest('.nav-tabs').find('li').removeClass('active');
        tab.addClass('active');
        $('.contentblog').hide();
        $('#blog_'+tab.attr("id")).show();
    }
</script>
<div class="row" style="margin-top: 10px;">
    <div class="span12">
        <ul class="nav nav-tabs">
            <li id="mainblog" onclick="activate_tab($(this));" class="active"><a href="#">Главный блог</a></li>
            <li id="dniwe" onclick="activate_tab($(this));"><a href="#">Днина</a></li>
            <li id="makingof" onclick="activate_tab($(this));"><a href="#">Блог о блоге</a></li>
        </ul>
    </div>
</div>
<div id="blog_mainblog" class="row contentblog" style="margin-top: 10px;">
    <div class="span12">
        <div class="alert alert-block alert-info">
            <a class="close" data-dismiss="alert" href="#">X</a>
            <h4 class="alert-heading">Основной блог</h4>
            Сейчас тут ничего нет, потому что никто не удосужился даже логин заебашить.
        </div>
    </div>
</div>
<div id="blog_dniwe" class="row contentblog" style="margin-top: 10px;">
    <div class="span12">
        <div class="alert alert-block alert-info">
            <a class="close" data-dismiss="alert" href="#">X</a>
            <h4 class="alert-heading">Важные новости</h4>
            Этот блог будет всегда пуст, так как ничего в мире никогда не происходит. А все о чем пишут сми - вранье.<br />Сми врут.
        </div>
    </div>
</div>
<div id="blog_makingof" class="row contentblog" style="margin-top: 10px;">
    <div class="span12">
        <div class="alert alert-block alert-info">
            <a class="close" data-dismiss="alert" href="#">X</a>
            <h4 class="alert-heading">Блог о создании днища</h4>
            Блог пуст как пусто Дно.
        </div>
    </div>
</div>

<div id="popup" class="modal"
     style="position: fixed; top: auto; left: auto; margin: 0 auto; z-index: 10; display: none;">
    <div class="modal-header">
        <span onclick="$(this).closest('.modal').hide();" class="close">X</span>

        <h3>Всплывающее с дна окно</h3>
    </div>
    <div class="modal-body">
        <p>Это окно можно закрыть. Кроме как закрыть, на него можно только забить.</p>
    </div>
    <div class="modal-footer">
        <span onclick="$(this).closest('.modal').hide();" class="btn">Закрыть</span>
    </div>
</div>
