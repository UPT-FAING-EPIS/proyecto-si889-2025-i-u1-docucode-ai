<?php

class UMLGenerator {
    private $plantUmlServer = 'https://www.plantuml.com/plantuml/svg/';

    public function generarDesdeTexto(string $umlText): string {
        $encoded = $this->encodeForPlantUML($umlText);
        return $this->plantUmlServer . $encoded;
    }

    private function encodeForPlantUML(string $text): string {
        $compressed = gzdeflate($text, 9);
        return $this->encode64($compressed);
    }

    private function encode64(string $data): string {
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_';
        $out = '';
        $buffer = unpack('C*', $data);
        $size = count($buffer);
        $i = 1;

        while ($i <= $size) {
            $b1 = $buffer[$i++];
            $b2 = $i <= $size ? $buffer[$i++] : 0;
            $b3 = $i <= $size ? $buffer[$i++] : 0;

            $c1 = $b1 >> 2;
            $c2 = (($b1 & 0x3) << 4) | ($b2 >> 4);
            $c3 = (($b2 & 0xF) << 2) | ($b3 >> 6);
            $c4 = $b3 & 0x3F;

            $out .= $chars[$c1] . $chars[$c2] . $chars[$c3] . $chars[$c4];
        }

        return $out;
    }
}
