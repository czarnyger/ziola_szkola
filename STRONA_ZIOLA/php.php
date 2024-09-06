<?php
$products = [
    'bazylia' => 'Bazylia - aromatyczne zioło idealne do sałatek i sosów.',
    'oregano' => 'Oregano - doskonałe do pizzy i dań kuchni włoskiej.',
    'pietruszka' => 'Pietruszka - bogata w witaminy, świetna do zup i sałatek.',
    'szalwia' => 'Szałwia - znana ze swoich właściwości leczniczych.',
    'mieta' => 'Mięta - orzeźwiająca, idealna do napojów i deserów.'
];

$product = $_GET['product'] ?? '';

if (array_key_exists($product, $products)) {
    echo $products[$product];
} else {
    echo 'Wybierz produkt, aby zobaczyć opis.';
}
?>
