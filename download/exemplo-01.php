<?php 

$link = "https://cdn.dooca.store/8374/products/bs6qjyf9nxeq46ebjcu16vmcp80pobqhktw5_450x600+fill_ffffff.jpg?v=1690312088&webp=0";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">