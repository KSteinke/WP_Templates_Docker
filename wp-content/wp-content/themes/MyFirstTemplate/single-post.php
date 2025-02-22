<?php
// Pobieranie kategorii posta
$categories = get_the_category();
$category_slug = ''; // Zmienna do przechowywania slugu kategorii

// Sprawdzenie, czy post należy do jakiejkolwiek kategorii
if (!empty($categories)) {
    // Pobierz pierwszy slug kategorii
    $category_slug = $categories[0]->slug; 
}

// Wybór szablonu na podstawie kategorii
switch ($category_slug) {
    case 'onas': // Jeśli slug kategorii to 'onas'
        get_template_part('single', 'onas'); // Załaduj single-onas.php
        break;

    case 'uslugi': // Jeśli slug kategorii to 'inny-slug'
        get_template_part('single', 'uslugi'); // Załaduj single-inny-slug.php
        break;

    default: // Domyślny szablon
        get_template_part('single', 'default'); // Załaduj single-default.php
        break;
}
?>
