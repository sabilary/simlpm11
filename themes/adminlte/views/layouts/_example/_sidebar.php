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
                <?php
                $title = CHtml::encode('jQuery UI');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'ui.jquery-ui')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'ui.jquery-ui'),
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
                <?php
                $title = CHtml::encode('General Elements');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'forms.general')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'forms.general'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Advanced Elements');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'forms.advanced')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'forms.advanced'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Editors');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'forms.editors')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'forms.editors'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <?php
                $title = CHtml::encode('Simple tables');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'tables.simple')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'tables.simple'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Data tables');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'tables.data')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'tables.data'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
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
                <?php
                $title = CHtml::encode('Invoice');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'examples.invoice')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'examples.invoice'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Login');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'examples.login')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'examples.login'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Register');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'examples.register')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'examples.register'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Lockscreen');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'examples.lockscreen')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'examples.lockscreen'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('404 Error');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'examples.404')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'examples.404'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('500 Error');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'examples.500')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'examples.500'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
                <?php
                $title = CHtml::encode('Blank Page');
                $active = ($this->id == 'site' && ($this->action->id == 'page' && Yii::app()->request->getParam('view') == 'examples.blank')) ? 'active' : null;
                ?>
                <li class="<?php echo $active; ?>">
                    <?php echo CHtml::link(
                        '<i class="fa fa-angle-double-right"></i> '. $title,
                        array('//site/page/', 'view'=>'examples.blank'),
                        array(
                            'title' => $title,
                        )
                    ); ?>
                </li>
            </ul>
        </li>
    </ul>
</section>
<!-- /.sidebar -->