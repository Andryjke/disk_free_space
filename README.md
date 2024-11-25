# Свободное место на диске

Показываем текущее свободное место на диске

## Требования

- PHP >=7.4


## Установка

composer require andryjka/otus

## Использование
<?php

$spaceChecker = new SpaceChecker();
echo $spaceChecker->checkSpace();