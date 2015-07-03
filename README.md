#PHP中文转拼音


### Usage

    
	    require('Pinyin.class.php');

		Pinyin::option(
			array('uppercase'=>false,
				  'only_first'=>false,
			      'delimter'=>'',
		          'first_upper'=>true,
		          'only_chinese'=>false)
        );
		
		echo Pinyin::trans('中华人民共和国');
        >>ZhongHuaRenMinGongHeGuo
        
		
###config

- uppercase    大写输出
- only_first   只输出拼音首字母
- delimter     连字符
- first_upper  拼音首字母大写
- only_chinese 忽略非中文字符


###Copyright
It's free.
感谢所有散落在网际空间的无名源码的作者