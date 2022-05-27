<?php
// Imports functions part
require_once ('part_realizace_slides.php');

// Sets the document path for import
$configuration_path = 'realizace-nastaveni/' . $url2 . '.php';

// Checks if the document exists before trying to import it -> Redirects if document doesn't exists
if ( !file_exists( $configuration_path ) ) { header('Location: /realizace/'); }

require_once ($configuration_path);

// FULLPAGE.JS SETTINGS
// NEMĚNIT NÍŽE ŽÁDNÝ KÓD, JE NUTNÝ PRO FULLPAGE.JS
function generate_anchors($count) {

    $sections = '';

    for ($i = 0; $i < $count; $i++) {

        if ( $i != ($count - 1) ) { $sections .= "'section" . ($i + 1) . "', "; }
        elseif ( $i == ($count - 1) ) { $sections .= "'section" . ($i + 1) . "'"; }

    }

    $anchors_string = '[' . $sections . ']';

    return 'anchors: ' . $anchors_string;

}
$anchors = generate_anchors($number_of_slides);
// END OF AUTO SETTINGS

?>

<?php require_once ('_bottom.php'); ?>

</body>
</html>