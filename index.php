<?php
//php /home/k/kuzmi48i/kuzmi48i.beget.tech/public_html/index.php > out.txt

define('WORK_DIR', __DIR__);
define('TEMP_DIR', __DIR__.'/temp');
define('REPORTS_DIR', __DIR__.'/reports');
function __autoload($class){
    require 'classes/'.$class.'.class.php';
}


$ru60 = new scavenge('ru60', '58adc465');
$ru60->set_cookie('cid=327173088; ru_auth=2d424b9abbb8:8c07e71ab850e5dc29d8501ea1753fa4887790beb3ed7fe061215f8cea18e56c; ref=start; PHPSESSID=b43fff55bd2791269a42890232f051b5; sid=%3A56c3cd8305a65a5b434d33505a6712a3930922887a2851a5f2ead7c967442be87cc3ec8d61a756c92f6ac4f372bc1ccdd20bc78e763c919ea6f8402811b64e0d; io=r8rnXbSepTeSke8xBa54; websocket_available=true; popup_pos_emoji_picker=739x262.5; global_village_id=8728');
$ru60->scavenge_cycle(8728, 1, array('light'=>100));
$ru60->scavenge_cycle(8728, 2, array('light'=>75));
$ru60->scavenge_cycle(8728, 3, array('light'=>50));
$ru60->scavenge_cycle(8728, 4, array('light'=>25));
