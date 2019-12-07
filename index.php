<!--
    Test task:
    Create a web page with fields:

    1) Height (number)
    2) Width (number)
    3) Name (Latin text)
    4) Font (list - see archive)
    5) Save button

    On click, it should generate and download an image with custom Height and Width. The image should be contain random Icon(see the archive) on the left and the Name with a specific font.
    https://www.php.net/manual/en/function.getimagesize.php
-->

<!DOCTYPE html>
<html>
<body>

<style type="text/css">

    .form-wrapper {
        width: 300px !important;
        height: 300px !important;
        text-align: center !important;
    }

    .form-wrapper input {
        margin: 10px !important;
        padding: 4px !important;
    }

    form#Img-Generate input, form#Img-Generate input::placeholder {
        width: 200px;
        color: #000;
        padding: 4px;
        margin: 10px;

    }

    form#Img-Generate .form1, form#Img-Generate .form2 {
        width: 200px;
        margin: 10px;
    }
</style>
</body>
</html>

<?php
$opacity = 0;
$height = 0;
$width = 0;
$html = 0;

foreach (glob(dirname(__FILE__) . '/fonts/*') as $filename) {
    $filename = basename($filename);
    $fontsoptionname .= "<option value='" . $filename . "'>" . $filename . "</option>";
}
foreach (glob(dirname(__FILE__) . '/icon/*') as $filename) {
    $filename = basename($filename);
    $selecticonsoption .= "<option value='" . $filename . "'>" . $filename . "</option>";
}
?>

<div class="form-wrapper">
    <form action="generateimg.php" method="post" id="Img-Generate">
        <div class="div">
            <label for="Img-Generate">
                <p>
                    <input type="text" name="width" placeholder="width" required>
                    <input type="text" name="height" placeholder="height" required>
                    <input type="text" name="name" placeholder="name" required>
                    <span class="group">
                        <select class="form1" name="" id=""><?php print_r($selecticonsoption); ?></select>
                    </span>
                </p>
            </label>
        </div>
        <button id=\"imggenerateclick\" type=\"submit\">Img Generate</button>
    </form>
</div>

<div class="imggeneratewrapper"></div>

<script type="text/javascript">
    $("#imggenerateclick").click(function () {


        $("#imggeneratewrapper").append( );
    });
</script>
