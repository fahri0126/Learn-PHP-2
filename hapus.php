<?=
require 'crud.php';
$id = $_GET["id"];
if (hapus($id) > 0) {
    header("location:hobby.php");
} else {
};

?>