<?php
function loadLanguage(string $language)
{
    if($language==='fr'){
  require $_SERVER['DOCUMENT_ROOT'].'/constants/text_fr.php';
    }
  }