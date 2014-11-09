<?php

class CliCursor {

    /**
     * Перемещает курсор вверх на указанное количество строк
     * @param integer $cnt
     */
    public static function up($cnt) {
        fwrite(STDOUT, "\033[{$cnt}A");
    }

    /**
     * Перемещает курсор вниз на указанное количество строк
     * @param integer $cnt
     */
    public static function down($cnt) {
        fwrite(STDOUT, "\033[{$cnt}B");
    }

    /**
     * Перемещает курсор вправо на указанное количество строк
     * @param integer $cnt
     */
    public static function right($cnt) {
        fwrite(STDOUT, "\033[{$cnt}C");
    }

    /**
     * Перемещает курсор влево на указанное количество строк
     * @param integer $cnt
     */
    public static function left($cnt) {
        fwrite(STDOUT, "\033[{$cnt}D");
    }

    /**
     * Перемещает курсор в указанную позицию
     * @param integer $column
     * @param integer $row
     */
    public static function moveTo($column, $row) {
        fwrite(STDOUT, "\033[{$row};{$column}D");
    }

    /**
     * Запоминает позицию курсора
     */
    public static function save() {
        fwrite(STDOUT, "\0337");
    }

    /**
     * Восстанавливает позицию курсора
     */
    public static function restore() {
        fwrite(STDOUT, "\0338");
    }

}
