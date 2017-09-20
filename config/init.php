<?php

include './config/define.php';

include CONFIG.'config.php';


include CORE.'App.class.php';



include SMARTY.'Smarty.class.php';

include CORE.'Controller.class.php';

include CORE.'Model.class.php';

spl_autoload_register(array('\core\App','autoload'));

$action = isset($_GET['a'])?$_GET['a']:$config['scn']['a'];
$module = isset($_GET['m'])?$_GET['m']:$config['scn']['m'];
$plat = isset($_GET['p'])?$_GET['p']:$config['scn']['p'];