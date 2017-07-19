        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php
        $titleAppend = 'Display:grid; layout';
        if (isset($title)) {
            echo $title . ' | ' . $titleAppend;
        } else {
            echo $titleAppend;
        }
        unset($titleAppend);
        ?></title>
        <link rel="stylesheet" href="<?php echo assetUrl('assets/css/sanitize.css'); ?>">
        <link rel="stylesheet" href="<?php echo assetUrl('assets/css/typo-and-form.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo assetUrl('assets/css/dgl/display-grid-columns.css'); ?>">
        <link rel="stylesheet" href="<?php echo assetUrl('assets/css/demo-styles.css'); ?>">