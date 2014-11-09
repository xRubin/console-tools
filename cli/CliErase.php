<?php

class CliErase {

    /**
     * Очищает экран
     */
    public static function screen() {
        fwrite(STDOUT, "\033[2J");
    }

    /**
     * Очищает текущую строку
     */
    public static function line() {
        fwrite(STDOUT, "\033[2K");
    }

}
