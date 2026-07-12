<?php

$svgNormalization = static function (string $tempFilepath, array $iconSet) {
    $doc = new DOMDocument();
    $doc->load($tempFilepath);
    $svgElement = $doc->getElementsByTagName('svg')[0];
    $svgElement->removeAttribute('width');
    $svgElement->removeAttribute('height');
    $doc->save($tempFilepath);

    $fileLines = file($tempFilepath);
    array_shift($fileLines);

    $lastKey = count($fileLines) - 1;
    $fileLines[$lastKey] = trim($fileLines[$lastKey]);
    file_put_contents($tempFilepath, $fileLines);
};

$styles = ['outlined', 'rounded', 'sharp'];

$config = [];

foreach ($styles as $style) {
    $config[] = [
        'source' => __DIR__ . "/../../../material-symbols/svg/700/$style/",
        'destination' => __DIR__ . '/../resources/svg',
        'safe' => true,
        'after' => $svgNormalization,
        'output-suffix' => "-$style",
    ];
}

return $config;
