<?php

class CliStyle {

    public $color;
    public $background;
    public $effect;

    /**
     * @param string $color
     * @param string $background
     * @param string $effect
     */
    public function __construct($color = CliColor::WHITE, $background = CliBackground::BLACK, $effect = null) {
        $this->color = $color;
        $this->background = $background;
        $this->effect = $effect;
    }

    /**
     * Стиль для вывода предупреждений
     * @return CliStyle
     */
    public static function getWarning() {
        return new self(CliColor::LIGHT_RED);
    }

    /**
     * Стиль для вывода ошибок
     * @return CliStyle
     */
    public static function getError() {
        return new self(CliColor::RED);
    }

    /**
     * Стиль для вывода сообщений об успешных операциях
     * @return CliStyle
     */
    public static function getSuccess() {
        return new self(CliColor::GREEN);
    }

    /**
     * Стиль для вывода информационных сообщений
     * @return CliStyle
     */
    public static function getInfo() {
        return new self(CliColor::LIGHT_BLUE);
    }

}
