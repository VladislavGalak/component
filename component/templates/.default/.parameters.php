<?php

$set = array(
	'VARIABLE_1' => 'Заголовок',
	'VARIABLE_2' => 'Текст',
	'VARIABLE_3' => 'Заголовок кнопки',
	'VARIABLE_4' => 'Ссылка',
);


$arTemplateParameters = array();
foreach ($set as $k => $val) {
	$arTemplateParameters[$k] = array(
		'NAME' => $val,
		'COLS' => 35,
		'ROWS' => 3
	);
}
