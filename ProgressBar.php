<?php

/**
 * Class ProgressBar
 * Класс рисует прогрессбар в консоли. Пример использования:
 *     $progress = new ProgressBar(9);
 *     for ($i = 0; $i < 9; $i++) {
 *         $progress->increment();
 *         echo rand(1000000, 9999999);
 *         sleep(1);
 *     }
 *
 * Дефолный шаблон:
 * [======================............................] 4/9 (44%)
 * Но можно переопределить в конструкторе.
 * если в цикле выводить echo $message - будет подпись под прогрессбаром.
 */
class ProgressBar
{
    const DEFAULT_TEMPLATE = "\r\x1bM{bar} {current}/{max} ({percent}%)\n";
    const BAR_WIDTH = 50;

    protected $current = 0;
    protected $max;
    protected $template;

    protected $percent = 0;

    /**
     * @param integer $max
     * @param string $template
     */
    public function __construct($max, $template = self::DEFAULT_TEMPLATE) {
        $this->max = $max;
        $this->template = $template;
    }

    /**
     * @param int $value
     * @void
     */
    public function increment($value = 1) {
        if (!$this->current)
            echo PHP_EOL;

        $this->current += $value;
        $this->percent = round($this->current * 100 / $this->max);

        echo $this->render() . ($this->current == $this->max ? "" : "\r");
    }

    /**
     * @return string
     */
    protected function render() {
        $matches = array(
            '{current}' => $this->current,
            '{max}' => $this->max,
            '{percent}' => $this->percent,
            '{bar}' => $this->getBar(),
        );
        return str_replace(array_keys($matches), array_values($matches), $this->template);
    }

    /**
     * @return string
     */
    protected function getBar() {
        $width = round(self::BAR_WIDTH * $this->percent / 100);
        return "[" . str_pad(str_repeat('=', $width), self::BAR_WIDTH, '.') . "]";
    }

}
