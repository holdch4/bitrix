<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>

<!-- content -->
<div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <header>
                            <h1>Заголовок страницы</h1>
                        </header>
                        <hr>
                        <p>Если вы используете базовую редакцию продукта - «Компания», то можете перейти на редакцию «Совместная работа», и ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом.
                            Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции
                            и делать многое другое.</p>
                        <p>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов
                            и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала</p>
                        <p>При переходе вся информация на портале сохранится. Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.</p>
                        <h2>Выставка новых образцов</h2>
                        <hr>
                        <div class="article-text-block">
                            <figure class="pic-block">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/pic01.jpg" alt="">
                            </figure>
                            <p>Ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом. Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование
                                времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции и делать многое другое.</p>
                            <h3>Заголовок</h3>
                            <p><i>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала</i>
                            </p>
                            <p><span class="att-text">При переходе вся информация на портале сохранится.</span> 
                                <br>Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.</p>
                        </div>
                    </div>
                </div>
<!-- /content -->
       
       <!-- side -->
                <div class="side">
                    <!-- side menu -->
                    <div class="side-block side-menu">
                        <div class="title-block">Навигация</div>
                        <div class="menu-block">
                            <ul>
                                <li><a href="">Кухни</a>
                                </li>
                                <li><a href="">Гарнитуры</a>
                                </li>
                                <li class="selected">
                                    <a href="">Спальни</a>
                                </li>
                                <li>
                                    <a href="">Шкафы</a>
                                </li>
                                <li><a href="">Столы</a>
                                </li>
                                <li><a href="">Стулья</a>
                                </li>
                                <li>
                                    <a href="">Прихожие</a>
                                </li>
                                <li><a href="">Диваны</a>
                                </li>
                                <li><a href="">Кресла</a>
                                </li>
                            </ul>
                        </div>
                    </div>
        			<!-- /side menu -->
                    <!-- side anonse -->
                    
                    <div class="side-block side-anonse">
                        <div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
                        <div class="item">
                            <p>Клиенты предпочитают все больше эко-материалов.</p>
                        </div>
                    </div>
                    
                    <!-- /side anonse -->
                    <!-- side wrap -->
                    
                    <div class="side-wrap">
                        <div class="item-wrap">
                            <!-- side action -->
                            <div class="side-block side-action">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/side-action-bg.jpg" alt="" class="bg">
                                <div class="photo-block">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/side-action.jpg" alt="">
                                </div>
                                <div class="text-block">
                                    <div class="title">Акция!</div>
                                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                                    </p>
                                </div>
                                <a href="" class="btn-more">подробнее</a>
                            </div>
                            <!-- /side action -->
                        </div>


        				




<!-- <?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"IBLOCK_BINDING" => "section",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
<h3>Наши услуги</h3>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "3",
	"IBLOCK_BINDING" => "element",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
 -->

<!-- <? test_dump();?> -->


</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>