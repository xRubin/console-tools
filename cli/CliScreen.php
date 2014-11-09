<?php

class CliScreen {

    /**
     * режим консоли?
     * @return boolean
     */
    public static function isCLI() {
        return substr(php_sapi_name(), 0, 3) == 'cli';
    }

    /**
     * Высота экрана
     * @return integer
     */
    public static function getRows() {
        return intval('tput lines');
    }

    /**
     * Ширина экрана
     * @return integer
     */
    public static function getCols() {
        return intval('tput cols');
    }

    /**
     * Поддерживаемое количество цветов
     * @return int
     */
    public static function getColors() {
        return intval('tput colors');
    }

}
