<?php
/* NOTICE: Generated file; Do not edit by hand */
use VK\Elephize\Builtins\RenderableComponent;
use VK\Elephize\Builtins\IntrinsicElement;
use VK\Elephize\Builtins\Stdlib;

class InnerHtmlComponent extends RenderableComponent {
    /**
     * @var InnerHtmlComponent $_mod
     */
    private static $_mod;
    public static function getInstance(): InnerHtmlComponent {
        if (!self::$_mod) {
            self::$_mod = new InnerHtmlComponent();
        }
        return self::$_mod;
    }

    private function __construct() {
    }

    /**
     * @param array $props
     * @param array $children
     * @return string
     */
    public function render(array $props, array $children) {
        $inner = "<b><i><u>ololo!</u></i></b>";
        return IntrinsicElement::get("div")->render(
            [],
            [$inner]
        );
    }
}
