<?php

class Cli {

    /**
     * Выводит строку списка с заданным стилем
     * После вывода строки настройки стиля сбрасываются
     * @param $message
     * @param CliStyle $style
     */
    public static function text($message, $style = null) {
        if (is_null($style)) {
            fwrite(STDOUT, $message);
            return;
        }

        $format = array_filter(array(
            $style->color,
            $style->background,
            $style->effect
        ));

        fwrite(STDOUT, "\033[" . implode(';', $format) . "m" . $message . "\033[" . CliEffect::RESET . "m");
    }

}
