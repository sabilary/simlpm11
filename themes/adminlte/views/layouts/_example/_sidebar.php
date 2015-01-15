<?php
$themeUrl = Yii::app()->theme->baseUrl.'/';
$timg     = $themeUrl.'img/';
?>

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo $timg; ?>avatar3.png" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>Hello, Jane</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <?php
        $title = CHtml::encode('Dashboard');
        $active = ($this->id == 'site' && ($this->action->id == 'index')) ? 'active' : null;
        ?>
        <li class="<?php echo $active; ?>">
            <?php echo CHtml::link(
                '<i class="fa fa-dashboard"></i> <span>'. $title.'</span>',
                array('//site/index'),
                array(
                    'title' => $title,
                )
            ); ?>
        </li>
        <?php
        $title = CHtml::encode('Widgets');
        $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'widgets')) ? 'active' : null;
        ?>
        <li class="<?php echo $active; ?>">
            <?php echo CHtml::link(
                '<i class="fa fa-th"></i> <span>'. $title.'</span> <small class="badge pull-right bg-green">new</small>',
                array('//site/page/', 'view'=>'widgets'),
                array(
                    'title' => $title,
                )
            ); ?>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <?php
                $title = CHtml::encode('Morris');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'charts.morris')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'charts.morris'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Flot');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'charts.flot')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'charts.flot'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Inline charts');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'charts.inline')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'charts.inline'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <?php
                $title = CHtml::encode('General');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'ui.general')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'ui.general'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Icons');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'ui.icons')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'ui.icons'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Buttons');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'ui.buttons')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'ui.buttons'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Sliders');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'ui.sliders')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'ui.sliders'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Timeline');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'ui.timeline')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'ui.timeline'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
            </ul>
        </li>
        <?php
        $title = CHtml::encode('Calendar');
        $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'calendar')) ? 'active' : null;
        ?>
        <li class="<?php echo $active; ?>">
            <?php echo CHtml::link(
                '<i class="fa fa-calendar"></i> <span>'. $title.'</span> <small class="badge pull-right bg-red">3</small>',
                array('//site/page', 'view'=>'calendar'),
                array(
                    'title' => $title,
                )
            ); ?>
        </li>
        <?php
        $title = CHtml::encode('Mailbox');
        $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'mailbox')) ? 'active' : null;
        ?>
        <li class="<?php echo $active; ?>">
            <?php echo CHtml::link(
                '<i class="fa fa-envelope"></i> <span>'. $title.'</span> <small class="badge pull-right bg-yellow">12</small>',
                array('//site/page', 'view'=>'mailbox'),
                array(
                    'title' => $title,
                )
            ); ?>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
            </ul>
        </li>
    </ul>
</section>
<!-- /.sidebar -->