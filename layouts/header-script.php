<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <title>The American Board of Podiatric Medicine (ABPM)</title>
    <script src="https://kit.fontawesome.com/4a31a999fb.js" crossorigin="anonymous"></script>
    <!-- <link rel="icon" href="img/logo.png" type="image/png"> -->
    <?php
    $dirArr = explode("/", $_SERVER['SCRIPT_NAME']);

    $path = '';
    if (in_array('pages', $dirArr)) {
        $path = '../';
    }
    ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= $path ?>css/bootstrap.min.css?v=<?= time(); ?>" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="<?= $path ?>vendors/themefy_icon/themify-icons.css?v=<?= time(); ?>" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="<?= $path ?>vendors/niceselect/css/nice-select.css?v=<?= time(); ?>" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= $path ?>vendors/owl_carousel/css/owl.carousel.css?v=<?= time(); ?>" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="<?= $path ?>vendors/gijgo/gijgo.min.css?v=<?= time(); ?>" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= $path ?>vendors/font_awesome/css/all.min.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="<?= $path ?>vendors/tagsinput/tagsinput.css?v=<?= time(); ?>" />

    <!-- date picker -->
    <link rel="stylesheet" href="<?= $path ?>vendors/datepicker/date-picker.css?v=<?= time(); ?>" />

    <link rel="stylesheet" href="<?= $path ?>vendors/vectormap-home/vectormap-2.0.2.css?v=<?= time(); ?>" />

    <!-- scrollabe  -->
    <link rel="stylesheet" href="<?= $path ?>vendors/scroll/scrollable.css?v=<?= time(); ?>" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="<?= $path ?>vendors/datatable/css/jquery.dataTables.min.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="<?= $path ?>vendors/datatable/css/responsive.dataTables.min.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="<?= $path ?>vendors/datatable/css/buttons.dataTables.min.css?v=<?= time(); ?>" />
    <!-- text editor css -->
    <link rel="stylesheet" href="<?= $path ?>vendors/text_editor/summernote-bs4.css?v=<?= time(); ?>" />
    <!-- morris css -->
    <link rel="stylesheet" href="<?= $path ?>vendors/morris/morris.css?v=<?= time(); ?>">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="<?= $path ?>vendors/material_icon/material-icons.css?v=<?= time(); ?>" />

    <!-- menu css  -->
    <link rel="stylesheet" href="<?= $path ?>css/metisMenu.css?v=<?= time(); ?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= $path ?>css/style.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="<?= $path ?>css/colors/default.css?v=<?= time(); ?>" id="colorSkinCSS">
</head>